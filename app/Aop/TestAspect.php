<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19-2-27
 * Time: 下午5:12
 */

namespace App\Aop;

use Swoft\Aop\JoinPoint;
use Swoft\Aop\ProceedingJoinPoint;
use Swoft\Bean\Annotation\After;
use Swoft\Bean\Annotation\AfterReturning;
use Swoft\Bean\Annotation\AfterThrowing;
use Swoft\Bean\Annotation\Around;
use Swoft\Bean\Annotation\Aspect;
use Swoft\Bean\Annotation\Before;
use Swoft\Bean\Annotation\PointAnnotation;
use Swoft\Bean\Annotation\PointBean;
use Swoft\Bean\Annotation\PointExecution;
use App\Models\Dao\AdminUsersDao;

/**
 * the test of aspcet
 *
 * @Aspect()
 *
 * @PointBean(
 *     include={AdminUsersDao::class},
 * )
 * PointAnnotation(
 *     include={
 *      DemoController::class,
 *      DemoController::class
 *      }
 *  )
 * PointExecution(
 *     include={
 *      "Swoft\Testing\Aop\RegBean::reg.*",
 *     }
 * )
 */
class TestAspect
{
    private $test;
    /**
     * @Before()
     */
    public function before()
    {
//        var_dump(' before1 11');
    }

    /**
     * @After()
     */
    public function after()
    {
//        var_dump(' after1 ');
    }

    /**
     * controller返回数据，该项如果写就return，要不就去掉该项设置
     * @AfterReturning()
     * @param JoinPoint $joinPoint
     * @return string
     */
    public function afterReturn(JoinPoint $joinPoint)
    {
//        print_r($joinPoint);
        $result = $joinPoint->getReturn();
        return $result;
    }

    /**
     * @Around()
     * @param ProceedingJoinPoint $proceedingJoinPoint
     * @return mixed
     */
    public function around(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $this->test .= ' around-before1 ';
        $result = $proceedingJoinPoint->proceed();
        $this->test .= ' around-after1 ';
//        return json_encode($result).$this->test;
        return $result;
    }

    /**
     * @AfterThrowing()
     * @param JoinPoint $joinPoint
     */
    public function afterThrowing(JoinPoint $joinPoint)
    {
        echo "aop=1 afterThrowin !\n";
        // 将异常的数据打印出来，可做日志记录功能，程序异常监控（发邮件，发短信等）
        print_r($joinPoint->getCatch()->getMessage());
    }
}