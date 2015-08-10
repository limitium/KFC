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


}