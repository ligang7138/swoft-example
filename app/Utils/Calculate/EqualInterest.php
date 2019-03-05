<?php

namespace App\Utils\Calculate;

/**
等额本息法最重要的一个特点是每月的还款额相同，从本质上来说是本金所占比例逐月递增，利息所占比例逐月递减，月还款数不变，
即在月供“本金与利息”的分配比例中，前半段时期所还的利息比例大、本金比例小，还款期限过半后逐步转为本金比例大、利息比例小，
其计算公式为：
每月还本付息金额 = [贷款本金×月利率×(1＋月利率)＾还款月数]÷[(1＋月利率)＾还款月数－1]

还款总利息=贷款额*贷款月数*月利率*(1+月利率)*贷款月数/[(1+月利率)*还款月数 - 1] -贷款额

还款总额=还款月数*贷款额*月利率*(1+月利率)*贷款月数/[(1+月利率)*还款月数 - 1]

每月利息 = 剩余本金*贷款月利率

每月本金=月供-每月利息

举例说明假设以10000元为本金、在银行贷款10年、基准利率是6.65％，
等额本息还款法 月利率=年利率÷12=0.0665÷12=0.005541667
               月还款本息=[10000×0.005541667×(1＋0.005541667)＾120] ÷ [(1＋0.005541667)＾120－1]=114.3127元
               合计还款 13717.52元     合计利息 3717.52万元

 */
class EqualInterest implements CalculateBoxInterface
{
    public static function result(array $params=[]): array
    {
        $capital = $params['capital'];//剩余本金
        $totalInterest = 0;//总利息
	    $return = $params;
	    $day = date('d',strtotime($params['start_date']));
		$return_date = calculateReturnDay($params['start_date'],$day);
	    $d = date('d',strtotime($params['return_date']));
	    $should_return_date = calculateReturnDay($params['return_date'],$d);
	    $begin_return_date = date('Y-m-d',strtotime($params['start_date']));
		$monthReturn = ($capital*$params['monthRate']*pow(1+$params['monthRate'],$params['period']))/(pow(1+$params['monthRate'],$params['period']) - 1);//每月应还本息
        for ($i=1;$i<=$params['period'];$i++){
			$monthInterest = round($capital * $params['monthRate'],8);//当月利息
			$monthCapital = round($monthReturn - $monthInterest,8);//当月本金
			$capital = round($capital-$monthCapital,8);//剩余本金
			$totalInterest = $totalInterest + $monthInterest;
			$return['return_list'][] = ['period_no'=>$i,'monthInterest'=>round($monthInterest,8),'monthCapital'=>($i==$params['period']) ? round($monthCapital+$capital,8) : round($monthCapital,8),'monthServiceFee'=>round($params['capital']*$params['monthServiceRate'],8),'capital'=>round($capital,8)>0 ? round($capital,8) : 0,'bill_date'=>$return_date,'return_date'=>date('Y-m-d',strtotime("$should_return_date -1 days")),'begin_return_date'=>(1==$i) ? date('Y-m-d',strtotime($params['contract_sign_date'])) : $begin_return_date];
	        $begin_return_date = $return_date;
	        $should_return_date = calculateReturnDay($should_return_date,$d);
			$return_date = calculateReturnDay($return_date,$day);
	  }
	    $return['totalInquireFee'] = round($params['capital']*$params['inquireRate'],8);
		$return['totalInterest'] = round($totalInterest,8);
		return $return;
    }

	public static function clearReturnResult(array $params = []): array
	{
		// TODO: Implement clearReturnResult() method.
	}
}