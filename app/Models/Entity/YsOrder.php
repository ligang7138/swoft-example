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
 * 订单表

 * @Entity()
 * @Table(name="ys_order")
 * @uses      YsOrder
 */
class YsOrder extends Model
{
    /**
     * @var int $orderId 
     * @Id()
     * @Column(name="order_id", type="integer")
     */
    private $orderId;

    /**
     * @var string $orderNo 订单编号
     * @Column(name="order_no", type="string", length=28)
     * @Required()
     */
    private $orderNo;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=45)
     * @Required()
     */
    private $uCode;

    /**
     * @var int $partnerId 商户ID
     * @Column(name="partner_id", type="integer")
     * @Required()
     */
    private $partnerId;

    /**
     * @var string $inviteCode 邀请码
     * @Column(name="invite_code", type="string", length=15)
     */
    private $inviteCode;

    /**
     * @var int $gcId 商品类别id
     * @Column(name="gc_id", type="integer")
     * @Required()
     */
    private $gcId;

    /**
     * @var string $uTrueName 真实姓名
     * @Column(name="u_true_name", type="string", length=60)
     * @Required()
     */
    private $uTrueName;

    /**
     * @var string $uPhone 手机号
     * @Column(name="u_phone", type="string", length=11)
     */
    private $uPhone;

    /**
     * @var string $uIdentNo 身份证号
     * @Column(name="u_ident_no", type="string", length=18)
     * @Required()
     */
    private $uIdentNo;

    /**
     * @var string $uCardNo 银行卡号
     * @Column(name="u_card_no", type="string", length=20)
     */
    private $uCardNo;

    /**
     * @var string $uOpenBank 开户行
     * @Column(name="u_open_bank", type="string", length=150)
     */
    private $uOpenBank;

    /**
     * @var string $consignee 收货人
     * @Column(name="consignee", type="string", length=60)
     * @Required()
     */
    private $consignee;

    /**
     * @var string $consigneeMbl 收货人手机号
     * @Column(name="consignee_mbl", type="string", length=15)
     * @Required()
     */
    private $consigneeMbl;

    /**
     * @var string $orderProvince 下单所在省
     * @Column(name="order_province", type="string", length=80)
     */
    private $orderProvince;

    /**
     * @var string $orderCity 下单所在市
     * @Column(name="order_city", type="string", length=120)
     */
    private $orderCity;

    /**
     * @var string $orderArea 所在区县
     * @Column(name="order_area", type="string", length=150)
     */
    private $orderArea;

    /**
     * @var string $orderAddress 下单所在详细地址
     * @Column(name="order_address", type="string", length=120)
     */
    private $orderAddress;

    /**
     * @var string $orderAddTime 订单生成时间
     * @Column(name="order_add_time", type="datetime")
     * @Required()
     */
    private $orderAddTime;

    /**
     * @var string $orderStatus 订单状态【0待确认, 1待审核,2待支付，3已支付，4发货中，5已发货，6退款处理中，7已退款，8已收货，9已取消，10已完成,11待还款,12还款确认中，13支付处理中】
     * @Column(name="order_status", type="string", length=2, default="0")
     */
    private $orderStatus;

    /**
     * @var string $orderPayType 支付方式【1线下全款，2线上全款，3赊购】
     * @Column(name="order_pay_type", type="char", length=1, default="1")
     */
    private $orderPayType;

    /**
     * @var float $orderAmount 订单金额
     * @Column(name="order_amount", type="decimal")
     * @Required()
     */
    private $orderAmount;

    /**
     * @var float $orderDeposit 保证金
     * @Column(name="order_deposit", type="decimal", default=0)
     */
    private $orderDeposit;

    /**
     * @var string $orderDepositPayTime 保证金交纳时间
     * @Column(name="order_deposit_pay_time", type="datetime")
     */
    private $orderDepositPayTime;

    /**
     * @var float $orderAdvancePayment 首付款
     * @Column(name="order_advance_payment", type="decimal", default=0)
     */
    private $orderAdvancePayment;

    /**
     * @var string $orderAdvancePaymentTime 首付款付款时间
     * @Column(name="order_advance_payment_time", type="datetime")
     */
    private $orderAdvancePaymentTime;

    /**
     * @var string $orderPayTime 支付时间
     * @Column(name="order_pay_time", type="datetime")
     */
    private $orderPayTime;

    /**
     * @var float $orderFatPayAmount 实际支付金额
     * @Column(name="order_fat_pay_amount", type="decimal")
     * @Required()
     */
    private $orderFatPayAmount;

    /**
     * @var string $orderCouponIds (预留)优惠券id【逗号分隔】
     * @Column(name="order_coupon_ids", type="string", length=100)
     */
    private $orderCouponIds;

    /**
     * @var float $buyUpAmount 满减金额
     * @Column(name="buy_up_amount", type="decimal", default=0)
     */
    private $buyUpAmount;

    /**
     * @var string $orderDeliveryAddr 送货地址
     * @Column(name="order_delivery_addr", type="string", length=300)
     * @Required()
     */
    private $orderDeliveryAddr;

    /**
     * @var string $orderDeliveryType 送货方式【1配送，2自提】
     * @Column(name="order_delivery_type", type="char", length=1, default="1")
     */
    private $orderDeliveryType;

    /**
     * @var float $orderDeliveryFee 送货费用
     * @Column(name="order_delivery_fee", type="decimal", default=0)
     */
    private $orderDeliveryFee;

    /**
     * @var string $orderIsSettlement 是否结算
     * @Column(name="order_is_settlement", type="char", length=1, default="0")
     */
    private $orderIsSettlement;

    /**
     * @var float $orderSettlementAmt 已结算金额
     * @Column(name="order_settlement_amt", type="decimal", default=0)
     */
    private $orderSettlementAmt;

    /**
     * @var string $orderRemark 备注
     * @Column(name="order_remark", type="string", length=150)
     */
    private $orderRemark;

    /**
     * @var string $payResultMsg 支付结果描述
     * @Column(name="pay_result_msg", type="string", length=100, default="")
     */
    private $payResultMsg;

    /**
     * @var float $oBrokerage 佣金
     * @Column(name="o_brokerage", type="decimal", default=0)
     */
    private $oBrokerage;

    /**
     * @param int $value
     * @return $this
     */
    public function setOrderId(int $value)
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 订单编号
     * @param string $value
     * @return $this
     */
    public function setOrderNo(string $value): self
    {
        $this->orderNo = $value;

        return $this;
    }

    /**
     * 用户code
     * @param string $value
     * @return $this
     */
    public function setUCode(string $value): self
    {
        $this->uCode = $value;

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
     * 邀请码
     * @param string $value
     * @return $this
     */
    public function setInviteCode(string $value): self
    {
        $this->inviteCode = $value;

        return $this;
    }

    /**
     * 商品类别id
     * @param int $value
     * @return $this
     */
    public function setGcId(int $value): self
    {
        $this->gcId = $value;

        return $this;
    }

    /**
     * 真实姓名
     * @param string $value
     * @return $this
     */
    public function setUTrueName(string $value): self
    {
        $this->uTrueName = $value;

        return $this;
    }

    /**
     * 手机号
     * @param string $value
     * @return $this
     */
    public function setUPhone(string $value): self
    {
        $this->uPhone = $value;

        return $this;
    }

    /**
     * 身份证号
     * @param string $value
     * @return $this
     */
    public function setUIdentNo(string $value): self
    {
        $this->uIdentNo = $value;

        return $this;
    }

    /**
     * 银行卡号
     * @param string $value
     * @return $this
     */
    public function setUCardNo(string $value): self
    {
        $this->uCardNo = $value;

        return $this;
    }

    /**
     * 开户行
     * @param string $value
     * @return $this
     */
    public function setUOpenBank(string $value): self
    {
        $this->uOpenBank = $value;

        return $this;
    }

    /**
     * 收货人
     * @param string $value
     * @return $this
     */
    public function setConsignee(string $value): self
    {
        $this->consignee = $value;

        return $this;
    }

    /**
     * 收货人手机号
     * @param string $value
     * @return $this
     */
    public function setConsigneeMbl(string $value): self
    {
        $this->consigneeMbl = $value;

        return $this;
    }

    /**
     * 下单所在省
     * @param string $value
     * @return $this
     */
    public function setOrderProvince(string $value): self
    {
        $this->orderProvince = $value;

        return $this;
    }

    /**
     * 下单所在市
     * @param string $value
     * @return $this
     */
    public function setOrderCity(string $value): self
    {
        $this->orderCity = $value;

        return $this;
    }

    /**
     * 所在区县
     * @param string $value
     * @return $this
     */
    public function setOrderArea(string $value): self
    {
        $this->orderArea = $value;

        return $this;
    }

    /**
     * 下单所在详细地址
     * @param string $value
     * @return $this
     */
    public function setOrderAddress(string $value): self
    {
        $this->orderAddress = $value;

        return $this;
    }

    /**
     * 订单生成时间
     * @param string $value
     * @return $this
     */
    public function setOrderAddTime(string $value): self
    {
        $this->orderAddTime = $value;

        return $this;
    }

    /**
     * 订单状态【0待确认, 1待审核,2待支付，3已支付，4发货中，5已发货，6退款处理中，7已退款，8已收货，9已取消，10已完成,11待还款,12还款确认中，13支付处理中】
     * @param string $value
     * @return $this
     */
    public function setOrderStatus(string $value): self
    {
        $this->orderStatus = $value;

        return $this;
    }

    /**
     * 支付方式【1线下全款，2线上全款，3赊购】
     * @param string $value
     * @return $this
     */
    public function setOrderPayType(string $value): self
    {
        $this->orderPayType = $value;

        return $this;
    }

    /**
     * 订单金额
     * @param float $value
     * @return $this
     */
    public function setOrderAmount(float $value): self
    {
        $this->orderAmount = $value;

        return $this;
    }

    /**
     * 保证金
     * @param float $value
     * @return $this
     */
    public function setOrderDeposit(float $value): self
    {
        $this->orderDeposit = $value;

        return $this;
    }

    /**
     * 保证金交纳时间
     * @param string $value
     * @return $this
     */
    public function setOrderDepositPayTime(string $value): self
    {
        $this->orderDepositPayTime = $value;

        return $this;
    }

    /**
     * 首付款
     * @param float $value
     * @return $this
     */
    public function setOrderAdvancePayment(float $value): self
    {
        $this->orderAdvancePayment = $value;

        return $this;
    }

    /**
     * 首付款付款时间
     * @param string $value
     * @return $this
     */
    public function setOrderAdvancePaymentTime(string $value): self
    {
        $this->orderAdvancePaymentTime = $value;

        return $this;
    }

    /**
     * 支付时间
     * @param string $value
     * @return $this
     */
    public function setOrderPayTime(string $value): self
    {
        $this->orderPayTime = $value;

        return $this;
    }

    /**
     * 实际支付金额
     * @param float $value
     * @return $this
     */
    public function setOrderFatPayAmount(float $value): self
    {
        $this->orderFatPayAmount = $value;

        return $this;
    }

    /**
     * (预留)优惠券id【逗号分隔】
     * @param string $value
     * @return $this
     */
    public function setOrderCouponIds(string $value): self
    {
        $this->orderCouponIds = $value;

        return $this;
    }

    /**
     * 满减金额
     * @param float $value
     * @return $this
     */
    public function setBuyUpAmount(float $value): self
    {
        $this->buyUpAmount = $value;

        return $this;
    }

    /**
     * 送货地址
     * @param string $value
     * @return $this
     */
    public function setOrderDeliveryAddr(string $value): self
    {
        $this->orderDeliveryAddr = $value;

        return $this;
    }

    /**
     * 送货方式【1配送，2自提】
     * @param string $value
     * @return $this
     */
    public function setOrderDeliveryType(string $value): self
    {
        $this->orderDeliveryType = $value;

        return $this;
    }

    /**
     * 送货费用
     * @param float $value
     * @return $this
     */
    public function setOrderDeliveryFee(float $value): self
    {
        $this->orderDeliveryFee = $value;

        return $this;
    }

    /**
     * 是否结算
     * @param string $value
     * @return $this
     */
    public function setOrderIsSettlement(string $value): self
    {
        $this->orderIsSettlement = $value;

        return $this;
    }

    /**
     * 已结算金额
     * @param float $value
     * @return $this
     */
    public function setOrderSettlementAmt(float $value): self
    {
        $this->orderSettlementAmt = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setOrderRemark(string $value): self
    {
        $this->orderRemark = $value;

        return $this;
    }

    /**
     * 支付结果描述
     * @param string $value
     * @return $this
     */
    public function setPayResultMsg(string $value): self
    {
        $this->payResultMsg = $value;

        return $this;
    }

    /**
     * 佣金
     * @param float $value
     * @return $this
     */
    public function setOBrokerage(float $value): self
    {
        $this->oBrokerage = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 订单编号
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * 用户code
     * @return string
     */
    public function getUCode()
    {
        return $this->uCode;
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
     * 邀请码
     * @return string
     */
    public function getInviteCode()
    {
        return $this->inviteCode;
    }

    /**
     * 商品类别id
     * @return int
     */
    public function getGcId()
    {
        return $this->gcId;
    }

    /**
     * 真实姓名
     * @return string
     */
    public function getUTrueName()
    {
        return $this->uTrueName;
    }

    /**
     * 手机号
     * @return string
     */
    public function getUPhone()
    {
        return $this->uPhone;
    }

    /**
     * 身份证号
     * @return string
     */
    public function getUIdentNo()
    {
        return $this->uIdentNo;
    }

    /**
     * 银行卡号
     * @return string
     */
    public function getUCardNo()
    {
        return $this->uCardNo;
    }

    /**
     * 开户行
     * @return string
     */
    public function getUOpenBank()
    {
        return $this->uOpenBank;
    }

    /**
     * 收货人
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * 收货人手机号
     * @return string
     */
    public function getConsigneeMbl()
    {
        return $this->consigneeMbl;
    }

    /**
     * 下单所在省
     * @return string
     */
    public function getOrderProvince()
    {
        return $this->orderProvince;
    }

    /**
     * 下单所在市
     * @return string
     */
    public function getOrderCity()
    {
        return $this->orderCity;
    }

    /**
     * 所在区县
     * @return string
     */
    public function getOrderArea()
    {
        return $this->orderArea;
    }

    /**
     * 下单所在详细地址
     * @return string
     */
    public function getOrderAddress()
    {
        return $this->orderAddress;
    }

    /**
     * 订单生成时间
     * @return string
     */
    public function getOrderAddTime()
    {
        return $this->orderAddTime;
    }

    /**
     * 订单状态【0待确认, 1待审核,2待支付，3已支付，4发货中，5已发货，6退款处理中，7已退款，8已收货，9已取消，10已完成,11待还款,12还款确认中，13支付处理中】
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * 支付方式【1线下全款，2线上全款，3赊购】
     * @return mixed
     */
    public function getOrderPayType()
    {
        return $this->orderPayType;
    }

    /**
     * 订单金额
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * 保证金
     * @return mixed
     */
    public function getOrderDeposit()
    {
        return $this->orderDeposit;
    }

    /**
     * 保证金交纳时间
     * @return string
     */
    public function getOrderDepositPayTime()
    {
        return $this->orderDepositPayTime;
    }

    /**
     * 首付款
     * @return mixed
     */
    public function getOrderAdvancePayment()
    {
        return $this->orderAdvancePayment;
    }

    /**
     * 首付款付款时间
     * @return string
     */
    public function getOrderAdvancePaymentTime()
    {
        return $this->orderAdvancePaymentTime;
    }

    /**
     * 支付时间
     * @return string
     */
    public function getOrderPayTime()
    {
        return $this->orderPayTime;
    }

    /**
     * 实际支付金额
     * @return float
     */
    public function getOrderFatPayAmount()
    {
        return $this->orderFatPayAmount;
    }

    /**
     * (预留)优惠券id【逗号分隔】
     * @return string
     */
    public function getOrderCouponIds()
    {
        return $this->orderCouponIds;
    }

    /**
     * 满减金额
     * @return mixed
     */
    public function getBuyUpAmount()
    {
        return $this->buyUpAmount;
    }

    /**
     * 送货地址
     * @return string
     */
    public function getOrderDeliveryAddr()
    {
        return $this->orderDeliveryAddr;
    }

    /**
     * 送货方式【1配送，2自提】
     * @return mixed
     */
    public function getOrderDeliveryType()
    {
        return $this->orderDeliveryType;
    }

    /**
     * 送货费用
     * @return mixed
     */
    public function getOrderDeliveryFee()
    {
        return $this->orderDeliveryFee;
    }

    /**
     * 是否结算
     * @return string
     */
    public function getOrderIsSettlement()
    {
        return $this->orderIsSettlement;
    }

    /**
     * 已结算金额
     * @return mixed
     */
    public function getOrderSettlementAmt()
    {
        return $this->orderSettlementAmt;
    }

    /**
     * 备注
     * @return string
     */
    public function getOrderRemark()
    {
        return $this->orderRemark;
    }

    /**
     * 支付结果描述
     * @return string
     */
    public function getPayResultMsg()
    {
        return $this->payResultMsg;
    }

    /**
     * 佣金
     * @return mixed
     */
    public function getOBrokerage()
    {
        return $this->oBrokerage;
    }

}
