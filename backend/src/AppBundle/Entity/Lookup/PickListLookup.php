<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/24/2015
 * Time: 11:30 PM
 */

namespace AppBundle\Entity\Lookup;


class PickListLookup
{
    /**
     * @var string
     */
    private $type;

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}