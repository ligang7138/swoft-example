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
 * 员工邀请表

 * @Entity()
 * @Table(name="admin_sale_invite")
 * @uses      AdminSaleInvite
 */
class AdminSaleInvite extends Model
{
    /**
     * @var int $aiId 
     * @Id()
     * @Column(name="ai_id", type="integer")
     */
    private $aiId;

    /**
     * @var int $aId 受邀人ID
     * @Column(name="a_id", type="integer")
     * @Required()
     */
    private $aId;

    /**
     * @var int $aiParent 父id
     * @Column(name="ai_parent", type="integer")
     * @Required()
     */
    private $aiParent;

    /**
     * @var int $aiType 类型【0商户，4销售，6个人 】
     * @Column(name="ai_type", type="smallint", default=6)
     */
    private $aiType;

    /**
     * @var string $aiAddTime 邀请时间
     * @Column(name="ai_add_time", type="datetime")
     * @Required()
     */
    private $aiAddTime;

    /**
     * @var string $aiAddName 邀请人帐号
     * @Column(name="ai_add_name", type="string", length=45)
     * @Required()
     */
    private $aiAddName;

    /**
     * @var string $aiCode 邀请码
     * @Column(name="ai_code", type="string", length=15)
     * @Required()
     */
    private $aiCode;

    /**
     * @var string $parentInviteCode 父邀请码
     * @Column(name="parent_invite_code", type="string", length=15)
     */
    private $parentInviteCode;

    /**
     * @param int $value
     * @return $this
     */
    public function setAiId(int $value)
    {
        $this->aiId = $value;

        return $this;
    }

    /**
     * 受邀人ID
     * @param int $value
     * @return $this
     */
    public function setAId(int $value): self
    {
        $this->aId = $value;

        return $this;
    }

    /**
     * 父id
     * @param int $value
     * @return $this
     */
    public function setAiParent(int $value): self
    {
        $this->aiParent = $value;

        return $this;
    }

    /**
     * 类型【0商户，4销售，6个人 】
     * @param int $value
     * @return $this
     */
    public function setAiType(int $value): self
    {
        $this->aiType = $value;

        return $this;
    }

    /**
     * 邀请时间
     * @param string $value
     * @return $this
     */
    public function setAiAddTime(string $value): self
    {
        $this->aiAddTime = $value;

        return $this;
    }

    /**
     * 邀请人帐号
     * @param string $value
     * @return $this
     */
    public function setAiAddName(string $value): self
    {
        $this->aiAddName = $value;

        return $this;
    }

    /**
     * 邀请码
     * @param string $value
     * @return $this
     */
    public function setAiCode(string $value): self
    {
        $this->aiCode = $value;

        return $this;
    }

    /**
     * 父邀请码
     * @param string $value
     * @return $this
     */
    public function setParentInviteCode(string $value): self
    {
        $this->parentInviteCode = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAiId()
    {
        return $this->aiId;
    }

    /**
     * 受邀人ID
     * @return int
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * 父id
     * @return int
     */
    public function getAiParent()
    {
        return $this->aiParent;
    }

    /**
     * 类型【0商户，4销售，6个人 】
     * @return mixed
     */
    public function getAiType()
    {
        return $this->aiType;
    }

    /**
     * 邀请时间
     * @return string
     */
    public function getAiAddTime()
    {
        return $this->aiAddTime;
    }

    /**
     * 邀请人帐号
     * @return string
     */
    public function getAiAddName()
    {
        return $this->aiAddName;
    }

    /**
     * 邀请码
     * @return string
     */
    public function getAiCode()
    {
        return $this->aiCode;
    }

    /**
     * 父邀请码
     * @return string
     */
    public function getParentInviteCode()
    {
        return $this->parentInviteCode;
    }

}
