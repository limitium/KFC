<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempContactEmails
 *
 * @ORM\Table(name="KF_TEMP_CONTACT_EMAILS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TEMP_CONTACT_EMAILS_PRIMARY", columns={"KF_TEMP_CONTACT_EMAILSID"})})
 * @ORM\Entity
 */
class KfTempContactEmails
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TEMP_CONTACT_EMAILSID", type="string", length=12, nullable=false)
     */
    private $kfTempContactEmailsid;

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
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=true)
     */
    private $email;



    /**
     * Set kfTempContactEmailsid
     *
     * @param string $kfTempContactEmailsid
     * @return KfTempContactEmails
     */
    public function setKfTempContactEmailsid($kfTempContactEmailsid)
    {
        $this->kfTempContactEmailsid = $kfTempContactEmailsid;

        return $this;
    }

    /**
     * Get kfTempContactEmailsid
     *
     * @return string 
     */
    public function getKfTempContactEmailsid()
    {
        return $this->kfTempContactEmailsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfTempContactEmails
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
     * @return KfTempContactEmails
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
     * @return KfTempContactEmails
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
     * @return KfTempContactEmails
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
     * @return KfTempContactEmails
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
     * Set email
     *
     * @param string $email
     * @return KfTempContactEmails
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
