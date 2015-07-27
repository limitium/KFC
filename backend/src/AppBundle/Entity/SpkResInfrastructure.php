<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResInfrastructure
 *
 */
class SpkResInfrastructure
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
    private $parkingType1;

    /**
     * @var string
     *
     */
    private $parkingEntrance1;

    /**
     * @var integer
     *
     */
    private $parkingCount1;

    /**
     * @var string
     *
     */
    private $parkingComment1;

    /**
     * @var string
     *
     */
    private $parkingType2;

    /**
     * @var string
     *
     */
    private $parkingEntrance2;

    /**
     * @var integer
     *
     */
    private $parkingCount2;

    /**
     * @var string
     *
     */
    private $parkingComment2;

    /**
     * @var string
     *
     */
    private $parkingType3;

    /**
     * @var string
     *
     */
    private $parkingEntrance3;

    /**
     * @var integer
     *
     */
    private $parkingCount3;

    /**
     * @var string
     *
     */
    private $parkingComment3;

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
    private $washing;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResInfrastructure
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
     * @return SpkResInfrastructure
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
     * @return SpkResInfrastructure
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
     * @return SpkResInfrastructure
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
     * @return SpkResInfrastructure
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
     * Set parkingType1
     *
     * @param string $parkingType1
     * @return SpkResInfrastructure
     */
    public function setParkingType1($parkingType1)
    {
        $this->parkingType1 = $parkingType1;

        return $this;
    }

    /**
     * Get parkingType1
     *
     * @return string 
     */
    public function getParkingType1()
    {
        return $this->parkingType1;
    }

    /**
     * Set parkingEntrance1
     *
     * @param string $parkingEntrance1
     * @return SpkResInfrastructure
     */
    public function setParkingEntrance1($parkingEntrance1)
    {
        $this->parkingEntrance1 = $parkingEntrance1;

        return $this;
    }

    /**
     * Get parkingEntrance1
     *
     * @return string 
     */
    public function getParkingEntrance1()
    {
        return $this->parkingEntrance1;
    }

    /**
     * Set parkingCount1
     *
     * @param integer $parkingCount1
     * @return SpkResInfrastructure
     */
    public function setParkingCount1($parkingCount1)
    {
        $this->parkingCount1 = $parkingCount1;

        return $this;
    }

    /**
     * Get parkingCount1
     *
     * @return integer 
     */
    public function getParkingCount1()
    {
        return $this->parkingCount1;
    }

    /**
     * Set parkingComment1
     *
     * @param string $parkingComment1
     * @return SpkResInfrastructure
     */
    public function setParkingComment1($parkingComment1)
    {
        $this->parkingComment1 = $parkingComment1;

        return $this;
    }

    /**
     * Get parkingComment1
     *
     * @return string 
     */
    public function getParkingComment1()
    {
        return $this->parkingComment1;
    }

    /**
     * Set parkingType2
     *
     * @param string $parkingType2
     * @return SpkResInfrastructure
     */
    public function setParkingType2($parkingType2)
    {
        $this->parkingType2 = $parkingType2;

        return $this;
    }

    /**
     * Get parkingType2
     *
     * @return string 
     */
    public function getParkingType2()
    {
        return $this->parkingType2;
    }

    /**
     * Set parkingEntrance2
     *
     * @param string $parkingEntrance2
     * @return SpkResInfrastructure
     */
    public function setParkingEntrance2($parkingEntrance2)
    {
        $this->parkingEntrance2 = $parkingEntrance2;

        return $this;
    }

    /**
     * Get parkingEntrance2
     *
     * @return string 
     */
    public function getParkingEntrance2()
    {
        return $this->parkingEntrance2;
    }

    /**
     * Set parkingCount2
     *
     * @param integer $parkingCount2
     * @return SpkResInfrastructure
     */
    public function setParkingCount2($parkingCount2)
    {
        $this->parkingCount2 = $parkingCount2;

        return $this;
    }

    /**
     * Get parkingCount2
     *
     * @return integer 
     */
    public function getParkingCount2()
    {
        return $this->parkingCount2;
    }

    /**
     * Set parkingComment2
     *
     * @param string $parkingComment2
     * @return SpkResInfrastructure
     */
    public function setParkingComment2($parkingComment2)
    {
        $this->parkingComment2 = $parkingComment2;

        return $this;
    }

    /**
     * Get parkingComment2
     *
     * @return string 
     */
    public function getParkingComment2()
    {
        return $this->parkingComment2;
    }

    /**
     * Set parkingType3
     *
     * @param string $parkingType3
     * @return SpkResInfrastructure
     */
    public function setParkingType3($parkingType3)
    {
        $this->parkingType3 = $parkingType3;

        return $this;
    }

    /**
     * Get parkingType3
     *
     * @return string 
     */
    public function getParkingType3()
    {
        return $this->parkingType3;
    }

    /**
     * Set parkingEntrance3
     *
     * @param string $parkingEntrance3
     * @return SpkResInfrastructure
     */
    public function setParkingEntrance3($parkingEntrance3)
    {
        $this->parkingEntrance3 = $parkingEntrance3;

        return $this;
    }

    /**
     * Get parkingEntrance3
     *
     * @return string 
     */
    public function getParkingEntrance3()
    {
        return $this->parkingEntrance3;
    }

    /**
     * Set parkingCount3
     *
     * @param integer $parkingCount3
     * @return SpkResInfrastructure
     */
    public function setParkingCount3($parkingCount3)
    {
        $this->parkingCount3 = $parkingCount3;

        return $this;
    }

    /**
     * Get parkingCount3
     *
     * @return integer 
     */
    public function getParkingCount3()
    {
        return $this->parkingCount3;
    }

    /**
     * Set parkingComment3
     *
     * @param string $parkingComment3
     * @return SpkResInfrastructure
     */
    public function setParkingComment3($parkingComment3)
    {
        $this->parkingComment3 = $parkingComment3;

        return $this;
    }

    /**
     * Get parkingComment3
     *
     * @return string 
     */
    public function getParkingComment3()
    {
        return $this->parkingComment3;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkResInfrastructure
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
     * @return SpkResInfrastructure
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
     * Set washing
     *
     * @param string $washing
     * @return SpkResInfrastructure
     */
    public function setWashing($washing)
    {
        $this->washing = $washing;

        return $this;
    }

    /**
     * Get washing
     *
     * @return string 
     */
    public function getWashing()
    {
        return $this->washing;
    }
}
