<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContact4sms
 *
 * @ORM\Table(name="kf_contact_4sms")
 * @ORM\Entity
 */
class KfContact4sms
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileprefix", type="string", length=32, nullable=true)
     */
    private $mobileprefix;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContact4sms
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
     * Set mobile
     *
     * @param string $mobile
     * @return KfContact4sms
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set mobileprefix
     *
     * @param string $mobileprefix
     * @return KfContact4sms
     */
    public function setMobileprefix($mobileprefix)
    {
        $this->mobileprefix = $mobileprefix;

        return $this;
    }

    /**
     * Get mobileprefix
     *
     * @return string 
     */
    public function getMobileprefix()
    {
        return $this->mobileprefix;
    }
}
