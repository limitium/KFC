<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkProperty
 *
 */
class SpkProperty
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
    private $accountmanagerid;

    /**
     * @var string
     *
     */
    private $export;

    /**
     * @var string
     *
     */
    private $kfObject;

    /**
     * @var string
     *
     */
    private $spkAddressid;

    /**
     * @var string
     *
     */
    private $importsource;

    /**
     * @var string
     *
     */
    private $competitorObject;

    /**
     * @var string
     *
     */
    private $webaddress;

    /**
     * @var string
     *
     */
    private $regionObject;

    /**
     * @var integer
     *
     */
    private $oldid;

    /**
     * @var integer
     *
     */
    private $gpsId;

    /**
     * @var string
     */
    private $investmentPl;

    /**
     * @var \AppBundle\Entity\SpkInvestment
     */
    private $investment;


    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkProperty
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
     * @return SpkProperty
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
     * @return SpkProperty
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
     * @return SpkProperty
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
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return SpkProperty
     */
    public function setAccountmanagerid($accountmanagerid)
    {
        $this->accountmanagerid = $accountmanagerid;

        return $this;
    }

    /**
     * Get accountmanagerid
     *
     * @return string 
     */
    public function getAccountmanagerid()
    {
        return $this->accountmanagerid;
    }

    /**
     * Set export
     *
     * @param string $export
     * @return SpkProperty
     */
    public function setExport($export)
    {
        $this->export = $export;

        return $this;
    }

    /**
     * Get export
     *
     * @return string 
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Set kfObject
     *
     * @param string $kfObject
     * @return SpkProperty
     */
    public function setKfObject($kfObject)
    {
        $this->kfObject = $kfObject;

        return $this;
    }

    /**
     * Get kfObject
     *
     * @return string 
     */
    public function getKfObject()
    {
        return $this->kfObject;
    }

    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return SpkProperty
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
     * Set importsource
     *
     * @param string $importsource
     * @return SpkProperty
     */
    public function setImportsource($importsource)
    {
        $this->importsource = $importsource;

        return $this;
    }

    /**
     * Get importsource
     *
     * @return string 
     */
    public function getImportsource()
    {
        return $this->importsource;
    }

    /**
     * Set competitorObject
     *
     * @param string $competitorObject
     * @return SpkProperty
     */
    public function setCompetitorObject($competitorObject)
    {
        $this->competitorObject = $competitorObject;

        return $this;
    }

    /**
     * Get competitorObject
     *
     * @return string 
     */
    public function getCompetitorObject()
    {
        return $this->competitorObject;
    }

    /**
     * Set webaddress
     *
     * @param string $webaddress
     * @return SpkProperty
     */
    public function setWebaddress($webaddress)
    {
        $this->webaddress = $webaddress;

        return $this;
    }

    /**
     * Get webaddress
     *
     * @return string 
     */
    public function getWebaddress()
    {
        return $this->webaddress;
    }

    /**
     * Set regionObject
     *
     * @param string $regionObject
     * @return SpkProperty
     */
    public function setRegionObject($regionObject)
    {
        $this->regionObject = $regionObject;

        return $this;
    }

    /**
     * Get regionObject
     *
     * @return string 
     */
    public function getRegionObject()
    {
        return $this->regionObject;
    }

    /**
     * Set oldid
     *
     * @param integer $oldid
     * @return SpkProperty
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set gpsId
     *
     * @param integer $gpsId
     * @return SpkProperty
     */
    public function setGpsId($gpsId)
    {
        $this->gpsId = $gpsId;

        return $this;
    }

    /**
     * Get gpsId
     *
     * @return integer 
     */
    public function getGpsId()
    {
        return $this->gpsId;
    }

    /**
     * Set investmentPl
     *
     * @param string $investmentPl
     * @return SpkProperty
     */
    public function setInvestmentPl($investmentPl)
    {
        $this->investmentPl = $investmentPl;

        return $this;
    }

    /**
     * Get investmentPl
     *
     * @return string 
     */
    public function getInvestmentPl()
    {
        return $this->investmentPl;
    }

    /**
     * Set investment
     *
     * @param \AppBundle\Entity\SpkInvestment $investment
     * @return SpkProperty
     */
    public function setInvestment(\AppBundle\Entity\SpkInvestment $investment)
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Get investment
     *
     * @return \AppBundle\Entity\SpkInvestment 
     */
    public function getInvestment()
    {
        return $this->investment;
    }
}
