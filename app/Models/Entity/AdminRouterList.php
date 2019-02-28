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
 * 路由列表

 * @Entity()
 * @Table(name="admin_router_list")
 * @uses      AdminRouterList
 */
class AdminRouterList extends Model
{
    /**
     * @var int $rId 
     * @Id()
     * @Column(name="r_id", type="integer")
     */
    private $rId;

    /**
     * @var string $rName 路由名称
     * @Column(name="r_name", type="string", length=100)
     * @Required()
     */
    private $rName;

    /**
     * @var string $rTitle 路由标题名
     * @Column(name="r_title", type="string", length=60)
     * @Required()
     */
    private $rTitle;

    /**
     * @param int $value
     * @return $this
     */
    public function setRId(int $value)
    {
        $this->rId = $value;

        return $this;
    }

    /**
     * 路由名称
     * @param string $value
     * @return $this
     */
    public function setRName(string $value): self
    {
        $this->rName = $value;

        return $this;
    }

    /**
     * 路由标题名
     * @param string $value
     * @return $this
     */
    public function setRTitle(string $value): self
    {
        $this->rTitle = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRId()
    {
        return $this->rId;
    }

    /**
     * 路由名称
     * @return string
     */
    public function getRName()
    {
        return $this->rName;
    }

    /**
     * 路由标题名
     * @return string
     */
    public function getRTitle()
    {
        return $this->rTitle;
    }

}
