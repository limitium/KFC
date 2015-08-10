<?php


namespace AppBundle\Form;


class TechDTO extends IdentifiableDTO
{
    private $salePerBlock;
    private $class;
    private $fitOut;
    private $buildingStatus;
    private $complYear;
    private $reconstrYear;
    private $leaseStatus;
    private $individualSale;
    private $groundSqm;
    private $ugroundSqm;
    private $officeSqm;
    private $retailSqm;
    private $industrialSqm;
    private $floor;
    private $ufloor;
    private $groundParking;
    private $ugroundParking;
    private $multilevelParking;
    private $landGa;
    private $landOwnerType;
    private $landLeaseTerm;

    /**
     * @return mixed
     */
    public function getSalePerBlock()
    {
        return $this->salePerBlock;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return mixed
     */
    public function getFitOut()
    {
        return $this->fitOut;
    }

    /**
     * @return mixed
     */
    public function getBuildingStatus()
    {
        return $this->buildingStatus;
    }

    /**
     * @return mixed
     */
    public function getComplYear()
    {
        return $this->complYear;
    }

    /**
     * @return mixed
     */
    public function getReconstrYear()
    {
        return $this->reconstrYear;
    }

    /**
     * @return mixed
     */
    public function getLeaseStatus()
    {
        return $this->leaseStatus;
    }

    /**
     * @return mixed
     */
    public function getIndividualSale()
    {
        return $this->individualSale;
    }

    /**
     * @return mixed
     */
    public function getGroundSqm()
    {
        return $this->groundSqm;
    }

    /**
     * @return mixed
     */
    public function getUgroundSqm()
    {
        return $this->ugroundSqm;
    }

    /**
     * @return mixed
     */
    public function getOfficeSqm()
    {
        return $this->officeSqm;
    }

    /**
     * @return mixed
     */
    public function getRetailSqm()
    {
        return $this->retailSqm;
    }

    /**
     * @return mixed
     */
    public function getIndustrialSqm()
    {
        return $this->industrialSqm;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @return mixed
     */
    public function getUfloor()
    {
        return $this->ufloor;
    }

    /**
     * @return mixed
     */
    public function getGroundParking()
    {
        return $this->groundParking;
    }

    /**
     * @return mixed
     */
    public function getUgroundParking()
    {
        return $this->ugroundParking;
    }

    /**
     * @return mixed
     */
    public function getMultilevelParking()
    {
        return $this->multilevelParking;
    }

    /**
     * @return mixed
     */
    public function getLandGa()
    {
        return $this->landGa;
    }

    /**
     * @return mixed
     */
    public function getLandOwnerType()
    {
        return $this->landOwnerType;
    }

    /**
     * @return mixed
     */
    public function getLandLeaseTerm()
    {
        return $this->landLeaseTerm;
    }

}