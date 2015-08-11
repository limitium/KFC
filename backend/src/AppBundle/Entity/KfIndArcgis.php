<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfIndArcgis
 *
 * @ORM\Table(name="KF_IND_ARCGIS")
 * @ORM\Entity
 */
class KfIndArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_IND_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfIndArcgisid;

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
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

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
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPL_YEAR", type="string", length=50, nullable=true)
     */
    private $complYear;

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
     * @var string
     *
     * @ORM\Column(name="COMPL_YEAR_NEW", type="string", length=32, nullable=true)
     */
    private $complYearNew;



    /**
     * Set kfIndArcgisid
     *
     * @param string $kfIndArcgisid
     * @return KfIndArcgis
     */
    public function setKfIndArcgisid($kfIndArcgisid)
    {
        $this->kfIndArcgisid = $kfIndArcgisid;

        return $this;
    }

    /**
     * Get kfIndArcgisid
     *
     * @return string 
     */
    public function getKfIndArcgisid()
    {
        return $this->kfIndArcgisid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * Set kfClass
     *
     * @param string $kfClass
     * @return KfIndArcgis
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
     * Set status
     *
     * @param string $status
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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
     * Set officeArea
     *
     * @param float $officeArea
     * @return KfIndArcgis
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    /**
     * Get officeArea
     *
     * @return float 
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Set leaseArea
     *
     * @param float $leaseArea
     * @return KfIndArcgis
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
     * Set complYear
     *
     * @param string $complYear
     * @return KfIndArcgis
     */
    public function setComplYear($complYear)
    {
        $this->complYear = $complYear;

        return $this;
    }

    /**
     * Get complYear
     *
     * @return string 
     */
    public function getComplYear()
    {
        return $this->complYear;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return KfIndArcgis
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
     * @return KfIndArcgis
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

    /**
     * Set complYearNew
     *
     * @param string $complYearNew
     * @return KfIndArcgis
     */
    public function setComplYearNew($complYearNew)
    {
        $this->complYearNew = $complYearNew;

        return $this;
    }

    /**
     * Get complYearNew
     *
     * @return string 
     */
    public function getComplYearNew()
    {
        return $this->complYearNew;
    }
}
