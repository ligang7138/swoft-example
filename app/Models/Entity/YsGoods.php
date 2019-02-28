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
 * 商品表

 * @Entity()
 * @Table(name="ys_goods")
 * @uses      YsGoods
 */
class YsGoods extends Model
{
    /**
     * @var int $gId 
     * @Id()
     * @Column(name="g_id", type="integer")
     */
    private $gId;

    /**
     * @var string $gCode 商品编号
     * @Column(name="g_code", type="string", length=50)
     * @Required()
     */
    private $gCode;

    /**
     * @var int $gcId 商品类别id[三级分类]
     * @Column(name="gc_id", type="integer")
     * @Required()
     */
    private $gcId;

    /**
     * @var int $adminId 管理员id
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

    /**
     * @var int $partnerId 商户ID
     * @Column(name="partner_id", type="integer")
     * @Required()
     */
    private $partnerId;

    /**
     * @var int $gbId 品牌id
     * @Column(name="gb_id", type="integer")
     */
    private $gbId;

    /**
     * @var string $gName 商品名称
     * @Column(name="g_name", type="string", length=150)
     * @Required()
     */
    private $gName;

    /**
     * @var string $gImgs 商品图片url【多张以逗号相隔】
     * @Column(name="g_imgs", type="string", length=1000)
     */
    private $gImgs;

    /**
     * @var string $gDesc 商品描述
     * @Column(name="g_desc", type="string", length=600)
     * @Required()
     */
    private $gDesc;

    /**
     * @var string $gStandard 商品规格[多规格用逗号隔开]
     * @Column(name="g_standard", type="string", length=150)
     */
    private $gStandard;

    /**
     * @var string $gStatus 商品状态【1待审核，2待上架，3打回，4审核通过自动上架，5上架，6下架，7拒绝】
     * @Column(name="g_status", type="char", length=1, default="1")
     */
    private $gStatus;

    /**
     * @var string $gUpdateTime 商品修改时间
     * @Column(name="g_update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gUpdateTime;

    /**
     * @var string $gAddTime 创建时间
     * @Column(name="g_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gAddTime;

    /**
     * @var string $isJoinActivity 是否参加活动【1参加   2不参加】
     * @Column(name="is_join_activity", type="char", length=1, default="2")
     */
    private $isJoinActivity;

    /**
     * @var string $gAttribute 商品属性【多属性以逗号相隔】
     * @Column(name="g_attribute", type="string", length=300, default="")
     */
    private $gAttribute;

    /**
     * @var int $gOrderNum 单笔订单购买数量
     * @Column(name="g_order_num", type="integer", default=0)
     */
    private $gOrderNum;

    /**
     * @var int $gcTopId 商品分类一级id
     * @Column(name="gc_top_id", type="integer", default=0)
     */
    private $gcTopId;

    /**
     * @var int $gCheckStatus 商品审核状态【1通过，2拒绝，3打回】
     * @Column(name="g_check_status", type="integer")
     */
    private $gCheckStatus;

    /**
     * @var string $gCheckRemark 商品审核意见
     * @Column(name="g_check_remark", type="string", length=200)
     */
    private $gCheckRemark;

    /**
     * @var string $gCheckTime 商品审核时间
     * @Column(name="g_check_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gCheckTime;

    /**
     * @var int $gSort 商品排序
     * @Column(name="g_sort", type="integer", default=0)
     */
    private $gSort;

    /**
     * @param int $value
     * @return $this
     */
    public function setGId(int $value)
    {
        $this->gId = $value;

        return $this;
    }

    /**
     * 商品编号
     * @param string $value
     * @return $this
     */
    public function setGCode(string $value): self
    {
        $this->gCode = $value;

        return $this;
    }

