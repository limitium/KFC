<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRetArcgis
 *
 * @ORM\Table(name="KF_RET_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RET_ARCGIS_PRIMARY", columns={"KF_RET_ARCGISID"})})
 * @ORM\Entity
 */
class KfRetArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RET_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfRetArcgisid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPNAME", type="string", length=16, nullable=true)
     */
    private $compname;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=10, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RUS", type="string", length=128, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SMALL_ADDRESS", type="string", length=1000, nullable=true)
     */
    private $smallAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="TRADE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="CONCEPTION_TYPE", type="string", length=64, nullable=true)
     */
    private $conceptionType;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=1000, nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATE_OPEN_YEAR", type="integer", nullable=true)
     */
    private $dateOpenYear;

    /**
     * @var string
     *
     * @ORM\Column(name="PROF", type="string", length=1, nullable=true)
     */
    private $prof;

    /**
     * @var string
     *
     * @ORM\Column(name="LANDLORD", type="string", length=1000, nullable=true)
     */
    private $landlord;

    /**
     * @var float
     *
     * @ORM\Column(name="LATITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="LONGTITUDE", type="float", precision=53, scale=0, nullable=true)
     */
    private $longtitude;



    /**
     * Set kfRetArcgisid
     *
     * @param string $kfRetArcgisid
     * @return KfRetArcgis
     */
    public function setKfRetArcgisid($kfRetArcgisid)
    {
        $this->kfRetArcgisid = $kfRetArcgisid;

        return $this;
    }

    /**
     * Get kfRetArcgisid
     *
     * @return string 
     */
    public function getKfRetArcgisid()
    {
        return $this->kfRetArcgisid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfRetArcgis
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
     * @return KfRetArcgis
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
     * @return KfRetArcgis
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
     * @return KfRetArcgis
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
     * @return KfRetArcgis
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
     * Set compname
     *
     * @param string $compname
     * @return KfRetArcgis
     */
    public function setCompname($compname)
    {
        $this->compname = $compname;

        return $this;
    }

    /**
     * Get compname
     *
     * @return string 
     */
    public function getCompname()
    {
        return $this->compname;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return KfRetArcgis
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameRus
     *
     * @param string $nameRus
     * @return KfRetArcgis
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string 
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set smallAddress
     *
     * @param string $smallAddress
     * @return KfRetArcgis
     */
    public function setSmallAddress($smallAddress)
    {
        $this->smallAddress = $smallAddress;

        return $this;
    }

    /**
     * Get smallAddress
     *
     * @return string 
     */
    public function getSmallAddress()
    {
        return $this->smallAddress;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfRetArcgis
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfRetArcgis
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
     * Set tradeArea
     *
     * @param float $tradeArea
     * @return KfRetArcgis
     */
    public function setTradeArea($tradeArea)
    {
        $this->tradeArea = $tradeArea;

        return $this;
    }

    /**
     * Get tradeArea
     *
     * @return float 
     */
    public function getTradeArea()
    {
        return $this->tradeArea;
    }

    /**
     * Set conceptionType
     *
     * @param string $conceptionType
     * @return KfRetArcgis
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

    /**
     * Set parking
     *
     * @param string $parking
     * @return KfRetArcgis
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return string 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set dateOpenYear
     *
     * @param integer $dateOpenYear
     * @return KfRetArcgis
     */
    public function setDateOpenYear($dateOpenYear)
    {
        $this->dateOpenYear = $dateOpenYear;

        return $this;
    }

    /**
     * Get dateOpenYear
     *
     * @return integer 
     */
    public function getDateOpenYear()
    {
        return $this->dateOpenYear;
    }

    /**
     * Set prof
     *
     * @param string $prof
     * @return KfRetArcgis
     */
    public function setProf($prof)
    {
        $this->prof = $prof;

        return $this;
    }

    /**
     * Get prof
     *
     * @return string 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set landlord
     *
     * @param string $landlord
     * @return KfRetArcgis
     */
    public function setLandlord($landlord)
    {
        $this->landlord = $landlord;

        return $this;
    }

    /**
     * Get landlord
     *
     * @return string 
     */
    public function getLandlord()
    {
        return $this->landlord;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return KfRetArcgis
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longtitude
     *
     * @param float $longtitude
     * @return KfRetArcgis
     */
    public function setLongtitude($longtitude)
    {
        $this->longtitude = $longtitude;

        return $this;
    }

    /**
     * Get longtitude
     *
     * @return float 
     */
    public function getLongtitude()
    {
        return $this->longtitude;
    }
}
