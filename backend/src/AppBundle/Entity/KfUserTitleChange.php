<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTitleChange
 *
 * @ORM\Table(name="KF_USER_TITLE_CHANGE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TITLE_CHANGE_PRIMARY", columns={"KF_USER_TITLE_CHANGEID"})})
 * @ORM\Entity
 */
class KfUserTitleChange
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TITLE_CHANGEID", type="string", length=12, nullable=false)
     */
    private $kfUserTitleChangeid;

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
     * Set kfUserTitleChangeid
     *
     * @param string $kfUserTitleChangeid
     * @return KfUserTitleChange
     */
    public function setKfUserTitleChangeid($kfUserTitleChangeid)
    {
        $this->kfUserTitleChangeid = $kfUserTitleChangeid;

        return $this;
    }

    /**
     * Get kfUserTitleChangeid
     *
     * @return string 
     */
    public function getKfUserTitleChangeid()
    {
        return $this->kfUserTitleChangeid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
     * @return KfUserTitleChange
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
