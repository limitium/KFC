<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropertyActions
 *
 * @ORM\Table(name="KF_PROPERTY_ACTIONS")
 * @ORM\Entity
 */
class KfPropertyActions
{
    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=50, nullable=true)
     */
    private $type;



    /**
     * Set userid
     *
     * @param string $userid
     * @return KfPropertyActions
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

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfPropertyActions
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfPropertyActions
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfPropertyActions
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return KfPropertyActions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
