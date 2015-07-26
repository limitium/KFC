<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

class Picklist
{
    private $itemid;

    private $text;

    private $items;

    private $picklistid;

    public function __construct() {
        $this->items = new ArrayCollection();
    }
}
