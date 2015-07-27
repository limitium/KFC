<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResAptCommerc
 *
 */
class SpkResAptCommerc
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
    private $rent;

    /**
     * @var string
     *
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $carPlaceCost;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var float
     *
     */
    private $commissionTnPers;

    /**
     * @var string
     *
     */
    private $commissionTn;

    /**
     * @var float
     *
     */
    private $commissionLrPers;

    /**
     * @var string
     *
     */
    private $commissionLr;

    /**
     * @var string
     *
     */
    private $contractType;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;

    /**
     * @var string
     *
     */
    private $currencyApartment;

    /**
     * @var string
     *
     */
    private $costnotshared;

    /**
     * @var string
     *
     */
    private $costnshared;

    /**
     * @var string
     *
     */
    private $discount;

    /**
     * @var string
     *
     */
    private $costEurMin;

    /**
     * @var string
     *
     */
    private $costEurMax;

    /**
     * @var string
     *
     */
    private $costRurMin;

    /**
     * @var string
     *
     */
    private $costRurMax;

    /**
     * @var string
     *
     */
    private $mainVal;

    /**
     * @var float
     *
     */
    private $kfFee;

    /**
     * @var string
     *
     */
    private $rentEur;

    /**
     * @var string
     *
     */
    private $rentRur;

    /**
     * @var string
     *
     */
    private $rentCurrency;

    /**
     * @var string
     *
     */
    private $privateSale;

    /**
     * @var string
     *
     */
    private $costEurSqmMin;

    /**
     * @var string
     *
     */
    private $costEurSqmMax;

    /**
     * @var string
     *
     */
    private $costRurSqmMin;

    /**
     * @var string
     *
     */
    private $costRurSqmMax;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResAptCommerc
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
     * @return SpkResAptCommerc
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
     * @return SpkResAptCommerc
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
     * @return SpkResAptCommerc
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
     * @return SpkResAptCommerc
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
     * Set rent
     *
     * @param string $rent
     * @return SpkResAptCommerc
     */
    public function setRent($rent)
    {
        $this->rent = $rent;

        return $this;
    }

    /**
     * Get rent
     *
     * @return string 
     */
    public function getRent()
    {
        return $this->rent;
    }

    /**
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return SpkResAptCommerc
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return string 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param string $costPerSqmMax
     * @return SpkResAptCommerc
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return string 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return SpkResAptCommerc
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return SpkResAptCommerc
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set carPlaceCost
     *
     * @param string $carPlaceCost
     * @return SpkResAptCommerc
     */
    public function setCarPlaceCost($carPlaceCost)
    {
        $this->carPlaceCost = $carPlaceCost;

        return $this;
    }

    /**
     * Get carPlaceCost
     *
     * @return string 
     */
    public function getCarPlaceCost()
    {
        return $this->carPlaceCost;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkResAptCommerc
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set commissionTnPers
     *
     * @param float $commissionTnPers
     * @return SpkResAptCommerc
     */
    public function setCommissionTnPers($commissionTnPers)
    {
        $this->commissionTnPers = $commissionTnPers;

        return $this;
    }

    /**
     * Get commissionTnPers
     *
     * @return float 
     */
    public function getCommissionTnPers()
    {
        return $this->commissionTnPers;
    }

    /**
     * Set commissionTn
     *
     * @param string $commissionTn
     * @return SpkResAptCommerc
     */
    public function setCommissionTn($commissionTn)
    {
        $this->commissionTn = $commissionTn;

        return $this;
    }

    /**
     * Get commissionTn
     *
     * @return string 
     */
    public function getCommissionTn()
    {
        return $this->commissionTn;
    }

    /**
     * Set commissionLrPers
     *
     * @param float $commissionLrPers
     * @return SpkResAptCommerc
     */
    public function setCommissionLrPers($commissionLrPers)
    {
        $this->commissionLrPers = $commissionLrPers;

        return $this;
    }

    /**
     * Get commissionLrPers
     *
     * @return float 
     */
    public function getCommissionLrPers()
    {
        return $this->commissionLrPers;
    }

    /**
     * Set commissionLr
     *
     * @param string $commissionLr
     * @return SpkResAptCommerc
     */
    public function setCommissionLr($commissionLr)
    {
        $this->commissionLr = $commissionLr;

        return $this;
    }

    /**
     * Get commissionLr
     *
     * @return string 
     */
    public function getCommissionLr()
    {
        return $this->commissionLr;
    }

    /**
     * Set contractType
     *
     * @param string $contractType
     * @return SpkResAptCommerc
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string 
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkResAptCommerc
     */
    public function setCommentsRus($commentsRus)
    {
        $this->commentsRus = $commentsRus;

        return $this;
    }

    /**
     * Get commentsRus
     *
     * @return string 
     */
    public function getCommentsRus()
    {
        return $this->commentsRus;
    }

    /**
     * Set commentsEng
     *
     * @param string $commentsEng
     * @return SpkResAptCommerc
     */
    public function setCommentsEng($commentsEng)
    {
        $this->commentsEng = $commentsEng;

        return $this;
    }

    /**
     * Get commentsEng
     *
     * @return string 
     */
    public function getCommentsEng()
    {
        return $this->commentsEng;
    }

    /**
     * Set currencyApartment
     *
     * @param string $currencyApartment
     * @return SpkResAptCommerc
     */
    public function setCurrencyApartment($currencyApartment)
    {
        $this->currencyApartment = $currencyApartment;

        return $this;
    }

    /**
     * Get currencyApartment
     *
     * @return string 
     */
    public function getCurrencyApartment()
    {
        return $this->currencyApartment;
    }

    /**
     * Set costnotshared
     *
     * @param string $costnotshared
     * @return SpkResAptCommerc
     */
    public function setCostnotshared($costnotshared)
    {
        $this->costnotshared = $costnotshared;

        return $this;
    }

    /**
     * Get costnotshared
     *
     * @return string 
     */
    public function getCostnotshared()
    {
        return $this->costnotshared;
    }

    /**
     * Set costnshared
     *
     * @param string $costnshared
     * @return SpkResAptCommerc
     */
    public function setCostnshared($costnshared)
    {
        $this->costnshared = $costnshared;

        return $this;
    }

    /**
     * Get costnshared
     *
     * @return string 
     */
    public function getCostnshared()
    {
        return $this->costnshared;
    }

    /**
     * Set discount
     *
     * @param string $discount
     * @return SpkResAptCommerc
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set costEurMin
     *
     * @param string $costEurMin
     * @return SpkResAptCommerc
     */
    public function setCostEurMin($costEurMin)
    {
        $this->costEurMin = $costEurMin;

        return $this;
    }

    /**
     * Get costEurMin
     *
     * @return string 
     */
    public function getCostEurMin()
    {
        return $this->costEurMin;
    }

    /**
     * Set costEurMax
     *
     * @param string $costEurMax
     * @return SpkResAptCommerc
     */
    public function setCostEurMax($costEurMax)
    {
        $this->costEurMax = $costEurMax;

        return $this;
    }

    /**
     * Get costEurMax
     *
     * @return string 
     */
    public function getCostEurMax()
    {
        return $this->costEurMax;
    }

    /**
     * Set costRurMin
     *
     * @param string $costRurMin
     * @return SpkResAptCommerc
     */
    public function setCostRurMin($costRurMin)
    {
        $this->costRurMin = $costRurMin;

        return $this;
    }

    /**
     * Get costRurMin
     *
     * @return string 
     */
    public function getCostRurMin()
    {
        return $this->costRurMin;
    }

    /**
     * Set costRurMax
     *
     * @param string $costRurMax
     * @return SpkResAptCommerc
     */
    public function setCostRurMax($costRurMax)
    {
        $this->costRurMax = $costRurMax;

        return $this;
    }

    /**
     * Get costRurMax
     *
     * @return string 
     */
    public function getCostRurMax()
    {
        return $this->costRurMax;
    }

    /**
     * Set mainVal
     *
     * @param string $mainVal
     * @return SpkResAptCommerc
     */
    public function setMainVal($mainVal)
    {
        $this->mainVal = $mainVal;

        return $this;
    }

    /**
     * Get mainVal
     *
     * @return string 
     */
    public function getMainVal()
    {
        return $this->mainVal;
    }

    /**
     * Set kfFee
     *
     * @param float $kfFee
     * @return SpkResAptCommerc
     */
    public function setKfFee($kfFee)
    {
        $this->kfFee = $kfFee;

        return $this;
    }

    /**
     * Get kfFee
     *
     * @return float 
     */
    public function getKfFee()
    {
        return $this->kfFee;
    }

    /**
     * Set rentEur
     *
     * @param string $rentEur
     * @return SpkResAptCommerc
     */
    public function setRentEur($rentEur)
    {
        $this->rentEur = $rentEur;

        return $this;
    }

    /**
     * Get rentEur
     *
     * @return string 
     */
    public function getRentEur()
    {
        return $this->rentEur;
    }

    /**
     * Set rentRur
     *
     * @param string $rentRur
     * @return SpkResAptCommerc
     */
    public function setRentRur($rentRur)
    {
        $this->rentRur = $rentRur;

        return $this;
    }

    /**
     * Get rentRur
     *
     * @return string 
     */
    public function getRentRur()
    {
        return $this->rentRur;
    }

    /**
     * Set rentCurrency
     *
     * @param string $rentCurrency
     * @return SpkResAptCommerc
     */
    public function setRentCurrency($rentCurrency)
    {
        $this->rentCurrency = $rentCurrency;

        return $this;
    }

    /**
     * Get rentCurrency
     *
     * @return string 
     */
    public function getRentCurrency()
    {
        return $this->rentCurrency;
    }

    /**
     * Set privateSale
     *
     * @param string $privateSale
     * @return SpkResAptCommerc
     */
    public function setPrivateSale($privateSale)
    {
        $this->privateSale = $privateSale;

        return $this;
    }

    /**
     * Get privateSale
     *
     * @return string 
     */
    public function getPrivateSale()
    {
        return $this->privateSale;
    }

    /**
     * Set costEurSqmMin
     *
     * @param string $costEurSqmMin
     * @return SpkResAptCommerc
     */
    public function setCostEurSqmMin($costEurSqmMin)
    {
        $this->costEurSqmMin = $costEurSqmMin;

        return $this;
    }

    /**
     * Get costEurSqmMin
     *
     * @return string 
     */
    public function getCostEurSqmMin()
    {
        return $this->costEurSqmMin;
    }

    /**
     * Set costEurSqmMax
     *
     * @param string $costEurSqmMax
     * @return SpkResAptCommerc
     */
    public function setCostEurSqmMax($costEurSqmMax)
    {
        $this->costEurSqmMax = $costEurSqmMax;

        return $this;
    }

    /**
     * Get costEurSqmMax
     *
     * @return string 
     */
    public function getCostEurSqmMax()
    {
        return $this->costEurSqmMax;
    }

    /**
     * Set costRurSqmMin
     *
     * @param string $costRurSqmMin
     * @return SpkResAptCommerc
     */
    public function setCostRurSqmMin($costRurSqmMin)
    {
        $this->costRurSqmMin = $costRurSqmMin;

        return $this;
    }

    /**
     * Get costRurSqmMin
     *
     * @return string 
     */
    public function getCostRurSqmMin()
    {
        return $this->costRurSqmMin;
    }

    /**
     * Set costRurSqmMax
     *
     * @param string $costRurSqmMax
     * @return SpkResAptCommerc
     */
    public function setCostRurSqmMax($costRurSqmMax)
    {
        $this->costRurSqmMax = $costRurSqmMax;

        return $this;
    }

    /**
     * Get costRurSqmMax
     *
     * @return string 
     */
    public function getCostRurSqmMax()
    {
        return $this->costRurSqmMax;
    }
}
