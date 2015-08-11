<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactForSend
 *
 * @ORM\Table(name="KF_CONTACT_FOR_SEND", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CONTACT_FOR_SEND_PRIMARY", columns={"KF_CONTACT_FOR_SENDID"})})
 * @ORM\Entity
 */
class KfContactForSend
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CONTACT_FOR_SENDID", type="string", length=12, nullable=false)
     */
    private $kfContactForSendid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;



    /**
     * Set kfContactForSendid
     *
     * @param string $kfContactForSendid
     * @return KfContactForSend
     */
    public function setKfContactForSendid($kfContactForSendid)
    {
        $this->kfContactForSendid = $kfContactForSendid;

        return $this;
    }

    /**
     * Get kfContactForSendid
     *
     * @return string 
     */
    public function getKfContactForSendid()
    {
        return $this->kfContactForSendid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfContactForSend
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfContactForSend
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfContactForSend
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfContactForSend
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContactForSend
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
}
