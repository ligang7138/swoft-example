<?php
/**
 * This file is part of Swoft.
 *
 * @link    https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use App\Models\Entity\AdminUserInfo;
use App\Models\Entity\AdminUsers;
use App\Models\Entity\Count;
use App\Models\Entity\User;
use App\Models\Entity\YsPartners;
use App\Models\Logic\AdminUsersLogic;
use Swoft\Bean\Annotation\Inject;
use Swoft\Db\Db;
use Swoft\Db\Query;
use Swoft\Http\Message\Bean\Annotation\Middleware;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use App\Middlewares\JwtAuthMiddleware;

/**
 *
 * @Controller()
 */
class OrmController
{
	/**
	 * @Inject()
	 * @var AdminUsersLogic
	 */
	private $adminUsersLogic;

	private function ttt($msg){
        throw new \Exception($msg);
    }
	/**
	 * @RequestMapping(route="adminuserinfo")
     * @Middleware(class=AuthMiddleware::class)
	 */
	public function getAdminUsersInfo(Request $request){
        try{
            $aid = $request->query('aid',0);
            if($aid == 0){
//                $this->ttt('参数错误');
                throw new \InvalidArgumentException('参数错误');
            }
        }catch (\InvalidArgumentException $e){
            return ['code' => $e->statusCode,'msg' => $e->getMessage()];
        }finally{
//            print_r($e);
        }

//		return $aid;
//		$this->adminUsersLogic->getUser($aid);
//		return get_last_sql();
        $result = $this->adminUsersLogic->getUser($aid);
		return $result;
	}
    public function save()
    {
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();

        return [$userId];
    }

	public function saveAdminUser()
	{
//		$result = (AdminUsers::findById(10))->getResult();
//		$query  = AdminUsers::findByIds([10,18]);

//		$all = AdminUsers::findAll([],['fields' => ['a_id','a_type','a_add_time'],'limit' => 2,'offset' => 3*2])->getResult();
		$all = Query::table(AdminUsers::class,'a')->leftJoin(AdminUserInfo::class,'a.a_id = ai.a_id','ai')->innerJoin(YsPartners::class,'a.a_id = p.admin_id' ,'p')->whereBetween('a.a_id',1,10)->openWhere()->andWhere('a.a_id',2,'>')->closeWhere()->get(['a.a_id','ai.a_true_name','p.partner_name'])->getResult();
//		$count = AdminUsers::count('a_id',['a_name' => ['admin','shop']])->getResult();
		/* @var User $user */
//		$user = $query->getResult(AdminUsers::class);
		return get_last_sql();
		return $all;
		return [$result,$result->getOtherProperty(), $user->getName()];
	}

	/*public function sql():array {
		$field = "DATE_FORMAT(order_add_time, '%Y-%m-%d') as xlabel_name,";
		$where = "1 = 1 ";
    	$sql = <<<sql
					select xlabel_name,count(distinct u_code) as user_num,sum(order_num) as order_num,sum(good_num) as good_num,sum(order_amount) as total_amount,sum(pay_amount) as pay_amount from
			(select
				   {$field}
				   u_code,
				   count(distinct o.order_id) as order_num,
				   sum(i.order_goods_nums) as good_num,
				   order_amount,
                   (case when order_status >= 3 THEN order_fat_pay_amount else 0 END ) as pay_amount
			from ys_order o left join ys_order_info i on o.order_id = i.order_id  left join ys_partners p
				     on o.partner_id = p.partner_id
			where {$where} group by o.order_id,xlabel_name) 
			as t group by xlabel_name
sql;
		$result = Db::query($sql)->getResult();
		return $result;

	}*/
    public function retEntity()
    {
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();
        $user = User::findById($userId)->getResult();

        return $user;
    }

    public function retEntitys()
    {
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();
        $users = User::findByIds([$userId])->getResult();

        return $users;
    }

    public function findById()
    {
        $result = User::findById(41710)->getResult();
        $query  = User::findById(41710);

        /* @var User $user */
        $user = $query->getResult(User::class);

        return [$result, $user->getName()];
    }

    public function selectDb(){
        $data = [
            'name' => 'name',
            'sex'  => 1,
            'description' => 'this my desc',
            'age'  => mt_rand(1, 100),
        ];
        $result = Query::table(User::class)->selectDb('test2')->insert($data)->getResult();
        return $result;
    }

    public function selectTable(){
        $data = [
            'name' => 'name',
            'sex'  => 1,
            'description' => 'this my desc',
            'age'  => mt_rand(1, 100),
        ];
        $result = Query::table('user2')->insert($data)->getResult();
        return $result;
    }

    public function transactionCommit()
    {
        Db::beginTransaction();
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();
        Db::commit();


        return $userId;
    }

    public function transactionRollback()
    {
        Db::beginTransaction();

        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();

        $count = new Count();
        $count->setUid($userId);
        $count->setFollows(mt_rand(1, 100));
        $count->setFans(mt_rand(1, 100));

        $countId = $count->save()->getResult();

        Db::rollback();


        return [$userId, $countId];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @return mixed
     */
    public function transactionNotCommitOrRollback()
    {
        Db::beginTransaction();
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();

        // This is a wrong operation, You must to commit or rollback
        // ...

        return $userId;
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @RequestMapping("tsnonr")
     * @return mixed
     */
    public function transactionNotCommitOrRollbackAndNotGetResult()
    {
        Db::beginTransaction();
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save();

        // This is a wrong operation, You must to commit or rollback
        // ...

        return ['11'];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @RequestMapping("tsng")
     * @return mixed
     */
    public function transactionNotGetResult()
    {
        Db::beginTransaction();
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save();
        Db::commit();

        return [333];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @RequestMapping("tsng2")
     * @return mixed
     */
    public function transactionNotGetResult2()
    {
        Db::beginTransaction();
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save();
        Db::rollback();

        return [33];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @return mixed
     */
    public function notGetResult()
    {
        $result = User::findById(19362);
        $query  = User::findById(19362);

        /* @var User $user */
        $user = $query->getResult(User::class);

        return [33];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @return mixed
     */
    public function notGetResult2()
    {
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save()->getResult();

        $result = User::findById(19362);
        $query  = User::findById(19362);

        /* @var User $user */
        $user = $query->getResult(User::class);

        return [222];
    }

    /**
     * This is a wrong operation, only used to test
     *
     * @return mixed
     */
    public function notGetResult3()
    {
        $user = new User();
        $user->setName('name');
        $user->setSex(1);
        $user->setDesc('this my desc');
        $user->setAge(mt_rand(1, 100));

        $userId = $user->save();

        $result = User::findById(19362);
        $query  = User::findById(19362);

        /* @var User $user */
        $user = $query->getResult(User::class);

        return [33];
    }
}