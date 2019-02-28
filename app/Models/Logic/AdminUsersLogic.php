<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Logic;

use App\Models\Dao\AdminUsersDao;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;

/**
 *
 * @Bean()
 * @uses      AdminUsersLogic
 */

class AdminUsersLogic
{
    /**
     *
     * @Inject()
     * @var AdminUsersDao
     */
    private $adminUsersDao;

    public function getUser($aid)
    {
        return $this->adminUsersDao->getUserInfo($aid);
    }
}
