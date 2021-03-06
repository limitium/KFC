<?php


namespace AppBundle\Form;


class LocationDTO extends IdentifiableDTO
{
    private $metro;
    private $investLocation;
    private $city;
    private $oblast;
    private $district;
    private $distanceMkad;
    private $street;
    private $streetType;
    private $dom;
    private $korpus;
    private $stroenie;
    private $drob;
    private $investRing;

    /**
     * @return mixed
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @return mixed
     */
    public function getInvestLocation()
    {
        return $this->investLocation;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getOblast()
    {
        return $this->oblast;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return mixed
     */
    public function getDistanceMkad()
    {
        return $this->distanceMkad;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getStreetType()
    {
        return $this->streetType;
    }

    /**
     * @return mixed
     */
    public function getDom()
    {
        return $this->dom;
    }

    /**
     * @return mixed
     */
    public function getKorpus()
    {
        return $this->korpus;
    }

    /**
     * @return mixed
     */
    public function getStroenie()
    {
        return $this->stroenie;
    }

    /**
     * @return mixed
     */
    public function getDrob()
    {
        return $this->drob;
    }

    /**
     * @return mixed
     */
    public function getInvestRing()
    {
        return $this->investRing;
    }

    /**
     * @param mixed $metro
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;
    }

    /**
     * @param mixed $investLocation
     */
    public function setInvestLocation($investLocation)
    {
        $this->investLocation = $investLocation;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $oblast
     */
    public function setOblast($oblast)
    {
        $this->oblast = $oblast;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @param mixed $distanceMkad
     */
    public function setDistanceMkad($distanceMkad)
    {
        $this->distanceMkad = $distanceMkad;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param mixed $streetType
     */
    public function setStreetType($streetType)
    {
        $this->streetType = $streetType;
    }

    /**
     * @param mixed $dom
     */
    public function setDom($dom)
    {
        $this->dom = $dom;
    }

    /**
     * @param mixed $korpus
     */
    public function setKorpus($korpus)
    {
        $this->korpus = $korpus;
    }

    /**
     * @param mixed $stroenie
     */
    public function setStroenie($stroenie)
    {
        $this->stroenie = $stroenie;
    }

    /**
     * @param mixed $drob
     */
    public function setDrob($drob)
    {
        $this->drob = $drob;
    }

    /**
     * @param mixed $investRing
     */
    public function setInvestRing($investRing)
    {
        $this->investRing = $investRing;
    }




}