<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfExchangeRates
 *
 * @ORM\Table(name="KF_EXCHANGE_RATES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_EXCHANGE_RATES_PRIMARY", columns={"KF_EXCHANGE_RATESID"})})
 * @ORM\Entity
 */
class KfExchangeRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_EXCHANGE_RATESID", type="string", length=12, nullable=false)
     */
    private $kfExchangeRatesid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="RATE_DATE", type="datetime", nullable=true)
     */
    private $rateDate;

    /**
     * @var float
     *
     * @ORM\Column(name="RATE_VALUE", type="float", precision=53, scale=0, nullable=true)
     */
    private $rateValue;



    /**
     * Set kfExchangeRatesid
     *
     * @param string $kfExchangeRatesid
     * @return KfExchangeRates
     */
    public function setKfExchangeRatesid($kfExchangeRatesid)
    {
        $this->kfExchangeRatesid = $kfExchangeRatesid;

        return $this;
    }

    /**
     * Get kfExchangeRatesid
     *
     * @return string 
     */
    public function getKfExchangeRatesid()
    {
        return $this->kfExchangeRatesid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfExchangeRates
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
     * @return KfExchangeRates
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
     * @return KfExchangeRates
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
     * @return KfExchangeRates
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
     * Set rateDate
     *
     * @param \DateTime $rateDate
     * @return KfExchangeRates
     */
    public function setRateDate($rateDate)
    {
        $this->rateDate = $rateDate;

        return $this;
    }

    /**
     * Get rateDate
     *
     * @return \DateTime 
     */
    public function getRateDate()
    {
        return $this->rateDate;
    }

    /**
     * Set rateValue
     *
     * @param float $rateValue
     * @return KfExchangeRates
     */
    public function setRateValue($rateValue)
    {
        $this->rateValue = $rateValue;

        return $this;
    }

    /**
     * Get rateValue
     *
     * @return float 
     */
    public function getRateValue()
    {
        return $this->rateValue;
    }
}
