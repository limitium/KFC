<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccLcs
 *
 * @ORM\Table(name="kf_acc_lcs")
 * @ORM\Entity
 */
class KfAccLcs
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID1", type="string", length=12, nullable=false)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID2", type="string", length=12, nullable=false)
     */
    private $accountid2;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTrus", type="string", length=128, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINPHONE", type="string", length=32, nullable=true)
     */
    private $mainphone;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS", type="string", length=128, nullable=true)
     */
    private $webaddress;



    /**
     * Set accountid1
     *
     * @param string $accountid1
     * @return KfAccLcs
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
     * @return KfAccLcs
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
     * Set account
     *
     * @param string $account
     * @return KfAccLcs
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
     * Set accountrus
     *
     * @param string $accountrus
     * @return KfAccLcs
     */
    public function setAccountrus($accountrus)
    {
        $this->accountrus = $accountrus;

        return $this;
    }

    /**
     * Get accountrus
     *
     * @return string 
     */
    public function getAccountrus()
    {
        return $this->accountrus;
    }

    /**
     * Set mainphone
     *
     * @param string $mainphone
     * @return KfAccLcs
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
     * Set webaddress
     *
     * @param string $webaddress
     * @return KfAccLcs
     */
    public function setWebaddress($webaddress)
    {
        $this->webaddress = $webaddress;

        return $this;
    }

    /**
     * Get webaddress
     *
     * @return string 
     */
    public function getWebaddress()
    {
        return $this->webaddress;
    }
}
