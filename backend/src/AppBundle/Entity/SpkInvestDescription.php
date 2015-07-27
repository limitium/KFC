<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestDescription
 *
 */
class SpkInvestDescription
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
    private $obremenenie;

    /**
     * @var integer
     *
     */
    private $potoki;

    /**
     * @var string
     *
     */
    private $buildings;

    /**
     * @var string
     *
     */
    private $buildingsStatus;

    /**
     * @var string
     *
     */
    private $utilities;

    /**
     * @var string
     *
     */
    private $tenants;

    /**
     * @var float
     *
     */
    private $schoolSq;

    /**
     * @var float
     *
     */
    private $schoolPlace;

    /**
     * @var float
     *
     */
    private $kindergartenSq;

    /**
     * @var float
     *
     */
    private $kindergartenPlace;

    /**
     * @var float
     *
     */
    private $clinicSq;

    /**
     * @var float
     *
     */
    private $mfcSq;

    /**
     * @var float
     *
     */
    private $fokSq;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestDescription
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
     * @return SpkInvestDescription
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
     * @return SpkInvestDescription
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
     * @return SpkInvestDescription
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
     * @return SpkInvestDescription
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
     * Set obremenenie
     *
     * @param string $obremenenie
     * @return SpkInvestDescription
     */
    public function setObremenenie($obremenenie)
    {
        $this->obremenenie = $obremenenie;

        return $this;
    }

    /**
     * Get obremenenie
     *
     * @return string 
     */
    public function getObremenenie()
    {
        return $this->obremenenie;
    }

    /**
     * Set potoki
     *
     * @param integer $potoki
     * @return SpkInvestDescription
     */
    public function setPotoki($potoki)
    {
        $this->potoki = $potoki;

        return $this;
    }

    /**
     * Get potoki
     *
     * @return integer 
     */
    public function getPotoki()
    {
        return $this->potoki;
    }

    /**
     * Set buildings
     *
     * @param string $buildings
     * @return SpkInvestDescription
     */
    public function setBuildings($buildings)
    {
        $this->buildings = $buildings;

        return $this;
    }

    /**
     * Get buildings
     *
     * @return string 
     */
    public function getBuildings()
    {
        return $this->buildings;
    }

    /**
     * Set buildingsStatus
     *
     * @param string $buildingsStatus
     * @return SpkInvestDescription
     */
    public function setBuildingsStatus($buildingsStatus)
    {
        $this->buildingsStatus = $buildingsStatus;

        return $this;
    }

    /**
     * Get buildingsStatus
     *
     * @return string 
     */
    public function getBuildingsStatus()
    {
        return $this->buildingsStatus;
    }

    /**
     * Set utilities
     *
     * @param string $utilities
     * @return SpkInvestDescription
     */
    public function setUtilities($utilities)
    {
        $this->utilities = $utilities;

        return $this;
    }

    /**
     * Get utilities
     *
     * @return string 
     */
    public function getUtilities()
    {
        return $this->utilities;
    }

    /**
     * Set tenants
     *
     * @param string $tenants
     * @return SpkInvestDescription
     */
    public function setTenants($tenants)
    {
        $this->tenants = $tenants;

        return $this;
    }

    /**
     * Get tenants
     *
     * @return string 
     */
    public function getTenants()
    {
        return $this->tenants;
    }

    /**
     * Set schoolSq
     *
     * @param float $schoolSq
     * @return SpkInvestDescription
     */
    public function setSchoolSq($schoolSq)
    {
        $this->schoolSq = $schoolSq;

        return $this;
    }

    /**
     * Get schoolSq
     *
     * @return float 
     */
    public function getSchoolSq()
    {
        return $this->schoolSq;
    }

    /**
     * Set schoolPlace
     *
     * @param float $schoolPlace
     * @return SpkInvestDescription
     */
    public function setSchoolPlace($schoolPlace)
    {
        $this->schoolPlace = $schoolPlace;

        return $this;
    }

    /**
     * Get schoolPlace
     *
     * @return float 
     */
    public function getSchoolPlace()
    {
        return $this->schoolPlace;
    }

    /**
     * Set kindergartenSq
     *
     * @param float $kindergartenSq
     * @return SpkInvestDescription
     */
    public function setKindergartenSq($kindergartenSq)
    {
        $this->kindergartenSq = $kindergartenSq;

        return $this;
    }

    /**
     * Get kindergartenSq
     *
     * @return float 
     */
    public function getKindergartenSq()
    {
        return $this->kindergartenSq;
    }

    /**
     * Set kindergartenPlace
     *
     * @param float $kindergartenPlace
     * @return SpkInvestDescription
     */
    public function setKindergartenPlace($kindergartenPlace)
    {
        $this->kindergartenPlace = $kindergartenPlace;

        return $this;
    }

    /**
     * Get kindergartenPlace
     *
     * @return float 
     */
    public function getKindergartenPlace()
    {
        return $this->kindergartenPlace;
    }

    /**
     * Set clinicSq
     *
     * @param float $clinicSq
     * @return SpkInvestDescription
     */
    public function setClinicSq($clinicSq)
    {
        $this->clinicSq = $clinicSq;

        return $this;
    }

    /**
     * Get clinicSq
     *
     * @return float 
     */
    public function getClinicSq()
    {
        return $this->clinicSq;
    }

    /**
     * Set mfcSq
     *
     * @param float $mfcSq
     * @return SpkInvestDescription
     */
    public function setMfcSq($mfcSq)
    {
        $this->mfcSq = $mfcSq;

        return $this;
    }

    /**
     * Get mfcSq
     *
     * @return float 
     */
    public function getMfcSq()
    {
        return $this->mfcSq;
    }

    /**
     * Set fokSq
     *
     * @param float $fokSq
     * @return SpkInvestDescription
     */
    public function setFokSq($fokSq)
    {
        $this->fokSq = $fokSq;

        return $this;
    }

    /**
     * Get fokSq
     *
     * @return float 
     */
    public function getFokSq()
    {
        return $this->fokSq;
    }
}
