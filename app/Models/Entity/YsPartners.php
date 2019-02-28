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
 * 商户表

 * @Entity()
 * @Table(name="ys_partners")
 * @uses      YsPartners
 */
class YsPartners extends Model
{
    /**
     * @var int $partnerId 
     * @Id()
     * @Column(name="partner_id", type="integer")
     */
    private $partnerId;

    /**
     * @var string $partnerName 商户名称
     * @Column(name="partner_name", type="string", length=150)
     * @Required()
     */
    private $partnerName;

    /**
     * @var string $partnerPhone 商户电话
     * @Column(name="partner_phone", type="string", length=12, default="")
     */
    private $partnerPhone;

    /**
     * @var string $partnerHeaderImg 商户头像
     * @Column(name="partner_header_img", type="string", length=150)
     */
    private $partnerHeaderImg;

    /**
     * @var string $partnerNotice 商户公告
     * @Column(name="partner_notice", type="string", length=300)
     */
    private $partnerNotice;

    /**
     * @var string $partnerStatus 商户状态【1.未申请 2.待审核 3.打回 4.拒绝 5.通过】，审核通过后启用
     * @Column(name="partner_status", type="char", length=1, default="1")
     */
    private $partnerStatus;

    /**
     * @var int $partnerParentId 上级商户
     * @Column(name="partner_parent_id", type="integer", default=0)
     */
    private $partnerParentId;

    /**
     * @var string $partnerType 类型：1：普通商家 2：信用商家 3：自营商家
     * @Column(name="partner_type", type="char", length=1, default="1")
     */
    private $partnerType;

    /**
     * @var string $partnerIntention 商品意向【指主要销售方向】
     * @Column(name="partner_intention", type="string", length=20)
     */
    private $partnerIntention;

    /**
     * @var float $partnerLat 商户纬度
     * @Column(name="partner_lat", type="decimal", default=0)
     */
    private $partnerLat;

    /**
     * @var float $partnerLng 商户经度
     * @Column(name="partner_lng", type="decimal", default=0)
     */
    private $partnerLng;

    /**
     * @var string $partnerAddTime 
     * @Column(name="partner_add_time", type="datetime")
     * @Required()
     */
    private $partnerAddTime;

    /**
     * @var string $partnerCode 商户号
     * @Column(name="partner_code", type="string", length=45)
     */
    private $partnerCode;

    /**
     * @var string $partnerIntro 商户简介
     * @Column(name="partner_intro", type="string", length=3000)
     */
    private $partnerIntro;

    /**
     * @var string $partnerUpdateTime 修改时间
     * @Column(name="partner_update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $partnerUpdateTime;

    /**
     * @var int $partnerSettlementTime 结算周期【0按月，2按天】
     * @Column(name="partner_settlement_time", type="smallint", default=0)
     */
    private $partnerSettlementTime;

    /**
     * @var float $partnerSettlementServiceRate 结算服务费率
     * @Column(name="partner_settlement_service_rate", type="decimal", default=0)
     */
    private $partnerSettlementServiceRate;

    /**
     * @var string $partnerOverdueType 0正常，1逾期费不累计
     * @Column(name="partner_overdue_type", type="char", length=1, default="0")
     */
    private $partnerOverdueType;

    /**
     * @var int $partnerAutoPay 1:线下人工放款  2：线上自动放款
     * @Column(name="partner_auto_pay", type="tinyint", default=1)
     */
    private $partnerAutoPay;

    /**
     * @var string $partnerIsBrand 是否品牌商户【0否，1是】
     * @Column(name="partner_is_brand", type="char", length=1, default="0")
     */
    private $partnerIsBrand;

    /**
     * @var int $adminId 管理员id
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

    /**
     * @var string $isLonely 商户是否只能被自己推广用户看到 3:公开搜索 1：限制全部 2：限制同类
     * @Column(name="is_lonely", type="char", length=1, default="1")
     */
    private $isLonely;

    /**
     * @var string $partnerServiceCode 
     * @Column(name="partner_service_code", type="string", length=15)
     */
    private $partnerServiceCode;

    /**
     * @var string $isSupportDistribut 是否支持配送 1：支持 2：不支持
     * @Column(name="is_support_distribut", type="char", length=1, default="1")
     */
    private $isSupportDistribut;

    /**
     * @var int $distributDistance 配送距离
     * @Column(name="distribut_distance", type="smallint", default=0)
     */
    private $distributDistance;

    /**
     * @var int $sendOutMoney 起送金额
     * @Column(name="send_out_money", type="smallint", default=0)
     */
    private $sendOutMoney;

    /**
     * @var string $beginDistributTime 配送开始时间
     * @Column(name="begin_distribut_time", type="string", length=20, default="")
     */
    private $beginDistributTime;

