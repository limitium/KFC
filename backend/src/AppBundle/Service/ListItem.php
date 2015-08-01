<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/1/2015
 * Time: 5:19 PM
 */

namespace AppBundle\Service;


class ListItem
{
    private $id;

    private $text;

    public function __construct($id, $text) {
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
}