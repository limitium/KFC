<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTitlePaloChg
 *
 * @ORM\Table(name="KF_USER_TITLE_PALO_CHG", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TITLE_PALO_CHG_PRIMARY", columns={"KF_USER_TITLE_PALO_CHGID"})})
 * @ORM\Entity
 */
class KfUserTitlePaloChg
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TITLE_PALO_CHGID", type="string", length=12, nullable=false)
     */
    private $kfUserTitlePaloChgid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=200, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=200, nullable=true)
     */
    private $division;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CHANGE_DATE", type="datetime", nullable=true)
     */
    private $changeDate;



    /**
     * Set kfUserTitlePaloChgid
     *
     * @param string $kfUserTitlePaloChgid
     * @return KfUserTitlePaloChg
     */
    public function setKfUserTitlePaloChgid($kfUserTitlePaloChgid)
    {
        $this->kfUserTitlePaloChgid = $kfUserTitlePaloChgid;

        return $this;
    }

    /**
     * Get kfUserTitlePaloChgid
     *
     * @return string 
     */
    public function getKfUserTitlePaloChgid()
    {
        return $this->kfUserTitlePaloChgid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfUserTitlePaloChg
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
     * @return KfUserTitlePaloChg
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
     * @return KfUserTitlePaloChg
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
     * @return KfUserTitlePaloChg
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
     * Set userid
     *
     * @param string $userid
     * @return KfUserTitlePaloChg
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
     * Set department
     *
     * @param string $department
     * @return KfUserTitlePaloChg
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set division
     *
     * @param string $division
     * @return KfUserTitlePaloChg
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set changeDate
     *
     * @param \DateTime $changeDate
     * @return KfUserTitlePaloChg
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    /**
     * Get changeDate
     *
     * @return \DateTime 
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }
}
