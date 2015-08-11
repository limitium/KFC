<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffArcgis
 *
 * @ORM\Table(name="KF_OFF_ARCGIS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_ARCGIS_PRIMARY", columns={"KF_OFF_ARCGISID"})})
 * @ORM\Entity
 */
class KfOffArcgis
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OFF_ARCGISID", type="string", length=12, nullable=false)
     */
    private $kfOffArcgisid;

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
     * Set kfOffArcgisid
     *
     * @param string $kfOffArcgisid
     * @return KfOffArcgis
     */
    public function setKfOffArcgisid($kfOffArcgisid)
    {
        $this->kfOffArcgisid = $kfOffArcgisid;

        return $this;
    }

    /**
     * Get kfOffArcgisid
     *
     * @return string 
     */
    public function getKfOffArcgisid()
    {
        return $this->kfOffArcgisid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
     * @return KfOffArcgis
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
