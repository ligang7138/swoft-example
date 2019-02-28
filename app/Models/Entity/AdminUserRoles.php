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
 * admin角色

 * @Entity()
 * @Table(name="admin_user_roles")
 * @uses      AdminUserRoles
 */
class AdminUserRoles extends Model
{
    /**
     * @var int $aurId 
     * @Id()
     * @Column(name="aur_id", type="integer")
     */
    private $aurId;

    /**
     * @var string $aurName 角色名称
     * @Column(name="aur_name", type="string", length=30)
     * @Required()
     */
    private $aurName;

    /**
     * @var string $aurRoleList 权限集合
     * @Column(name="aur_role_list", type="string", length=1000)
     * @Required()
     */
    private $aurRoleList;

    /**
     * @var string $urMenus 菜单集
     * @Column(name="ur_menus", type="string", length=1000)
     */
    private $urMenus;

    /**
     * @var string $aurHomeUrl 角色首页地址
     * @Column(name="aur_home_url", type="string", length=150)
     * @Required()
     */
    private $aurHomeUrl;

    /**
     * @param int $value
     * @return $this
     */
    public function setAurId(int $value)
    {
        $this->aurId = $value;

        return $this;
    }

    /**
     * 角色名称
     * @param string $value
     * @return $this
     */
    public function setAurName(string $value): self
    {
        $this->aurName = $value;

        return $this;
    }

    /**
     * 权限集合
     * @param string $value
     * @return $this
     */
    public function setAurRoleList(string $value): self
    {
        $this->aurRoleList = $value;

        return $this;
    }

    /**
     * 菜单集
     * @param string $value
     * @return $this
     */
    public function setUrMenus(string $value): self
    {
        $this->urMenus = $value;

        return $this;
    }

    /**
     * 角色首页地址
     * @param string $value
     * @return $this
     */
    public function setAurHomeUrl(string $value): self
    {
        $this->aurHomeUrl = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAurId()
    {
        return $this->aurId;
    }

    /**
     * 角色名称
     * @return string
     */
    public function getAurName()
    {
        return $this->aurName;
    }

    /**
     * 权限集合
     * @return string
     */
    public function getAurRoleList()
    {
        return $this->aurRoleList;
    }

    /**
     * 菜单集
     * @return string
     */
    public function getUrMenus()
    {
        return $this->urMenus;
    }

    /**
     * 角色首页地址
     * @return string
     */
    public function getAurHomeUrl()
    {
        return $this->aurHomeUrl;
    }

}
