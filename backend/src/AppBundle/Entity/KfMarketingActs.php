<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingActs
 *
 * @ORM\Table(name="KF_MARKETING_ACTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_ACTS_PRIMARY", columns={"KF_MARKETING_ACTSID"})}, indexes={@ORM\Index(name="KF_MARKETING_ACTS_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingActs
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_ACTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingActsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="ACT_TYPE", type="string", length=32, nullable=true)
     */
    private $actType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $actNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTOR", type="string", length=12, nullable=true)
     */
    private $contractor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_SIGN_DATE", type="datetime", nullable=true)
     */
    private $estimatedSignDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SIGN_DATE", type="datetime", nullable=true)
     */
    private $signDate;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICES", type="string", length=512, nullable=true)
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommission;

    /**
     * @var float
     *
     * @ORM\Column(name="ACT_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="ACT_VAT", type="float", precision=53, scale=0, nullable=true)
     */
    private $actVat;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_VAT", type="string", length=32, nullable=true)
     */
    private $typeVat;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENTUSER", type="string", length=12, nullable=true)
     */
    private $currentuser;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;


}
