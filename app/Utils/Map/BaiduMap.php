<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace App\Utils\Map;

use Swoft\App;
use Swoft\Bean\Annotation\Bean;


/**
 * Class BaiduMap
 * @Bean("BaiduMap")
 * @package App\Utils\Map
 */
class BaiduMap implements MapInterface
{

    public function geoToAddress($lat, $lng)
    {
        $status = 5000;
        $params = [];

        if (empty($lat)) {
            return ['msg' => '纬度不能为空！', 'code' => $status];
        }

        if (empty($lng)) {
            return ['msg' => '经度度不能为空！', 'code' => $status];
        }

        $params['location'] = "$lat,$lng";
        $params['output'] = 'json';
        $params['pois'] = 0;
        $params['ak'] = env('BAIDUMAP_Ak');

        $response = sendRequest(env('BAIDUMAP_Url').http_build_query($params), '', false, 'get');
//        Logger::debug('channel:baidumap_geoToAddress',['request'=>$params,'response'=>$respone]);
        //print_r($respone);
        $final_result = json_decode($response, true);
        App::debug('baidu_map_75676', ['request' => 'request','response' => 'response']);
//        App::debug('baidu_map', [$params,$final_result]);

        if ($final_result['status'] == 0) {
            $status = 2000;
            $result['result_info'] = $final_result['result'];
            $result['code'] = $status;
        } else {
            $result['msg'] = $final_result['msg'];
        }

        return $result;
//        return self::parse_data($result,$status);
    }
}
