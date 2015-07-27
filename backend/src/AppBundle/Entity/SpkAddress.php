<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAddress
 *
 */
class SpkAddress
{
    /**
     * @var string
     *
     */
    private $spkAddressid;

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
    private $dom;

    /**
     * @var string
     *
     */
    private $korpus;

    /**
     * @var string
     *
     */
    private $stroenie;

    /**
     * @var string
     *
     */
    private $drob;

    /**
     * @var string
     *
     */
    private $tire;

    /**
     * @var string
     *
     */
    private $litera;

    /**
     * @var string
     *
     */
    private $vladenie;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $spkAreaid;

    /**
     * @var string
     *
     */
    private $spkDistrictid;

    /**
     * @var string
     *
     */
    private $spkStreetid;

    /**
     * @var string
     *
     */
    private $spkHighwayid;

    /**
     * @var integer
     *
     */
    private $gisid;

    /**
     * @var string
     *
     */
    private $newAddress;

    /**
     * @var string
     *
     */
    private $tempAddress;

    /**
     * @var float
     *
     */
    private $distanceMkad;

    /**
     * @var string
     *
     */
    private $importsource;

    /**
     * @var string
     *
     */
    private $kadastr;

    /**
     * @var string
     *
     */
    private $oblastid;

    /**
     * @var float
     *
     */
    private $latitude;

    /**
     * @var float
     *
     */
    private $longtitude;

    /**
     * @var float
     *
     */
    private $accuracy;

    /**
     * @var string
     *
     */
    private $centerOfPopulation;

    /**
     * @var string
     *
     */
    private $coordinate;



    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return SpkAddress
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkAddress
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
     * @return SpkAddress
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
     * @return SpkAddress
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
     * @return SpkAddress
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
     * Set dom
     *
     * @param string $dom
     * @return SpkAddress
     */
    public function setDom($dom)
    {
        $this->dom = $dom;

        return $this;
    }

    /**
     * Get dom
     *
     * @return string 
     */
    public function getDom()
    {
        return $this->dom;
    }

    /**
     * Set korpus
     *
     * @param string $korpus
     * @return SpkAddress
     */
    public function setKorpus($korpus)
    {
        $this->korpus = $korpus;

        return $this;
    }

    /**
     * Get korpus
     *
     * @return string 
     */
    public function getKorpus()
    {
        return $this->korpus;
    }

    /**
     * Set stroenie
     *
     * @param string $stroenie
     * @return SpkAddress
     */
    public function setStroenie($stroenie)
    {
        $this->stroenie = $stroenie;

        return $this;
    }

    /**
     * Get stroenie
     *
     * @return string 
     */
    public function getStroenie()
    {
        return $this->stroenie;
    }

    /**
     * Set drob
     *
     * @param string $drob
     * @return SpkAddress
     */
    public function setDrob($drob)
    {
        $this->drob = $drob;

        return $this;
    }

    /**
     * Get drob
     *
     * @return string 
     */
    public function getDrob()
    {
        return $this->drob;
    }

    /**
     * Set tire
     *
     * @param string $tire
     * @return SpkAddress
     */
    public function setTire($tire)
    {
        $this->tire = $tire;

        return $this;
    }

    /**
     * Get tire
     *
     * @return string 
     */
    public function getTire()
    {
        return $this->tire;
    }

    /**
     * Set litera
     *
     * @param string $litera
     * @return SpkAddress
     */
    public function setLitera($litera)
    {
        $this->litera = $litera;

        return $this;
    }

    /**
     * Get litera
     *
     * @return string 
     */
    public function getLitera()
    {
        return $this->litera;
    }

    /**
     * Set vladenie
     *
     * @param string $vladenie
     * @return SpkAddress
     */
    public function setVladenie($vladenie)
    {
        $this->vladenie = $vladenie;

        return $this;
    }

    /**
     * Get vladenie
     *
     * @return string 
     */
    public function getVladenie()
    {
        return $this->vladenie;
    }

    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkAddress
     */
    public function setSpkCityid($spkCityid)
    {
        $this->spkCityid = $spkCityid;

        return $this;
    }

    /**
     * Get spkCityid
     *
     * @return string 
     */
    public function getSpkCityid()
    {
        return $this->spkCityid;
    }

    /**
     * Set spkAreaid
     *
     * @param string $spkAreaid
     * @return SpkAddress
     */
    public function setSpkAreaid($spkAreaid)
    {
        $this->spkAreaid = $spkAreaid;

        return $this;
    }

