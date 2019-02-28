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
 * admin用户详情表

 * @Entity()
 * @Table(name="admin_user_info")
 * @uses      AdminUserInfo
 */
class AdminUserInfo extends Model
{
    /**
     * @var int $aId 
     * @Column(name="a_id", type="integer")
     * @Required()
     */
    private $aId;

    /**
     * @var string $aTrueName '姓名'
     * @Column(name="a_true_name", type="string", length=45, default="")
     */
    private $aTrueName;

    /**
     * @var string $aIdentNo '身份证'
     * @Column(name="a_ident_no", type="string", length=20, default="")
     */
    private $aIdentNo;

    /**
     * @var string $aPhone '手机号'
     * @Column(name="a_phone", type="string", length=20, default="")
     */
    private $aPhone;

    /**
     * @var string $aCityId 所属营业部城市
     * @Column(name="a_city_id", type="string", length=50, default="")
     */
    private $aCityId;

    /**
     * @var int $aiId 
     * @Id()
     * @Column(name="ai_id", type="integer")
     */
    private $aiId;

    /**
     * @var string $aiType 管理员对应项目【对应多个项目用英文逗号分隔开】
     * @Column(name="ai_type", type="string", length=45)
     */
    private $aiType;

    /**
     * @var string $aiServiceNo 服务编号
     * @Column(name="ai_service_no", type="string", length=15)
     */
    private $aiServiceNo;

    /**
     * @var string $aiEmail 邮件地址
     * @Column(name="ai_email", type="string", length=60)
     * @Required()
     */
    private $aiEmail;

    /**
     * @var string $aOpenBankName 开户行
     * @Column(name="a_open_bank_name", type="string", length=30, default="")
     */
    private $aOpenBankName;

    /**
     * @var string $aCardNo 银行卡
     * @Column(name="a_card_no", type="string", length=30, default="")
     */
    private $aCardNo;

    /**
     * @var string $aLiveAddress 居住地址（省市县）
     * @Column(name="a_live_address", type="string", length=100, default="")
     */
    private $aLiveAddress;

    /**
     * @var int $aProvince 商户省份
     * @Column(name="a_province", type="integer", default=0)
     */
    private $aProvince;

    /**
     * @var int $aCity 商户市
     * @Column(name="a_city", type="integer", default=0)
     */
    private $aCity;

    /**
     * @var int $aCounty 商户县
     * @Column(name="a_county", type="integer", default=0)
     */
    private $aCounty;

    /**
     * @var string $aDetailAddress 详细地址
     * @Column(name="a_detail_address", type="string", length=100, default="")
     */
    private $aDetailAddress;

    /**
     * @var string $aHomePhone 住宅电话
     * @Column(name="a_home_phone", type="string", length=20, default="")
     */
    private $aHomePhone;

    /**
     * @var string $aMaritalStatus 婚姻状况 10 : "未婚", 20 : "已婚", 30 : "丧偶", 40 : "离异"
     * @Column(name="a_marital_status", type="char", length=3, default="10")
     */
    private $aMaritalStatus;

    /**
     * @var string $aDegree 教育程度 10 : 研究生及以上, 20 : 本科,30 : 专科,40 : 中等技术学校,50 : 技术学校, 60 : 高中,70 : 初中,80 : 小学,90 : 小学及以下
     * @Column(name="a_degree", type="char", length=3, default="")
     */
    private $aDegree;

    /**
     * @var string $togetherLivePerson 共同居住人
     * @Column(name="together_live_person", type="string", length=50, default="")
     */
    private $togetherLivePerson;

    /**
     * @var string $aBankBranchCode 支行行号
     * @Column(name="a_bank_branch_code", type="string", length=30, default="")
     */
    private $aBankBranchCode;

    /**
     * @var string $aBankBranchName 支行名
     * @Column(name="a_bank_branch_name", type="string", length=30, default="")
     */
    private $aBankBranchName;

    /**
     * @param int $value
     * @return $this
     */
    public function setAId(int $value): self
    {
        $this->aId = $value;

        return $this;
    }

    /**
     * '姓名'
     * @param string $value
     * @return $this
     */
    public function setATrueName(string $value): self
    {
        $this->aTrueName = $value;

        return $this;
    }

    /**
     * '身份证'
     * @param string $value
     * @return $this
     */
    public function setAIdentNo(string $value): self
    {
        $this->aIdentNo = $value;

        return $this;
    }

    /**
     * '手机号'
     * @param string $value
     * @return $this
     */
    public function setAPhone(string $value): self
    {
        $this->aPhone = $value;

        return $this;
    }

    /**
     * 所属营业部城市
     * @param string $value
     * @return $this
     */
    public function setACityId(string $value): self
    {
        $this->aCityId = $value;

        return $this;
    }

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
     * 管理员对应项目【对应多个项目用英文逗号分隔开】
     * @param string $value
     * @return $this
     */
    public function setAiType(string $value): self
    {
        $this->aiType = $value;

        return $this;
    }

    /**
     * 服务编号
     * @param string $value
     * @return $this
     */
    public function setAiServiceNo(string $value): self
    {
        $this->aiServiceNo = $value;

        return $this;
    }

    /**
     * 邮件地址
     * @param string $value
     * @return $this
     */
    public function setAiEmail(string $value): self
    {
        $this->aiEmail = $value;

        return $this;
    }

    /**
     * 开户行
     * @param string $value
     * @return $this
     */
    public function setAOpenBankName(string $value): self
    {
        $this->aOpenBankName = $value;

        return $this;
    }

