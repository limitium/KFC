<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempRequest45503
 *
 * @ORM\Table(name="kf_temp_request_45503")
 * @ORM\Entity
 */
class KfTempRequest45503
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfTempRequest45503
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
     * @return KfTempRequest45503
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
}
