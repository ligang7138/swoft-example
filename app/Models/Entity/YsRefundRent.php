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
 * 退款表

 * @Entity()
 * @Table(name="ys_refund_rent")
 * @uses      YsRefundRent
 */
class YsRefundRent extends Model
{
    /**
     * @var int $rrId 
     * @Id()
     * @Column(name="rr_id", type="integer")
     */
    private $rrId;

    /**
     * @var string $rrApplyTime 申请时间
     * @Column(name="rr_apply_time", type="datetime")
     * @Required()
     */
    private $rrApplyTime;

    /**
     * @var int $bId 进件ID
     * @Column(name="b_id", type="integer")
     * @Required()
     */
    private $bId;

    /**
     * @var string $uCode 申请退款人ID
     * @Column(name="u_code", type="string", length=60)
     * @Required()
     */
    private $uCode;

    /**
     * @var string $rrStatus 退款状态【0处理中，1拒绝退款，2已退款】
     * @Column(name="rr_status", type="char", length=1, default="0")
     */
    private $rrStatus;

    /**
     * @var float $rrAmt 实际退款额
     * @Column(name="rr_amt", type="decimal", default=0)
     */
    private $rrAmt;

    /**
     * @var string $rrRemark 备注
     * @Column(name="rr_remark", type="string", length=600)
     * @Required()
     */
    private $rrRemark;

    /**
     * @var string $rrType 退款方式【0线下，1线上】
     * @Column(name="rr_type", type="char", length=1, default="0")
     */
    private $rrType;

    /**
     * @var string $rrOpTime 操作时间
     * @Column(name="rr_op_time", type="datetime")
     * @Required()
     */
    private $rrOpTime;

    /**
     * @var string $adminId 处理人【后台管理员】
     * @Column(name="admin_id", type="string", length=45)
     * @Required()
     */
    private $adminId;

    /**
     * @var string $rrCheckRemark 备注
     * @Column(name="rr_check_remark", type="string", length=300)
     */
    private $rrCheckRemark;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=20)
     */
    private $orderId;

    /**
     * @param int $value
     * @return $this
     */
    public function setRrId(int $value)
    {
        $this->rrId = $value;

        return $this;
    }

    /**
     * 申请时间
     * @param string $value
     * @return $this
     */
    public function setRrApplyTime(string $value): self
    {
        $this->rrApplyTime = $value;

        return $this;
    }

    /**
     * 进件ID
     * @param int $value
     * @return $this
     */
    public function setBId(int $value): self
    {
        $this->bId = $value;

        return $this;
    }

    /**
     * 申请退款人ID
     * @param string $value
     * @return $this
     */
    public function setUCode(string $value): self
    {
        $this->uCode = $value;

        return $this;
    }

    /**
     * 退款状态【0处理中，1拒绝退款，2已退款】
     * @param string $value
     * @return $this
     */
    public function setRrStatus(string $value): self
    {
        $this->rrStatus = $value;

        return $this;
    }

    /**
     * 实际退款额
     * @param float $value
     * @return $this
     */
    public function setRrAmt(float $value): self
    {
        $this->rrAmt = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setRrRemark(string $value): self
    {
        $this->rrRemark = $value;

        return $this;
    }

    /**
     * 退款方式【0线下，1线上】
     * @param string $value
     * @return $this
     */
    public function setRrType(string $value): self
    {
        $this->rrType = $value;

        return $this;
    }

    /**
     * 操作时间
     * @param string $value
     * @return $this
     */
    public function setRrOpTime(string $value): self
    {
        $this->rrOpTime = $value;

        return $this;
    }

    /**
     * 处理人【后台管理员】
     * @param string $value
     * @return $this
     */
    public function setAdminId(string $value): self
    {
        $this->adminId = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setRrCheckRemark(string $value): self
    {
        $this->rrCheckRemark = $value;

        return $this;
    }

    /**
     * 订单ID
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRrId()
    {
        return $this->rrId;
    }

    /**
     * 申请时间
     * @return string
     */
    public function getRrApplyTime()
    {
        return $this->rrApplyTime;
    }

    /**
     * 进件ID
     * @return int
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * 申请退款人ID
     * @return string
     */
    public function getUCode()
    {
        return $this->uCode;
    }

    /**
     * 退款状态【0处理中，1拒绝退款，2已退款】
     * @return string
     */
    public function getRrStatus()
    {
        return $this->rrStatus;
    }

    /**
     * 实际退款额
     * @return mixed
     */
    public function getRrAmt()
    {
        return $this->rrAmt;
    }

    /**
     * 备注
     * @return string
     */
    public function getRrRemark()
    {
        return $this->rrRemark;
    }

    /**
     * 退款方式【0线下，1线上】
     * @return string
     */
    public function getRrType()
    {
        return $this->rrType;
    }

    /**
     * 操作时间
     * @return string
     */
    public function getRrOpTime()
    {
        return $this->rrOpTime;
    }

    /**
     * 处理人【后台管理员】
     * @return string
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * 备注
     * @return string
     */
    public function getRrCheckRemark()
    {
        return $this->rrCheckRemark;
    }

    /**
     * 订单ID
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

}
