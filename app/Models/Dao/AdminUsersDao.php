<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Models\Dao;

use App\Models\Entity\AdminUserInfo;
use App\Models\Entity\AdminUsers;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Cache\Cache;
use Swoft\Db\Query;

/**
 *
 * @Bean()
 * @uses      AdminUsersDao
 */
class AdminUsersDao
{
    /**
     * @Inject("cache")
     * @var Cache
     */
    private $cache;

    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private $redis;

    public function getUserInfo($aid)
    {
//        echo env(API_SECRET).PHP_EOL;
//        echo env('PFILE').PHP_EOL;
//        echo env('@runtime').PHP_EOL;
//        $this->getDao();
        $result = $this->cache->get('adminUserDao:'.$aid);
        if (empty($result)) {
            $result = Query::table(AdminUsers::class, 'a')
                ->leftJoin(AdminUserInfo::class, 'a.a_id = ai.a_id', 'ai')
                ->innerJoin(YsPartners::class, 'a.a_id = p.admin_id', 'p')
                ->Where('a.a_id', $aid, '=')
                ->one(['a.a_id','ai.a_true_name','p.partner_name'])
                ->getResult();
            $bool = $this->redis->set('adminUserDao:'.$aid, $result);
            if (!$bool) {
                throw new \Exception('存进去了');
            }
            return $result;
        } else {
//            throw new \Exception("存进去了");
            return $result;
        }
    }

    /**
     * @param $identity
     * @return AdminUsers
     */
    public function findOneByUsername($identity)
    {

        /*$result = Query::table(AdminUsers::class, 'a')
            ->where('a.a_name', $identity, '=')
            ->one()
            ->getResult(AdminUsers::class);*/
        /** @var AdminUsers $result */
        $result = AdminUsers::findOne(['a_name' => $identity])->getResult(AdminUsers::class);
        return $result;
    }

    public function verify($credential)
    {
    }
}
