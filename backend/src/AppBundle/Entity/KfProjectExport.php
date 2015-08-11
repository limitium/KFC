<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfProjectExport
 *
 * @ORM\Table(name="KF_PROJECT_EXPORT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROJECT_EXPORT_PRIMARY", columns={"KF_PROJECTSID"})}, indexes={@ORM\Index(name="KF_PROJECT_EXPORT_SECCODEID", columns={"SECCODEID"})})
 * @ORM\Entity
 */
class KfProjectExport
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfProjectsid;

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
     * @ORM\Column(name="EXPORT_TO_WEB", type="string", length=1, nullable=true)
     */
    private $exportToWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_LOCATION", type="string", length=1, nullable=true)
     */
    private $showLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=true)
     */
    private $spkAddressid;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOW_CLIENT", type="string", length=1, nullable=true)
     */
    private $showClient;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;

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
     * @var float
     *
     * @ORM\Column(name="ACCURACY", type="float", precision=53, scale=0, nullable=true)
     */
    private $accuracy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS_TEXT", type="string", length=1024, nullable=true)
     */
    private $addressText;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;



    /**
     * Set kfProjectsid
     *
     * @param string $kfProjectsid
     * @return KfProjectExport
     */
    public function setKfProjectsid($kfProjectsid)
    {
        $this->kfProjectsid = $kfProjectsid;

        return $this;
    }

    /**
     * Get kfProjectsid
     *
     * @return string 
     */
    public function getKfProjectsid()
    {
        return $this->kfProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfProjectExport
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
     * @return KfProjectExport
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
     * @return KfProjectExport
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
     * @return KfProjectExport
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
     * Set exportToWeb
     *
     * @param string $exportToWeb
     * @return KfProjectExport
     */
    public function setExportToWeb($exportToWeb)
    {
        $this->exportToWeb = $exportToWeb;

        return $this;
    }

    /**
     * Get exportToWeb
     *
     * @return string 
     */
    public function getExportToWeb()
    {
        return $this->exportToWeb;
    }

    /**
     * Set showLocation
     *
     * @param string $showLocation
     * @return KfProjectExport
     */
    public function setShowLocation($showLocation)
    {
        $this->showLocation = $showLocation;

        return $this;
    }

    /**
     * Get showLocation
     *
     * @return string 
     */
    public function getShowLocation()
    {
        return $this->showLocation;
    }

    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return KfProjectExport
     */
    public function setSpkAddressid($spkAddressid)
    {
        $this->spkAddressid = $spkAddressid;

        return $this;
    }

    /**
     * Get spkAddressid
     *
     * @return string 
     */
    public function getSpkAddressid()
    {
        return $this->spkAddressid;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfProjectExport
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
     * Set showClient
     *
     * @param string $showClient
     * @return KfProjectExport
     */
    public function setShowClient($showClient)
    {
        $this->showClient = $showClient;

        return $this;
    }

    /**
     * Get showClient
     *
     * @return string 
     */
    public function getShowClient()
    {
        return $this->showClient;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfProjectExport
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return KfProjectExport
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
     * @return KfProjectExport
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
     * Set accuracy
     *
     * @param float $accuracy
     * @return KfProjectExport
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return float 
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set addressText
     *
     * @param string $addressText
     * @return KfProjectExport
     */
    public function setAddressText($addressText)
    {
        $this->addressText = $addressText;

        return $this;
    }

    /**
     * Get addressText
     *
     * @return string 
     */
    public function getAddressText()
    {
        return $this->addressText;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfProjectExport
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }
}
