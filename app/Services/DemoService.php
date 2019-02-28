<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Services;

use App\Lib\DemoInterface;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;

/**
 * Demo servcie
 *
 * @method ResultInterface deferGetUsers(array $ids)
 * @method ResultInterface deferGetUser(string $id)
 * @method ResultInterface deferAa(string $id)
 * @method ResultInterface deferGetUserByCond(int $type, int $uid, string $name, float $price, string $desc = "desc")
 *
 * @Service(version="1.0.0")
 */
class DemoService implements DemoInterface
{
    public function getUsers(array $ids)
    {
        return [$ids];
    }

    public function getUser(string $id)
    {
        return [$id,'lsjdf'];
    }

	public function aa(string $id){
		return 'swoft_aa_1'.$id;
	}
    /**
     * @Enum(name="type", values={1,2,3})
     * @Number(name="uid", min=1, max=10)
     * @Strings(name="name", min=2, max=5)
     * @Floats(name="price", min=1.2, max=1.9)
     *
     * @param int    $type
     * @param int    $uid
     * @param string $name
     * @param float  $price
     * @param string $desc  default value
     * @return array
     */
    public function getUserByCond(int $type, int $uid, string $name, float $price, string $desc = 'desc')
    {
        return [$type, $uid, $name, $price, $desc];
    }
}