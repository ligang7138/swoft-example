<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 订单结算

 * @Entity()
 * @Table(name="ys_order_settlement")
 * @uses      YsOrderSettlement
 */
class YsOrderSettlement extends Model
{
    /**
     * @var int $osId 
     * @Id()
     * @Column(name="os_id", type="integer")
     */
    private $osId;

    /**
     * @var string $orderId 结算订单编号
     * @Column(name="order_id", type="string", length=1000)
     * @Required()
     */
    private $orderId;

    /**
     * @var int $partnerId 商户ID
     * @Column(name="partner_id", type="integer")
     * @Required()
     */
    private $partnerId;

    /**
     * @var string $osTime 
     * @Column(name="os_time", type="datetime")
     */
    private $osTime;

    /**
     * @var string $osApplyTime 提现申请时间
     * @Column(name="os_apply_time", type="datetime")
     * @Required()
     */
    private $osApplyTime;

    /**
     * @var string $osStatus 状态【0待结算，1已结算，2审核拒绝，3取消】
     * @Column(name="os_status", type="char", length=1, default="0")
     */
    private $osStatus;

    /**
     * @var float $osAmount 
     * @Column(name="os_amount", type="decimal", default=0)
     */
    private $osAmount;

    /**
     * @var float $osEnterAccountAmt 实际到账金额
     * @Column(name="os_enter_account_amt", type="decimal", default=0)
     */
    private $osEnterAccountAmt;

    /**
     * @var float $osPayFee 支付平台手续费用
     * @Column(name="os_pay_fee", type="decimal", default=0)
     */
    private $osPayFee;

    /**
     * @var float $osYsFee 屹石平台佣金
     * @Column(name="os_ys_fee", type="decimal", default=0)
     */
    private $osYsFee;

    /**
     * @var string $osName 结算人
     * @Column(name="os_name", type="string", length=45)
     */
    private $osName;

    /**
     * @var string $osChannel 0线下，1线上
     * @Column(name="os_channel", type="char", length=1, default="0")
     */
    private $osChannel;

    /**
     * @var string $osRemark 备注
     * @Column(name="os_remark", type="string", length=300)
     */
    private $osRemark;

    /**
     * @param int $value
     * @return $this
     */
    public function setOsId(int $value)
    {
        $this->osId = $value;

        return $this;
    }

    /**
     * 结算订单编号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 商户ID
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOsTime(string $value): self
    {
        $this->osTime = $value;

        return $this;
    }

    /**
     * 提现申请时间
     * @param string $value
     * @return $this
     */
    public function setOsApplyTime(string $value): self
    {
        $this->osApplyTime = $value;

        return $this;
    }

    /**
     * 状态【0待结算，1已结算，2审核拒绝，3取消】
     * @param string $value
     * @return $this
     */
    public function setOsStatus(string $value): self
    {
        $this->osStatus = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setOsAmount(float $value): self
    {
        $this->osAmount = $value;

        return $this;
    }

    /**
     * 实际到账金额
     * @param float $value
     * @return $this
     */
    public function setOsEnterAccountAmt(float $value): self
    {
        $this->osEnterAccountAmt = $value;

        return $this;
    }

    /**
     * 支付平台手续费用
     * @param float $value
     * @return $this
     */
    public function setOsPayFee(float $value): self
    {
        $this->osPayFee = $value;

        return $this;
    }

    /**
     * 屹石平台佣金
     * @param float $value
     * @return $this
     */
    public function setOsYsFee(float $value): self
    {
        $this->osYsFee = $value;

        return $this;
    }

    /**
     * 结算人
     * @param string $value
     * @return $this
     */
    public function setOsName(string $value): self
    {
        $this->osName = $value;

        return $this;
    }

    /**
     * 0线下，1线上
     * @param string $value
     * @return $this
     */
    public function setOsChannel(string $value): self
    {
        $this->osChannel = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setOsRemark(string $value): self
    {
        $this->osRemark = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOsId()
    {
        return $this->osId;
    }

    /**
     * 结算订单编号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 商户ID
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @return string
     */
    public function getOsTime()
    {
        return $this->osTime;
    }

    /**
     * 提现申请时间
     * @return string
     */
    public function getOsApplyTime()
    {
        return $this->osApplyTime;
    }

    /**
     * 状态【0待结算，1已结算，2审核拒绝，3取消】
     * @return string
     */
    public function getOsStatus()
    {
        return $this->osStatus;
    }

    /**
     * @return mixed
     */
    public function getOsAmount()
    {
        return $this->osAmount;
    }

    /**
     * 实际到账金额
     * @return mixed
     */
    public function getOsEnterAccountAmt()
    {
        return $this->osEnterAccountAmt;
    }

    /**
     * 支付平台手续费用
     * @return mixed
     */
    public function getOsPayFee()
    {
        return $this->osPayFee;
    }

    /**
     * 屹石平台佣金
     * @return mixed
     */
    public function getOsYsFee()
    {
        return $this->osYsFee;
    }

    /**
     * 结算人
     * @return string
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * 0线下，1线上
     * @return string
     */
    public function getOsChannel()
    {
        return $this->osChannel;
    }

    /**
     * 备注
     * @return string
     */
    public function getOsRemark()
    {
        return $this->osRemark;
    }

}
