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

    /**
     * Set itemid
     *
     * @param string $itemid
     * @return PicklistItem
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
     * @return PicklistItem
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
     * Set shorttext
     *
     * @param string $shorttext
     * @return PicklistItem
     */
    public function setShorttext($shorttext)
    {
        $this->shorttext = $shorttext;

        return $this;
    }

    /**
     * Get shorttext
     *
     * @return string 
     */
    public function getShorttext()
    {
        return $this->shorttext;
    }

    /**
     * Set picklistid
     *
     * @param string $picklistid
     * @return PicklistItem
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
     * Set list
     *
     * @param \AppBundle\Entity\Picklist $list
     * @return PicklistItem
     */
    public function setList(\AppBundle\Entity\Picklist $list = null)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get list
     *
     * @return \AppBundle\Entity\Picklist 
     */
    public function getList()
    {
        return $this->list;
    }
}
