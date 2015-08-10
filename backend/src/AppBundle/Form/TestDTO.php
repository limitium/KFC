<?php


namespace AppBundle\Form;


class TestDTO
{
    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @return string
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * @param string $nameRus
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;
    }


}