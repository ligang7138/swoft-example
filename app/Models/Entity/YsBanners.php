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
 * 首页banner

 * @Entity()
 * @Table(name="ys_banners")
 * @uses      YsBanners
 */
class YsBanners extends Model
{
    /**
     * @var int $bId 
     * @Id()
     * @Column(name="b_id", type="integer")
     */
    private $bId;

    /**
     * @var string $bTitle 标题
     * @Column(name="b_title", type="string", length=50)
     * @Required()
     */
    private $bTitle;

    /**
     * @var string $bUrl 链接地址
     * @Column(name="b_url", type="string", length=150)
     * @Required()
     */
    private $bUrl;

    /**
     * @var string $bImg 图片路径
     * @Column(name="b_img", type="string", length=300)
     * @Required()
     */
    private $bImg;

    /**
     * @var string $bStatus 状态【0无效，1有效】
     * @Column(name="b_status", type="char", length=1)
     * @Required()
     */
    private $bStatus;

    /**
     * @var int $bOrder 排序
     * @Column(name="b_order", type="integer", default=0)
     */
    private $bOrder;

    /**
     * @var string $bUpdateTime 添加时间
     * @Column(name="b_update_time", type="datetime")
     * @Required()
     */
    private $bUpdateTime;

    /**
     * @var string $bType 广告位分类 1.首页banner
     * @Column(name="b_type", type="char", length=1, default="1")
     */
    private $bType;

    /**
     * @param int $value
     * @return $this
     */
    public function setBId(int $value)
    {
        $this->bId = $value;

        return $this;
    }

    /**
     * 标题
     * @param string $value
     * @return $this
     */
    public function setBTitle(string $value): self
    {
        $this->bTitle = $value;

        return $this;
    }

    /**
     * 链接地址
     * @param string $value
     * @return $this
     */
    public function setBUrl(string $value): self
    {
        $this->bUrl = $value;

        return $this;
    }

    /**
     * 图片路径
     * @param string $value
     * @return $this
     */
    public function setBImg(string $value): self
    {
        $this->bImg = $value;

        return $this;
    }

    /**
     * 状态【0无效，1有效】
     * @param string $value
     * @return $this
     */
    public function setBStatus(string $value): self
    {
        $this->bStatus = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setBOrder(int $value): self
    {
        $this->bOrder = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param string $value
     * @return $this
     */
    public function setBUpdateTime(string $value): self
    {
        $this->bUpdateTime = $value;

        return $this;
    }

    /**
     * 广告位分类 1.首页banner
     * @param string $value
     * @return $this
     */
    public function setBType(string $value): self
    {
        $this->bType = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * 标题
     * @return string
     */
    public function getBTitle()
    {
        return $this->bTitle;
    }

    /**
     * 链接地址
     * @return string
     */
    public function getBUrl()
    {
        return $this->bUrl;
    }

    /**
     * 图片路径
     * @return string
     */
    public function getBImg()
    {
        return $this->bImg;
    }

    /**
     * 状态【0无效，1有效】
     * @return string
     */
    public function getBStatus()
    {
        return $this->bStatus;
    }

    /**
     * 排序
     * @return int
     */
    public function getBOrder()
    {
        return $this->bOrder;
    }

    /**
     * 添加时间
     * @return string
     */
    public function getBUpdateTime()
    {
        return $this->bUpdateTime;
    }

    /**
     * 广告位分类 1.首页banner
     * @return mixed
     */
    public function getBType()
    {
        return $this->bType;
    }

}
