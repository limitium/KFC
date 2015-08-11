<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContManagerForDelete
 *
 * @ORM\Table(name="KF_CONT_MANAGER_FOR_DELETE")
 * @ORM\Entity
 */
class KfContManagerForDelete
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=false)
     */
    private $managerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="days", type="integer", nullable=false)
     */
    private $days;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContManagerForDelete
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfContManagerForDelete
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set days
     *
     * @param integer $days
     * @return KfContManagerForDelete
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer 
     */
    public function getDays()
    {
        return $this->days;
    }
}
