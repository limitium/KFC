<?php


namespace AppBundle\Form;


use AppBundle\Form\IdentifiableDTO;

class PickListItemDTO extends IdentifiableDTO
{
    private $text;

    public function __construct($id, $text) {
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
}