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

/**
 * Map interface
 */
interface MapInterface
{
    /**
     * 经纬度转地址信息
     * @param $lat 纬度
     * @param $lng 经度
     * @return string
     */
    public function geoToAddress($lat, $lng);
}
