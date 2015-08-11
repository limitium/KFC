<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStreetsEdited
 *
 * @ORM\Table(name="kf_streets_edited")
 * @ORM\Entity
 */
class KfStreetsEdited
{
    /**
     * @var string
     *
     * @ORM\Column(name="streetid", type="string", length=12, nullable=false)
     */
    private $streetid;

    /**
     * @var string
     *
     * @ORM\Column(name="street_rus_old", type="string", length=255, nullable=true)
     */
    private $streetRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="street_rus_new", type="string", length=255, nullable=true)
     */
    private $streetRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="streetid2", type="string", length=12, nullable=true)
     */
    private $streetid2;

    /**
     * @var string
     *
     * @ORM\Column(name="gisid1", type="string", length=12, nullable=true)
     */
    private $gisid1;

    /**
     * @var string
     *
     * @ORM\Column(name="gisid2", type="string", length=12, nullable=true)
     */
    private $gisid2;

    /**
     * @var string
     *
     * @ORM\Column(name="propertycount1", type="string", length=12, nullable=true)
     */
    private $propertycount1;

    /**
     * @var string
     *
     * @ORM\Column(name="propertycount2", type="string", length=12, nullable=true)
     */
    private $propertycount2;



    /**
     * Set streetid
     *
     * @param string $streetid
     * @return KfStreetsEdited
     */
    public function setStreetid($streetid)
    {
        $this->streetid = $streetid;

        return $this;
    }

    /**
     * Get streetid
     *
     * @return string 
     */
    public function getStreetid()
    {
        return $this->streetid;
    }

    /**
     * Set streetRusOld
     *
     * @param string $streetRusOld
     * @return KfStreetsEdited
     */
    public function setStreetRusOld($streetRusOld)
    {
        $this->streetRusOld = $streetRusOld;

        return $this;
    }

    /**
     * Get streetRusOld
     *
     * @return string 
     */
    public function getStreetRusOld()
    {
        return $this->streetRusOld;
    }

    /**
     * Set streetRusNew
     *
     * @param string $streetRusNew
     * @return KfStreetsEdited
     */
    public function setStreetRusNew($streetRusNew)
    {
        $this->streetRusNew = $streetRusNew;

        return $this;
    }

    /**
     * Get streetRusNew
     *
     * @return string 
     */
    public function getStreetRusNew()
    {
        return $this->streetRusNew;
    }

    /**
     * Set streetid2
     *
     * @param string $streetid2
     * @return KfStreetsEdited
     */
    public function setStreetid2($streetid2)
    {
        $this->streetid2 = $streetid2;

        return $this;
    }

    /**
     * Get streetid2
     *
     * @return string 
     */
    public function getStreetid2()
    {
        return $this->streetid2;
    }

    /**
     * Set gisid1
     *
     * @param string $gisid1
     * @return KfStreetsEdited
     */
    public function setGisid1($gisid1)
    {
        $this->gisid1 = $gisid1;

        return $this;
    }

    /**
     * Get gisid1
     *
     * @return string 
     */
    public function getGisid1()
    {
        return $this->gisid1;
    }

    /**
     * Set gisid2
     *
     * @param string $gisid2
     * @return KfStreetsEdited
     */
    public function setGisid2($gisid2)
    {
        $this->gisid2 = $gisid2;

        return $this;
    }

    /**
     * Get gisid2
     *
     * @return string 
     */
    public function getGisid2()
    {
        return $this->gisid2;
    }

    /**
     * Set propertycount1
     *
     * @param string $propertycount1
     * @return KfStreetsEdited
     */
    public function setPropertycount1($propertycount1)
    {
        $this->propertycount1 = $propertycount1;

        return $this;
    }

    /**
     * Get propertycount1
     *
     * @return string 
     */
    public function getPropertycount1()
    {
        return $this->propertycount1;
    }

    /**
     * Set propertycount2
     *
     * @param string $propertycount2
     * @return KfStreetsEdited
     */
    public function setPropertycount2($propertycount2)
    {
        $this->propertycount2 = $propertycount2;

        return $this;
    }

    /**
     * Get propertycount2
     *
     * @return string 
     */
    public function getPropertycount2()
    {
        return $this->propertycount2;
    }
}
