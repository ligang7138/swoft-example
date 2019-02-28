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
 * 商户审核表

 * @Entity()
 * @Table(name="ys_partner_check")
 * @uses      YsPartnerCheck
 */
class YsPartnerCheck extends Model
{
    /**
     * @var int $checkId 
     * @Id()
     * @Column(name="check_id", type="integer")
     */
    private $checkId;

    /**
     * @var int $partnerId 商户主键id
     * @Column(name="partner_id", type="integer", default=0)
     */
    private $partnerId;

    /**
     * @var string $checkName 审核人员名字
     * @Column(name="check_name", type="string", length=20, default="")
     */
    private $checkName;

    /**
     * @var string $checkStatus 审核状态 1：未通过 2：通过 3：打回
     * @Column(name="check_status", type="char", length=1, default="1")
     */
    private $checkStatus;

    /**
     * @var string $checkRemark 审核备注
     * @Column(name="check_remark", type="string", length=150, default="")
     */
    private $checkRemark;

    /**
     * @var string $checkFeedback 审核反馈
     * @Column(name="check_feedback", type="string", length=150, default="")
     */
    private $checkFeedback;

    /**
     * @var string $checkUpdateTime 最近一次修改时间
     * @Column(name="check_update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $checkUpdateTime;

    /**
     * @var string $checkAddTime 记录生成时间
     * @Column(name="check_add_time", type="datetime")
     * @Required()
     */
    private $checkAddTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setCheckId(int $value)
    {
        $this->checkId = $value;

        return $this;
    }

    /**
     * 商户主键id
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 审核人员名字
     * @param string $value
     * @return $this
     */
    public function setCheckName(string $value): self
    {
        $this->checkName = $value;

        return $this;
    }

    /**
     * 审核状态 1：未通过 2：通过 3：打回
     * @param string $value
     * @return $this
     */
    public function setCheckStatus(string $value): self
    {
        $this->checkStatus = $value;

        return $this;
    }

    /**
     * 审核备注
     * @param string $value
     * @return $this
     */
    public function setCheckRemark(string $value): self
    {
        $this->checkRemark = $value;

        return $this;
    }

    /**
     * 审核反馈
     * @param string $value
     * @return $this
     */
    public function setCheckFeedback(string $value): self
    {
        $this->checkFeedback = $value;

        return $this;
    }

    /**
     * 最近一次修改时间
     * @param string $value
     * @return $this
     */
    public function setCheckUpdateTime(string $value): self
    {
        $this->checkUpdateTime = $value;

        return $this;
    }

    /**
     * 记录生成时间
     * @param string $value
     * @return $this
     */
    public function setCheckAddTime(string $value): self
    {
        $this->checkAddTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCheckId()
    {
        return $this->checkId;
    }

    /**
     * 商户主键id
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 审核人员名字
     * @return string
     */
    public function getCheckName()
    {
        return $this->checkName;
    }

    /**
     * 审核状态 1：未通过 2：通过 3：打回
     * @return mixed
     */
    public function getCheckStatus()
    {
        return $this->checkStatus;
    }

    /**
     * 审核备注
     * @return string
     */
    public function getCheckRemark()
    {
        return $this->checkRemark;
    }

    /**
     * 审核反馈
     * @return string
     */
    public function getCheckFeedback()
    {
        return $this->checkFeedback;
    }

    /**
     * 最近一次修改时间
     * @return mixed
     */
    public function getCheckUpdateTime()
    {
        return $this->checkUpdateTime;
    }

    /**
     * 记录生成时间
     * @return string
     */
    public function getCheckAddTime()
    {
        return $this->checkAddTime;
    }

}