    /**
     * 银行卡
     * @param string $value
     * @return $this
     */
    public function setACardNo(string $value): self
    {
        $this->aCardNo = $value;

        return $this;
    }

    /**
     * 居住地址（省市县）
     * @param string $value
     * @return $this
     */
    public function setALiveAddress(string $value): self
    {
        $this->aLiveAddress = $value;

        return $this;
    }

    /**
     * 商户省份
     * @param int $value
     * @return $this
     */
    public function setAProvince(int $value): self
    {
        $this->aProvince = $value;

        return $this;
    }

    /**
     * 商户市
     * @param int $value
     * @return $this
     */
    public function setACity(int $value): self
    {
        $this->aCity = $value;

        return $this;
    }

    /**
     * 商户县
     * @param int $value
     * @return $this
     */
    public function setACounty(int $value): self
    {
        $this->aCounty = $value;

        return $this;
    }

    /**
     * 详细地址
     * @param string $value
     * @return $this
     */
    public function setADetailAddress(string $value): self
    {
        $this->aDetailAddress = $value;

        return $this;
    }

    /**
     * 住宅电话
     * @param string $value
     * @return $this
     */
    public function setAHomePhone(string $value): self
    {
        $this->aHomePhone = $value;

        return $this;
    }

    /**
     * 婚姻状况 10 : "未婚", 20 : "已婚", 30 : "丧偶", 40 : "离异"
     * @param string $value
     * @return $this
     */
    public function setAMaritalStatus(string $value): self
    {
        $this->aMaritalStatus = $value;

        return $this;
    }

    /**
     * 教育程度 10 : 研究生及以上, 20 : 本科,30 : 专科,40 : 中等技术学校,50 : 技术学校, 60 : 高中,70 : 初中,80 : 小学,90 : 小学及以下
     * @param string $value
     * @return $this
     */
    public function setADegree(string $value): self
    {
        $this->aDegree = $value;

        return $this;
    }

    /**
     * 共同居住人
     * @param string $value
     * @return $this
     */
    public function setTogetherLivePerson(string $value): self
    {
        $this->togetherLivePerson = $value;

        return $this;
    }

    /**
     * 支行行号
     * @param string $value
     * @return $this
     */
    public function setABankBranchCode(string $value): self
    {
        $this->aBankBranchCode = $value;

        return $this;
    }

    /**
     * 支行名
     * @param string $value
     * @return $this
     */
    public function setABankBranchName(string $value): self
    {
        $this->aBankBranchName = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * '姓名'
     * @return string
     */
    public function getATrueName()
    {
        return $this->aTrueName;
    }

    /**
     * '身份证'
     * @return string
     */
    public function getAIdentNo()
    {
        return $this->aIdentNo;
    }

    /**
     * '手机号'
     * @return string
     */
    public function getAPhone()
    {
        return $this->aPhone;
    }

    /**
     * 所属营业部城市
     * @return string
     */
    public function getACityId()
    {
        return $this->aCityId;
    }

    /**
     * @return mixed
     */
    public function getAiId()
    {
        return $this->aiId;
    }

    /**
     * 管理员对应项目【对应多个项目用英文逗号分隔开】
     * @return string
     */
    public function getAiType()
    {
        return $this->aiType;
    }

    /**
     * 服务编号
     * @return string
     */
    public function getAiServiceNo()
    {
        return $this->aiServiceNo;
    }

    /**
     * 邮件地址
     * @return string
     */
    public function getAiEmail()
    {
        return $this->aiEmail;
    }

    /**
     * 开户行
     * @return string
     */
    public function getAOpenBankName()
    {
        return $this->aOpenBankName;
    }

    /**
     * 银行卡
     * @return string
     */
    public function getACardNo()
    {
        return $this->aCardNo;
    }

    /**
     * 居住地址（省市县）
     * @return string
     */
    public function getALiveAddress()
    {
        return $this->aLiveAddress;
    }

    /**
     * 商户省份
     * @return int
     */
    public function getAProvince()
    {
        return $this->aProvince;
    }

    /**
     * 商户市
     * @return int
     */
    public function getACity()
    {
        return $this->aCity;
    }

    /**
     * 商户县
     * @return int
     */
    public function getACounty()
    {
        return $this->aCounty;
    }

    /**
     * 详细地址
     * @return string
     */
    public function getADetailAddress()
    {
        return $this->aDetailAddress;
    }

    /**
     * 住宅电话
     * @return string
     */
    public function getAHomePhone()
    {
        return $this->aHomePhone;
    }

    /**
     * 婚姻状况 10 : "未婚", 20 : "已婚", 30 : "丧偶", 40 : "离异"
     * @return mixed
     */
    public function getAMaritalStatus()
    {
        return $this->aMaritalStatus;
    }

    /**
     * 教育程度 10 : 研究生及以上, 20 : 本科,30 : 专科,40 : 中等技术学校,50 : 技术学校, 60 : 高中,70 : 初中,80 : 小学,90 : 小学及以下
     * @return string
     */
    public function getADegree()
    {
        return $this->aDegree;
    }

    /**
     * 共同居住人
     * @return string
     */
    public function getTogetherLivePerson()
    {
        return $this->togetherLivePerson;
    }

    /**
     * 支行行号
     * @return string
     */
    public function getABankBranchCode()
    {
        return $this->aBankBranchCode;
    }

    /**
     * 支行名
     * @return string
     */
    public function getABankBranchName()
    {
        return $this->aBankBranchName;
    }

}
