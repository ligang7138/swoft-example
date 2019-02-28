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
 * 商户银行帐号信息

 * @Entity()
 * @Table(name="ys_partners_bank")
 * @uses      YsPartnersBank
 */
class YsPartnersBank extends Model
{
    /**
     * @var int $bankId 银行id
     * @Column(name="bank_id", type="integer")
     * @Required()
     */
    private $bankId;

    /**
     * @var int $partnerId 商户id
     * @Id()
     * @Column(name="partner_id", type="integer")
     */
    private $partnerId;

    /**
     * @var string $partnerUserName 姓名/商户公司名称
     * @Column(name="partner_user_name", type="string", length=300)
     * @Required()
     */
    private $partnerUserName;

    /**
     * @var string $partnerBankName 开户行
     * @Column(name="partner_bank_name", type="string", length=100)
     * @Required()
     */
    private $partnerBankName;

    /**
     * @var string $parnterBankNums 银行行号【对公帐号时必填】
     * @Column(name="parnter_bank_nums", type="string", length=30)
     */
    private $parnterBankNums;

    /**
     * @var string $partnerBankCode 银行卡号
     * @Column(name="partner_bank_code", type="string", length=30)
     * @Required()
     */
    private $partnerBankCode;

    /**
     * @var string $partnerUserPhone 手机号
     * @Column(name="partner_user_phone", type="string", length=15)
     * @Required()
     */
    private $partnerUserPhone;

    /**
     * @var string $partnerUserIdent 身份证
     * @Column(name="partner_user_ident", type="string", length=20)
     */
    private $partnerUserIdent;

    /**
     * @var string $updateTime 
     * @Column(name="update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $updateTime;

    /**
     * @var string $partnerAccountType 帐号类型【0个人银行卡，1对公银行卡】
     * @Column(name="partner_account_type", type="char", length=1, default="0")
     */
    private $partnerAccountType;

    /**
     * @var string $partnerAccountStatus 帐号状态【0启用，1停用】
     * @Column(name="partner_account_status", type="char", length=1, default="0")
     */
    private $partnerAccountStatus;

    /**
     * @var string $partnerChildBankAddr 开户行支行【对公帐号必填】
     * @Column(name="partner_child_bank_addr", type="string", length=300)
     */
    private $partnerChildBankAddr;

    /**
     * @var string $partnerProvince 开户行省
     * @Column(name="partner_province", type="string", length=100)
     */
    private $partnerProvince;

    /**
     * @var string $partnerCity 开户行市
     * @Column(name="partner_city", type="string", length=100)
     */
    private $partnerCity;

    /**
     * @var string $partnerArea 开户行区县
     * @Column(name="partner_area", type="string", length=100)
     */
    private $partnerArea;

    /**
     * @var int $partnerAreaCode 区域编号
     * @Column(name="partner_area_code", type="integer")
     */
    private $partnerAreaCode;

    /**
     * 银行id
     * @param int $value
     * @return $this
     */
    public function setBankId(int $value): self
    {
        $this->bankId = $value;

        return $this;
    }

    /**
     * 商户id
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value)
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 姓名/商户公司名称
     * @param string $value
     * @return $this
     */
    public function setPartnerUserName(string $value): self
    {
        $this->partnerUserName = $value;

        return $this;
    }

    /**
     * 开户行
     * @param string $value
     * @return $this
     */
    public function setPartnerBankName(string $value): self
    {
        $this->partnerBankName = $value;

        return $this;
    }

    /**
     * 银行行号【对公帐号时必填】
     * @param string $value
     * @return $this
     */
    public function setParnterBankNums(string $value): self
    {
        $this->parnterBankNums = $value;

        return $this;
    }

    /**
     * 银行卡号
     * @param string $value
     * @return $this
     */
    public function setPartnerBankCode(string $value): self
    {
        $this->partnerBankCode = $value;

        return $this;
    }

