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
 * 商户联系人表

 * @Entity()
 * @Table(name="admin_user_contact")
 * @uses      AdminUserContact
 */
class AdminUserContact extends Model
{
    /**
     * @var int $id 主键
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $aId 商户用户主键id
     * @Column(name="a_id", type="integer", default=0)
     */
    private $aId;

    /**
     * @var string $contactName 联系人姓名
     * @Column(name="contact_name", type="string", length=20, default="")
     */
    private $contactName;

    /**
     * @var string $phone 联系人手机号
     * @Column(name="phone", type="char", length=11, default="")
     */
    private $phone;

    /**
     * @var string $identNo 联系人身份证号
     * @Column(name="ident_no", type="string", length=20, default="")
     */
    private $identNo;

    /**
     * @var string $liveAddress 联系人居住地址
     * @Column(name="live_address", type="string", length=50, default="")
     */
    private $liveAddress;

    /**
     * @var string $profession 职业
     * @Column(name="profession", type="string", length=20, default="")
     */
    private $profession;

    /**
     * @var string $isDel 是否删除 1：否 2：是
     * @Column(name="is_del", type="char", length=1, default="1")
     */
    private $isDel;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * @var string $sex 
     * @Column(name="sex", type="char", length=3, default="")
     */
    private $sex;

    /**
     * @var int $age 
     * @Column(name="age", type="smallint", default=0)
     */
    private $age;

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
     * 商户用户主键id
     * @param int $value
     * @return $this
     */
    public function setAId(int $value): self
    {
        $this->aId = $value;

        return $this;
    }

    /**
     * 联系人姓名
     * @param string $value
     * @return $this
     */
    public function setContactName(string $value): self
    {
        $this->contactName = $value;

        return $this;
    }

    /**
     * 联系人手机号
     * @param string $value
     * @return $this
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * 联系人身份证号
     * @param string $value
     * @return $this
     */
    public function setIdentNo(string $value): self
    {
        $this->identNo = $value;

        return $this;
    }

    /**
     * 联系人居住地址
     * @param string $value
     * @return $this
     */
    public function setLiveAddress(string $value): self
    {
        $this->liveAddress = $value;

        return $this;
    }

    /**
     * 职业
     * @param string $value
     * @return $this
     */
    public function setProfession(string $value): self
    {
        $this->profession = $value;

        return $this;
    }

    /**
     * 是否删除 1：否 2：是
     * @param string $value
     * @return $this
     */
    public function setIsDel(string $value): self
    {
        $this->isDel = $value;

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
     * @param string $value
     * @return $this
     */
    public function setSex(string $value): self
    {
        $this->sex = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAge(int $value): self
    {
        $this->age = $value;

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
     * 商户用户主键id
     * @return int
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * 联系人姓名
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * 联系人手机号
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 联系人身份证号
     * @return string
     */
    public function getIdentNo()
    {
        return $this->identNo;
    }

    /**
     * 联系人居住地址
     * @return string
     */
    public function getLiveAddress()
    {
        return $this->liveAddress;
    }

    /**
     * 职业
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * 是否删除 1：否 2：是
     * @return mixed
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * 创建时间
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

}
