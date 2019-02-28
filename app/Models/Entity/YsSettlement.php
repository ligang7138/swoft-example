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
 * 结算记录表

 * @Entity()
 * @Table(name="ys_settlement")
 * @uses      YsSettlement
 */
class YsSettlement extends Model
{
    /**
     * @var int $sId 
     * @Id()
     * @Column(name="s_id", type="integer")
     */
    private $sId;

    /**
     * @var float $sAmount 结算金额
     * @Column(name="s_amount", type="decimal", default=0)
     */
    private $sAmount;

    /**
     * @var string $sStatus 结算状态【0未结算，1已结算，2部分结算】
     * @Column(name="s_status", type="char", length=1, default="0")
     */
    private $sStatus;

    /**
     * @var string $sTime 结算时间
     * @Column(name="s_time", type="datetime")
     * @Required()
     */
    private $sTime;

    /**
     * @var int $adminId 结算人
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

    /**
     * @var int $orderId 结算订单
     * @Column(name="order_id", type="integer")
     * @Required()
     */
    private $orderId;

    /**
     * @param int $value
     * @return $this
     */
    public function setSId(int $value)
    {
        $this->sId = $value;

        return $this;
    }

    /**
     * 结算金额
     * @param float $value
     * @return $this
     */
    public function setSAmount(float $value): self
    {
        $this->sAmount = $value;

        return $this;
    }

    /**
     * 结算状态【0未结算，1已结算，2部分结算】
     * @param string $value
     * @return $this
     */
    public function setSStatus(string $value): self
    {
        $this->sStatus = $value;

        return $this;
    }

    /**
     * 结算时间
     * @param string $value
     * @return $this
     */
    public function setSTime(string $value): self
    {
        $this->sTime = $value;

        return $this;
    }

    /**
     * 结算人
     * @param int $value
     * @return $this
     */
    public function setAdminId(int $value): self
    {
        $this->adminId = $value;

        return $this;
    }

    /**
     * 结算订单
     * @param int $value
     * @return $this
     */
    public function setOrderId(int $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSId()
    {
        return $this->sId;
    }

    /**
     * 结算金额
     * @return mixed
     */
    public function getSAmount()
    {
        return $this->sAmount;
    }

    /**
     * 结算状态【0未结算，1已结算，2部分结算】
     * @return string
     */
    public function getSStatus()
    {
        return $this->sStatus;
    }

    /**
     * 结算时间
     * @return string
     */
    public function getSTime()
    {
        return $this->sTime;
    }

    /**
     * 结算人
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * 结算订单
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

}
