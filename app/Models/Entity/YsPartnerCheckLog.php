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
 * 商户审核记录表

 * @Entity()
 * @Table(name="ys_partner_check_log")
 * @uses      YsPartnerCheckLog
 */
class YsPartnerCheckLog extends Model
{
    /**
     * @var int $id 主键
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $partnerId 商家主键
     * @Column(name="partner_id", type="integer", default=0)
     */
    private $partnerId;

    /**
     * @var string $checkName 审核人
     * @Column(name="check_name", type="string", length=20, default="")
     */
    private $checkName;

    /**
     * @var string $checkTime 审核时间
     * @Column(name="check_time", type="datetime")
     * @Required()
     */
    private $checkTime;

    /**
     * @var string $checkInfo 审核信息
     * @Column(name="check_info", type="string", length=100, default="")
     */
    private $checkInfo;

    /**
     * @var string $createTime 记录创建时间
     * @Column(name="create_time", type="datetime")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $checkType 类型【1商户审核 2商品审核 3加盟商激活】
     * @Column(name="check_type", type="integer")
     * @Required()
     */
    private $checkType;

    /**
     * 主键
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 商家主键
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 审核人
     * @param string $value
     * @return $this
     */
    public function setCheckName(string $value): self
    {
        $this->checkName = $value;

        return $this;
    }

    /**
     * 审核时间
     * @param string $value
     * @return $this
     */
    public function setCheckTime(string $value): self
    {
        $this->checkTime = $value;

        return $this;
    }

    /**
     * 审核信息
     * @param string $value
     * @return $this
     */
    public function setCheckInfo(string $value): self
    {
        $this->checkInfo = $value;

        return $this;
    }

    /**
     * 记录创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 类型【1商户审核 2商品审核 3加盟商激活】
     * @param int $value
     * @return $this
     */
    public function setCheckType(int $value): self
    {
        $this->checkType = $value;

        return $this;
    }

    /**
     * 主键
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 商家主键
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 审核人
     * @return string
     */
    public function getCheckName()
    {
        return $this->checkName;
    }

    /**
     * 审核时间
     * @return string
     */
    public function getCheckTime()
    {
        return $this->checkTime;
    }

    /**
     * 审核信息
     * @return string
     */
    public function getCheckInfo()
    {
        return $this->checkInfo;
    }

    /**
     * 记录创建时间
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 类型【1商户审核 2商品审核 3加盟商激活】
     * @return int
     */
    public function getCheckType()
    {
        return $this->checkType;
    }

}
