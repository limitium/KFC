<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResArcgis
 *
 * @ORM\Table(name="KF_RES_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RES_ARCGIS_PRIMARY", columns={"KF_RES_ARCGISID"})})
 * @ORM\Entity
 */
class KfResArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RES_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfResArcgisid;

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
     * @var string
     *
     * @ORM\Column(name="AREA_RUS", type="string", length=128, nullable=true)
     */
    private $areaRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILD_QUARTER", type="string", length=1000, nullable=true)
     */
    private $buildQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="BUILD_YEAR", type="integer", nullable=true)
     */
    private $buildYear;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $livingArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKING", type="smallint", nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="INFRASTRUCTURE", type="string", length=1000, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDER", type="string", length=1000, nullable=true)
     */
    private $builder;

    /**
     * @var integer
     *
     * @ORM\Column(name="APARTMENTS_COUNT", type="smallint", nullable=true)
     */
    private $apartmentsCount;

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
     * Set kfResArcgisid
     *
     * @param string $kfResArcgisid
     * @return KfResArcgis
     */
    public function setKfResArcgisid($kfResArcgisid)
    {
        $this->kfResArcgisid = $kfResArcgisid;

        return $this;
    }

    /**
     * Get kfResArcgisid
     *
     * @return string 
     */
    public function getKfResArcgisid()
    {
        return $this->kfResArcgisid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * @return KfResArcgis
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
     * Set areaRus
     *
     * @param string $areaRus
     * @return KfResArcgis
     */
    public function setAreaRus($areaRus)
    {
        $this->areaRus = $areaRus;

        return $this;
    }

    /**
     * Get areaRus
     *
     * @return string 
     */
    public function getAreaRus()
    {
        return $this->areaRus;
    }

    /**
     * Set buildQuarter
     *
     * @param string $buildQuarter
     * @return KfResArcgis
     */
    public function setBuildQuarter($buildQuarter)
    {
        $this->buildQuarter = $buildQuarter;

        return $this;
    }

    /**
     * Get buildQuarter
     *
     * @return string 
     */
    public function getBuildQuarter()
    {
        return $this->buildQuarter;
    }

    /**
     * Set buildYear
     *
     * @param integer $buildYear
     * @return KfResArcgis
     */
    public function setBuildYear($buildYear)
    {
        $this->buildYear = $buildYear;

        return $this;
    }

    /**
     * Get buildYear
     *
     * @return integer 
     */
    public function getBuildYear()
    {
        return $this->buildYear;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfResArcgis
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
     * Set livingArea
     *
     * @param float $livingArea
     * @return KfResArcgis
     */
    public function setLivingArea($livingArea)
    {
        $this->livingArea = $livingArea;

        return $this;
    }

    /**
     * Get livingArea
     *
     * @return float 
     */
    public function getLivingArea()
    {
        return $this->livingArea;
    }

    /**
     * Set parking
     *
     * @param integer $parking
     * @return KfResArcgis
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return integer 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return KfResArcgis
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string 
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Set builder
     *
     * @param string $builder
     * @return KfResArcgis
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * Get builder
     *
     * @return string 
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Set apartmentsCount
     *
     * @param integer $apartmentsCount
     * @return KfResArcgis
     */
    public function setApartmentsCount($apartmentsCount)
    {
        $this->apartmentsCount = $apartmentsCount;

        return $this;
    }

    /**
     * Get apartmentsCount
     *
     * @return integer 
     */
    public function getApartmentsCount()
    {
        return $this->apartmentsCount;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return KfResArcgis
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
     * @return KfResArcgis
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
