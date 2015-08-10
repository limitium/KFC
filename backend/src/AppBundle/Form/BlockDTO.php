<?php


namespace AppBundle\Form;


class BlockDTO extends IdentifiableDTO
{
    private $floor;
    private $name;
    private $availableSq;
    private $costSqm;
    private $costSqmCurrency;
    private $vat;
    private $status;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAvailableSq()
    {
        return $this->availableSq;
    }

    /**
     * @return mixed
     */
    public function getCostSqm()
    {
        return $this->costSqm;
    }

    /**
     * @return mixed
     */
    public function getCostSqmCurrency()
    {
        return $this->costSqmCurrency;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $availableSq
     */
    public function setAvailableSq($availableSq)
    {
        $this->availableSq = $availableSq;
    }

    /**
     * @param mixed $costSqm
     */
    public function setCostSqm($costSqm)
    {
        $this->costSqm = $costSqm;
    }

    /**
     * @param mixed $costSqmCurrency
     */
    public function setCostSqmCurrency($costSqmCurrency)
    {
        $this->costSqmCurrency = $costSqmCurrency;
    }

    /**
     * @param mixed $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }




}