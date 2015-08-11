<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSitePropertyGps
 *
 * @ORM\Table(name="kf_site_property_gps")
 * @ORM\Entity
 */
class KfSitePropertyGps
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=12, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SLX_ID", type="string", length=12, nullable=false)
     */
    private $slxId;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_ID", type="string", length=12, nullable=true)
     */
    private $kfId;

    /**
     * @var string
     *
     * @ORM\Column(name="GPS_ID", type="string", length=50, nullable=true)
     */
    private $gpsId;

    /**
     * @var string
     *
     * @ORM\Column(name="ptype", type="string", length=64, nullable=true)
     */
    private $ptype;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT", type="string", length=10, nullable=true)
     */
    private $export;



    /**
     * Set id
     *
     * @param string $id
     * @return KfSitePropertyGps
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
     * Set slxId
     *
     * @param string $slxId
     * @return KfSitePropertyGps
     */
    public function setSlxId($slxId)
    {
        $this->slxId = $slxId;

        return $this;
    }

    /**
     * Get slxId
     *
     * @return string 
     */
    public function getSlxId()
    {
        return $this->slxId;
    }

    /**
     * Set kfId
     *
     * @param string $kfId
     * @return KfSitePropertyGps
     */
    public function setKfId($kfId)
    {
        $this->kfId = $kfId;

        return $this;
    }

    /**
     * Get kfId
     *
     * @return string 
     */
    public function getKfId()
    {
        return $this->kfId;
    }

    /**
     * Set gpsId
     *
     * @param string $gpsId
     * @return KfSitePropertyGps
     */
    public function setGpsId($gpsId)
    {
        $this->gpsId = $gpsId;

        return $this;
    }

    /**
     * Get gpsId
     *
     * @return string 
     */
    public function getGpsId()
    {
        return $this->gpsId;
    }

    /**
     * Set ptype
     *
     * @param string $ptype
     * @return KfSitePropertyGps
     */
    public function setPtype($ptype)
    {
        $this->ptype = $ptype;

        return $this;
    }

    /**
     * Get ptype
     *
     * @return string 
     */
    public function getPtype()
    {
        return $this->ptype;
    }

    /**
     * Set export
     *
     * @param string $export
     * @return KfSitePropertyGps
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
}
