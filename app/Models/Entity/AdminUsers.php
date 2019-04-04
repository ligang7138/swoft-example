<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;

/**
 * 后台用户表

 * @Entity()
 * @Table(name="admin_users")
 * @uses      AdminUsers
 */
class AdminUsers extends Model
{
    /**
     * @var int $aId
     * @Id()
     * @Column(name="a_id", type="integer")
     */
    private $aId;

    /**
     * @var string $aName
     * @Column(name="a_name", type="string", length=45)
     * @Required()
     */
    private $aName;

    /**
     * @var string $aPwd
     * @Column(name="a_pwd", type="string", length=800)
     * @Required()
     */
    private $aPwd;

    /**
     * @var string $aLoginTime
     * @Column(name="a_login_time", type="datetime")
     */
    private $aLoginTime;

    /**
     * @var string $aStatus 0未启用，1已启用
     * @Column(name="a_status", type="char", length=1, default="1")
     */
    private $aStatus;

    /**
     * @var string $aRoles 2 销售管理员，3销售主管，4销售员  5审核管理员，6审核员
     * @Column(name="a_roles", type="string", length=300)
     */
    private $aRoles;

    /**
     * @var string $aType 0:商户 1：管理员  2:运营，4销售，5加盟商，6审核员
     * @Column(name="a_type", type="string", length=1, default="0")
     */
    private $aType;

    /**
     * @var string $aAddTime
     * @Column(name="a_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $aAddTime;

    /**
     * @var string $opName 操作人帐号
     * @Column(name="op_name", type="string", length=45)
     */
    private $opName;

    /**
     * @var string $opTime 操作时间
     * @Column(name="op_time", type="datetime")
     */
    private $opTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setAId(int $value)
    {
        $this->aId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAName(string $value): self
    {
        $this->aName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAPwd(string $value): self
    {
        $this->aPwd = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setALoginTime(string $value): self
    {
        $this->aLoginTime = $value;

        return $this;
    }

    /**
     * 0未启用，1已启用
     * @param string $value
     * @return $this
     */
    public function setAStatus(string $value): self
    {
        $this->aStatus = $value;

        return $this;
    }

    /**
     * 2 销售管理员，3销售主管，4销售员  5审核管理员，6审核员
     * @param string $value
     * @return $this
     */
    public function setARoles(string $value): self
    {
        $this->aRoles = $value;

        return $this;
    }

    /**
     * 0:商户 1：管理员  2:运营，4销售，5加盟商，6审核员
     * @param string $value
     * @return $this
     */
    public function setAType(string $value): self
    {
        $this->aType = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAAddTime(string $value): self
    {
        $this->aAddTime = $value;

        return $this;
    }

    /**
     * 操作人帐号
     * @param string $value
     * @return $this
     */
    public function setOpName(string $value): self
    {
        $this->opName = $value;

        return $this;
    }

    /**
     * 操作时间
     * @param string $value
     * @return $this
     */
    public function setOpTime(string $value): self
    {
        $this->opTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * @return string
     */
    public function getAName()
    {
        return $this->aName;
    }

    /**
     * @return string
     */
    public function getAPwd()
    {
        return $this->aPwd;
    }

    /**
     * @return string
     */
    public function getALoginTime()
    {
        return $this->aLoginTime;
    }

    /**
     * 0未启用，1已启用
     * @return mixed
     */
    public function getAStatus()
    {
        return $this->aStatus;
    }

    /**
     * 2 销售管理员，3销售主管，4销售员  5审核管理员，6审核员
     * @return string
     */
    public function getARoles()
    {
        return $this->aRoles;
    }

    /**
     * 0:商户 1：管理员  2:运营，4销售，5加盟商，6审核员
     * @return string
     */
    public function getAType()
    {
        return $this->aType;
    }

    /**
     * @return mixed
     */
    public function getAAddTime()
    {
        return $this->aAddTime;
    }

    /**
     * 操作人帐号
     * @return string
     */
    public function getOpName()
    {
        return $this->opName;
    }

    /**
     * 操作时间
     * @return string
     */
    public function getOpTime()
    {
        return $this->opTime;
    }

    public function verify($credential) : bool
    {
        return password_verify($credential, $this->getAPwd());
    }
}
