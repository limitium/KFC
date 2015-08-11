<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccDoublesNew
 *
 * @ORM\Table(name="Acc_Doubles_New")
 * @ORM\Entity
 */
class AccDoublesNew
{
    /**
     * @var float
     *
     * @ORM\Column(name="Number", type="float", precision=53, scale=0, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountID1", type="string", length=12, nullable=true)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountID2", type="string", length=12, nullable=true)
     */
    private $accountid2;

    /**
     * @var float
     *
     * @ORM\Column(name="NumAcc", type="float", precision=53, scale=0, nullable=true)
     */
    private $numacc;

    /**
     * @var float
     *
     * @ORM\Column(name="NumWeb", type="float", precision=53, scale=0, nullable=true)
     */
    private $numweb;



    /**
     * Set number
     *
     * @param float $number
     * @return AccDoublesNew
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return float 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set accountid1
     *
     * @param string $accountid1
     * @return AccDoublesNew
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
     * @return AccDoublesNew
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
     * Set numacc
     *
     * @param float $numacc
     * @return AccDoublesNew
     */
    public function setNumacc($numacc)
    {
        $this->numacc = $numacc;

        return $this;
    }

    /**
     * Get numacc
     *
     * @return float 
     */
    public function getNumacc()
    {
        return $this->numacc;
    }

    /**
     * Set numweb
     *
     * @param float $numweb
     * @return AccDoublesNew
     */
    public function setNumweb($numweb)
    {
        $this->numweb = $numweb;

        return $this;
    }

    /**
     * Get numweb
     *
     * @return float 
     */
    public function getNumweb()
    {
        return $this->numweb;
    }
}
