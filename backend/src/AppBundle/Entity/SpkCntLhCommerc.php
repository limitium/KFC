<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntLhCommerc
 *
 */
class SpkCntLhCommerc
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
    private $costPer100Min;

    /**
     * @var string
     *
     */
    private $costPer100Max;

    /**
     * @var string
     *
     */
    private $costEuroMin;

    /**
     * @var string
     *
     */
    private $costEuroMax;

    /**
     * @var string
     *
     */
    private $costPerSqmEuroMin;

    /**
     * @var string
     *
     */
    private $costPerSqmEuroMax;

    /**
     * @var string
     *
     */
    private $costPer100EuroMin;

    /**
     * @var string
     *
     */
    private $costPer100EuroMax;

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
    private $rentMin;

    /**
     * @var string
     *
     */
    private $rentMax;

    /**
     * @var string
     *
     */
    private $costnshared;

    /**
     * @var string
     *
     */
    private $mainVal;

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
     * @var float
     *
     */
    private $kfFee;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $rentRur;

    /**
     * @var string
     *
     */
    private $rentEur;

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
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set costMin
     *
     * @param string $costMin
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set costPer100Min
     *
     * @param string $costPer100Min
     * @return SpkCntLhCommerc
     */
    public function setCostPer100Min($costPer100Min)
    {
        $this->costPer100Min = $costPer100Min;

        return $this;
    }

    /**
     * Get costPer100Min
     *
     * @return string 
     */
    public function getCostPer100Min()
    {
        return $this->costPer100Min;
    }

    /**
     * Set costPer100Max
     *
     * @param string $costPer100Max
     * @return SpkCntLhCommerc
     */
    public function setCostPer100Max($costPer100Max)
    {
        $this->costPer100Max = $costPer100Max;

        return $this;
    }

    /**
     * Get costPer100Max
     *
     * @return string 
     */
    public function getCostPer100Max()
    {
        return $this->costPer100Max;
    }

    /**
     * Set costEuroMin
     *
     * @param string $costEuroMin
     * @return SpkCntLhCommerc
     */
    public function setCostEuroMin($costEuroMin)
    {
        $this->costEuroMin = $costEuroMin;

        return $this;
    }

    /**
     * Get costEuroMin
     *
     * @return string 
     */
    public function getCostEuroMin()
    {
        return $this->costEuroMin;
    }

    /**
     * Set costEuroMax
     *
     * @param string $costEuroMax
     * @return SpkCntLhCommerc
     */
    public function setCostEuroMax($costEuroMax)
    {
        $this->costEuroMax = $costEuroMax;

        return $this;
    }

    /**
     * Get costEuroMax
     *
     * @return string 
     */
    public function getCostEuroMax()
    {
        return $this->costEuroMax;
    }

    /**
     * Set costPerSqmEuroMin
     *
     * @param string $costPerSqmEuroMin
     * @return SpkCntLhCommerc
     */
    public function setCostPerSqmEuroMin($costPerSqmEuroMin)
    {
        $this->costPerSqmEuroMin = $costPerSqmEuroMin;

        return $this;
    }

    /**
     * Get costPerSqmEuroMin
     *
     * @return string 
     */
    public function getCostPerSqmEuroMin()
    {
        return $this->costPerSqmEuroMin;
    }

    /**
     * Set costPerSqmEuroMax
     *
     * @param string $costPerSqmEuroMax
     * @return SpkCntLhCommerc
     */
    public function setCostPerSqmEuroMax($costPerSqmEuroMax)
    {
        $this->costPerSqmEuroMax = $costPerSqmEuroMax;

        return $this;
    }

    /**
     * Get costPerSqmEuroMax
     *
     * @return string 
     */
    public function getCostPerSqmEuroMax()
    {
        return $this->costPerSqmEuroMax;
    }

    /**
     * Set costPer100EuroMin
     *
     * @param string $costPer100EuroMin
     * @return SpkCntLhCommerc
     */
    public function setCostPer100EuroMin($costPer100EuroMin)
    {
        $this->costPer100EuroMin = $costPer100EuroMin;

        return $this;
    }

    /**
     * Get costPer100EuroMin
     *
     * @return string 
     */
    public function getCostPer100EuroMin()
    {
        return $this->costPer100EuroMin;
    }

    /**
     * Set costPer100EuroMax
     *
     * @param string $costPer100EuroMax
     * @return SpkCntLhCommerc
     */
    public function setCostPer100EuroMax($costPer100EuroMax)
    {
        $this->costPer100EuroMax = $costPer100EuroMax;

        return $this;
    }

    /**
     * Get costPer100EuroMax
     *
     * @return string 
     */
    public function getCostPer100EuroMax()
    {
        return $this->costPer100EuroMax;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set rentMin
     *
     * @param string $rentMin
     * @return SpkCntLhCommerc
     */
    public function setRentMin($rentMin)
    {
        $this->rentMin = $rentMin;

        return $this;
    }

    /**
     * Get rentMin
     *
     * @return string 
     */
    public function getRentMin()
    {
        return $this->rentMin;
    }

    /**
     * Set rentMax
     *
     * @param string $rentMax
     * @return SpkCntLhCommerc
     */
    public function setRentMax($rentMax)
    {
        $this->rentMax = $rentMax;

        return $this;
    }

    /**
     * Get rentMax
     *
     * @return string 
     */
    public function getRentMax()
    {
        return $this->rentMax;
    }

    /**
     * Set costnshared
     *
     * @param string $costnshared
     * @return SpkCntLhCommerc
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
     * Set mainVal
     *
     * @param string $mainVal
     * @return SpkCntLhCommerc
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
     * Set costRurMin
     *
     * @param string $costRurMin
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set kfFee
     *
     * @param float $kfFee
     * @return SpkCntLhCommerc
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return SpkCntLhCommerc
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set rentRur
     *
     * @param string $rentRur
     * @return SpkCntLhCommerc
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
     * Set rentEur
     *
     * @param string $rentEur
     * @return SpkCntLhCommerc
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
     * Set rentCurrency
     *
     * @param string $rentCurrency
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
     * Set costRurSqmMin
     *
     * @param string $costRurSqmMin
     * @return SpkCntLhCommerc
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
     * @return SpkCntLhCommerc
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