    /**
     * 手机号
     * @param string $value
     * @return $this
     */
    public function setPartnerUserPhone(string $value): self
    {
        $this->partnerUserPhone = $value;

        return $this;
    }

    /**
     * 身份证
     * @param string $value
     * @return $this
     */
    public function setPartnerUserIdent(string $value): self
    {
        $this->partnerUserIdent = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUpdateTime(string $value): self
    {
        $this->updateTime = $value;

        return $this;
    }

    /**
     * 帐号类型【0个人银行卡，1对公银行卡】
     * @param string $value
     * @return $this
     */
    public function setPartnerAccountType(string $value): self
    {
        $this->partnerAccountType = $value;

        return $this;
    }

    /**
     * 帐号状态【0启用，1停用】
     * @param string $value
     * @return $this
     */
    public function setPartnerAccountStatus(string $value): self
    {
        $this->partnerAccountStatus = $value;

        return $this;
    }

    /**
     * 开户行支行【对公帐号必填】
     * @param string $value
     * @return $this
     */
    public function setPartnerChildBankAddr(string $value): self
    {
        $this->partnerChildBankAddr = $value;

        return $this;
    }

    /**
     * 开户行省
     * @param string $value
     * @return $this
     */
    public function setPartnerProvince(string $value): self
    {
        $this->partnerProvince = $value;

        return $this;
    }

    /**
     * 开户行市
     * @param string $value
     * @return $this
     */
    public function setPartnerCity(string $value): self
    {
        $this->partnerCity = $value;

        return $this;
    }

    /**
     * 开户行区县
     * @param string $value
     * @return $this
     */
    public function setPartnerArea(string $value): self
    {
        $this->partnerArea = $value;

        return $this;
    }

    /**
     * 区域编号
     * @param int $value
     * @return $this
     */
    public function setPartnerAreaCode(int $value): self
    {
        $this->partnerAreaCode = $value;

        return $this;
    }

    /**
     * 银行id
     * @return int
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * 商户id
     * @return mixed
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 姓名/商户公司名称
     * @return string
     */
    public function getPartnerUserName()
    {
        return $this->partnerUserName;
    }

    /**
     * 开户行
     * @return string
     */
    public function getPartnerBankName()
    {
        return $this->partnerBankName;
    }

    /**
     * 银行行号【对公帐号时必填】
     * @return string
     */
    public function getParnterBankNums()
    {
        return $this->parnterBankNums;
    }

    /**
     * 银行卡号
     * @return string
     */
    public function getPartnerBankCode()
    {
        return $this->partnerBankCode;
    }

    /**
     * 手机号
     * @return string
     */
    public function getPartnerUserPhone()
    {
        return $this->partnerUserPhone;
    }

    /**
     * 身份证
     * @return string
     */
    public function getPartnerUserIdent()
    {
        return $this->partnerUserIdent;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * 帐号类型【0个人银行卡，1对公银行卡】
     * @return string
     */
    public function getPartnerAccountType()
    {
        return $this->partnerAccountType;
    }

    /**
     * 帐号状态【0启用，1停用】
     * @return string
     */
    public function getPartnerAccountStatus()
    {
        return $this->partnerAccountStatus;
    }

    /**
     * 开户行支行【对公帐号必填】
     * @return string
     */
    public function getPartnerChildBankAddr()
    {
        return $this->partnerChildBankAddr;
    }

    /**
     * 开户行省
     * @return string
     */
    public function getPartnerProvince()
    {
        return $this->partnerProvince;
    }

    /**
     * 开户行市
     * @return string
     */
    public function getPartnerCity()
    {
        return $this->partnerCity;
    }

    /**
     * 开户行区县
     * @return string
     */
    public function getPartnerArea()
    {
        return $this->partnerArea;
    }

    /**
     * 区域编号
     * @return int
     */
    public function getPartnerAreaCode()
    {
        return $this->partnerAreaCode;
    }

}
