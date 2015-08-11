<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResDblContact
 *
 * @ORM\Table(name="kf_res_dbl_CONTACT")
 * @ORM\Entity
 */
class KfResDblContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID1", type="string", length=12, nullable=true)
     */
    private $contactid1;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID2", type="string", length=12, nullable=true)
     */
    private $contactid2;

    /**
     * @var string
     *
     * @ORM\Column(name="userID", type="string", length=12, nullable=true)
     */
    private $userid;



    /**
     * Set contactid1
     *
     * @param string $contactid1
     * @return KfResDblContact
     */
    public function setContactid1($contactid1)
    {
        $this->contactid1 = $contactid1;

        return $this;
    }

    /**
     * Get contactid1
     *
     * @return string 
     */
    public function getContactid1()
    {
        return $this->contactid1;
    }

    /**
     * Set contactid2
     *
     * @param string $contactid2
     * @return KfResDblContact
     */
    public function setContactid2($contactid2)
    {
        $this->contactid2 = $contactid2;

        return $this;
    }

    /**
     * Get contactid2
     *
     * @return string 
     */
    public function getContactid2()
    {
        return $this->contactid2;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfResDblContact
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
