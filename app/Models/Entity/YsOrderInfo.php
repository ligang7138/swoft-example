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
 * 订单明细表

 * @Entity()
 * @Table(name="ys_order_info")
 * @uses      YsOrderInfo
 */
class YsOrderInfo extends Model
{
    /**
     * @var int $orderId 
     * @Column(name="order_id", type="integer")
     * @Required()
     */
    private $orderId;

    /**
     * @var int $gId 商品id
     * @Column(name="g_id", type="integer")
     * @Required()
     */
    private $gId;

    /**
     * @var int $gnId 商品规格
     * @Column(name="gn_id", type="integer")
     * @Required()
     */
    private $gnId;

    /**
     * @var int $orderGoodsNums 产品数量
     * @Column(name="order_goods_nums", type="smallint", default=1)
     */
    private $orderGoodsNums;

    /**
     * @var float $goodsUnitPrice 商品单价
     * @Column(name="goods_unit_price", type="decimal", default=0)
     */
    private $goodsUnitPrice;

    /**
     * @var int $oiId 
     * @Id()
     * @Column(name="oi_id", type="integer")
     */
    private $oiId;

    /**
     * @param int $value
     * @return $this
     */
    public function setOrderId(int $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 商品id
     * @param int $value
     * @return $this
     */
    public function setGId(int $value): self
    {
        $this->gId = $value;

        return $this;
    }

    /**
     * 商品规格
     * @param int $value
     * @return $this
     */
    public function setGnId(int $value): self
    {
        $this->gnId = $value;

        return $this;
    }

    /**
     * 产品数量
     * @param int $value
     * @return $this
     */
    public function setOrderGoodsNums(int $value): self
    {
        $this->orderGoodsNums = $value;

        return $this;
    }

    /**
     * 商品单价
     * @param float $value
     * @return $this
     */
    public function setGoodsUnitPrice(float $value): self
    {
        $this->goodsUnitPrice = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setOiId(int $value)
    {
        $this->oiId = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 商品id
     * @return int
     */
    public function getGId()
    {
        return $this->gId;
    }

    /**
     * 商品规格
     * @return int
     */
    public function getGnId()
    {
        return $this->gnId;
    }

    /**
     * 产品数量
     * @return mixed
     */
    public function getOrderGoodsNums()
    {
        return $this->orderGoodsNums;
    }

    /**
     * 商品单价
     * @return mixed
     */
    public function getGoodsUnitPrice()
    {
        return $this->goodsUnitPrice;
    }

    /**
     * @return mixed
     */
    public function getOiId()
    {
        return $this->oiId;
    }

}
