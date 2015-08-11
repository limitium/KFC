<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTeleLog
 *
 * @ORM\Table(name="KF_TELE_LOG", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TELE_LOG_PRIMARY", columns={"KF_TELE_LOGID"})}, indexes={@ORM\Index(name="KF_TELE_LOG_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfTeleLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_LOGID", type="string", length=12, nullable=false)
     */
    private $kfTeleLogid;

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
     * @ORM\Column(name="STATUS", type="string", length=128, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT", type="string", length=128, nullable=true)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;



    /**
     * Set kfTeleLogid
     *
     * @param string $kfTeleLogid
     * @return KfTeleLog
     */
    public function setKfTeleLogid($kfTeleLogid)
    {
        $this->kfTeleLogid = $kfTeleLogid;

        return $this;
    }

    /**
     * Get kfTeleLogid
     *
     * @return string 
     */
    public function getKfTeleLogid()
    {
        return $this->kfTeleLogid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfTeleLog
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
     * @return KfTeleLog
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
     * @return KfTeleLog
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
     * @return KfTeleLog
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
     * @return KfTeleLog
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
     * Set status
     *
     * @param string $status
     * @return KfTeleLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return KfTeleLog
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfTeleLog
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
