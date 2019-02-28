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
 * 商品规格表

 * @Entity()
 * @Table(name="ys_goods_spec_price")
 * @uses      YsGoodsSpecPrice
 */
class YsGoodsSpecPrice extends Model
{
    /**
     * @var int $gnId id
     * @Id()
     * @Column(name="gn_id", type="integer")
     */
    private $gnId;

    /**
     * @var int $gnSpecType 规格类别【1重量 ，2容量】
     * @Column(name="gn_spec_type", type="integer", default=1)
     */
    private $gnSpecType;

    /**
     * @var string $gnSpecNum 规格值-单位
     * @Column(name="gn_spec_num", type="string", length=50)
     * @Required()
     */
    private $gnSpecNum;

    /**
     * @var float $gnPrice 单价
     * @Column(name="gn_price", type="decimal", default=0)
     */
    private $gnPrice;

    /**
     * @var int $gnStock 剩余库存值
     * @Column(name="gn_stock", type="smallint", default=0)
     */
    private $gnStock;

    /**
     * @var int $gnTotalStock 总库存
     * @Column(name="gn_total_stock", type="smallint", default=0)
     */
    private $gnTotalStock;

    /**
     * @var int $gnStockRemind 库存提醒值
     * @Column(name="gn_stock_remind", type="integer", default=0)
     */
    private $gnStockRemind;

    /**
     * @var string $gnAddTime 添加时间
     * @Column(name="gn_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gnAddTime;

    /**
     * @var string $gnUpdateTime 修改时间
     * @Column(name="gn_update_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gnUpdateTime;

    /**
     * id
     * @param int $value
     * @return $this
     */
    public function setGnId(int $value)
    {
        $this->gnId = $value;

        return $this;
    }

    /**
     * 规格类别【1重量 ，2容量】
     * @param int $value
     * @return $this
     */
    public function setGnSpecType(int $value): self
    {
        $this->gnSpecType = $value;

        return $this;
    }

    /**
     * 规格值-单位
     * @param string $value
     * @return $this
     */
    public function setGnSpecNum(string $value): self
    {
        $this->gnSpecNum = $value;

        return $this;
    }

    /**
     * 单价
     * @param float $value
     * @return $this
     */
    public function setGnPrice(float $value): self
    {
        $this->gnPrice = $value;

        return $this;
    }

    /**
     * 剩余库存值
     * @param int $value
     * @return $this
     */
    public function setGnStock(int $value): self
    {
        $this->gnStock = $value;

        return $this;
    }

    /**
     * 总库存
     * @param int $value
     * @return $this
     */
    public function setGnTotalStock(int $value): self
    {
        $this->gnTotalStock = $value;

        return $this;
    }

    /**
     * 库存提醒值
     * @param int $value
     * @return $this
     */
    public function setGnStockRemind(int $value): self
    {
        $this->gnStockRemind = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param string $value
     * @return $this
     */
    public function setGnAddTime(string $value): self
    {
        $this->gnAddTime = $value;

        return $this;
    }

    /**
     * 修改时间
     * @param string $value
     * @return $this
     */
    public function setGnUpdateTime(string $value): self
    {
        $this->gnUpdateTime = $value;

        return $this;
    }

    /**
     * id
     * @return mixed
     */
    public function getGnId()
    {
        return $this->gnId;
    }

    /**
     * 规格类别【1重量 ，2容量】
     * @return mixed
     */
    public function getGnSpecType()
    {
        return $this->gnSpecType;
    }

    /**
     * 规格值-单位
     * @return string
     */
    public function getGnSpecNum()
    {
        return $this->gnSpecNum;
    }

    /**
     * 单价
     * @return mixed
     */
    public function getGnPrice()
    {
        return $this->gnPrice;
    }

    /**
     * 剩余库存值
     * @return int
     */
    public function getGnStock()
    {
        return $this->gnStock;
    }

    /**
     * 总库存
     * @return int
     */
    public function getGnTotalStock()
    {
        return $this->gnTotalStock;
    }

    /**
     * 库存提醒值
     * @return int
     */
    public function getGnStockRemind()
    {
        return $this->gnStockRemind;
    }

    /**
     * 添加时间
     * @return mixed
     */
    public function getGnAddTime()
    {
        return $this->gnAddTime;
    }

    /**
     * 修改时间
     * @return mixed
     */
    public function getGnUpdateTime()
    {
        return $this->gnUpdateTime;
    }

}
