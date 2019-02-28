<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-11-29
 * Time: 下午3:26
 */

namespace App\Lib;

use Swoft\Core\ResultInterface;
/**
 * The interface of demo service
 *
 * @method ResultInterface deferGetAdminUser(string $id)
 */
interface AdminUserInterface
{
	public function getAdminUser(string $id);

}