<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropExportToWeb
 *
 * @ORM\Table(name="KF_PROP_EXPORT_TO_WEB")
 * @ORM\Entity
 */
class KfPropExportToWeb
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPORTDATE", type="datetime", nullable=false)
     */
    private $exportdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SENDDATE", type="datetime", nullable=true)
     */
    private $senddate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfPropExportToWeb
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
     * Set userid
     *
     * @param string $userid
     * @return KfPropExportToWeb
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
     * Set exportdate
     *
     * @param \DateTime $exportdate
     * @return KfPropExportToWeb
     */
    public function setExportdate($exportdate)
    {
        $this->exportdate = $exportdate;

        return $this;
    }

    /**
     * Get exportdate
     *
     * @return \DateTime 
     */
    public function getExportdate()
    {
        return $this->exportdate;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfPropExportToWeb
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
     * Set senddate
     *
     * @param \DateTime $senddate
     * @return KfPropExportToWeb
     */
    public function setSenddate($senddate)
    {
        $this->senddate = $senddate;

        return $this;
    }

    /**
     * Get senddate
     *
     * @return \DateTime 
     */
    public function getSenddate()
    {
        return $this->senddate;
    }
}
