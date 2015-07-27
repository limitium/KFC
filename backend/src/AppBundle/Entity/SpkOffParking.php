<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffParking
 *
 */
class SpkOffParking
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
    private $koef;

    /**
     * @var string
     *
     */
    private $parkingCost;

    /**
     * @var integer
     *
     */
    private $liftCountNew;

    /**
     * @var integer
     *
     */
    private $liftWeightNew;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkOffParking
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
     * @return SpkOffParking
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
     * Set koef
     *
     * @param string $koef
     * @return SpkOffParking
     */
    public function setKoef($koef)
    {
        $this->koef = $koef;

        return $this;
    }

    /**
     * Get koef
     *
     * @return string 
     */
    public function getKoef()
    {
        return $this->koef;
    }

    /**
     * Set parkingCost
     *
     * @param string $parkingCost
     * @return SpkOffParking
     */
    public function setParkingCost($parkingCost)
    {
        $this->parkingCost = $parkingCost;

        return $this;
    }

    /**
     * Get parkingCost
     *
     * @return string 
     */
    public function getParkingCost()
    {
        return $this->parkingCost;
    }

    /**
     * Set liftCountNew
     *
     * @param integer $liftCountNew
     * @return SpkOffParking
     */
    public function setLiftCountNew($liftCountNew)
    {
        $this->liftCountNew = $liftCountNew;

        return $this;
    }

    /**
     * Get liftCountNew
     *
     * @return integer 
     */
    public function getLiftCountNew()
    {
        return $this->liftCountNew;
    }

    /**
     * Set liftWeightNew
     *
     * @param integer $liftWeightNew
     * @return SpkOffParking
     */
    public function setLiftWeightNew($liftWeightNew)
    {
        $this->liftWeightNew = $liftWeightNew;

        return $this;
    }

    /**
     * Get liftWeightNew
     *
     * @return integer 
     */
    public function getLiftWeightNew()
    {
        return $this->liftWeightNew;
    }
}
