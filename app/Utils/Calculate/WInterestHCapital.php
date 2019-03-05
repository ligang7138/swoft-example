<?php

namespace App\Utils\Calculate;

/**
1.  无息到期还本方式还款：
例： 借款18000，1期
    到期还本=18000
 */
class WInterestHCapital implements CalculateBoxInterface
{
    public static function result(array $params=[]): array
    {
        $capital = $params['capital'];//剩余本金
	    $params['monthServiceRate'] = 0;
        $totalInterest = 0;//总利息
	    $return = $params;
	    $begin_return_date = date('Y-m-d',strtotime($params['start_date']));
	    $return['return_list'][] = ['period_no'=>1,'monthInterest'=>0,'monthCapital'=>$capital,'monthServiceFee'=>0,'capital'=>round($capital,2)>0 ? round($capital,2) : 0,'bill_date'=>$params['end_date'],'return_date'=>date('Y-m-d',strtotime("$params[return_date] -1 days")),'begin_return_date'=>date('Y-m-d',strtotime($params['contract_sign_date']))];
	    $return['totalInquireFee'] = round($params['capital']*$params['inquireRate'],8);
	    $return['totalInterest'] = round($totalInterest,2);
	    return $return;
    }

	public static function clearReturnResult(array $params = []): array
	{
		$clear_return_info = $params['clearReturnList'];
		$factReturnList = empty($params['factReturnList']) ? [] : $params['factReturnList'];
		$total_amount = 0;
		$total_uncolligate_fee = 0;//除综合费外其它费用总和
		$curr_return_colligate_fee = 0;
		$curr_fact_return = 0;
		$flag = false;
		$total_colligate_amount = 0;
		$borrowCapital = $params['capital'];
		$factReturnAmt = 0;//实际已还利息和服务费
		$total_period = intval(count($factReturnList));//待结清总期数
		$expired_amount = 0;//逾期总费用
		$fact_return_amount = 0;//实际还款总额
		$total_capital = 0;//总待还本金
		$total_should_return_amt = 0;//正常结清还款额【不含逾期和减免】
		$curr_period = $curr_should_return_day = 0;
		$total_return_period = intval(count($factReturnList)) + count($clear_return_info);
		if($factReturnList){
			foreach($factReturnList as $factReturn){
				$pattern = date('Y-m');
				$factReturnAmt += round($factReturn['r_interest'] + $factReturn['r_service_fee']);//利息+服务费
				if(preg_match('/^'.$pattern.'/is', $factReturn['r_return_day'])) {
					if (str_replace('-','',$factReturn['r_return_day']) >= date('Ymd')) {
						$curr_should_return_day = diffBetweenTwoDays($factReturn['r_begin_return_date'],date('Y-m-d'));//本月剩余还款天数
						$curr_period = $factReturn['period_no'];
					}else{
						$curr_should_return_day = diffBetweenTwoDays(date('Y-m-d'),$factReturn['r_return_day']);//本月剩余还款天数
						$curr_period = $total_return_period<($factReturn['period_no']+1) ? $total_return_period : $factReturn['period_no']+1;
					}
					$currCapital = $factReturn['r_capital'];
					$currInterest = $factReturn['r_interest'];
					$currServiceFee = $factReturn['r_service_fee'];
				}else{
					$currCapital = $factReturnList[0]['r_capital'];
					$currInterest = $factReturnList[0]['r_interest'];
					$currServiceFee = $factReturnList[0]['r_service_fee'];
				}
				if($factReturn['r_fact_return_amount']+$factReturn['r_derate_amount']-$factReturn['r_expired_amount']>=0){
					$flag = true;
					$curr_fact_return = round($factReturn['r_fact_return_amount']-$factReturn['r_expired_amount'],2);
					$curr_return_colligate_fee = round($factReturn['r_interest']+$factReturn['r_service_fee']-($factReturn['r_fact_return_amount']+$factReturn['r_derate_amount']-$factReturn['r_expired_amount']),2);
					if($curr_return_colligate_fee<=0){
						$curr_return_colligate_fee = 0;
						$curr_fact_return = 0;
					}
				}else{
					$curr_return_colligate_fee = round($factReturn['r_interest']+$factReturn['r_service_fee'],2);
				}
			}
		}

		foreach($clear_return_info as $key => $clear_return){
			$pattern = date('Y-m');
			if(preg_match('/^'.$pattern.'/is', $clear_return['r_return_day'])){
				if(str_replace('-','',$clear_return['r_return_day'])>=date('Ymd')){
					$curr_should_return_day = diffBetweenTwoDays($clear_return['r_begin_return_date'],date('Y-m-d'));//本月剩余还款天数
					$curr_period = $clear_return['period_no'];
				}else{
					$curr_should_return_day = diffBetweenTwoDays(date('Y-m-d'),$clear_return['r_return_day']);//本月剩余还款天数
					$curr_period = $total_return_period<($clear_return['period_no']+1) ? $total_return_period : $clear_return['period_no']+1;
				}
				$currCapital = $clear_return['r_capital'];
				$currInterest = $clear_return['r_interest'];
				$currServiceFee = $clear_return['r_service_fee'];
			}else{
				$currCapital = $clear_return_info[0]['r_capital'];
				$currInterest = $clear_return_info[0]['r_interest'];
				$currServiceFee = $clear_return_info[0]['r_service_fee'];
			}
			if(0==$key && false==$flag){
				$curr_fact_return = round($clear_return['r_fact_return_amount']-$clear_return['r_expired_amount'],2);
				if($clear_return['r_fact_return_amount']+$clear_return['r_derate_amount']-$clear_return['r_expired_amount']>0){
					$curr_return_colligate_fee = round($clear_return['r_interest']+$clear_return['r_service_fee']-($clear_return['r_fact_return_amount']+$clear_return['r_derate_amount']-$clear_return['r_expired_amount']),2);
					if($curr_return_colligate_fee<=0){
						$curr_return_colligate_fee = 0;
						$curr_fact_return = 0;
					}
				}else{
					$curr_return_colligate_fee = round($clear_return['r_interest']+$clear_return['r_service_fee'],2);
				}
			}
			$expired_amount += $clear_return['r_expired_amount'];
			$fact_return_amount += $clear_return['r_fact_return_amount'];
			$total_period++;
			$total_capital += $clear_return['r_capital'];
			$total_should_return_amt += round($clear_return['r_interest']+$clear_return['r_capital']+$clear_return['r_service_fee'],2);
			$total_colligate_amount += $clear_return['r_interest']+$clear_return['r_service_fee'];
			$total_amount += $clear_return['r_interest']+$clear_return['r_expired_amount']+$clear_return['r_service_fee']+$clear_return['r_capital']-$clear_return['r_fact_return_amount']-$clear_return['r_derate_amount'];//待还总金额
			$total_uncolligate_fee += $clear_return['r_expired_amount']+$clear_return['r_capital']-$clear_return['r_fact_return_amount']-$clear_return['r_derate_amount'];//待还总金额
		}

		//计算减免额，不含逾期费用
		//违约金计算公式字段【borrowCapital表示借款本金，monthInterest表示月利息，monthServiceFee表示月服务费，periodInquireFee表示期限内咨询费, monthCaptital表示月本金】
		$fuJia_list = json_decode($params['fujia_calculator'],2);
		$info['wyFee'] = $wyFee = round($borrowCapital*$params['wy_rate'],2);//违约金
		if($fuJia_list) {
			foreach ($fuJia_list as $k => $fuJia_info) {
				if ($curr_period < $k) {
					//按某期开始收附加费及附加费用
					$monthCaptital = $currCapital;
					$monthInterest = $currInterest;
					$monthServiceFee = $currServiceFee;
					$fuJiaFee = eval("return $fuJia_info;");
					$info['fuJiaEndPeriod'] = $k;
					//$return_days = diffBetweenTwoDays(date('Y-m-d'), date('Y-m-d', strtotime($params['start_date'])));//从签约日算起
					$info['shouldPayFuJiaFee'] = $info['curr_month_should_amt'] = round($fuJiaFee - $factReturnAmt, 2);
					$info['curr_month_should_amt'] = round($info['curr_month_should_amt'] + $expired_amount,2);
					break;
				}
			}
		}

		if(empty($fuJiaFee)){
			if($params['is_benchmark']){
				$info['curr_month_should_amt'] = round(round($currInterest/30,8)*$curr_should_return_day,2);//当期应还利息
			}else{
				$info['curr_month_should_amt'] = round(round($currInterest+$currServiceFee,8),2);//当期应还利息
			}
		}

		//结清减免额，不含咨询费和违约金
		$info['clear_return_derate_amt']  = round($total_amount-$total_capital - $info['curr_month_should_amt'],2);
		$info['clear_normal_return_amt'] = round($total_should_return_amt+$info['curr_month_should_amt'],2);
		$info['curr_period'] = $curr_period;
		$info['total_amount'] = $total_amount;
		$info['total_period'] = $total_period;
		$info['curr_return_colligate_fee'] = $curr_return_colligate_fee;
		$info['total_colligate_amount'] = $total_colligate_amount;
		$info['total_expired_amount'] = $expired_amount;
		$info['total_fact_return_amount'] = $fact_return_amount;
		$info['total_uncolligate_fee'] = $total_uncolligate_fee;

		//退还咨询费
		if($params['inquire_refund_type'] && $params['inquire_rate']>0){
			$total_inquire_fee = round($borrowCapital*$params['inquire_rate'],2);
			$info['refund_inqure_fee'] = round($total_inquire_fee*$params['inqure_rate_config'][$curr_period],2);
			$info['total_inquire_fee'] = round($total_inquire_fee,2);
		}
		//结清应还款额，含咨询费和违约金
		$info['clear_should_return_amt'] = round($total_amount-$info['clear_return_derate_amt']-$info['refund_inqure_fee']+$wyFee,2);
		wlog(['params'=>$params,'response'=>$info],'clear_return_info/');
		return $info;
	}

