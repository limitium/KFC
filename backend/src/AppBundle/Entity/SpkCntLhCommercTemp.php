<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntLhCommercTemp
 *
 */
class SpkCntLhCommercTemp
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
     * @return SpkCntLhCommercTemp
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
}
