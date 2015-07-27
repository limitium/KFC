<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestCommerc
 *
 */
class SpkInvestCommerc
{
    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $amount;

    /**
     * @var string
     *
     */
    private $amountCurrency;

    /**
     * @var string
     *
     */
    private $noi;

    /**
     * @var string
     *
     */
    private $noiCurrency;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestCommerc
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkInvestCommerc
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
     * @return SpkInvestCommerc
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
     * @return SpkInvestCommerc
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
     * @return SpkInvestCommerc
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
     * Set vat
     *
     * @param string $vat
     * @return SpkInvestCommerc
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return SpkInvestCommerc
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountCurrency
     *
     * @param string $amountCurrency
     * @return SpkInvestCommerc
     */
    public function setAmountCurrency($amountCurrency)
    {
        $this->amountCurrency = $amountCurrency;

        return $this;
    }

    /**
     * Get amountCurrency
     *
     * @return string 
     */
    public function getAmountCurrency()
    {
        return $this->amountCurrency;
    }

    /**
     * Set noi
     *
     * @param string $noi
     * @return SpkInvestCommerc
     */
    public function setNoi($noi)
    {
        $this->noi = $noi;

        return $this;
    }

    /**
     * Get noi
     *
     * @return string 
     */
    public function getNoi()
    {
        return $this->noi;
    }

    /**
     * Set noiCurrency
     *
     * @param string $noiCurrency
     * @return SpkInvestCommerc
     */
    public function setNoiCurrency($noiCurrency)
    {
        $this->noiCurrency = $noiCurrency;

        return $this;
    }

    /**
     * Get noiCurrency
     *
     * @return string 
     */
    public function getNoiCurrency()
    {
        return $this->noiCurrency;
    }
}
