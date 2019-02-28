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
 * 商户优惠券表

 * @Entity()
 * @Table(name="ys_partner_coupon")
 * @uses      YsPartnerCoupon
 */
class YsPartnerCoupon extends Model
{
    /**
     * @var int $pcId 
     * @Id()
     * @Column(name="pc_id", type="integer")
     */
    private $pcId;

    /**
     * @var int $partnerId 商家id
     * @Column(name="partner_id", type="integer", default=0)
     */
    private $partnerId;

    /**
     * @var string $pcType 优惠券/红包类型【0满减，1抵现】
     * @Column(name="pc_type", type="char", length=1, default="0")
     */
    private $pcType;

    /**
     * @var float $pcAmt 优惠券额度
     * @Column(name="pc_amt", type="decimal", default=0)
     */
    private $pcAmt;

    /**
     * @var int $pcNums 优惠券数量
     * @Column(name="pc_nums", type="smallint", default=0)
     */
    private $pcNums;

    /**
     * @var int $pcBuyUp 购满金额
     * @Column(name="pc_buy_up", type="smallint", default=0)
     */
    private $pcBuyUp;

    /**
     * @var int $pcBuyUpSubtraction 购满减金额
     * @Column(name="pc_buy_up_subtraction", type="smallint", default=0)
     */
    private $pcBuyUpSubtraction;

    /**
     * @var float $pcUseAmt 可使用优惠券的订单金额
     * @Column(name="pc_use_amt", type="decimal", default=0)
     */
    private $pcUseAmt;

    /**
     * @var string $pcEndTime 活动结束时间
     * @Column(name="pc_end_time", type="datetime")
     * @Required()
     */
    private $pcEndTime;

    /**
     * @var string $pcStartTime 活动开始时间
     * @Column(name="pc_start_time", type="datetime")
     * @Required()
     */
    private $pcStartTime;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="datetime")
     * @Required()
     */
    private $createTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setPcId(int $value)
    {
        $this->pcId = $value;

        return $this;
    }

    /**
     * 商家id
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 优惠券/红包类型【0满减，1抵现】
     * @param string $value
     * @return $this
     */
    public function setPcType(string $value): self
    {
        $this->pcType = $value;

        return $this;
    }

    /**
     * 优惠券额度
     * @param float $value
     * @return $this
     */
    public function setPcAmt(float $value): self
    {
        $this->pcAmt = $value;

        return $this;
    }

    /**
     * 优惠券数量
     * @param int $value
     * @return $this
     */
    public function setPcNums(int $value): self
    {
        $this->pcNums = $value;

        return $this;
    }

    /**
     * 购满金额
     * @param int $value
     * @return $this
     */
    public function setPcBuyUp(int $value): self
    {
        $this->pcBuyUp = $value;

        return $this;
    }

    /**
     * 购满减金额
     * @param int $value
     * @return $this
     */
    public function setPcBuyUpSubtraction(int $value): self
    {
        $this->pcBuyUpSubtraction = $value;

        return $this;
    }

    /**
     * 可使用优惠券的订单金额
     * @param float $value
     * @return $this
     */
    public function setPcUseAmt(float $value): self
    {
        $this->pcUseAmt = $value;

        return $this;
    }

    /**
     * 活动结束时间
     * @param string $value
     * @return $this
     */
    public function setPcEndTime(string $value): self
    {
        $this->pcEndTime = $value;

        return $this;
    }

    /**
     * 活动开始时间
     * @param string $value
     * @return $this
     */
    public function setPcStartTime(string $value): self
    {
        $this->pcStartTime = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPcId()
    {
        return $this->pcId;
    }

    /**
     * 商家id
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 优惠券/红包类型【0满减，1抵现】
     * @return string
     */
    public function getPcType()
    {
        return $this->pcType;
    }

    /**
     * 优惠券额度
     * @return mixed
     */
    public function getPcAmt()
    {
        return $this->pcAmt;
    }

    /**
     * 优惠券数量
     * @return int
     */
    public function getPcNums()
    {
        return $this->pcNums;
    }

    /**
     * 购满金额
     * @return int
     */
    public function getPcBuyUp()
    {
        return $this->pcBuyUp;
    }

    /**
     * 购满减金额
     * @return int
     */
    public function getPcBuyUpSubtraction()
    {
        return $this->pcBuyUpSubtraction;
    }

    /**
     * 可使用优惠券的订单金额
     * @return mixed
     */
    public function getPcUseAmt()
    {
        return $this->pcUseAmt;
    }

    /**
     * 活动结束时间
     * @return string
     */
    public function getPcEndTime()
    {
        return $this->pcEndTime;
    }

    /**
     * 活动开始时间
     * @return string
     */
    public function getPcStartTime()
    {
        return $this->pcStartTime;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
