<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccTop100
 *
 * @ORM\Table(name="kf_acc_top_100")
 * @ORM\Entity
 */
class KfAccTop100
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="a3_city", type="string", length=32, nullable=true)
     */
    private $a3City;

    /**
     * @var string
     *
     * @ORM\Column(name="a3_address3", type="string", length=128, nullable=true)
     */
    private $a3Address3;

    /**
     * @var string
     *
     * @ORM\Column(name="mainphone", type="string", length=32, nullable=true)
     */
    private $mainphone;

    /**
     * @var string
     *
     * @ORM\Column(name="a4_revenue", type="string", length=1000, nullable=true)
     */
    private $a4Revenue;

    /**
     * @var string
     *
     * @ORM\Column(name="a5_val", type="string", length=128, nullable=true)
     */
    private $a5Val;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=131, nullable=true)
     */
    private $industry;



    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfAccTop100
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return KfAccTop100
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set a3City
     *
     * @param string $a3City
     * @return KfAccTop100
     */
    public function setA3City($a3City)
    {
        $this->a3City = $a3City;

        return $this;
    }

    /**
     * Get a3City
     *
     * @return string 
     */
    public function getA3City()
    {
        return $this->a3City;
    }

    /**
     * Set a3Address3
     *
     * @param string $a3Address3
     * @return KfAccTop100
     */
    public function setA3Address3($a3Address3)
    {
        $this->a3Address3 = $a3Address3;

        return $this;
    }

    /**
     * Get a3Address3
     *
     * @return string 
     */
    public function getA3Address3()
    {
        return $this->a3Address3;
    }

    /**
     * Set mainphone
     *
     * @param string $mainphone
     * @return KfAccTop100
     */
    public function setMainphone($mainphone)
    {
        $this->mainphone = $mainphone;

        return $this;
    }

    /**
     * Get mainphone
     *
     * @return string 
     */
    public function getMainphone()
    {
        return $this->mainphone;
    }

    /**
     * Set a4Revenue
     *
     * @param string $a4Revenue
     * @return KfAccTop100
     */
    public function setA4Revenue($a4Revenue)
    {
        $this->a4Revenue = $a4Revenue;

        return $this;
    }

    /**
     * Get a4Revenue
     *
     * @return string 
     */
    public function getA4Revenue()
    {
        return $this->a4Revenue;
    }

    /**
     * Set a5Val
     *
     * @param string $a5Val
     * @return KfAccTop100
     */
    public function setA5Val($a5Val)
    {
        $this->a5Val = $a5Val;

        return $this;
    }

    /**
     * Get a5Val
     *
     * @return string 
     */
    public function getA5Val()
    {
        return $this->a5Val;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return KfAccTop100
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }
}
