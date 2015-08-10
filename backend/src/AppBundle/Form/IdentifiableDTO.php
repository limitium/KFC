<?php


namespace AppBundle\Form;


class IdentifiableDTO
{
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}