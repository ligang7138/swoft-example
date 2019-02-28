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
 * 商户资料表

 * @Entity()
 * @Table(name="ys_partner_daturm")
 * @uses      YsPartnerDaturm
 */
class YsPartnerDaturm extends Model
{
    /**
     * @var int $id 主键
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $partnerId 
     * @Column(name="partner_id", type="integer", default=0)
     */
    private $partnerId;

    /**
     * @var string $pdType 类型 a : 证件资料,b : 店铺头像,c : 店铺图片,d : 商品图片,g : 其它
     * @Column(name="pd_type", type="char", length=1)
     * @Required()
     */
    private $pdType;

    /**
     * @var string $pdUrl 资料url
     * @Column(name="pd_url", type="string", length=150)
     * @Required()
     */
    private $pdUrl;

    /**
     * @var string $pdAddTime 添加时间
     * @Column(name="pd_add_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $pdAddTime;

    /**
     * @var int $adminId 管理员id
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

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
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 类型 a : 证件资料,b : 店铺头像,c : 店铺图片,d : 商品图片,g : 其它
     * @param string $value
     * @return $this
     */
    public function setPdType(string $value): self
    {
        $this->pdType = $value;

        return $this;
    }

    /**
     * 资料url
     * @param string $value
     * @return $this
     */
    public function setPdUrl(string $value): self
    {
        $this->pdUrl = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param string $value
     * @return $this
     */
    public function setPdAddTime(string $value): self
    {
        $this->pdAddTime = $value;

        return $this;
    }

    /**
     * 管理员id
     * @param int $value
     * @return $this
     */
    public function setAdminId(int $value): self
    {
        $this->adminId = $value;

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
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 类型 a : 证件资料,b : 店铺头像,c : 店铺图片,d : 商品图片,g : 其它
     * @return string
     */
    public function getPdType()
    {
        return $this->pdType;
    }

    /**
     * 资料url
     * @return string
     */
    public function getPdUrl()
    {
        return $this->pdUrl;
    }

    /**
     * 添加时间
     * @return mixed
     */
    public function getPdAddTime()
    {
        return $this->pdAddTime;
    }

    /**
     * 管理员id
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

}
