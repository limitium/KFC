<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqCustomers
 *
 * @ORM\Table(name="SPK_OPP_REQ_CUSTOMERS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_REQ_CUSTOMERS_PRIMARY", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkOppReqCustomers
{
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
     * @var float
     *
     * @ORM\Column(name="SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMin;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY", type="string", length=64, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_NAME", type="string", length=64, nullable=true)
     */
    private $sectionName;

    /**
     * @var string
     *
     * @ORM\Column(name="CAPITAL_RAISING", type="string", length=1, nullable=true)
     */
    private $capitalRaising;

    /**
     * @var string
     *
     * @ORM\Column(name="BUYER", type="string", length=1, nullable=true)
     */
    private $buyer;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTYPE", type="string", length=32, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_SR_ONLY", type="string", length=1, nullable=true)
     */
    private $isSrOnly;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FROM", type="datetime", nullable=true)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_TO", type="datetime", nullable=true)
     */
    private $dateTo;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_ONLY", type="string", length=1, nullable=true)
     */
    private $emailOnly;

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_PRIVATE_CLIENT", type="string", length=1, nullable=true)
     */
    private $notPrivateClient;


}
