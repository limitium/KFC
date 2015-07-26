<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/26/2015
 * Time: 4:53 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

class PicklistItem
{
    private $itemid;

    private $text;

    private $picklistid;

    private $shorttext;

    private $list;
}