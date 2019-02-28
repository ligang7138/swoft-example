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
 * 用户优惠券表

 * @Entity()
 * @Table(name="ys_user_coupon")
 * @uses      YsUserCoupon
 */
class YsUserCoupon extends Model
{
    /**
     * @var int $ucId 
     * @Id()
     * @Column(name="uc_id", type="integer")
     */
    private $ucId;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=45)
     * @Required()
     */
    private $uCode;

    /**
     * @var int $pcId 商户优惠券ID
     * @Column(name="pc_id", type="integer")
     * @Required()
     */
    private $pcId;

    /**
     * @var string $ucType 优惠券/红包类型【0满减，1抵现】
     * @Column(name="uc_type", type="char", length=1)
     * @Required()
     */
    private $ucType;

    /**
     * @var float $ucUseAmt 要求使用金额
     * @Column(name="uc_use_amt", type="decimal", default=0)
     */
    private $ucUseAmt;

    /**
     * @var float $ucCouponAmt 优惠券金额
     * @Column(name="uc_coupon_amt", type="decimal")
     * @Required()
     */
    private $ucCouponAmt;

    /**
     * @var string $ucStatus 状态【0有效，1失效】
     * @Column(name="uc_status", type="char", length=1, default="0")
     */
    private $ucStatus;

    /**
     * @var float $ucEndTime 结束时间
     * @Column(name="uc_end_time", type="decimal")
     * @Required()
     */
    private $ucEndTime;

    /**
     * @var string $ucAddTime 
     * @Column(name="uc_add_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $ucAddTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setUcId(int $value)
    {
        $this->ucId = $value;

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
     * 商户优惠券ID
     * @param int $value
     * @return $this
     */
    public function setPcId(int $value): self
    {
        $this->pcId = $value;

        return $this;
    }

    /**
     * 优惠券/红包类型【0满减，1抵现】
     * @param string $value
     * @return $this
     */
    public function setUcType(string $value): self
    {
        $this->ucType = $value;

        return $this;
    }

    /**
     * 要求使用金额
     * @param float $value
     * @return $this
     */
    public function setUcUseAmt(float $value): self
    {
        $this->ucUseAmt = $value;

        return $this;
    }

    /**
     * 优惠券金额
     * @param float $value
     * @return $this
     */
    public function setUcCouponAmt(float $value): self
    {
        $this->ucCouponAmt = $value;

        return $this;
    }

    /**
     * 状态【0有效，1失效】
     * @param string $value
     * @return $this
     */
    public function setUcStatus(string $value): self
    {
        $this->ucStatus = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param float $value
     * @return $this
     */
    public function setUcEndTime(float $value): self
    {
        $this->ucEndTime = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUcAddTime(string $value): self
    {
        $this->ucAddTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUcId()
    {
        return $this->ucId;
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
     * 商户优惠券ID
     * @return int
     */
    public function getPcId()
    {
        return $this->pcId;
    }

    /**
     * 优惠券/红包类型【0满减，1抵现】
     * @return string
     */
    public function getUcType()
    {
        return $this->ucType;
    }

    /**
     * 要求使用金额
     * @return mixed
     */
    public function getUcUseAmt()
    {
        return $this->ucUseAmt;
    }

    /**
     * 优惠券金额
     * @return float
     */
    public function getUcCouponAmt()
    {
        return $this->ucCouponAmt;
    }

    /**
     * 状态【0有效，1失效】
     * @return string
     */
    public function getUcStatus()
    {
        return $this->ucStatus;
    }

    /**
     * 结束时间
     * @return float
     */
    public function getUcEndTime()
    {
        return $this->ucEndTime;
    }

    /**
     * @return mixed
     */
    public function getUcAddTime()
    {
        return $this->ucAddTime;
    }

}
