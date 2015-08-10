<?php


namespace AppBundle\Form;


class DescriptionDTO extends IdentifiableDTO
{
    private $potoki;

    /**
     * @return mixed
     */
    public function getPotoki()
    {
        return $this->potoki;
    }
}