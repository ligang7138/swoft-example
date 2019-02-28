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
 * 操作日志表

 * @Entity()
 * @Table(name="ys_logs")
 * @uses      YsLogs
 */
class YsLogs extends Model
{
    /**
     * @var int $logId 
     * @Id()
     * @Column(name="log_id", type="integer")
     */
    private $logId;

    /**
     * @var string $logAdminName 操作人帐号
     * @Column(name="log_admin_name", type="string", length=45)
     * @Required()
     */
    private $logAdminName;

    /**
     * @var string $currStatus 当前状态【操作后状态】
     * @Column(name="curr_status", type="char", length=2)
     * @Required()
     */
    private $currStatus;

    /**
     * @var string $upStatus 上一步状态
     * @Column(name="up_status", type="char", length=2)
     * @Required()
     */
    private $upStatus;

    /**
     * @var string $logRemark 备注
     * @Column(name="log_remark", type="string", length=300)
     * @Required()
     */
    private $logRemark;

    /**
     * @var string $logAddTime 
     * @Column(name="log_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $logAddTime;

    /**
     * @var int $orderId 订单id
     * @Column(name="order_id", type="integer")
     * @Required()
     */
    private $orderId;

    /**
     * @param int $value
     * @return $this
     */
    public function setLogId(int $value)
    {
        $this->logId = $value;

        return $this;
    }

    /**
     * 操作人帐号
     * @param string $value
     * @return $this
     */
    public function setLogAdminName(string $value): self
    {
        $this->logAdminName = $value;

        return $this;
    }

    /**
     * 当前状态【操作后状态】
     * @param string $value
     * @return $this
     */
    public function setCurrStatus(string $value): self
    {
        $this->currStatus = $value;

        return $this;
    }

    /**
     * 上一步状态
     * @param string $value
     * @return $this
     */
    public function setUpStatus(string $value): self
    {
        $this->upStatus = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setLogRemark(string $value): self
    {
        $this->logRemark = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLogAddTime(string $value): self
    {
        $this->logAddTime = $value;

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
     * @return mixed
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * 操作人帐号
     * @return string
     */
    public function getLogAdminName()
    {
        return $this->logAdminName;
    }

    /**
     * 当前状态【操作后状态】
     * @return string
     */
    public function getCurrStatus()
    {
        return $this->currStatus;
    }

    /**
     * 上一步状态
     * @return string
     */
    public function getUpStatus()
    {
        return $this->upStatus;
    }

    /**
     * 备注
     * @return string
     */
    public function getLogRemark()
    {
        return $this->logRemark;
    }

    /**
     * @return mixed
     */
    public function getLogAddTime()
    {
        return $this->logAddTime;
    }

    /**
     * 订单id
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

}
