<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAdditionalHfUsers
 *
 * @ORM\Table(name="kf_additional_hf_users")
 * @ORM\Entity
 */
class KfAdditionalHfUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=true)
     */
    private $userid;



    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfAdditionalHfUsers
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
     * Set userid
     *
     * @param string $userid
     * @return KfAdditionalHfUsers
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