    /**
     * @var string $endDistributTime 配送结束时间
     * @Column(name="end_distribut_time", type="string", length=20, default="")
     */
    private $endDistributTime;

    /**
     * @var string $isAgree 是否同意开店服务协议 1：不同意 2：同意
     * @Column(name="is_agree", type="char", length=1, default="1")
     */
    private $isAgree;

    /**
     * @var string $freeFreight 是否免运费 1：否 2：是
     * @Column(name="free_freight", type="char", length=1, default="1")
     */
    private $freeFreight;

    /**
     * @var int $lowestFreightDistance 最底运费距离
     * @Column(name="lowest_freight_distance", type="smallint", default=0)
     */
    private $lowestFreightDistance;

    /**
     * @var float $lowestFreightMoney 最低运费统一价
     * @Column(name="lowest_freight_money", type="decimal", default=0)
     */
    private $lowestFreightMoney;

    /**
     * @var int $additionFreightDistance 附加运费距离
     * @Column(name="addition_freight_distance", type="smallint", default=0)
     */
    private $additionFreightDistance;

    /**
     * @var float $additionFreightMoney 附加运费价
     * @Column(name="addition_freight_money", type="decimal", default=0)
     */
    private $additionFreightMoney;

    /**
     * @var string $isNormal 是否正常营业 1：否 2：是
     * @Column(name="is_normal", type="char", length=1, default="1")
     */
    private $isNormal;

    /**
     * @var string $isCreditBuy 是否支持赊购 1：是 2：否
     * @Column(name="is_credit_buy", type="char", length=1, default="0")
     */
    private $isCreditBuy;

    /**
     * @var string $tradeName 行业名称
     * @Column(name="trade_name", type="char", length=30, default="")
     */
    private $tradeName;

    /**
     * @var float $tradeBrokerageRate 佣金费率
     * @Column(name="trade_brokerage_rate", type="decimal")
     * @Required()
     */
    private $tradeBrokerageRate;

    /**
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value)
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 商户名称
     * @param string $value
     * @return $this
     */
    public function setPartnerName(string $value): self
    {
        $this->partnerName = $value;

        return $this;
    }

    /**
     * 商户电话
     * @param string $value
     * @return $this
     */
    public function setPartnerPhone(string $value): self
    {
        $this->partnerPhone = $value;

        return $this;
    }

    /**
     * 商户头像
     * @param string $value
     * @return $this
     */
    public function setPartnerHeaderImg(string $value): self
    {
        $this->partnerHeaderImg = $value;

        return $this;
    }

    /**
     * 商户公告
     * @param string $value
     * @return $this
     */
    public function setPartnerNotice(string $value): self
    {
        $this->partnerNotice = $value;

        return $this;
    }

    /**
     * 商户状态【1.未申请 2.待审核 3.打回 4.拒绝 5.通过】，审核通过后启用
     * @param string $value
     * @return $this
     */
    public function setPartnerStatus(string $value): self
    {
        $this->partnerStatus = $value;

        return $this;
    }

    /**
     * 上级商户
     * @param int $value
     * @return $this
     */
    public function setPartnerParentId(int $value): self
    {
        $this->partnerParentId = $value;

        return $this;
    }

    /**
     * 类型：1：普通商家 2：信用商家 3：自营商家
     * @param string $value
     * @return $this
     */
    public function setPartnerType(string $value): self
    {
        $this->partnerType = $value;

        return $this;
    }

    /**
     * 商品意向【指主要销售方向】
     * @param string $value
     * @return $this
     */
    public function setPartnerIntention(string $value): self
    {
        $this->partnerIntention = $value;

        return $this;
    }

    /**
     * 商户纬度
     * @param float $value
     * @return $this
     */
    public function setPartnerLat(float $value): self
    {
        $this->partnerLat = $value;

        return $this;
    }

