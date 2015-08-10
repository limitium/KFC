<?php


namespace AppBundle\Form;


use Doctrine\Common\Collections\ArrayCollection;

class MetroDTO extends IdentifiableDTO
{
    private $subways;

    public function __construct()
    {
        $this->subways = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getSubways()
    {
        return $this->subways;
    }
}