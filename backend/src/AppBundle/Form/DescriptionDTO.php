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

    /**
     * @param mixed $potoki
     */
    public function setPotoki($potoki)
    {
        $this->potoki = $potoki;
    }


}