    /**
     * 商品类别id[三级分类]
     * @param int $value
     * @return $this
     */
    public function setGcId(int $value): self
    {
        $this->gcId = $value;

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
     * 商户ID
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 品牌id
     * @param int $value
     * @return $this
     */
    public function setGbId(int $value): self
    {
        $this->gbId = $value;

        return $this;
    }

    /**
     * 商品名称
     * @param string $value
     * @return $this
     */
    public function setGName(string $value): self
    {
        $this->gName = $value;

        return $this;
    }

    /**
     * 商品图片url【多张以逗号相隔】
     * @param string $value
     * @return $this
     */
    public function setGImgs(string $value): self
    {
        $this->gImgs = $value;

        return $this;
    }

    /**
     * 商品描述
     * @param string $value
     * @return $this
     */
    public function setGDesc(string $value): self
    {
        $this->gDesc = $value;

        return $this;
    }

    /**
     * 商品规格[多规格用逗号隔开]
     * @param string $value
     * @return $this
     */
    public function setGStandard(string $value): self
    {
        $this->gStandard = $value;

        return $this;
    }

    /**
     * 商品状态【1待审核，2待上架，3打回，4审核通过自动上架，5上架，6下架，7拒绝】
     * @param string $value
     * @return $this
     */
    public function setGStatus(string $value): self
    {
        $this->gStatus = $value;

        return $this;
    }

    /**
     * 商品修改时间
     * @param string $value
     * @return $this
     */
    public function setGUpdateTime(string $value): self
    {
        $this->gUpdateTime = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setGAddTime(string $value): self
    {
        $this->gAddTime = $value;

        return $this;
    }

    /**
     * 是否参加活动【1参加   2不参加】
     * @param string $value
     * @return $this
     */
    public function setIsJoinActivity(string $value): self
    {
        $this->isJoinActivity = $value;

        return $this;
    }

    /**
     * 商品属性【多属性以逗号相隔】
     * @param string $value
     * @return $this
     */
    public function setGAttribute(string $value): self
    {
        $this->gAttribute = $value;

        return $this;
    }

    /**
     * 单笔订单购买数量
     * @param int $value
     * @return $this
     */
    public function setGOrderNum(int $value): self
    {
        $this->gOrderNum = $value;

        return $this;
    }

    /**
     * 商品分类一级id
     * @param int $value
     * @return $this
     */
    public function setGcTopId(int $value): self
    {
        $this->gcTopId = $value;

        return $this;
    }

    /**
     * 商品审核状态【1通过，2拒绝，3打回】
     * @param int $value
     * @return $this
     */
    public function setGCheckStatus(int $value): self
    {
        $this->gCheckStatus = $value;

        return $this;
    }

    /**
     * 商品审核意见
     * @param string $value
     * @return $this
     */
    public function setGCheckRemark(string $value): self
    {
        $this->gCheckRemark = $value;

        return $this;
    }

    /**
     * 商品审核时间
     * @param string $value
     * @return $this
     */
    public function setGCheckTime(string $value): self
    {
        $this->gCheckTime = $value;

        return $this;
    }

    /**
     * 商品排序
     * @param int $value
     * @return $this
     */
    public function setGSort(int $value): self
    {
        $this->gSort = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGId()
    {
        return $this->gId;
    }

    /**
     * 商品编号
     * @return string
     */
    public function getGCode()
    {
        return $this->gCode;
    }

    /**
     * 商品类别id[三级分类]
     * @return int
     */
    public function getGcId()
    {
        return $this->gcId;
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
     * 商户ID
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 品牌id
     * @return int
     */
    public function getGbId()
    {
        return $this->gbId;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getGName()
    {
        return $this->gName;
    }

    /**
     * 商品图片url【多张以逗号相隔】
     * @return string
     */
    public function getGImgs()
    {
        return $this->gImgs;
    }

    /**
     * 商品描述
     * @return string
     */
    public function getGDesc()
    {
        return $this->gDesc;
    }

    /**
     * 商品规格[多规格用逗号隔开]
     * @return string
     */
    public function getGStandard()
    {
        return $this->gStandard;
    }

    /**
     * 商品状态【1待审核，2待上架，3打回，4审核通过自动上架，5上架，6下架，7拒绝】
     * @return mixed
     */
    public function getGStatus()
    {
        return $this->gStatus;
    }

    /**
     * 商品修改时间
     * @return mixed
     */
    public function getGUpdateTime()
    {
        return $this->gUpdateTime;
    }

    /**
     * 创建时间
     * @return mixed
     */
    public function getGAddTime()
    {
        return $this->gAddTime;
    }

    /**
     * 是否参加活动【1参加   2不参加】
     * @return mixed
     */
    public function getIsJoinActivity()
    {
        return $this->isJoinActivity;
    }

    /**
     * 商品属性【多属性以逗号相隔】
     * @return string
     */
    public function getGAttribute()
    {
        return $this->gAttribute;
    }

    /**
     * 单笔订单购买数量
     * @return int
     */
    public function getGOrderNum()
    {
        return $this->gOrderNum;
    }

    /**
     * 商品分类一级id
     * @return int
     */
    public function getGcTopId()
    {
        return $this->gcTopId;
    }

    /**
     * 商品审核状态【1通过，2拒绝，3打回】
     * @return int
     */
    public function getGCheckStatus()
    {
        return $this->gCheckStatus;
    }

    /**
     * 商品审核意见
     * @return string
     */
    public function getGCheckRemark()
    {
        return $this->gCheckRemark;
    }

    /**
     * 商品审核时间
     * @return mixed
     */
    public function getGCheckTime()
    {
        return $this->gCheckTime;
    }

    /**
     * 商品排序
     * @return int
     */
    public function getGSort()
    {
        return $this->gSort;
    }

}
