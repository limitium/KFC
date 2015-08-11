<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLogKpi
 *
 * @ORM\Table(name="KF_LOG_KPI", uniqueConstraints={@ORM\UniqueConstraint(name="KF_LOG_KPI_PRIMARY", columns={"KF_LOG_KPIID"})})
 * @ORM\Entity
 */
class KfLogKpi
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_LOG_KPIID", type="string", length=12, nullable=false)
     */
    private $kfLogKpiid;

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
     * @ORM\Column(name="LOG_ACTION", type="string", length=128, nullable=true)
     */
    private $logAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="START_DATE", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END_DATE", type="datetime", nullable=true)
     */
    private $endDate;



    /**
     * Set kfLogKpiid
     *
     * @param string $kfLogKpiid
     * @return KfLogKpi
     */
    public function setKfLogKpiid($kfLogKpiid)
    {
        $this->kfLogKpiid = $kfLogKpiid;

        return $this;
    }

    /**
     * Get kfLogKpiid
     *
     * @return string 
     */
    public function getKfLogKpiid()
    {
        return $this->kfLogKpiid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfLogKpi
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
     * @return KfLogKpi
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
     * @return KfLogKpi
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
     * @return KfLogKpi
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
     * Set logAction
     *
     * @param string $logAction
     * @return KfLogKpi
     */
    public function setLogAction($logAction)
    {
        $this->logAction = $logAction;

        return $this;
    }

    /**
     * Get logAction
     *
     * @return string 
     */
    public function getLogAction()
    {
        return $this->logAction;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return KfLogKpi
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return KfLogKpi
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
