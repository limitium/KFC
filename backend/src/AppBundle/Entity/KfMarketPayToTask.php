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


}
