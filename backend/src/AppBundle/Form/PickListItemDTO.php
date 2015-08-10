<?php


namespace AppBundle\Form;


use AppBundle\Form\IdentifiableDTO;

class PickListItemDTO extends IdentifiableDTO
{
    private $text;

    public function __construct() {

    }

    public static function create($id, $text) {
        $instance = new self();
        $instance->id = $id;
        $instance->text = $text;
        return $instance;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}