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
 * 商品品牌表

 * @Entity()
 * @Table(name="ys_goods_brand")
 * @uses      YsGoodsBrand
 */
class YsGoodsBrand extends Model
{
    /**
     * @var int $gbId id
     * @Id()
     * @Column(name="gb_id", type="integer")
     */
    private $gbId;

    /**
     * @var string $gbCode 品牌编号
     * @Column(name="gb_code", type="string", length=50)
     * @Required()
     */
    private $gbCode;

    /**
     * @var string $gbName 品牌名称
     * @Column(name="gb_name", type="string", length=100)
     * @Required()
     */
    private $gbName;

    /**
     * @var string $gbMaker 制造商
     * @Column(name="gb_maker", type="string", length=200)
     * @Required()
     */
    private $gbMaker;

    /**
     * @var string $gbAddTime 品牌添加时间
     * @Column(name="gb_add_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $gbAddTime;

    /**
     * @var int $adminId 商户ID
     * @Column(name="admin_id", type="integer")
     * @Required()
     */
    private $adminId;

    /**
     * @var string $gbStatus 品牌状态【1启用  2停用】
     * @Column(name="gb_status", type="char", length=1, default="1")
     */
    private $gbStatus;

    /**
     * id
     * @param int $value
     * @return $this
     */
    public function setGbId(int $value)
    {
        $this->gbId = $value;

        return $this;
    }

    /**
     * 品牌编号
     * @param string $value
     * @return $this
     */
    public function setGbCode(string $value): self
    {
        $this->gbCode = $value;

        return $this;
    }

    /**
     * 品牌名称
     * @param string $value
     * @return $this
     */
    public function setGbName(string $value): self
    {
        $this->gbName = $value;

        return $this;
    }

    /**
     * 制造商
     * @param string $value
     * @return $this
     */
    public function setGbMaker(string $value): self
    {
        $this->gbMaker = $value;

        return $this;
    }

    /**
     * 品牌添加时间
     * @param string $value
     * @return $this
     */
    public function setGbAddTime(string $value): self
    {
        $this->gbAddTime = $value;

        return $this;
    }

    /**
     * 商户ID
     * @param int $value
     * @return $this
     */
    public function setAdminId(int $value): self
    {
        $this->adminId = $value;

        return $this;
    }

    /**
     * 品牌状态【1启用  2停用】
     * @param string $value
     * @return $this
     */
    public function setGbStatus(string $value): self
    {
        $this->gbStatus = $value;

        return $this;
    }

    /**
     * id
     * @return mixed
     */
    public function getGbId()
    {
        return $this->gbId;
    }

    /**
     * 品牌编号
     * @return string
     */
    public function getGbCode()
    {
        return $this->gbCode;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getGbName()
    {
        return $this->gbName;
    }

    /**
     * 制造商
     * @return string
     */
    public function getGbMaker()
    {
        return $this->gbMaker;
    }

    /**
     * 品牌添加时间
     * @return mixed
     */
    public function getGbAddTime()
    {
        return $this->gbAddTime;
    }

    /**
     * 商户ID
     * @return int
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * 品牌状态【1启用  2停用】
     * @return mixed
     */
    public function getGbStatus()
    {
        return $this->gbStatus;
    }

}
