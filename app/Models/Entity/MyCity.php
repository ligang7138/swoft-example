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
 * 省市县

 * @Entity()
 * @Table(name="my_city")
 * @uses      MyCity
 */
class MyCity extends Model
{
    /**
     * @var string $cityId 
     * @Id()
     * @Column(name="city_id", type="string", length=36)
     */
    private $cityId;

    /**
     * @var string $cityName 
     * @Column(name="city_name", type="string", length=128)
     */
    private $cityName;

    /**
     * @var string $cityKey 
     * @Column(name="city_key", type="string", length=64)
     * @Required()
     */
    private $cityKey;

    /**
     * @var string $cityPath 
     * @Column(name="city_path", type="string", length=255)
     * @Required()
     */
    private $cityPath;

    /**
     * @var string $cityPid 
     * @Column(name="city_pid", type="string", length=64)
     * @Required()
     */
    private $cityPid;

    /**
     * @param string $value
     * @return $this
     */
    public function setCityId(string $value)
    {
        $this->cityId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCityName(string $value): self
    {
        $this->cityName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCityKey(string $value): self
    {
        $this->cityKey = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCityPath(string $value): self
    {
        $this->cityPath = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCityPid(string $value): self
    {
        $this->cityPid = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @return string
     */
    public function getCityKey()
    {
        return $this->cityKey;
    }

    /**
     * @return string
     */
    public function getCityPath()
    {
        return $this->cityPath;
    }

    /**
     * @return string
     */
    public function getCityPid()
    {
        return $this->cityPid;
    }

}