	//正常一次性结清
	public static function normalClearReturnResult(array $params = []): array
	{
		$clear_return_info = $params['clearReturnList'];
		$factReturnList = empty($params['factReturnList']) ? [] : $params['factReturnList'];
		$total_amount = 0;
		$borrowCapital = $params['capital'];
		$factReturnAmt = 0;//实际已还利息和服务费
		$clear_total_period = count($clear_return_info);//待结清总期数
		$expired_amount = 0;//逾期总费用
		$fact_return_amount = 0;//实际还款总额
		$total_manage_fee = 0;//总待还管理费
		$total_capital = 0;//总待还本金
		$total_should_return_amt = 0;//正常结清还款额【不含逾期和减免】
		$curr_period = $curr_should_return_day = 0;
		$total_return_period = count($factReturnList) + count($clear_return_info);//合同还款总期数

		foreach($clear_return_info as $key => $clear_return){
			$pattern = date('Y-m');
			if(preg_match('/^'.$pattern.'/is', $clear_return['r_return_day'])){
				if(str_replace('-','',$clear_return['r_return_day'])>=date('Ymd')){
					$curr_should_return_day = diffBetweenTwoDays($clear_return['r_begin_return_date'],date('Y-m-d'));//本月剩余还款天数
					$curr_period = $clear_return['period_no'];
				}else{
					$curr_should_return_day = diffBetweenTwoDays(date('Y-m-d'),$clear_return['r_return_day']);//本月剩余还款天数
					$curr_period = $total_return_period<($clear_return['period_no']+1) ? $total_return_period : $clear_return['period_no']+1;
				}
				$currCapital = $clear_return['r_capital'];
				$currInterest = $clear_return['r_interest'];
				$currServiceFee = $clear_return['r_service_fee'];
			}else{
				$currCapital = $clear_return_info[0]['r_capital'];
				$currInterest = $clear_return_info[0]['r_interest'];
				$currServiceFee = $clear_return_info[0]['r_service_fee'];
			}


			$expired_amount += $clear_return['r_expired_amount'];
			$fact_return_amount += $clear_return['r_fact_return_amount'];
			$total_manage_fee += round($clear_return['r_interest']+$clear_return['r_service_fee'],2);
			$total_capital += $clear_return['r_capital'];
			$total_should_return_amt += round($clear_return['r_interest']+$clear_return['r_capital']+$clear_return['r_service_fee'],2);
			$total_amount += $clear_return['r_interest']+$clear_return['r_expired_amount']+$clear_return['r_service_fee']+$clear_return['r_capital']-$clear_return['r_fact_return_amount']-$clear_return['r_derate_amount'];//待还总金额
		}

		//计算减免额，不含逾期费用
		//违约金计算公式字段【borrowCapital表示借款本金，monthInterest表示月利息，monthServiceFee表示月服务费，periodInquireFee表示期限内咨询费, monthCaptital表示月本金】
		$fuJia_list = json_decode($params['fujia_calculator'],2);
		$info['wyFee'] = $wyFee = round($borrowCapital*$params['wy_rate'],2);//违约金
		if($fuJia_list) {
			foreach ($fuJia_list as $k => $fuJia_info) {
				if ($curr_period < $k) {
					//按某期开始收附加费及附加费用
					$monthCaptital = $currCapital;
					$monthInterest = $currInterest;
					$monthServiceFee = $currServiceFee;
					$fuJiaFee = eval("return $fuJia_info;");
					$info['fuJiaEndPeriod'] = $k;
					//$return_days = diffBetweenTwoDays(date('Y-m-d'), date('Y-m-d', strtotime($params['start_date'])));//从签约日算起
					$info['shouldPayFuJiaFee'] = $info['curr_month_should_amt'] = round($fuJiaFee - $factReturnAmt, 2);
					$info['curr_month_should_amt'] = round($info['curr_month_should_amt'] + $expired_amount,2);
					break;
				}
			}
		}

		if(empty($fuJiaFee)){
			if($params['is_benchmark']){
				$info['curr_should_manage_amt'] = round(($currInterest+$currServiceFee)/30*$curr_should_return_day,2);//当期应还利息
			}else{
				$info['curr_should_manage_amt'] = round(round($currInterest+$currServiceFee,8),2);//当期应还利息
			}
		}

		$info['total_expired_amount'] = round($expired_amount,2);
		$info['curr_period'] = $curr_period;
		$info['total_amount'] = $total_amount;
		$info['total_period'] = $total_return_period;

		//退还咨询费
		if($params['inquire_refund_type'] && $params['inquire_rate']>0){
			$total_inquire_fee = round($borrowCapital*$params['inquire_rate'],2);
			$info['refund_inqure_fee'] = round($total_inquire_fee*$params['inqure_rate_config'][$curr_period],2);
			$info['total_inquire_fee'] = round($total_inquire_fee,2);
		}

		$info['fact_return_amount'] = $fact_return_amount;
		$info['total_expired_amount'] = $expired_amount;
		$info['total_should_return_amt'] = round($total_amount-$total_manage_fee+$info['curr_should_manage_amt'],2);
		$info['total_normal_return_amt'] = round($total_capital+$info['curr_should_manage_amt'],2);
		wlog(['params'=>$params,'response'=>$info],'normal_clear_return_info/');
		return $info;
	}
}