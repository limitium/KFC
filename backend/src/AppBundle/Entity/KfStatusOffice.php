<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStatusOffice
 *
 * @ORM\Table(name="KF_STATUS_OFFICE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_STATUS_OFFICE_PRIMARY", columns={"KF_STATUS_OFFICEID"})})
 * @ORM\Entity
 */
class KfStatusOffice
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_STATUS_OFFICEID", type="string", length=12, nullable=false)
     */
    private $kfStatusOfficeid;

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
     * @ORM\Column(name="DIVISION", type="string", length=32, nullable=true)
     */
    private $division;



    /**
     * Set kfStatusOfficeid
     *
     * @param string $kfStatusOfficeid
     * @return KfStatusOffice
     */
    public function setKfStatusOfficeid($kfStatusOfficeid)
    {
        $this->kfStatusOfficeid = $kfStatusOfficeid;

        return $this;
    }

    /**
     * Get kfStatusOfficeid
     *
     * @return string 
     */
    public function getKfStatusOfficeid()
    {
        return $this->kfStatusOfficeid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfStatusOffice
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
     * @return KfStatusOffice
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
     * @return KfStatusOffice
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
     * @return KfStatusOffice
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
     * @return KfStatusOffice
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
     * Set division
     *
     * @param string $division
     * @return KfStatusOffice
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
}
