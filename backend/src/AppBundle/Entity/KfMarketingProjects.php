<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingProjects
 *
 * @ORM\Table(name="KF_MARKETING_PROJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PROJECTS_PRIMARY", columns={"KF_MARKETING_PROJECTSID"})}, indexes={@ORM\Index(name="KF_SR_IX_ACCOUNTID", columns={"ACCOUNTID", "ESTIMATED_CLOSE", "SPK_PROPERTYID", "NOTES", "STAGE"})})
 * @ORM\Entity
 */
class KfMarketingProjects
{
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
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ESTIMATED_CLOSE", type="datetime", nullable=true)
     */
    private $estimatedClose;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_TYPE", type="string", length=64, nullable=true)
     */
    private $projectType;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT_NAME", type="string", length=128, nullable=true)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OPENED_DATE", type="datetime", nullable=true)
     */
    private $openedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="STAGE", type="string", length=64, nullable=true)
     */
    private $stage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONTRACT_DATE", type="datetime", nullable=true)
     */
    private $contractDate;

    /**
     * @var float
     *
     * @ORM\Column(name="POTENTIAL_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $potentialAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_NUMBER", type="string", length=32, nullable=true)
     */
    private $contractNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET", type="float", precision=53, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION_OPEN", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommissionOpen;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_COMMISSION_CLOSE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfCommissionClose;

    /**
     * @var float
     *
     * @ORM\Column(name="SUBCONTRACTS_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $subcontractsAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="PAYMENTS_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $paymentsAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CLOSEPROBABILITY", type="string", length=3, nullable=true)
     */
    private $closeprobability;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_PERCENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="BUDGET_APPROVED", type="string", length=1, nullable=true)
     */
    private $budgetApproved;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WIP", type="string", length=1, nullable=true)
     */
    private $isWip;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=50, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=50, nullable=true)
     */
    private $division;


}
