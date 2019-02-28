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
 * 消息

 * @Entity()
 * @Table(name="ys_message")
 * @uses      YsMessage
 */
class YsMessage extends Model
{
    /**
     * @var int $msgId 
     * @Id()
     * @Column(name="msg_id", type="integer")
     */
    private $msgId;

    /**
     * @var int $adminId 管理员id
     * @Column(name="admin_id", type="integer")
     */
    private $adminId;

    /**
     * @var string $uCode 用户code
     * @Column(name="u_code", type="string", length=25)
     */
    private $uCode;

    /**
     * @var string $msgTitle 消息标题
     * @Column(name="msg_title", type="string", length=60)
     * @Required()
     */
    private $msgTitle;

    /**
     * @var string $msgContent 消息内容
     * @Column(name="msg_content", type="string", length=1500)
     * @Required()
     */
    private $msgContent;

    /**
     * @var string $msgAddTime 添加时间
     * @Column(name="msg_add_time", type="datetime")
     * @Required()
     */
    private $msgAddTime;

    /**
     * @var string $msgStatus 消息状态【0未读，1已读】
     * @Column(name="msg_status", type="char", length=1, default="0")
     */
    private $msgStatus;

    /**
     * @var string $msgSendStatus 消息发布状态 1:未发布 2:已发布
     * @Column(name="msg_send_status", type="char", length=1, default="1")
     */
    private $msgSendStatus;

    /**
     * @var string $msgSendType 消息来源 1:系统自动生成 2:后台手动生成 3:群发生成消息
     * @Column(name="msg_send_type", type="char", length=1, default="1")
     */
    private $msgSendType;

    /**
     * @var string $msgType 消息类别【1系统消息，2订单消息,3运营消息】
     * @Column(name="msg_type", type="string", length=1, default="1")
     */
    private $msgType;

    /**
     * @var string $msgSysType 平台类型【1所有，2APP，3商 户】
     * @Column(name="msg_sys_type", type="char", length=1, default="1")
     */
    private $msgSysType;

    /**
     * @var string $isBounce 是否弹框 1.不弹 2.弹
     * @Column(name="is_bounce", type="char", length=1, default="1")
     */
    private $isBounce;

    /**
     * @var int $publisherId 发布人id
     * @Column(name="publisher_id", type="integer", default=0)
     */
    private $publisherId;

    /**
     * @param int $value
     * @return $this
     */
    public function setMsgId(int $value)
    {
        $this->msgId = $value;

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
     * 消息标题
     * @param string $value
     * @return $this
     */
    public function setMsgTitle(string $value): self
    {
        $this->msgTitle = $value;

        return $this;
    }

    /**
     * 消息内容
     * @param string $value
     * @return $this
     */
    public function setMsgContent(string $value): self
    {
        $this->msgContent = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param string $value
     * @return $this
     */
    public function setMsgAddTime(string $value): self
    {
        $this->msgAddTime = $value;

        return $this;
    }

    /**
     * 消息状态【0未读，1已读】
     * @param string $value
     * @return $this
     */
    public function setMsgStatus(string $value): self
    {
        $this->msgStatus = $value;

        return $this;
    }

    /**
     * 消息发布状态 1:未发布 2:已发布
     * @param string $value
     * @return $this
     */
    public function setMsgSendStatus(string $value): self
    {
        $this->msgSendStatus = $value;

        return $this;
    }

    /**
     * 消息来源 1:系统自动生成 2:后台手动生成 3:群发生成消息
     * @param string $value
     * @return $this
     */
    public function setMsgSendType(string $value): self
    {
        $this->msgSendType = $value;

        return $this;
    }

    /**
     * 消息类别【1系统消息，2订单消息,3运营消息】
     * @param string $value
     * @return $this
     */
    public function setMsgType(string $value): self
    {
        $this->msgType = $value;

        return $this;
    }

    /**
     * 平台类型【1所有，2APP，3商 户】
     * @param string $value
     * @return $this
     */
    public function setMsgSysType(string $value): self
    {
        $this->msgSysType = $value;

        return $this;
    }

    /**
     * 是否弹框 1.不弹 2.弹
     * @param string $value
     * @return $this
     */
    public function setIsBounce(string $value): self
    {
        $this->isBounce = $value;

        return $this;
    }

    /**
     * 发布人id
     * @param int $value
     * @return $this
     */
    public function setPublisherId(int $value): self
    {
        $this->publisherId = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMsgId()
    {
        return $this->msgId;
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
     * 用户code
     * @return string
     */
    public function getUCode()
    {
        return $this->uCode;
    }

    /**
     * 消息标题
     * @return string
     */
    public function getMsgTitle()
    {
        return $this->msgTitle;
    }

    /**
     * 消息内容
     * @return string
     */
    public function getMsgContent()
    {
        return $this->msgContent;
    }

    /**
     * 添加时间
     * @return string
     */
    public function getMsgAddTime()
    {
        return $this->msgAddTime;
    }

    /**
     * 消息状态【0未读，1已读】
     * @return string
     */
    public function getMsgStatus()
    {
        return $this->msgStatus;
    }

    /**
     * 消息发布状态 1:未发布 2:已发布
     * @return mixed
     */
    public function getMsgSendStatus()
    {
        return $this->msgSendStatus;
    }

    /**
     * 消息来源 1:系统自动生成 2:后台手动生成 3:群发生成消息
     * @return mixed
     */
    public function getMsgSendType()
    {
        return $this->msgSendType;
    }

    /**
     * 消息类别【1系统消息，2订单消息,3运营消息】
     * @return mixed
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * 平台类型【1所有，2APP，3商 户】
     * @return mixed
     */
    public function getMsgSysType()
    {
        return $this->msgSysType;
    }

    /**
     * 是否弹框 1.不弹 2.弹
     * @return mixed
     */
    public function getIsBounce()
    {
        return $this->isBounce;
    }

    /**
     * 发布人id
     * @return int
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

}
