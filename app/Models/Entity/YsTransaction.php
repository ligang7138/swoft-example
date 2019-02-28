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
 * 交易记录

 * @Entity()
 * @Table(name="ys_transaction")
 * @uses      YsTransaction
 */
class YsTransaction extends Model
{
    /**
     * @var int $tId 
     * @Id()
     * @Column(name="t_id", type="integer")
     */
    private $tId;

    /**
     * @var int $orderId 订单id
     * @Column(name="order_id", type="integer")
     * @Required()
     */
    private $orderId;

    /**
     * @var float $tAmount 交易金额
     * @Column(name="t_amount", type="decimal", default=0)
     */
    private $tAmount;

    /**
     * @var string $tTime 交易时间
     * @Column(name="t_time", type="datetime")
     * @Required()
     */
    private $tTime;

    /**
     * @var string $tStatus 交易状态【1待支付，2线上支付成功，3线下支付，4信用支付，5支付取消,6支付处理中,7支付失败】
     * @Column(name="t_status", type="char", length=1)
     * @Required()
     */
    private $tStatus;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=45)
     * @Required()
     */
    private $uCode;

    /**
     * @var string $tMsg 交易说明
     * @Column(name="t_msg", type="string", length=300)
     * @Required()
     */
    private $tMsg;

    /**
     * @var string $orderSerialNum 交易流水号
     * @Column(name="order_serial_num", type="string", length=45)
     */
    private $orderSerialNum;

    /**
     * @param int $value
     * @return $this
     */
    public function setTId(int $value)
    {
        $this->tId = $value;

        return $this;
    }

    /**
     * 订单id
     * @param int $value
     * @return $this
     */
    public function setOrderId(int $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 交易金额
     * @param float $value
     * @return $this
     */
    public function setTAmount(float $value): self
    {
        $this->tAmount = $value;

        return $this;
    }

    /**
     * 交易时间
     * @param string $value
     * @return $this
     */
    public function setTTime(string $value): self
    {
        $this->tTime = $value;

        return $this;
    }

    /**
     * 交易状态【1待支付，2线上支付成功，3线下支付，4信用支付，5支付取消,6支付处理中,7支付失败】
     * @param string $value
     * @return $this
     */
    public function setTStatus(string $value): self
    {
        $this->tStatus = $value;

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
     * 交易说明
     * @param string $value
     * @return $this
     */
    public function setTMsg(string $value): self
    {
        $this->tMsg = $value;

        return $this;
    }

    /**
     * 交易流水号
     * @param string $value
     * @return $this
     */
    public function setOrderSerialNum(string $value): self
    {
        $this->orderSerialNum = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * 订单id
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 交易金额
     * @return mixed
     */
    public function getTAmount()
    {
        return $this->tAmount;
    }

    /**
     * 交易时间
     * @return string
     */
    public function getTTime()
    {
        return $this->tTime;
    }

    /**
     * 交易状态【1待支付，2线上支付成功，3线下支付，4信用支付，5支付取消,6支付处理中,7支付失败】
     * @return string
     */
    public function getTStatus()
    {
        return $this->tStatus;
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
     * 交易说明
     * @return string
     */
    public function getTMsg()
    {
        return $this->tMsg;
    }

    /**
     * 交易流水号
     * @return string
     */
    public function getOrderSerialNum()
    {
        return $this->orderSerialNum;
    }

}