    /**
     * 商户经度
     * @param float $value
     * @return $this
     */
    public function setPartnerLng(float $value): self
    {
        $this->partnerLng = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPartnerAddTime(string $value): self
    {
        $this->partnerAddTime = $value;

        return $this;
    }

    /**
     * 商户号
     * @param string $value
     * @return $this
     */
    public function setPartnerCode(string $value): self
    {
        $this->partnerCode = $value;

        return $this;
    }

    /**
     * 商户简介
     * @param string $value
     * @return $this
     */
    public function setPartnerIntro(string $value): self
    {
        $this->partnerIntro = $value;

        return $this;
    }

    /**
     * 修改时间
     * @param string $value
     * @return $this
     */
    public function setPartnerUpdateTime(string $value): self
    {
        $this->partnerUpdateTime = $value;

        return $this;
    }

    /**
     * 结算周期【0按月，2按天】
     * @param int $value
     * @return $this
     */
    public function setPartnerSettlementTime(int $value): self
    {
        $this->partnerSettlementTime = $value;

        return $this;
    }

    /**
     * 结算服务费率
     * @param float $value
     * @return $this
     */
    public function setPartnerSettlementServiceRate(float $value): self
    {
        $this->partnerSettlementServiceRate = $value;

        return $this;
    }

    /**
     * 0正常，1逾期费不累计
     * @param string $value
     * @return $this
     */
    public function setPartnerOverdueType(string $value): self
    {
        $this->partnerOverdueType = $value;

        return $this;
    }

    /**
     * 1:线下人工放款  2：线上自动放款
     * @param int $value
     * @return $this
     */
    public function setPartnerAutoPay(int $value): self
    {
        $this->partnerAutoPay = $value;

        return $this;
    }

    /**
     * 是否品牌商户【0否，1是】
     * @param string $value
     * @return $this
     */
    public function setPartnerIsBrand(string $value): self
    {
        $this->partnerIsBrand = $value;

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
     * 商户是否只能被自己推广用户看到 3:公开搜索 1：限制全部 2：限制同类
     * @param string $value
     * @return $this
     */
    public function setIsLonely(string $value): self
    {
        $this->isLonely = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPartnerServiceCode(string $value): self
    {
        $this->partnerServiceCode = $value;

        return $this;
    }

    /**
     * 是否支持配送 1：支持 2：不支持
     * @param string $value
     * @return $this
     */
    public function setIsSupportDistribut(string $value): self
    {
        $this->isSupportDistribut = $value;

        return $this;
    }

    /**
     * 配送距离
     * @param int $value
     * @return $this
     */
    public function setDistributDistance(int $value): self
    {
        $this->distributDistance = $value;

        return $this;
    }

    /**
     * 起送金额
     * @param int $value
     * @return $this
     */
    public function setSendOutMoney(int $value): self
    {
        $this->sendOutMoney = $value;

        return $this;
    }

    /**
     * 配送开始时间
     * @param string $value
     * @return $this
     */
    public function setBeginDistributTime(string $value): self
    {
        $this->beginDistributTime = $value;

        return $this;
    }

    /**
     * 配送结束时间
     * @param string $value
     * @return $this
     */
    public function setEndDistributTime(string $value): self
    {
        $this->endDistributTime = $value;

        return $this;
    }

    /**
     * 是否同意开店服务协议 1：不同意 2：同意
     * @param string $value
     * @return $this
     */
    public function setIsAgree(string $value): self
    {
        $this->isAgree = $value;

        return $this;
    }

    /**
     * 是否免运费 1：否 2：是
     * @param string $value
     * @return $this
     */
    public function setFreeFreight(string $value): self
    {
        $this->freeFreight = $value;

        return $this;
    }

    /**
     * 最底运费距离
     * @param int $value
     * @return $this
     */
    public function setLowestFreightDistance(int $value): self
    {
        $this->lowestFreightDistance = $value;

        return $this;
    }

    /**
     * 最低运费统一价
     * @param float $value
     * @return $this
     */
    public function setLowestFreightMoney(float $value): self
    {
        $this->lowestFreightMoney = $value;

        return $this;
    }

    /**
     * 附加运费距离
     * @param int $value
     * @return $this
     */
    public function setAdditionFreightDistance(int $value): self
    {
        $this->additionFreightDistance = $value;

        return $this;
    }

    /**
     * 附加运费价
     * @param float $value
     * @return $this
     */
    public function setAdditionFreightMoney(float $value): self
    {
        $this->additionFreightMoney = $value;

        return $this;
    }

    /**
     * 是否正常营业 1：否 2：是
     * @param string $value
     * @return $this
     */
    public function setIsNormal(string $value): self
    {
        $this->isNormal = $value;

        return $this;
    }

    /**
     * 是否支持赊购 1：是 2：否
     * @param string $value
     * @return $this
     */
    public function setIsCreditBuy(string $value): self
    {
        $this->isCreditBuy = $value;

        return $this;
    }

    /**
     * 行业名称
     * @param string $value
     * @return $this
     */
    public function setTradeName(string $value): self
    {
        $this->tradeName = $value;

        return $this;
    }

    /**
     * 佣金费率
     * @param float $value
     * @return $this
     */
    public function setTradeBrokerageRate(float $value): self
    {
        $this->tradeBrokerageRate = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 商户名称
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * 商户电话
     * @return string
     */
    public function getPartnerPhone()
    {
        return $this->partnerPhone;
    }

    /**
     * 商户头像
     * @return string
     */
    public function getPartnerHeaderImg()
    {
        return $this->partnerHeaderImg;
    }

    /**
     * 商户公告
     * @return string
     */
    public function getPartnerNotice()
    {
        return $this->partnerNotice;
    }

    /**
     * 商户状态【1.未申请 2.待审核 3.打回 4.拒绝 5.通过】，审核通过后启用
     * @return mixed
     */
    public function getPartnerStatus()
    {
        return $this->partnerStatus;
    }

    /**
     * 上级商户
     * @return int
     */
    public function getPartnerParentId()
    {
        return $this->partnerParentId;
    }

    /**
     * 类型：1：普通商家 2：信用商家 3：自营商家
     * @return mixed
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }

    /**
     * 商品意向【指主要销售方向】
     * @return string
     */
    public function getPartnerIntention()
    {
        return $this->partnerIntention;
    }

    /**
     * 商户纬度
     * @return mixed
     */
    public function getPartnerLat()
    {
        return $this->partnerLat;
    }

    /**
     * 商户经度
     * @return mixed
     */
    public function getPartnerLng()
    {
        return $this->partnerLng;
    }

    /**
     * @return string
     */
    public function getPartnerAddTime()
    {
        return $this->partnerAddTime;
    }

    /**
     * 商户号
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * 商户简介
     * @return string
     */
    public function getPartnerIntro()
    {
        return $this->partnerIntro;
    }

    /**
     * 修改时间
     * @return mixed
     */
    public function getPartnerUpdateTime()
    {
        return $this->partnerUpdateTime;
    }

    /**
     * 结算周期【0按月，2按天】
     * @return int
     */
    public function getPartnerSettlementTime()
    {
        return $this->partnerSettlementTime;
    }

    /**
     * 结算服务费率
     * @return mixed
     */
    public function getPartnerSettlementServiceRate()
    {
        return $this->partnerSettlementServiceRate;
    }

    /**
     * 0正常，1逾期费不累计
     * @return string
     */
    public function getPartnerOverdueType()
    {
        return $this->partnerOverdueType;
    }

    /**
     * 1:线下人工放款  2：线上自动放款
     * @return mixed
     */
    public function getPartnerAutoPay()
    {
        return $this->partnerAutoPay;
    }

    /**
     * 是否品牌商户【0否，1是】
     * @return string
     */
    public function getPartnerIsBrand()
    {
        return $this->partnerIsBrand;
    }

    /**
     * 管理员id
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * 商户是否只能被自己推广用户看到 3:公开搜索 1：限制全部 2：限制同类
     * @return mixed
     */
    public function getIsLonely()
    {
        return $this->isLonely;
    }

    /**
     * @return string
     */
    public function getPartnerServiceCode()
    {
        return $this->partnerServiceCode;
    }

    /**
     * 是否支持配送 1：支持 2：不支持
     * @return mixed
     */
    public function getIsSupportDistribut()
    {
        return $this->isSupportDistribut;
    }

    /**
     * 配送距离
     * @return int
     */
    public function getDistributDistance()
    {
        return $this->distributDistance;
    }

    /**
     * 起送金额
     * @return int
     */
    public function getSendOutMoney()
    {
        return $this->sendOutMoney;
    }

    /**
     * 配送开始时间
     * @return string
     */
    public function getBeginDistributTime()
    {
        return $this->beginDistributTime;
    }

    /**
     * 配送结束时间
     * @return string
     */
    public function getEndDistributTime()
    {
        return $this->endDistributTime;
    }

    /**
     * 是否同意开店服务协议 1：不同意 2：同意
     * @return mixed
     */
    public function getIsAgree()
    {
        return $this->isAgree;
    }

    /**
     * 是否免运费 1：否 2：是
     * @return mixed
     */
    public function getFreeFreight()
    {
        return $this->freeFreight;
    }

    /**
     * 最底运费距离
     * @return int
     */
    public function getLowestFreightDistance()
    {
        return $this->lowestFreightDistance;
    }

    /**
     * 最低运费统一价
     * @return mixed
     */
    public function getLowestFreightMoney()
    {
        return $this->lowestFreightMoney;
    }

    /**
     * 附加运费距离
     * @return int
     */
    public function getAdditionFreightDistance()
    {
        return $this->additionFreightDistance;
    }

    /**
     * 附加运费价
     * @return mixed
     */
    public function getAdditionFreightMoney()
    {
        return $this->additionFreightMoney;
    }

    /**
     * 是否正常营业 1：否 2：是
     * @return mixed
     */
    public function getIsNormal()
    {
        return $this->isNormal;
    }

    /**
     * 是否支持赊购 1：是 2：否
     * @return string
     */
    public function getIsCreditBuy()
    {
        return $this->isCreditBuy;
    }

    /**
     * 行业名称
     * @return string
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }

    /**
     * 佣金费率
     * @return float
     */
    public function getTradeBrokerageRate()
    {
        return $this->tradeBrokerageRate;
    }

}
