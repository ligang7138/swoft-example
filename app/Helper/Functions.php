<?php

use Swoft\App;

/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
 
 // you can add some custom functions.

function p($arr)
{
    echo '<pre/>';
    print_r($arr);
}

/**
 * curl请求，支持post, get方式
 * @param string $url
 * @param string $data
 * @param bool $json
 * @param string $method
 * @param array $headers
 * @param int $timeout
 * @param array $certs
 * @return string $file_contents
 */
function sendRequest($url = '', $data = '', $json = false, $method = 'post', $headers = [], $timeout=25, $certs=[])
{
    $ch = curl_init();
    if (is_array($data)) {
        $data = http_build_query($data);
    }
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ('post' == strtolower($method)) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    if ($json) {
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)]
        );
    } elseif (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    if (empty(!$certs)) {
        curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'PEM');
        curl_setopt($ch, CURLOPT_SSLCERT, $certs['cert_file']);
        curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $certs['cert_passwd']);
        curl_setopt($ch, CURLOPT_SSLKEYTYPE, 'PEM');
        curl_setopt($ch, CURLOPT_SSLKEY, $certs['cert_key_file']);
    }

    $file_contents = curl_exec($ch);

    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == '200') {
//            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//            $header = substr($file_contents, 0, $headerSize);
//            var_dump($header);
//            die();
//            $body = substr($file_contents, $headerSize);
//        }else{
//        wLog(curl_error($ch), 'curl_error/');
        $body = false;
    }
//    wLog(curl_error($ch), 'curl_error/');
    curl_close($ch);
    return $file_contents;
}

/**
 * 手动写入日志
 * @param string $data 写入内容
 * @param string $dir 写入目录
 * @param string $method 写入方式
 * @return bool|int ;
 */
function wlog($data = '', $dir = '', $method = 'a+')
{
    $runtime = App::getAlias('@runtime');
    $fileDir = $runtime . '/logs/' . $dir . date('Ymd') . '.log';
    echo $fileDir;
    if (!file_exists(dirname($fileDir))) {
        if (!@mkdir(dirname($fileDir), 0777, true)) {
            die(dirname($fileDir) . '创建目录失败!');
        }
    }

    if (is_file($fileDir) && floor(1024 * 1000 * 50) <= filesize($fileDir)) {
        rename($fileDir, dirname($fileDir) . '/' . time() . '-' . basename($fileDir));
    }

    $ip = getClientIp();
    $fp = @fopen($fileDir, $method);
    if (!$fp) {
        return 0;
    }
    flock($fp, LOCK_EX);
    $http = (strtolower(@$_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
    $http = $http . trim($_SERVER['HTTP_HOST']);
    $submit_type = !empty($_POST) ? 'POST' : 'GET';
    $opt = @fwrite($fp, '[' . date('Y-m-d H:i:s') . ']' . "\r\n" . ' URL来源:' . $_SERVER['HTTP_REFERER'] . "\r\n 请求地址：" . $http . $_SERVER['REQUEST_URI'] . "\r\n 请求Header数据: " . var_export($_SERVER, true) . "\r\n 请求数据(" . $submit_type . '方式): ' . var_export($_REQUEST, true) . "\r\n 浏览器 : " . $_SERVER['HTTP_USER_AGENT'] . "\r\n 数据：" . var_export($data, true) . ' 访问IP：' . $ip . "\r\n\r\n");
    fclose($fp);
    return $opt;
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @return string
 */

function getClientIp($type = 0)
{
    $type = $type ? 1 : 0;
    static $ip = null;
    if ($ip !== null) {
        return $ip[$type];
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) {
            unset($arr[$pos]);
        }
        $ip = trim($arr[0]);
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf('%u', ip2long($ip));
    $ip = $long ? [$ip, $long] : ['0.0.0.0', 0];
    return $ip[$type];
}

/**
 * 加/解密
 * @param string $data 待加密串或待解密串
 * @param boolean $is_crypt 是否加密 默认为加密,否则为解密
 * @param string $key 加密Key值
 * @return string
 */
function aesCrypt($data = '', $is_crypt = true, $key = '')
{
    $key = empty($key) ? substr(md5(date('Y-m-d')), 2, 16) : $key;
    $privateKey = $iv = $key;
    if ($is_crypt) {
        //加密
        $data = str_replace('+', '-', str_replace('/', '_', $data));
        $encrypted = openssl_encrypt($data, 'AES-256-CBC', $privateKey, OPENSSL_RAW_DATA, $iv);
        return str_replace('+', '-', str_replace('/', '_', str_replace('=', '', base64_encode($encrypted))));
    } else {
        //解密
        $data = str_replace('-', '+', str_replace('_', '/', $data));
        $decrypted = openssl_decrypt(base64_decode($data), 'AES-256-CBC', $privateKey, OPENSSL_RAW_DATA, $iv);
        return trim($decrypted);
    }
}

/**
 * 对参数进行加密
 * @param $params
 * @return string
 */
function sginParamsArray(&$params)
{
    $apiSecret = env(API_SECRET);
    $params['created_at'] = ''.time();
    //计算签名
    $paramsSign = $params;

    foreach ($paramsSign as &$item) {
        $item  = ''.$item;
    }
    //排序
    sort($paramsSign, SORT_STRING);

    //加密获取sign
    $sign=md5(implode('', $paramsSign).$apiSecret);//对该字符串进行 MD5 计算，得到签名，并转换成 16 进制小写编码
    //设置请求参数
    $params['sign'] = $sign;
    $paramString = '';
    foreach ($params as $key=>$value) {
        $paramString .= "{$key}={$value}&";
    }
    $paramString = trim($paramString, '&');

    return $paramString;
}


function wndVerify($data)
{
    $key = env(API_SECRET);
    $sign = $data['sign'];
    unset($data['sign']);
    sort($data);
    //加密获取sign
    $signValue=md5(implode('', $data).$key);//对该字符串进行 MD5 计算，得到签名，并转换成 16 进制小写编码

    if ($signValue == $sign) {
        return true;
    } else {
        return false;
    }
}

/**
 * 取两个日期间的天数
 * @param $day1
 * @param $day2
 * @return int
 */
function diffBetweenTwoDays ($day1, $day2){
    $second1 = strtotime($day1);
    $second2 = strtotime($day2);

    if ($second1 < $second2) {
        $tmp = $second2;
        $second2 = $second1;
        $second1 = $tmp;
    }
    return abs($second1 - $second2) / 86400;
}
