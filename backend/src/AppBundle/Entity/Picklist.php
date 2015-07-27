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

    /**
     * Set itemid
     *
     * @param string $itemid
     * @return Picklist
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return string 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Picklist
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set picklistid
     *
     * @param string $picklistid
     * @return Picklist
     */
    public function setPicklistid($picklistid)
    {
        $this->picklistid = $picklistid;

        return $this;
    }

    /**
     * Get picklistid
     *
     * @return string 
     */
    public function getPicklistid()
    {
        return $this->picklistid;
    }

    /**
     * Add items
     *
     * @param \AppBundle\Entity\PicklistItem $items
     * @return Picklist
     */
    public function addItem(\AppBundle\Entity\PicklistItem $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \AppBundle\Entity\PicklistItem $items
     */
    public function removeItem(\AppBundle\Entity\PicklistItem $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }
}
