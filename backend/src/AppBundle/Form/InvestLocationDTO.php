<?php


namespace AppBundle\Form;


use Doctrine\Common\Collections\ArrayCollection;

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

    /**
     * @param ArrayCollection $magistrals
     */
    public function setMagistrals($magistrals)
    {
        $this->magistrals = $magistrals;
    }


}