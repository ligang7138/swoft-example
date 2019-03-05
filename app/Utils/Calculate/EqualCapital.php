<?php

namespace App\Utils\Calculate;
use function foo\func;

/**
等额本金又称利随本清、等本不等息还款法。贷款人将本金分摊到每个月内，同时付清上一交易日至本次还款日之间的利息。
这种还款方式相对等额本息而言，总的利息支出较低，但是前期支付的本金和利息较多，还款负担逐月递减。
计算公式：
等额本金计算公式： 每月还款金额 = （贷款本金 / 还款月数）+（本金 — 已归还本金累计额）×每月利率

每月本金=总本金/还款月数

每月利息=(本金-累计已还本金)×月利率

还款总利息=（还款月数+1）*贷款额*月利率/2

还款总额=(还款月数+1)*贷款额*月利率/2+贷款额

 */
class EqualCapital implements CalculateBoxInterface
{

    public static function result(array $params=[]): array
    {
	  $capital = $params['capital'];//本金
	  $totalInterest = 0;//总利息
	  $monthCapital      = $capital / $params['period']; //每月还款本金
	  $return = $params;
	  $day = date('d',strtotime($params['start_date']));
	  $begin_return_date = $params['start_date'];
	  $return_date = calculateReturnDay($params['start_date'],$day);
	  $d = date('d',strtotime($params['return_date']));
	  $should_return_date = calculateReturnDay($params['return_date'],$d);
	  for ($i = 1; $i <= $params['period']; $i++) {
		$monthInterest      = $capital * $params['monthRate']; //当月还款利息
		$capital = $capital - $monthCapital;//剩余本金
		$totalInterest = $totalInterest + $monthInterest;
		$return['return_list'][] = ['period_no'=>$i,'monthInterest'=>round($monthInterest,8),'monthCapital'=>round($monthCapital,8),'monthServiceFee'=>round($params['capital']*$params['monthServiceRate'],8),'capital'=>round($capital,8)>0 ? round($capital,8) : 0,'bill_date'=>$return_date,'return_date'=>date('Y-m-d',strtotime("$should_return_date -1 days")),'begin_return_date'=>(1==$i) ? date('Y-m-d',strtotime($params['contract_sign_date'])) : $begin_return_date];
		$return_date = calculateReturnDay($return_date,$day);
		$should_return_date = calculateReturnDay($should_return_date,$d);
		$begin_return_date = $return_date;
	  }
	    $return['totalInquireFee'] = round($params['capital']*$params['inquireRate'],2);
	    $return['totalInterest'] = round($totalInterest,2);
	    return $return;
    }

	public static function clearReturnResult(array $params = []): array
	{
		// TODO: Implement clearReturnResult() method.
	}
}