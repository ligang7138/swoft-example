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
 * 用户收货地址表

 * @Entity()
 * @Table(name="ys_user_address")
 * @uses      YsUserAddress
 */
class YsUserAddress extends Model
{
    /**
     * @var int $uaId 
     * @Id()
     * @Column(name="ua_id", type="integer")
     */
    private $uaId;

    /**
     * @var string $uaRemark 短名称
     * @Column(name="ua_remark", type="string", length=50, default="默认")
     */
    private $uaRemark;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=45)
     * @Required()
     */
    private $uCode;

    /**
     * @var string $uaConsignee 收货人
     * @Column(name="ua_consignee", type="string", length=60)
     * @Required()
     */
    private $uaConsignee;

    /**
     * @var string $uaProvince 省份
     * @Column(name="ua_province", type="string", length=45)
     * @Required()
     */
    private $uaProvince;

    /**
     * @var string $uaCity 城市
     * @Column(name="ua_city", type="string", length=45)
     * @Required()
     */
    private $uaCity;

    /**
     * @var string $uaArea 区县
     * @Column(name="ua_area", type="string", length=45)
     * @Required()
     */
    private $uaArea;

    /**
     * @var string $uaDetailAddress 详细地址
     * @Column(name="ua_detail_address", type="string", length=150)
     * @Required()
     */
    private $uaDetailAddress;

    /**
     * @var float $uaLat 纬度
     * @Column(name="ua_lat", type="decimal")
     * @Required()
     */
    private $uaLat;

    /**
     * @var float $uaLng 经度
     * @Column(name="ua_lng", type="decimal")
     * @Required()
     */
    private $uaLng;

    /**
     * @var string $uaMobile 联系电话
     * @Column(name="ua_mobile", type="char", length=11)
     * @Required()
     */
    private $uaMobile;

    /**
     * @var string $uaIsDefault 是否默认【0否，1是】
     * @Column(name="ua_is_default", type="char", length=1, default="0")
     */
    private $uaIsDefault;

    /**
     * @param int $value
     * @return $this
     */
    public function setUaId(int $value)
    {
        $this->uaId = $value;

        return $this;
    }

    /**
     * 短名称
     * @param string $value
     * @return $this
     */
    public function setUaRemark(string $value): self
    {
        $this->uaRemark = $value;

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
     * 收货人
     * @param string $value
     * @return $this
     */
    public function setUaConsignee(string $value): self
    {
        $this->uaConsignee = $value;

        return $this;
    }

    /**
     * 省份
     * @param string $value
     * @return $this
     */
    public function setUaProvince(string $value): self
    {
        $this->uaProvince = $value;

        return $this;
    }

    /**
     * 城市
     * @param string $value
     * @return $this
     */
    public function setUaCity(string $value): self
    {
        $this->uaCity = $value;

        return $this;
    }

    /**
     * 区县
     * @param string $value
     * @return $this
     */
    public function setUaArea(string $value): self
    {
        $this->uaArea = $value;

        return $this;
    }

    /**
     * 详细地址
     * @param string $value
     * @return $this
     */
    public function setUaDetailAddress(string $value): self
    {
        $this->uaDetailAddress = $value;

        return $this;
    }

    /**
     * 纬度
     * @param float $value
     * @return $this
     */
    public function setUaLat(float $value): self
    {
        $this->uaLat = $value;

        return $this;
    }

    /**
     * 经度
     * @param float $value
     * @return $this
     */
    public function setUaLng(float $value): self
    {
        $this->uaLng = $value;

        return $this;
    }

    /**
     * 联系电话
     * @param string $value
     * @return $this
     */
    public function setUaMobile(string $value): self
    {
        $this->uaMobile = $value;

        return $this;
    }

    /**
     * 是否默认【0否，1是】
     * @param string $value
     * @return $this
     */
    public function setUaIsDefault(string $value): self
    {
        $this->uaIsDefault = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUaId()
    {
        return $this->uaId;
    }

    /**
     * 短名称
     * @return mixed
     */
    public function getUaRemark()
    {
        return $this->uaRemark;
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
     * 收货人
     * @return string
     */
    public function getUaConsignee()
    {
        return $this->uaConsignee;
    }

    /**
     * 省份
     * @return string
     */
    public function getUaProvince()
    {
        return $this->uaProvince;
    }

    /**
     * 城市
     * @return string
     */
    public function getUaCity()
    {
        return $this->uaCity;
    }

    /**
     * 区县
     * @return string
     */
    public function getUaArea()
    {
        return $this->uaArea;
    }

    /**
     * 详细地址
     * @return string
     */
    public function getUaDetailAddress()
    {
        return $this->uaDetailAddress;
    }

    /**
     * 纬度
     * @return float
     */
    public function getUaLat()
    {
        return $this->uaLat;
    }

    /**
     * 经度
     * @return float
     */
    public function getUaLng()
    {
        return $this->uaLng;
    }

    /**
     * 联系电话
     * @return string
     */
    public function getUaMobile()
    {
        return $this->uaMobile;
    }

    /**
     * 是否默认【0否，1是】
     * @return string
     */
    public function getUaIsDefault()
    {
        return $this->uaIsDefault;
    }

}
