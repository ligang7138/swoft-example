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
 * @Table(name="ys_collect_partners")
 * @uses      YsCollectPartners
 */
class YsCollectPartners extends Model
{
    /**
     * @var int $cpId 
     * @Id()
     * @Column(name="cp_id", type="integer")
     */
    private $cpId;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=45)
     * @Required()
     */
    private $uCode;

    /**
     * @var int $partnerId 商户id
     * @Column(name="partner_id", type="integer")
     * @Required()
     */
    private $partnerId;

    /**
     * @var string $collectTime 收藏时间
     * @Column(name="collect_time", type="datetime")
     * @Required()
     */
    private $collectTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setCpId(int $value)
    {
        $this->cpId = $value;

        return $this;
    }

    /**
     * 用户code
     * @param string $value
     * @return $this
     */
    public function setUCode(string $value): self
    {
        $this->uCode = $value;

        return $this;
    }

    /**
     * 商户id
     * @param int $value
     * @return $this
     */
    public function setPartnerId(int $value): self
    {
        $this->partnerId = $value;

        return $this;
    }

    /**
     * 收藏时间
     * @param string $value
     * @return $this
     */
    public function setCollectTime(string $value): self
    {
        $this->collectTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpId()
    {
        return $this->cpId;
    }

    /**
     * 用户code
     * @return string
     */
    public function getUCode()
    {
        return $this->uCode;
    }

    /**
     * 商户id
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * 收藏时间
     * @return string
     */
    public function getCollectTime()
    {
        return $this->collectTime;
    }

}
