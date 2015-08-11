<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRotationContacts
 *
 * @ORM\Table(name="KF_ROTATION_CONTACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ROTATION_CONTACTS_PRIMARY", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfRotationContacts
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

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
     * @ORM\Column(name="OLD_ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $oldAccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_CONTACTID", type="string", length=12, nullable=true)
     */
    private $newContactid;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $newAccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfRotationContacts
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfRotationContacts
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
     * @return KfRotationContacts
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
     * @return KfRotationContacts
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
     * @return KfRotationContacts
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
     * Set oldAccountid
     *
     * @param string $oldAccountid
     * @return KfRotationContacts
     */
    public function setOldAccountid($oldAccountid)
    {
        $this->oldAccountid = $oldAccountid;

        return $this;
    }

    /**
     * Get oldAccountid
     *
     * @return string 
     */
    public function getOldAccountid()
    {
        return $this->oldAccountid;
    }

    /**
     * Set newContactid
     *
     * @param string $newContactid
     * @return KfRotationContacts
     */
    public function setNewContactid($newContactid)
    {
        $this->newContactid = $newContactid;

        return $this;
    }

    /**
     * Get newContactid
     *
     * @return string 
     */
    public function getNewContactid()
    {
        return $this->newContactid;
    }

    /**
     * Set newAccountid
     *
     * @param string $newAccountid
     * @return KfRotationContacts
     */
    public function setNewAccountid($newAccountid)
    {
        $this->newAccountid = $newAccountid;

        return $this;
    }

    /**
     * Get newAccountid
     *
     * @return string 
     */
    public function getNewAccountid()
    {
        return $this->newAccountid;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfRotationContacts
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }
}
