<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReportReport
 *
 * @ORM\Table(name="KF_REPORT_REPORT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_REPORT_REPORT_PRIMARY", columns={"KF_REPORT_REPORTID"})})
 * @ORM\Entity
 */
class KfReportReport
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_REPORT_REPORTID", type="string", length=12, nullable=false)
     */
    private $kfReportReportid;

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
     * @ORM\Column(name="CATEGORY", type="string", length=128, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORT_NAME", type="string", length=256, nullable=true)
     */
    private $reportName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="GENERATE_DATE", type="datetime", nullable=true)
     */
    private $generateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EGENERATE_DATE", type="datetime", nullable=true)
     */
    private $egenerateDate;



    /**
     * Set kfReportReportid
     *
     * @param string $kfReportReportid
     * @return KfReportReport
     */
    public function setKfReportReportid($kfReportReportid)
    {
        $this->kfReportReportid = $kfReportReportid;

        return $this;
    }

    /**
     * Get kfReportReportid
     *
     * @return string 
     */
    public function getKfReportReportid()
    {
        return $this->kfReportReportid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfReportReport
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
     * @return KfReportReport
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
     * @return KfReportReport
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
     * @return KfReportReport
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
     * Set category
     *
     * @param string $category
     * @return KfReportReport
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set reportName
     *
     * @param string $reportName
     * @return KfReportReport
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;

        return $this;
    }

    /**
     * Get reportName
     *
     * @return string 
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * Set generateDate
     *
     * @param \DateTime $generateDate
     * @return KfReportReport
     */
    public function setGenerateDate($generateDate)
    {
        $this->generateDate = $generateDate;

        return $this;
    }

    /**
     * Get generateDate
     *
     * @return \DateTime 
     */
    public function getGenerateDate()
    {
        return $this->generateDate;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfReportReport
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
     * Set egenerateDate
     *
     * @param \DateTime $egenerateDate
     * @return KfReportReport
     */
    public function setEgenerateDate($egenerateDate)
    {
        $this->egenerateDate = $egenerateDate;

        return $this;
    }

    /**
     * Get egenerateDate
     *
     * @return \DateTime 
     */
    public function getEgenerateDate()
    {
        return $this->egenerateDate;
    }
}
