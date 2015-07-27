<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkTech
 *
 */
class SpkOffBkTech
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
     * @var integer
     *
     */
    private $storeyNumber;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var float
     *
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     */
    private $ventilation;

    /**
     * @var integer
     *
     */
    private $phoneLineCount;

    /**
     * @var string
     *
     */
    private $telecommunication;

    /**
     * @var string
     *
     */
    private $provider;

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
    private $decoration;

    /**
     * @var integer
     *
     */
    private $storeyCountMax;

    /**
     * @var integer
     *
     */
    private $complYear;

    /**
     * @var integer
     *
     */
    private $complQuarter;

    /**
     * @var integer
     *
     */
    private $complMonth;

    /**
     * @var integer
     *
     */
    private $complDay;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffBkTech
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
     * @return SpkOffBkTech
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
     * @return SpkOffBkTech
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
     * @return SpkOffBkTech
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
     * @return SpkOffBkTech
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
     * Set storeyNumber
     *
     * @param integer $storeyNumber
     * @return SpkOffBkTech
     */
    public function setStoreyNumber($storeyNumber)
    {
        $this->storeyNumber = $storeyNumber;

        return $this;
    }

    /**
     * Get storeyNumber
     *
     * @return integer 
     */
    public function getStoreyNumber()
    {
        return $this->storeyNumber;
    }

    /**
     * Set kfClass
     *
     * @param string $kfClass
     * @return SpkOffBkTech
     */
    public function setKfClass($kfClass)
    {
        $this->kfClass = $kfClass;

        return $this;
    }

    /**
     * Get kfClass
     *
     * @return string 
     */
    public function getKfClass()
    {
        return $this->kfClass;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkOffBkTech
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return SpkOffBkTech
     */
    public function setLeaseArea($leaseArea)
    {
        $this->leaseArea = $leaseArea;

        return $this;
    }

    /**
     * Get leaseArea
     *
     * @return float 
     */
    public function getLeaseArea()
    {
        return $this->leaseArea;
    }

    /**
     * Set freeArea
     *
     * @param float $freeArea
     * @return SpkOffBkTech
     */
    public function setFreeArea($freeArea)
    {
        $this->freeArea = $freeArea;

        return $this;
    }

    /**
     * Get freeArea
     *
     * @return float 
     */
    public function getFreeArea()
    {
        return $this->freeArea;
    }

    /**
     * Set floorType
     *
     * @param string $floorType
     * @return SpkOffBkTech
     */
    public function setFloorType($floorType)
    {
        $this->floorType = $floorType;

        return $this;
    }

    /**
     * Get floorType
     *
     * @return string 
     */
    public function getFloorType()
    {
        return $this->floorType;
    }

    /**
     * Set ceilingHeight
     *
     * @param float $ceilingHeight
     * @return SpkOffBkTech
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return float 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set ventilation
     *
     * @param string $ventilation
     * @return SpkOffBkTech
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;

        return $this;
    }

    /**
     * Get ventilation
     *
     * @return string 
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * Set phoneLineCount
     *
     * @param integer $phoneLineCount
     * @return SpkOffBkTech
     */
    public function setPhoneLineCount($phoneLineCount)
    {
        $this->phoneLineCount = $phoneLineCount;

        return $this;
    }

    /**
     * Get phoneLineCount
     *
     * @return integer 
     */
    public function getPhoneLineCount()
    {
        return $this->phoneLineCount;
    }

    /**
     * Set telecommunication
     *
     * @param string $telecommunication
     * @return SpkOffBkTech
     */
    public function setTelecommunication($telecommunication)
    {
        $this->telecommunication = $telecommunication;

        return $this;
    }

    /**
     * Get telecommunication
     *
     * @return string 
     */
    public function getTelecommunication()
    {
        return $this->telecommunication;
    }

    /**
     * Set provider
     *
     * @param string $provider
     * @return SpkOffBkTech
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkOffBkTech
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
     * @return SpkOffBkTech
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
     * Set decoration
     *
     * @param string $decoration
     * @return SpkOffBkTech
     */
    public function setDecoration($decoration)
    {
        $this->decoration = $decoration;

        return $this;
    }

    /**
     * Get decoration
     *
     * @return string 
     */
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * Set storeyCountMax
     *
     * @param integer $storeyCountMax
     * @return SpkOffBkTech
     */
    public function setStoreyCountMax($storeyCountMax)
    {
        $this->storeyCountMax = $storeyCountMax;

        return $this;
    }

    /**
     * Get storeyCountMax
     *
     * @return integer 
     */
    public function getStoreyCountMax()
    {
        return $this->storeyCountMax;
    }

    /**
     * Set complYear
     *
     * @param integer $complYear
     * @return SpkOffBkTech
     */
    public function setComplYear($complYear)
    {
        $this->complYear = $complYear;

        return $this;
    }

    /**
     * Get complYear
     *
     * @return integer 
     */
    public function getComplYear()
    {
        return $this->complYear;
    }

    /**
     * Set complQuarter
     *
     * @param integer $complQuarter
     * @return SpkOffBkTech
     */
    public function setComplQuarter($complQuarter)
    {
        $this->complQuarter = $complQuarter;

        return $this;
    }

    /**
     * Get complQuarter
     *
     * @return integer 
     */
    public function getComplQuarter()
    {
        return $this->complQuarter;
    }

    /**
     * Set complMonth
     *
     * @param integer $complMonth
     * @return SpkOffBkTech
     */
    public function setComplMonth($complMonth)
    {
        $this->complMonth = $complMonth;

        return $this;
    }

    /**
     * Get complMonth
     *
     * @return integer 
     */
    public function getComplMonth()
    {
        return $this->complMonth;
    }

    /**
     * Set complDay
     *
     * @param integer $complDay
     * @return SpkOffBkTech
     */
    public function setComplDay($complDay)
    {
        $this->complDay = $complDay;

        return $this;
    }

    /**
     * Get complDay
     *
     * @return integer 
     */
    public function getComplDay()
    {
        return $this->complDay;
    }
}
