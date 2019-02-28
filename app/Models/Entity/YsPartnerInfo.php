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
 * @Entity()
 * @Table(name="ys_partner_info")
 * @uses      YsPartnerInfo
 */
class YsPartnerInfo extends Model
{
    /**
     * @var int $id 主键
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $partnerId 商户表关联主键
     * @Column(name="partner_id", type="integer", default=0)
     */
    private $partnerId;

    /**
     * @var int $province 省份
     * @Column(name="province", type="integer", default=0)
     */
    private $province;

    /**
     * @var int $city 市
     * @Column(name="city", type="integer", default=0)
     */
    private $city;

    /**
     * @var int $county 县
     * @Column(name="county", type="integer", default=0)
     */
    private $county;

    /**
     * @var string $manageInfo 经营信息
     * @Column(name="manage_info", type="text", length=65535)
     * @Required()
     */
    private $manageInfo;

    /**
     * @var string $assetInfo 资产信息
     * @Column(name="asset_info", type="text", length=65535)
     * @Required()
     */
    private $assetInfo;

    /**
     * @var string $debtInfo 负债信息
     * @Column(name="debt_info", type="text", length=65535)
     * @Required()
     */
    private $debtInfo;

    /**
     * @var string $acceptDepartment 受理营业部
     * @Column(name="accept_department", type="string", length=20, default="")
     */
    private $acceptDepartment;

    /**
     * @var string $saleManager 营业部经理
     * @Column(name="sale_manager", type="string", length=10, default="")
     */
    private $saleManager;

    /**
     * @var string $acceptOfficer 办理人员
     * @Column(name="accept_officer", type="string", length=10, default="")
     */
    private $acceptOfficer;

    /**
     * @var string $updateTime 修改时间
     * @Column(name="update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $updateTime;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * @var string $partnerDetailAddress 商家详细地址
     * @Column(name="partner_detail_address", type="string", length=100, default="")
     */
    private $partnerDetailAddress;

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
     * 商户表关联主键
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 省份
     * @param int $value
     * @return $this
     */
    public function setProvince(int $value): self
    {
        $this->province = $value;

        return $this;
    }

    /**
     * 市
     * @param int $value
     * @return $this
     */
    public function setCity(int $value): self
    {
        $this->city = $value;

        return $this;
    }

    /**
     * 县
     * @param int $value
     * @return $this
     */
    public function setCounty(int $value): self
    {
        $this->county = $value;

        return $this;
    }

    /**
     * 经营信息
     * @param string $value
     * @return $this
     */
    public function setManageInfo(string $value): self
    {
        $this->manageInfo = $value;

        return $this;
    }

    /**
     * 资产信息
     * @param string $value
     * @return $this
     */
    public function setAssetInfo(string $value): self
    {
        $this->assetInfo = $value;

        return $this;
    }

    /**
     * 负债信息
     * @param string $value
     * @return $this
     */
    public function setDebtInfo(string $value): self
    {
        $this->debtInfo = $value;

        return $this;
    }

    /**
     * 受理营业部
     * @param string $value
     * @return $this
     */
    public function setAcceptDepartment(string $value): self
    {
        $this->acceptDepartment = $value;

        return $this;
    }

    /**
     * 营业部经理
     * @param string $value
     * @return $this
     */
    public function setSaleManager(string $value): self
    {
        $this->saleManager = $value;

        return $this;
    }

    /**
     * 办理人员
     * @param string $value
     * @return $this
     */
    public function setAcceptOfficer(string $value): self
    {
        $this->acceptOfficer = $value;

        return $this;
    }

    /**
     * 修改时间
     * @param string $value
     * @return $this
     */
    public function setUpdateTime(string $value): self
    {
        $this->updateTime = $value;

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
     * 商家详细地址
     * @param string $value
     * @return $this
     */
    public function setPartnerDetailAddress(string $value): self
    {
        $this->partnerDetailAddress = $value;

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
     * 商户表关联主键
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 省份
     * @return int
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * 市
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 县
     * @return int
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * 经营信息
     * @return string
     */
    public function getManageInfo()
    {
        return $this->manageInfo;
    }

    /**
     * 资产信息
     * @return string
     */
    public function getAssetInfo()
    {
        return $this->assetInfo;
    }

    /**
     * 负债信息
     * @return string
     */
    public function getDebtInfo()
    {
        return $this->debtInfo;
    }

    /**
     * 受理营业部
     * @return string
     */
    public function getAcceptDepartment()
    {
        return $this->acceptDepartment;
    }

    /**
     * 营业部经理
     * @return string
     */
    public function getSaleManager()
    {
        return $this->saleManager;
    }

    /**
     * 办理人员
     * @return string
     */
    public function getAcceptOfficer()
    {
        return $this->acceptOfficer;
    }

    /**
     * 修改时间
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
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
     * 商家详细地址
     * @return string
     */
    public function getPartnerDetailAddress()
    {
        return $this->partnerDetailAddress;
    }

}
