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


}
