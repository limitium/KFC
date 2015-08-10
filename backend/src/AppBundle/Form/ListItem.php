<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/1/2015
 * Time: 5:19 PM
 */

namespace AppBundle\Service;


use AppBundle\Form\IdentifiableDTO;

class ListItem extends IdentifiableDTO
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