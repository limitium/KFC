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


}
