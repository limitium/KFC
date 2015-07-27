<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetLocation
 *
 */
class SpkRetLocation
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
    private $cityZone;

    /**
     * @var string
     *
     */
    private $cityDescription;

    /**
     * @var string
     *
     */
    private $nearMetro;

    /**
     * @var float
     *
     */
    private $distanceFromMetro;

    /**
     * @var string
     *
     */
    private $highway;

    /**
     * @var float
     *
     */
    private $distanceFromRoad;

    /**
     * @var string
     *
     */
    private $visualAvailabilityRoad;

    /**
     * @var string
     *
     */
    private $surroundedBuildingup;

    /**
     * @var string
     *
     */
    private $shattleBus;

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
    private $shuttleBusCost;

    /**
     * @var float
     *
     */
    private $footAvailability;

    /**
     * @var float
     *
     */
    private $vehicleAvailability;

    /**
     * @var string
     *
     */
    private $visualAvailabilityMetro;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetLocation
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
     * @return SpkRetLocation
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
     * @return SpkRetLocation
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
     * @return SpkRetLocation
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
     * @return SpkRetLocation
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
     * Set cityZone
     *
     * @param string $cityZone
     * @return SpkRetLocation
     */
    public function setCityZone($cityZone)
    {
        $this->cityZone = $cityZone;

        return $this;
    }

    /**
     * Get cityZone
     *
     * @return string 
     */
    public function getCityZone()
    {
        return $this->cityZone;
    }

    /**
     * Set cityDescription
     *
     * @param string $cityDescription
     * @return SpkRetLocation
     */
    public function setCityDescription($cityDescription)
    {
        $this->cityDescription = $cityDescription;

        return $this;
    }

    /**
     * Get cityDescription
     *
     * @return string 
     */
    public function getCityDescription()
    {
        return $this->cityDescription;
    }

    /**
     * Set nearMetro
     *
     * @param string $nearMetro
     * @return SpkRetLocation
     */
    public function setNearMetro($nearMetro)
    {
        $this->nearMetro = $nearMetro;

        return $this;
    }

    /**
     * Get nearMetro
     *
     * @return string 
     */
    public function getNearMetro()
    {
        return $this->nearMetro;
    }

    /**
     * Set distanceFromMetro
     *
     * @param float $distanceFromMetro
     * @return SpkRetLocation
     */
    public function setDistanceFromMetro($distanceFromMetro)
    {
        $this->distanceFromMetro = $distanceFromMetro;

        return $this;
    }

    /**
     * Get distanceFromMetro
     *
     * @return float 
     */
    public function getDistanceFromMetro()
    {
        return $this->distanceFromMetro;
    }

    /**
     * Set highway
     *
     * @param string $highway
     * @return SpkRetLocation
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;

        return $this;
    }

    /**
     * Get highway
     *
     * @return string 
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * Set distanceFromRoad
     *
     * @param float $distanceFromRoad
     * @return SpkRetLocation
     */
    public function setDistanceFromRoad($distanceFromRoad)
    {
        $this->distanceFromRoad = $distanceFromRoad;

        return $this;
    }

    /**
     * Get distanceFromRoad
     *
     * @return float 
     */
    public function getDistanceFromRoad()
    {
        return $this->distanceFromRoad;
    }

    /**
     * Set visualAvailabilityRoad
     *
     * @param string $visualAvailabilityRoad
     * @return SpkRetLocation
     */
    public function setVisualAvailabilityRoad($visualAvailabilityRoad)
    {
        $this->visualAvailabilityRoad = $visualAvailabilityRoad;

        return $this;
    }

    /**
     * Get visualAvailabilityRoad
     *
     * @return string 
     */
    public function getVisualAvailabilityRoad()
    {
        return $this->visualAvailabilityRoad;
    }

    /**
     * Set surroundedBuildingup
     *
     * @param string $surroundedBuildingup
     * @return SpkRetLocation
     */
    public function setSurroundedBuildingup($surroundedBuildingup)
    {
        $this->surroundedBuildingup = $surroundedBuildingup;

        return $this;
    }

    /**
     * Get surroundedBuildingup
     *
     * @return string 
     */
    public function getSurroundedBuildingup()
    {
        return $this->surroundedBuildingup;
    }

    /**
     * Set shattleBus
     *
     * @param string $shattleBus
     * @return SpkRetLocation
     */
    public function setShattleBus($shattleBus)
    {
        $this->shattleBus = $shattleBus;

        return $this;
    }

    /**
     * Get shattleBus
     *
     * @return string 
     */
    public function getShattleBus()
    {
        return $this->shattleBus;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetLocation
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
     * @return SpkRetLocation
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
     * Set shuttleBusCost
     *
     * @param string $shuttleBusCost
     * @return SpkRetLocation
     */
    public function setShuttleBusCost($shuttleBusCost)
    {
        $this->shuttleBusCost = $shuttleBusCost;

        return $this;
    }

    /**
     * Get shuttleBusCost
     *
     * @return string 
     */
    public function getShuttleBusCost()
    {
        return $this->shuttleBusCost;
    }

    /**
     * Set footAvailability
     *
     * @param float $footAvailability
     * @return SpkRetLocation
     */
    public function setFootAvailability($footAvailability)
    {
        $this->footAvailability = $footAvailability;

        return $this;
    }

    /**
     * Get footAvailability
     *
     * @return float 
     */
    public function getFootAvailability()
    {
        return $this->footAvailability;
    }

    /**
     * Set vehicleAvailability
     *
     * @param float $vehicleAvailability
     * @return SpkRetLocation
     */
    public function setVehicleAvailability($vehicleAvailability)
    {
        $this->vehicleAvailability = $vehicleAvailability;

        return $this;
    }

    /**
     * Get vehicleAvailability
     *
     * @return float 
     */
    public function getVehicleAvailability()
    {
        return $this->vehicleAvailability;
    }

    /**
     * Set visualAvailabilityMetro
     *
     * @param string $visualAvailabilityMetro
     * @return SpkRetLocation
     */
    public function setVisualAvailabilityMetro($visualAvailabilityMetro)
    {
        $this->visualAvailabilityMetro = $visualAvailabilityMetro;

        return $this;
    }

    /**
     * Get visualAvailabilityMetro
     *
     * @return string 
     */
    public function getVisualAvailabilityMetro()
    {
        return $this->visualAvailabilityMetro;
    }
}
