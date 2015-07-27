<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConception
 *
 */
class SpkRetConception
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
    private $zoneSizeType;

    /**
     * @var string
     *
     */
    private $consistingOf;

    /**
     * @var integer
     *
     */
    private $weekdaysVisitorsMin;

    /**
     * @var integer
     *
     */
    private $weekdaysVisitorsMax;

    /**
     * @var integer
     *
     */
    private $weekendVisitorsMin;

    /**
     * @var integer
     *
     */
    private $weekendVisitorsMax;

    /**
     * @var integer
     *
     */
    private $foodcortOperators;

    /**
     * @var integer
     *
     */
    private $foodcortTables;

    /**
     * @var float
     *
     */
    private $foodcortAreaKitchen;

    /**
     * @var float
     *
     */
    private $foodcortAreaTables;

    /**
     * @var string
     *
     */
    private $additionalServices;

    /**
     * @var string
     *
     */
    private $workTime;

    /**
     * @var string
     *
     */
    private $contactInfo;

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
    private $conceptionType;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetConception
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
     * @return SpkRetConception
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
     * @return SpkRetConception
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
     * @return SpkRetConception
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
     * @return SpkRetConception
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
     * Set zoneSizeType
     *
     * @param string $zoneSizeType
     * @return SpkRetConception
     */
    public function setZoneSizeType($zoneSizeType)
    {
        $this->zoneSizeType = $zoneSizeType;

        return $this;
    }

    /**
     * Get zoneSizeType
     *
     * @return string 
     */
    public function getZoneSizeType()
    {
        return $this->zoneSizeType;
    }

    /**
     * Set consistingOf
     *
     * @param string $consistingOf
     * @return SpkRetConception
     */
    public function setConsistingOf($consistingOf)
    {
        $this->consistingOf = $consistingOf;

        return $this;
    }

    /**
     * Get consistingOf
     *
     * @return string 
     */
    public function getConsistingOf()
    {
        return $this->consistingOf;
    }

    /**
     * Set weekdaysVisitorsMin
     *
     * @param integer $weekdaysVisitorsMin
     * @return SpkRetConception
     */
    public function setWeekdaysVisitorsMin($weekdaysVisitorsMin)
    {
        $this->weekdaysVisitorsMin = $weekdaysVisitorsMin;

        return $this;
    }

    /**
     * Get weekdaysVisitorsMin
     *
     * @return integer 
     */
    public function getWeekdaysVisitorsMin()
    {
        return $this->weekdaysVisitorsMin;
    }

    /**
     * Set weekdaysVisitorsMax
     *
     * @param integer $weekdaysVisitorsMax
     * @return SpkRetConception
     */
    public function setWeekdaysVisitorsMax($weekdaysVisitorsMax)
    {
        $this->weekdaysVisitorsMax = $weekdaysVisitorsMax;

        return $this;
    }

    /**
     * Get weekdaysVisitorsMax
     *
     * @return integer 
     */
    public function getWeekdaysVisitorsMax()
    {
        return $this->weekdaysVisitorsMax;
    }

    /**
     * Set weekendVisitorsMin
     *
     * @param integer $weekendVisitorsMin
     * @return SpkRetConception
     */
    public function setWeekendVisitorsMin($weekendVisitorsMin)
    {
        $this->weekendVisitorsMin = $weekendVisitorsMin;

        return $this;
    }

    /**
     * Get weekendVisitorsMin
     *
     * @return integer 
     */
    public function getWeekendVisitorsMin()
    {
        return $this->weekendVisitorsMin;
    }

    /**
     * Set weekendVisitorsMax
     *
     * @param integer $weekendVisitorsMax
     * @return SpkRetConception
     */
    public function setWeekendVisitorsMax($weekendVisitorsMax)
    {
        $this->weekendVisitorsMax = $weekendVisitorsMax;

        return $this;
    }

    /**
     * Get weekendVisitorsMax
     *
     * @return integer 
     */
    public function getWeekendVisitorsMax()
    {
        return $this->weekendVisitorsMax;
    }

    /**
     * Set foodcortOperators
     *
     * @param integer $foodcortOperators
     * @return SpkRetConception
     */
    public function setFoodcortOperators($foodcortOperators)
    {
        $this->foodcortOperators = $foodcortOperators;

        return $this;
    }

    /**
     * Get foodcortOperators
     *
     * @return integer 
     */
    public function getFoodcortOperators()
    {
        return $this->foodcortOperators;
    }

    /**
     * Set foodcortTables
     *
     * @param integer $foodcortTables
     * @return SpkRetConception
     */
    public function setFoodcortTables($foodcortTables)
    {
        $this->foodcortTables = $foodcortTables;

        return $this;
    }

    /**
     * Get foodcortTables
     *
     * @return integer 
     */
    public function getFoodcortTables()
    {
        return $this->foodcortTables;
    }

    /**
     * Set foodcortAreaKitchen
     *
     * @param float $foodcortAreaKitchen
     * @return SpkRetConception
     */
    public function setFoodcortAreaKitchen($foodcortAreaKitchen)
    {
        $this->foodcortAreaKitchen = $foodcortAreaKitchen;

        return $this;
    }

    /**
     * Get foodcortAreaKitchen
     *
     * @return float 
     */
    public function getFoodcortAreaKitchen()
    {
        return $this->foodcortAreaKitchen;
    }

    /**
     * Set foodcortAreaTables
     *
     * @param float $foodcortAreaTables
     * @return SpkRetConception
     */
    public function setFoodcortAreaTables($foodcortAreaTables)
    {
        $this->foodcortAreaTables = $foodcortAreaTables;

        return $this;
    }

    /**
     * Get foodcortAreaTables
     *
     * @return float 
     */
    public function getFoodcortAreaTables()
    {
        return $this->foodcortAreaTables;
    }

    /**
     * Set additionalServices
     *
     * @param string $additionalServices
     * @return SpkRetConception
     */
    public function setAdditionalServices($additionalServices)
    {
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * Get additionalServices
     *
     * @return string 
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Set workTime
     *
     * @param string $workTime
     * @return SpkRetConception
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;

        return $this;
    }

    /**
     * Get workTime
     *
     * @return string 
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * Set contactInfo
     *
     * @param string $contactInfo
     * @return SpkRetConception
     */
    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Get contactInfo
     *
     * @return string 
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetConception
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
     * @return SpkRetConception
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
     * Set conceptionType
     *
     * @param string $conceptionType
     * @return SpkRetConception
     */
    public function setConceptionType($conceptionType)
    {
        $this->conceptionType = $conceptionType;

        return $this;
    }

    /**
     * Get conceptionType
     *
     * @return string 
     */
    public function getConceptionType()
    {
        return $this->conceptionType;
    }
}
