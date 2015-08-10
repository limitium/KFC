<?php


namespace AppBundle\Form;


class InvestLocationDTO extends IdentifiableDTO
{
    private $magistrals;

    public function __construct()
    {
        $this->magistrals = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getMagistrals()
    {
        return $this->magistrals;
    }
}