<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetParking
 *
 */
class SpkRetParking
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
    private $undergroundLevelCount;

    /**
     * @var integer
     *
     */
    private $undergroundPlaceCount;

    /**
     * @var string
     *
     */
    private $undergroundCost;

    /**
     * @var integer
     *
     */
    private $groundLevelCount;

    /**
     * @var integer
     *
     */
    private $groundPlaceCount;

    /**
     * @var string
     *
     */
    private $groundCost;

    /**
     * @var integer
     *
     */
    private $roofLevelCount;

    /**
     * @var integer
     *
     */
    private $roofPlaceCount;

    /**
     * @var string
     *
     */
    private $roofCost;

    /**
     * @var string
     *
     */
    private $parkingIndex;

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
     * @var integer
     *
     */
    private $multilevelLevelCount;

    /**
     * @var integer
     *
     */
    private $multilevelPlaceCount;

    /**
     * @var string
     *
     */
    private $multilevelCost;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetParking
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
     * @return SpkRetParking
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
     * @return SpkRetParking
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
     * @return SpkRetParking
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
     * @return SpkRetParking
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
     * Set undergroundLevelCount
     *
     * @param integer $undergroundLevelCount
     * @return SpkRetParking
     */
    public function setUndergroundLevelCount($undergroundLevelCount)
    {
        $this->undergroundLevelCount = $undergroundLevelCount;

        return $this;
    }

    /**
     * Get undergroundLevelCount
     *
     * @return integer 
     */
    public function getUndergroundLevelCount()
    {
        return $this->undergroundLevelCount;
    }

    /**
     * Set undergroundPlaceCount
     *
     * @param integer $undergroundPlaceCount
     * @return SpkRetParking
     */
    public function setUndergroundPlaceCount($undergroundPlaceCount)
    {
        $this->undergroundPlaceCount = $undergroundPlaceCount;

        return $this;
    }

    /**
     * Get undergroundPlaceCount
     *
     * @return integer 
     */
    public function getUndergroundPlaceCount()
    {
        return $this->undergroundPlaceCount;
    }

    /**
     * Set undergroundCost
     *
     * @param string $undergroundCost
     * @return SpkRetParking
     */
    public function setUndergroundCost($undergroundCost)
    {
        $this->undergroundCost = $undergroundCost;

        return $this;
    }

    /**
     * Get undergroundCost
     *
     * @return string 
     */
    public function getUndergroundCost()
    {
        return $this->undergroundCost;
    }

    /**
     * Set groundLevelCount
     *
     * @param integer $groundLevelCount
     * @return SpkRetParking
     */
    public function setGroundLevelCount($groundLevelCount)
    {
        $this->groundLevelCount = $groundLevelCount;

        return $this;
    }

    /**
     * Get groundLevelCount
     *
     * @return integer 
     */
    public function getGroundLevelCount()
    {
        return $this->groundLevelCount;
    }

    /**
     * Set groundPlaceCount
     *
     * @param integer $groundPlaceCount
     * @return SpkRetParking
     */
    public function setGroundPlaceCount($groundPlaceCount)
    {
        $this->groundPlaceCount = $groundPlaceCount;

        return $this;
    }

    /**
     * Get groundPlaceCount
     *
     * @return integer 
     */
    public function getGroundPlaceCount()
    {
        return $this->groundPlaceCount;
    }

    /**
     * Set groundCost
     *
     * @param string $groundCost
     * @return SpkRetParking
     */
    public function setGroundCost($groundCost)
    {
        $this->groundCost = $groundCost;

        return $this;
    }

    /**
     * Get groundCost
     *
     * @return string 
     */
    public function getGroundCost()
    {
        return $this->groundCost;
    }

    /**
     * Set roofLevelCount
     *
     * @param integer $roofLevelCount
     * @return SpkRetParking
     */
    public function setRoofLevelCount($roofLevelCount)
    {
        $this->roofLevelCount = $roofLevelCount;

        return $this;
    }

    /**
     * Get roofLevelCount
     *
     * @return integer 
     */
    public function getRoofLevelCount()
    {
        return $this->roofLevelCount;
    }

    /**
     * Set roofPlaceCount
     *
     * @param integer $roofPlaceCount
     * @return SpkRetParking
     */
    public function setRoofPlaceCount($roofPlaceCount)
    {
        $this->roofPlaceCount = $roofPlaceCount;

        return $this;
    }

    /**
     * Get roofPlaceCount
     *
     * @return integer 
     */
    public function getRoofPlaceCount()
    {
        return $this->roofPlaceCount;
    }

    /**
     * Set roofCost
     *
     * @param string $roofCost
     * @return SpkRetParking
     */
    public function setRoofCost($roofCost)
    {
        $this->roofCost = $roofCost;

        return $this;
    }

    /**
     * Get roofCost
     *
     * @return string 
     */
    public function getRoofCost()
    {
        return $this->roofCost;
    }

    /**
     * Set parkingIndex
     *
     * @param string $parkingIndex
     * @return SpkRetParking
     */
    public function setParkingIndex($parkingIndex)
    {
        $this->parkingIndex = $parkingIndex;

        return $this;
    }

    /**
     * Get parkingIndex
     *
     * @return string 
     */
    public function getParkingIndex()
    {
        return $this->parkingIndex;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetParking
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
     * @return SpkRetParking
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
     * Set multilevelLevelCount
     *
     * @param integer $multilevelLevelCount
     * @return SpkRetParking
     */
    public function setMultilevelLevelCount($multilevelLevelCount)
    {
        $this->multilevelLevelCount = $multilevelLevelCount;

        return $this;
    }

    /**
     * Get multilevelLevelCount
     *
     * @return integer 
     */
    public function getMultilevelLevelCount()
    {
        return $this->multilevelLevelCount;
    }

    /**
     * Set multilevelPlaceCount
     *
     * @param integer $multilevelPlaceCount
     * @return SpkRetParking
     */
    public function setMultilevelPlaceCount($multilevelPlaceCount)
    {
        $this->multilevelPlaceCount = $multilevelPlaceCount;

        return $this;
    }

    /**
     * Get multilevelPlaceCount
     *
     * @return integer 
     */
    public function getMultilevelPlaceCount()
    {
        return $this->multilevelPlaceCount;
    }

    /**
     * Set multilevelCost
     *
     * @param string $multilevelCost
     * @return SpkRetParking
     */
    public function setMultilevelCost($multilevelCost)
    {
        $this->multilevelCost = $multilevelCost;

        return $this;
    }

    /**
     * Get multilevelCost
     *
     * @return string 
     */
    public function getMultilevelCost()
    {
        return $this->multilevelCost;
    }
}
