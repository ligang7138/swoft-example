<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-3-4
 * Time: 下午5:08
 */

namespace App\Controllers;

use App\Utils\Map\BaiduMap;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;

/**
 * 百度地图
 * @Controller(prefix="/map")
 */
class MapTestController
{
    /**
     * @Inject("BaiduMap")
     * @var BaiduMap
     */
    private $baiduMap;

    /**
     * @RequestMapping(route="index", method={RequestMethod::GET, RequestMethod::POST})
     * @param $lat
     * @param $lng
     * @return mixed
     */
    public function getAddressByLatandLng($lat,$lng){
        return $this->baiduMap->geoToAddress(39.93031800,116.47455200);
    }

}