    /**
     * Get spkAreaid
     *
     * @return string 
     */
    public function getSpkAreaid()
    {
        return $this->spkAreaid;
    }

    /**
     * Set spkDistrictid
     *
     * @param string $spkDistrictid
     * @return SpkAddress
     */
    public function setSpkDistrictid($spkDistrictid)
    {
        $this->spkDistrictid = $spkDistrictid;

        return $this;
    }

    /**
     * Get spkDistrictid
     *
     * @return string 
     */
    public function getSpkDistrictid()
    {
        return $this->spkDistrictid;
    }

    /**
     * Set spkStreetid
     *
     * @param string $spkStreetid
     * @return SpkAddress
     */
    public function setSpkStreetid($spkStreetid)
    {
        $this->spkStreetid = $spkStreetid;

        return $this;
    }

    /**
     * Get spkStreetid
     *
     * @return string 
     */
    public function getSpkStreetid()
    {
        return $this->spkStreetid;
    }

    /**
     * Set spkHighwayid
     *
     * @param string $spkHighwayid
     * @return SpkAddress
     */
    public function setSpkHighwayid($spkHighwayid)
    {
        $this->spkHighwayid = $spkHighwayid;

        return $this;
    }

    /**
     * Get spkHighwayid
     *
     * @return string 
     */
    public function getSpkHighwayid()
    {
        return $this->spkHighwayid;
    }

    /**
     * Set gisid
     *
     * @param integer $gisid
     * @return SpkAddress
     */
    public function setGisid($gisid)
    {
        $this->gisid = $gisid;

        return $this;
    }

    /**
     * Get gisid
     *
     * @return integer 
     */
    public function getGisid()
    {
        return $this->gisid;
    }

    /**
     * Set newAddress
     *
     * @param string $newAddress
     * @return SpkAddress
     */
    public function setNewAddress($newAddress)
    {
        $this->newAddress = $newAddress;

        return $this;
    }

    /**
     * Get newAddress
     *
     * @return string 
     */
    public function getNewAddress()
    {
        return $this->newAddress;
    }

    /**
     * Set tempAddress
     *
     * @param string $tempAddress
     * @return SpkAddress
     */
    public function setTempAddress($tempAddress)
    {
        $this->tempAddress = $tempAddress;

        return $this;
    }

    /**
     * Get tempAddress
     *
     * @return string 
     */
    public function getTempAddress()
    {
        return $this->tempAddress;
    }

    /**
     * Set distanceMkad
     *
     * @param float $distanceMkad
     * @return SpkAddress
     */
    public function setDistanceMkad($distanceMkad)
    {
        $this->distanceMkad = $distanceMkad;

        return $this;
    }

    /**
     * Get distanceMkad
     *
     * @return float 
     */
    public function getDistanceMkad()
    {
        return $this->distanceMkad;
    }

    /**
     * Set importsource
     *
     * @param string $importsource
     * @return SpkAddress
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
     * Set kadastr
     *
     * @param string $kadastr
     * @return SpkAddress
     */
    public function setKadastr($kadastr)
    {
        $this->kadastr = $kadastr;

        return $this;
    }

    /**
     * Get kadastr
     *
     * @return string 
     */
    public function getKadastr()
    {
        return $this->kadastr;
    }

    /**
     * Set oblastid
     *
     * @param string $oblastid
     * @return SpkAddress
     */
    public function setOblastid($oblastid)
    {
        $this->oblastid = $oblastid;

        return $this;
    }

    /**
     * Get oblastid
     *
     * @return string 
     */
    public function getOblastid()
    {
        return $this->oblastid;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return SpkAddress
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
     * @return SpkAddress
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
     * @return SpkAddress
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
     * Set centerOfPopulation
     *
     * @param string $centerOfPopulation
     * @return SpkAddress
     */
    public function setCenterOfPopulation($centerOfPopulation)
    {
        $this->centerOfPopulation = $centerOfPopulation;

        return $this;
    }

    /**
     * Get centerOfPopulation
     *
     * @return string 
     */
    public function getCenterOfPopulation()
    {
        return $this->centerOfPopulation;
    }

    /**
     * Set coordinate
     *
     * @param string $coordinate
     * @return SpkAddress
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;

        return $this;
    }

    /**
     * Get coordinate
     *
     * @return string 
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }
}
