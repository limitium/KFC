<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCurrencyRates
 *
 * @ORM\Table(name="KF_CURRENCY_RATES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CURRENCY_RATES_PRIMARY", columns={"KF_CURRENCY_RATESID"})}, indexes={@ORM\Index(name="KF_SR_IX_createDatecmp", columns={"CREATEDATE_cmp"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_5_567009101__K6_3_7", columns={"CURRENCY", "CREATEDATE", "CUR_VALUE"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_c_5_567009101__K6", columns={"CURRENCY"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_5_567009101__K6_7", columns={"CURRENCY", "CUR_VALUE"}), @ORM\Index(name="KF_SR_IX_CREATEDATE", columns={"CREATEDATE"})})
 * @ORM\Entity
 */
class KfCurrencyRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CURRENCY_RATESID", type="string", length=12, nullable=false)
     */
    private $kfCurrencyRatesid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=16, nullable=true)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="CUR_VALUE", type="float", precision=53, scale=0, nullable=true)
     */
    private $curValue;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEDATE_cmp", type="string", length=10, nullable=true)
     */
    private $createdateCmp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CUR_DATE", type="datetime", nullable=true)
     */
    private $curDate;



    /**
     * Set kfCurrencyRatesid
     *
     * @param string $kfCurrencyRatesid
     * @return KfCurrencyRates
     */
    public function setKfCurrencyRatesid($kfCurrencyRatesid)
    {
        $this->kfCurrencyRatesid = $kfCurrencyRatesid;

        return $this;
    }

    /**
     * Get kfCurrencyRatesid
     *
     * @return string 
     */
    public function getKfCurrencyRatesid()
    {
        return $this->kfCurrencyRatesid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfCurrencyRates
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfCurrencyRates
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfCurrencyRates
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfCurrencyRates
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return KfCurrencyRates
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set curValue
     *
     * @param float $curValue
     * @return KfCurrencyRates
     */
    public function setCurValue($curValue)
    {
        $this->curValue = $curValue;

        return $this;
    }

    /**
     * Get curValue
     *
     * @return float 
     */
    public function getCurValue()
    {
        return $this->curValue;
    }

    /**
     * Set createdateCmp
     *
     * @param string $createdateCmp
     * @return KfCurrencyRates
     */
    public function setCreatedateCmp($createdateCmp)
    {
        $this->createdateCmp = $createdateCmp;

        return $this;
    }

    /**
     * Get createdateCmp
     *
     * @return string 
     */
    public function getCreatedateCmp()
    {
        return $this->createdateCmp;
    }

    /**
     * Set curDate
     *
     * @param \DateTime $curDate
     * @return KfCurrencyRates
     */
    public function setCurDate($curDate)
    {
        $this->curDate = $curDate;

        return $this;
    }

    /**
     * Get curDate
     *
     * @return \DateTime 
     */
    public function getCurDate()
    {
        return $this->curDate;
    }
}
