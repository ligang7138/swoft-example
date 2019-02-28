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
 * 用户消息中间表

 * @Entity()
 * @Table(name="ys_user_message")
 * @uses      YsUserMessage
 */
class YsUserMessage extends Model
{
    /**
     * @var int $id 主键id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $uCode 用户code或商户admin_id
     * @Column(name="u_code", type="string", length=45, default="")
     */
    private $uCode;

    /**
     * @var int $msgId 消息id
     * @Column(name="msg_id", type="integer", default=0)
     */
    private $msgId;

    /**
     * @var string $readStatus 是否已读 0.未读 1.已读
     * @Column(name="read_status", type="char", length=1, default="0")
     */
    private $readStatus;

    /**
     * @var string $isDel 是否删除 1.没删除 2.删除
     * @Column(name="is_del", type="char", length=1, default="1")
     */
    private $isDel;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="datetime", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * 主键id
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 用户code或商户admin_id
     * @param string $value
     * @return $this
     */
    public function setUCode(string $value): self
    {
        $this->uCode = $value;

        return $this;
    }

    /**
     * 消息id
     * @param int $value
     * @return $this
     */
    public function setMsgId(int $value): self
    {
        $this->msgId = $value;

        return $this;
    }

    /**
     * 是否已读 0.未读 1.已读
     * @param string $value
     * @return $this
     */
    public function setReadStatus(string $value): self
    {
        $this->readStatus = $value;

        return $this;
    }

    /**
     * 是否删除 1.没删除 2.删除
     * @param string $value
     * @return $this
     */
    public function setIsDel(string $value): self
    {
        $this->isDel = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 主键id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 用户code或商户admin_id
     * @return string
     */
    public function getUCode()
    {
        return $this->uCode;
    }

    /**
     * 消息id
     * @return int
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * 是否已读 0.未读 1.已读
     * @return string
     */
    public function getReadStatus()
    {
        return $this->readStatus;
    }

    /**
     * 是否删除 1.没删除 2.删除
     * @return mixed
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * 创建时间
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

}
