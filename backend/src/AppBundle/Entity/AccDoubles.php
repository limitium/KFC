<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccDoubles
 *
 * @ORM\Table(name="Acc_Doubles")
 * @ORM\Entity
 */
class AccDoubles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RANK", type="bigint", nullable=true)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID_1", type="string", length=1000, nullable=true)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID_2", type="string", length=1000, nullable=true)
     */
    private $accountid2;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;



    /**
     * Set rank
     *
     * @param integer $rank
     * @return AccDoubles
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set accountid1
     *
     * @param string $accountid1
     * @return AccDoubles
     */
    public function setAccountid1($accountid1)
    {
        $this->accountid1 = $accountid1;

        return $this;
    }

    /**
     * Get accountid1
     *
     * @return string 
     */
    public function getAccountid1()
    {
        return $this->accountid1;
    }

    /**
     * Set accountid2
     *
     * @param string $accountid2
     * @return AccDoubles
     */
    public function setAccountid2($accountid2)
    {
        $this->accountid2 = $accountid2;

        return $this;
    }

    /**
     * Get accountid2
     *
     * @return string 
     */
    public function getAccountid2()
    {
        return $this->accountid2;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return AccDoubles
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
