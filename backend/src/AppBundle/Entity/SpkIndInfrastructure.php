<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndInfrastructure
 *
 */
class SpkIndInfrastructure
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
    private $phoneLines;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var integer
     *
     */
    private $truckPlaces;

    /**
     * @var integer
     *
     */
    private $carPlaces;

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
     * @var float
     *
     */
    private $carCost;

    /**
     * @var float
     *
     */
    private $truckCost;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isLocalrailway;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndInfrastructure
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
     * @return SpkIndInfrastructure
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
     * @return SpkIndInfrastructure
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
     * @return SpkIndInfrastructure
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
     * @return SpkIndInfrastructure
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
     * Set phoneLines
     *
     * @param integer $phoneLines
     * @return SpkIndInfrastructure
     */
    public function setPhoneLines($phoneLines)
    {
        $this->phoneLines = $phoneLines;

        return $this;
    }

    /**
     * Get phoneLines
     *
     * @return integer 
     */
    public function getPhoneLines()
    {
        return $this->phoneLines;
    }

    /**
     * Set electricity
     *
     * @param float $electricity
     * @return SpkIndInfrastructure
     */
    public function setElectricity($electricity)
    {
        $this->electricity = $electricity;

        return $this;
    }

    /**
     * Get electricity
     *
     * @return float 
     */
    public function getElectricity()
    {
        return $this->electricity;
    }

    /**
     * Set truckPlaces
     *
     * @param integer $truckPlaces
     * @return SpkIndInfrastructure
     */
    public function setTruckPlaces($truckPlaces)
    {
        $this->truckPlaces = $truckPlaces;

        return $this;
    }

    /**
     * Get truckPlaces
     *
     * @return integer 
     */
    public function getTruckPlaces()
    {
        return $this->truckPlaces;
    }

    /**
     * Set carPlaces
     *
     * @param integer $carPlaces
     * @return SpkIndInfrastructure
     */
    public function setCarPlaces($carPlaces)
    {
        $this->carPlaces = $carPlaces;

        return $this;
    }

    /**
     * Get carPlaces
     *
     * @return integer 
     */
    public function getCarPlaces()
    {
        return $this->carPlaces;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkIndInfrastructure
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
     * @return SpkIndInfrastructure
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
     * Set carCost
     *
     * @param float $carCost
     * @return SpkIndInfrastructure
     */
    public function setCarCost($carCost)
    {
        $this->carCost = $carCost;

        return $this;
    }

    /**
     * Get carCost
     *
     * @return float 
     */
    public function getCarCost()
    {
        return $this->carCost;
    }

    /**
     * Set truckCost
     *
     * @param float $truckCost
     * @return SpkIndInfrastructure
     */
    public function setTruckCost($truckCost)
    {
        $this->truckCost = $truckCost;

        return $this;
    }

    /**
     * Get truckCost
     *
     * @return float 
     */
    public function getTruckCost()
    {
        return $this->truckCost;
    }

    /**
     * Set isHeating
     *
     * @param string $isHeating
     * @return SpkIndInfrastructure
     */
    public function setIsHeating($isHeating)
    {
        $this->isHeating = $isHeating;

        return $this;
    }

    /**
     * Get isHeating
     *
     * @return string 
     */
    public function getIsHeating()
    {
        return $this->isHeating;
    }

    /**
     * Set isRailway
     *
     * @param string $isRailway
     * @return SpkIndInfrastructure
     */
    public function setIsRailway($isRailway)
    {
        $this->isRailway = $isRailway;

        return $this;
    }

    /**
     * Get isRailway
     *
     * @return string 
     */
    public function getIsRailway()
    {
        return $this->isRailway;
    }

    /**
     * Set isLocalrailway
     *
     * @param string $isLocalrailway
     * @return SpkIndInfrastructure
     */
    public function setIsLocalrailway($isLocalrailway)
    {
        $this->isLocalrailway = $isLocalrailway;

        return $this;
    }

    /**
     * Get isLocalrailway
     *
     * @return string 
     */
    public function getIsLocalrailway()
    {
        return $this->isLocalrailway;
    }
}
