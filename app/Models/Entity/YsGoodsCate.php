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
 * 商品类别

 * @Entity()
 * @Table(name="ys_goods_cate")
 * @uses      YsGoodsCate
 */
class YsGoodsCate extends Model
{
    /**
     * @var int $gcId 
     * @Id()
     * @Column(name="gc_id", type="integer")
     */
    private $gcId;

    /**
     * @var int $gcNode 根节点
     * @Column(name="gc_node", type="integer", default=0)
     */
    private $gcNode;

    /**
     * @var int $adminId 管理员id
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

    /**
     * @var int $pId 产品id【对应信贷系统产品表，一级分类存在】
     * @Column(name="p_id", type="integer")
     */
    private $pId;

    /**
     * @var string $gcName 分类名称
     * @Column(name="gc_name", type="string", length=150)
     * @Required()
     */
    private $gcName;

    /**
     * @var string $gcAddTime 添加时间
     * @Column(name="gc_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gcAddTime;

    /**
     * @var string $gcUpdateTime 更新时间
     * @Column(name="gc_update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gcUpdateTime;

    /**
     * @var string $gcAttribute 分类属性【多属性用逗号隔开】
     * @Column(name="gc_attribute", type="string", length=200, default="")
     */
    private $gcAttribute;

    /**
     * @var string $gcRemark 备注信息
     * @Column(name="gc_remark", type="string", length=500, default="")
     */
    private $gcRemark;

    /**
     * @var string $gcStatus 分类状态【1启用  2停用】
     * @Column(name="gc_status", type="char", length=1, default="1")
     */
    private $gcStatus;

    /**
     * @var int $gcOrder 分类级别
     * @Column(name="gc_order", type="integer", default=1)
     */
    private $gcOrder;

    /**
     * @var int $gcSort 分类排序【数值越大越靠前】
     * @Column(name="gc_sort", type="integer", default=0)
     */
    private $gcSort;

    /**
     * @var string $gcImg 分类图片
     * @Column(name="gc_img", type="string", length=200, default="")
     */
    private $gcImg;

    /**
     * @param int $value
     * @return $this
     */
    public function setGcId(int $value)
    {
        $this->gcId = $value;

        return $this;
    }

    /**
     * 根节点
     * @param int $value
     * @return $this
     */
    public function setGcNode(int $value): self
    {
        $this->gcNode = $value;

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
     * 产品id【对应信贷系统产品表，一级分类存在】
     * @param int $value
     * @return $this
     */
    public function setPId(int $value): self
    {
        $this->pId = $value;

        return $this;
    }

    /**
     * 分类名称
     * @param string $value
     * @return $this
     */
    public function setGcName(string $value): self
    {
        $this->gcName = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param string $value
     * @return $this
     */
    public function setGcAddTime(string $value): self
    {
        $this->gcAddTime = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param string $value
     * @return $this
     */
    public function setGcUpdateTime(string $value): self
    {
        $this->gcUpdateTime = $value;

        return $this;
    }

    /**
     * 分类属性【多属性用逗号隔开】
     * @param string $value
     * @return $this
     */
    public function setGcAttribute(string $value): self
    {
        $this->gcAttribute = $value;

        return $this;
    }

    /**
     * 备注信息
     * @param string $value
     * @return $this
     */
    public function setGcRemark(string $value): self
    {
        $this->gcRemark = $value;

        return $this;
    }

    /**
     * 分类状态【1启用  2停用】
     * @param string $value
     * @return $this
     */
    public function setGcStatus(string $value): self
    {
        $this->gcStatus = $value;

        return $this;
    }

    /**
     * 分类级别
     * @param int $value
     * @return $this
     */
    public function setGcOrder(int $value): self
    {
        $this->gcOrder = $value;

        return $this;
    }

    /**
     * 分类排序【数值越大越靠前】
     * @param int $value
     * @return $this
     */
    public function setGcSort(int $value): self
    {
        $this->gcSort = $value;

        return $this;
    }

    /**
     * 分类图片
     * @param string $value
     * @return $this
     */
    public function setGcImg(string $value): self
    {
        $this->gcImg = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGcId()
    {
        return $this->gcId;
    }

    /**
     * 根节点
     * @return int
     */
    public function getGcNode()
    {
        return $this->gcNode;
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
     * 产品id【对应信贷系统产品表，一级分类存在】
     * @return int
     */
    public function getPId()
    {
        return $this->pId;
    }

    /**
     * 分类名称
     * @return string
     */
    public function getGcName()
    {
        return $this->gcName;
    }

    /**
     * 添加时间
     * @return mixed
     */
    public function getGcAddTime()
    {
        return $this->gcAddTime;
    }

    /**
     * 更新时间
     * @return mixed
     */
    public function getGcUpdateTime()
    {
        return $this->gcUpdateTime;
    }

    /**
     * 分类属性【多属性用逗号隔开】
     * @return string
     */
    public function getGcAttribute()
    {
        return $this->gcAttribute;
    }

    /**
     * 备注信息
     * @return string
     */
    public function getGcRemark()
    {
        return $this->gcRemark;
    }

    /**
     * 分类状态【1启用  2停用】
     * @return mixed
     */
    public function getGcStatus()
    {
        return $this->gcStatus;
    }

    /**
     * 分类级别
     * @return mixed
     */
    public function getGcOrder()
    {
        return $this->gcOrder;
    }

    /**
     * 分类排序【数值越大越靠前】
     * @return int
     */
    public function getGcSort()
    {
        return $this->gcSort;
    }

    /**
     * 分类图片
     * @return string
     */
    public function getGcImg()
    {
        return $this->gcImg;
    }

}
