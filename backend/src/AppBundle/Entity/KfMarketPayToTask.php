<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketPayToTask
 *
 * @ORM\Table(name="KF_MARKET_PAY_TO_TASK", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKET_PAY_TO_TASK_PRIMARY", columns={"KF_MARKET_PAY_TO_TASKID"})})
 * @ORM\Entity
 */
class KfMarketPayToTask
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKET_PAY_TO_TASKID", type="string", length=12, nullable=false)
     */
    private $kfMarketPayToTaskid;

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
     * @ORM\Column(name="CAMPAIGNTASKID", type="string", length=12, nullable=true)
     */
    private $campaigntaskid;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENTID", type="string", length=12, nullable=true)
     */
    private $paymentid;

    /**
     * @var string
     *
     * @ORM\Column(name="TASK_NAME", type="string", length=64, nullable=true)
     */
    private $taskName;

    /**
     * @var string
     *
     * @ORM\Column(name="TASK_COST_CLIENT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $taskCostClient;

    /**
     * @var string
     *
     * @ORM\Column(name="TASK_COST_PAY_CL", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $taskCostPayCl;

    /**
     * @var string
     *
     * @ORM\Column(name="TASK_COST_PAY_KF", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $taskCostPayKf;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $paymentType;



    /**
     * Set kfMarketPayToTaskid
     *
     * @param string $kfMarketPayToTaskid
     * @return KfMarketPayToTask
     */
    public function setKfMarketPayToTaskid($kfMarketPayToTaskid)
    {
        $this->kfMarketPayToTaskid = $kfMarketPayToTaskid;

        return $this;
    }

    /**
     * Get kfMarketPayToTaskid
     *
     * @return string 
     */
    public function getKfMarketPayToTaskid()
    {
        return $this->kfMarketPayToTaskid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketPayToTask
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
     * @return KfMarketPayToTask
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
     * @return KfMarketPayToTask
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
     * @return KfMarketPayToTask
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
     * Set campaigntaskid
     *
     * @param string $campaigntaskid
     * @return KfMarketPayToTask
     */
    public function setCampaigntaskid($campaigntaskid)
    {
        $this->campaigntaskid = $campaigntaskid;

        return $this;
    }

    /**
     * Get campaigntaskid
     *
     * @return string 
     */
    public function getCampaigntaskid()
    {
        return $this->campaigntaskid;
    }

    /**
     * Set paymentid
     *
     * @param string $paymentid
     * @return KfMarketPayToTask
     */
    public function setPaymentid($paymentid)
    {
        $this->paymentid = $paymentid;

        return $this;
    }

    /**
     * Get paymentid
     *
     * @return string 
     */
    public function getPaymentid()
    {
        return $this->paymentid;
    }

    /**
     * Set taskName
     *
     * @param string $taskName
     * @return KfMarketPayToTask
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * Get taskName
     *
     * @return string 
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Set taskCostClient
     *
     * @param string $taskCostClient
     * @return KfMarketPayToTask
     */
    public function setTaskCostClient($taskCostClient)
    {
        $this->taskCostClient = $taskCostClient;

        return $this;
    }

    /**
     * Get taskCostClient
     *
     * @return string 
     */
    public function getTaskCostClient()
    {
        return $this->taskCostClient;
    }

    /**
     * Set taskCostPayCl
     *
     * @param string $taskCostPayCl
     * @return KfMarketPayToTask
     */
    public function setTaskCostPayCl($taskCostPayCl)
    {
        $this->taskCostPayCl = $taskCostPayCl;

        return $this;
    }

    /**
     * Get taskCostPayCl
     *
     * @return string 
     */
    public function getTaskCostPayCl()
    {
        return $this->taskCostPayCl;
    }

    /**
     * Set taskCostPayKf
     *
     * @param string $taskCostPayKf
     * @return KfMarketPayToTask
     */
    public function setTaskCostPayKf($taskCostPayKf)
    {
        $this->taskCostPayKf = $taskCostPayKf;

        return $this;
    }

    /**
     * Get taskCostPayKf
     *
     * @return string 
     */
    public function getTaskCostPayKf()
    {
        return $this->taskCostPayKf;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return KfMarketPayToTask
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
}
