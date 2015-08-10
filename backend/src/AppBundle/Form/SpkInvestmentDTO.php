<?php


namespace AppBundle\Form;

use Doctrine\Common\Collections\ArrayCollection;

class SpkInvestmentDTO extends MutableDTO
{
    private $nameRus;
    private $propertyType;
    private $status;
    private $segment;
    private $landlords;
    private $tenants;
    private $blocks;
    private $encumbrances;
    private $investSegments;
    private $location;
    private $commerc;
    private $tech;
    private $description;

    public function __construct()
    {
        $this->encumbrances = new ArrayCollection();
        $this->landlords = new ArrayCollection();
        $this->tenants = new ArrayCollection();
        $this->blocks = new ArrayCollection();
        $this->investSegments = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * @return mixed
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @return ArrayCollection
     */
    public function getLandlords()
    {
        return $this->landlords;
    }

    /**
     * @return ArrayCollection
     */
    public function getTenants()
    {
        return $this->tenants;
    }

    /**
     * @return ArrayCollection
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @return ArrayCollection
     */
    public function getEncumbrances()
    {
        return $this->encumbrances;
    }

    /**
     * @return ArrayCollection
     */
    public function getInvestSegments()
    {
        return $this->investSegments;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getCommerc()
    {
        return $this->commerc;
    }

    /**
     * @return mixed
     */
    public function getTech()
    {
        return $this->tech;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }



}
