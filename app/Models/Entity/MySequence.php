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
 * @Table(name="my_sequence")
 * @uses      MySequence
 */
class MySequence extends Model
{
    /**
     * @var string $seqName 
     * @Id()
     * @Column(name="seq_name", type="string", length=50)
     */
    private $seqName;

    /**
     * @var int $currentVal 
     * @Column(name="current_val", type="integer", default=10000)
     */
    private $currentVal;

    /**
     * @var int $incrementVal 
     * @Column(name="increment_val", type="integer", default=1)
     */
    private $incrementVal;

    /**
     * @param string $value
     * @return $this
     */
    public function setSeqName(string $value)
    {
        $this->seqName = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCurrentVal(int $value): self
    {
        $this->currentVal = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setIncrementVal(int $value): self
    {
        $this->incrementVal = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeqName()
    {
        return $this->seqName;
    }

    /**
     * @return mixed
     */
    public function getCurrentVal()
    {
        return $this->currentVal;
    }

    /**
     * @return mixed
     */
    public function getIncrementVal()
    {
        return $this->incrementVal;
    }

}
