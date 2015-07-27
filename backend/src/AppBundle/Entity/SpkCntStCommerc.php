<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntStCommerc
 *
 */
class SpkCntStCommerc
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
    private $landCostMin;

    /**
     * @var string
     *
     */
    private $landCostMax;

    /**
     * @var string
     *
     */
    private $houseCostMin;

    /**
     * @var string
     *
     */
    private $houseCostMax;

    /**
     * @var float
     *
     */
    private $cottageAreaMin;

    /**
     * @var float
     *
     */
    private $cottageAreaMax;

    /**
     * @var float
     *
     */
    private $townhouseAreaMin;

    /**
     * @var float
     *
     */
    private $townhouseAreaMax;

    /**
     * @var float
     *
     */
    private $apartmentAreaMin;

    /**
     * @var float
     *
     */
    private $apartmentAreaMax;

    /**
     * @var string
     *
     */
    private $cottageCostMin;

    /**
     * @var string
     *
     */
    private $cottageCostMax;

    /**
     * @var string
     *
     */
    private $townhouseCostMin;

    /**
     * @var string
     *
     */
    private $townhouseCostMax;

    /**
     * @var string
     *
     */
    private $apartmentCostMin;

    /**
     * @var string
     *
     */
    private $apartmentCostMax;

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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
     * Set landCostMin
     *
     * @param string $landCostMin
     * @return SpkCntStCommerc
     */
    public function setLandCostMin($landCostMin)
    {
        $this->landCostMin = $landCostMin;

        return $this;
    }

    /**
     * Get landCostMin
     *
     * @return string 
     */
    public function getLandCostMin()
    {
        return $this->landCostMin;
    }

    /**
     * Set landCostMax
     *
     * @param string $landCostMax
     * @return SpkCntStCommerc
     */
    public function setLandCostMax($landCostMax)
    {
        $this->landCostMax = $landCostMax;

        return $this;
    }

    /**
     * Get landCostMax
     *
     * @return string 
     */
    public function getLandCostMax()
    {
        return $this->landCostMax;
    }

    /**
     * Set houseCostMin
     *
     * @param string $houseCostMin
     * @return SpkCntStCommerc
     */
    public function setHouseCostMin($houseCostMin)
    {
        $this->houseCostMin = $houseCostMin;

        return $this;
    }

    /**
     * Get houseCostMin
     *
     * @return string 
     */
    public function getHouseCostMin()
    {
        return $this->houseCostMin;
    }

    /**
     * Set houseCostMax
     *
     * @param string $houseCostMax
     * @return SpkCntStCommerc
     */
    public function setHouseCostMax($houseCostMax)
    {
        $this->houseCostMax = $houseCostMax;

        return $this;
    }

    /**
     * Get houseCostMax
     *
     * @return string 
     */
    public function getHouseCostMax()
    {
        return $this->houseCostMax;
    }

    /**
     * Set cottageAreaMin
     *
     * @param float $cottageAreaMin
     * @return SpkCntStCommerc
     */
    public function setCottageAreaMin($cottageAreaMin)
    {
        $this->cottageAreaMin = $cottageAreaMin;

        return $this;
    }

    /**
     * Get cottageAreaMin
     *
     * @return float 
     */
    public function getCottageAreaMin()
    {
        return $this->cottageAreaMin;
    }

    /**
     * Set cottageAreaMax
     *
     * @param float $cottageAreaMax
     * @return SpkCntStCommerc
     */
    public function setCottageAreaMax($cottageAreaMax)
    {
        $this->cottageAreaMax = $cottageAreaMax;

        return $this;
    }

    /**
     * Get cottageAreaMax
     *
     * @return float 
     */
    public function getCottageAreaMax()
    {
        return $this->cottageAreaMax;
    }

    /**
     * Set townhouseAreaMin
     *
     * @param float $townhouseAreaMin
     * @return SpkCntStCommerc
     */
    public function setTownhouseAreaMin($townhouseAreaMin)
    {
        $this->townhouseAreaMin = $townhouseAreaMin;

        return $this;
    }

    /**
     * Get townhouseAreaMin
     *
     * @return float 
     */
    public function getTownhouseAreaMin()
    {
        return $this->townhouseAreaMin;
    }

    /**
     * Set townhouseAreaMax
     *
     * @param float $townhouseAreaMax
     * @return SpkCntStCommerc
     */
    public function setTownhouseAreaMax($townhouseAreaMax)
    {
        $this->townhouseAreaMax = $townhouseAreaMax;

        return $this;
    }

    /**
     * Get townhouseAreaMax
     *
     * @return float 
     */
    public function getTownhouseAreaMax()
    {
        return $this->townhouseAreaMax;
    }

    /**
     * Set apartmentAreaMin
     *
     * @param float $apartmentAreaMin
     * @return SpkCntStCommerc
     */
    public function setApartmentAreaMin($apartmentAreaMin)
    {
        $this->apartmentAreaMin = $apartmentAreaMin;

        return $this;
    }

    /**
     * Get apartmentAreaMin
     *
     * @return float 
     */
    public function getApartmentAreaMin()
    {
        return $this->apartmentAreaMin;
    }

    /**
     * Set apartmentAreaMax
     *
     * @param float $apartmentAreaMax
     * @return SpkCntStCommerc
     */
    public function setApartmentAreaMax($apartmentAreaMax)
    {
        $this->apartmentAreaMax = $apartmentAreaMax;

        return $this;
    }

    /**
     * Get apartmentAreaMax
     *
     * @return float 
     */
    public function getApartmentAreaMax()
    {
        return $this->apartmentAreaMax;
    }

    /**
     * Set cottageCostMin
     *
     * @param string $cottageCostMin
     * @return SpkCntStCommerc
     */
    public function setCottageCostMin($cottageCostMin)
    {
        $this->cottageCostMin = $cottageCostMin;

        return $this;
    }

    /**
     * Get cottageCostMin
     *
     * @return string 
     */
    public function getCottageCostMin()
    {
        return $this->cottageCostMin;
    }

    /**
     * Set cottageCostMax
     *
     * @param string $cottageCostMax
     * @return SpkCntStCommerc
     */
    public function setCottageCostMax($cottageCostMax)
    {
        $this->cottageCostMax = $cottageCostMax;

        return $this;
    }

    /**
     * Get cottageCostMax
     *
     * @return string 
     */
    public function getCottageCostMax()
    {
        return $this->cottageCostMax;
    }

    /**
     * Set townhouseCostMin
     *
     * @param string $townhouseCostMin
     * @return SpkCntStCommerc
     */
    public function setTownhouseCostMin($townhouseCostMin)
    {
        $this->townhouseCostMin = $townhouseCostMin;

        return $this;
    }

    /**
     * Get townhouseCostMin
     *
     * @return string 
     */
    public function getTownhouseCostMin()
    {
        return $this->townhouseCostMin;
    }

    /**
     * Set townhouseCostMax
     *
     * @param string $townhouseCostMax
     * @return SpkCntStCommerc
     */
    public function setTownhouseCostMax($townhouseCostMax)
    {
        $this->townhouseCostMax = $townhouseCostMax;

        return $this;
    }

    /**
     * Get townhouseCostMax
     *
     * @return string 
     */
    public function getTownhouseCostMax()
    {
        return $this->townhouseCostMax;
    }

    /**
     * Set apartmentCostMin
     *
     * @param string $apartmentCostMin
     * @return SpkCntStCommerc
     */
    public function setApartmentCostMin($apartmentCostMin)
    {
        $this->apartmentCostMin = $apartmentCostMin;

        return $this;
    }

    /**
     * Get apartmentCostMin
     *
     * @return string 
     */
    public function getApartmentCostMin()
    {
        return $this->apartmentCostMin;
    }

    /**
     * Set apartmentCostMax
     *
     * @param string $apartmentCostMax
     * @return SpkCntStCommerc
     */
    public function setApartmentCostMax($apartmentCostMax)
    {
        $this->apartmentCostMax = $apartmentCostMax;

        return $this;
    }

    /**
     * Get apartmentCostMax
     *
     * @return string 
     */
    public function getApartmentCostMax()
    {
        return $this->apartmentCostMax;
    }

    /**
     * Set kfFee
     *
     * @param float $kfFee
     * @return SpkCntStCommerc
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
     * @return SpkCntStCommerc
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
}
