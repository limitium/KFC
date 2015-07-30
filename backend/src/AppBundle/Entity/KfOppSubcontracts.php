<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppSubcontracts
 *
 * @ORM\Table(name="KF_OPP_SUBCONTRACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_SUBCONTRACTS_PRIMARY", columns={"KF_OPP_SUBCONTRACTSID"})}, indexes={@ORM\Index(name="KF_OPP_SUBCONTRACTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppSubcontracts
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_SUBCONTRACTSID", type="string", length=12, nullable=false)
     */
    private $kfOppSubcontractsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="SC_TYPE", type="string", length=32, nullable=true)
     */
    private $scType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_SEGMENT", type="string", length=128, nullable=true)
     */
    private $marketSegment;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="POTENTIAL_SUM", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $potentialSum;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUAL_SUM", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $actualSum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FORECAST_DATE", type="datetime", nullable=true)
     */
    private $forecastDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTUAL_DATE", type="datetime", nullable=true)
     */
    private $actualDate;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;


}
