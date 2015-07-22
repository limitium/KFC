<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestTech
 *
 * @ORM\Table(name="SPK_INVEST_TECH")
 * @ORM\Entity
 */
class SpkInvestTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="CLASS", type="string", length=16, nullable=true)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="string", length=32, nullable=true)
     */
    private $fitOut;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_GA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landGa;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_STATUS", type="string", length=128, nullable=true)
     */
    private $leaseStatus;

    /**
     * @var float
     *
     * @ORM\Column(name="OCCUPANCY", type="float", precision=53, scale=0, nullable=true)
     */
    private $occupancy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDIVIDUAL_SALE", type="string", length=1, nullable=true)
     */
    private $individualSale;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="GROUND_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $groundSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="UGROUND_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $ugroundSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="LEASEABLE_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseableSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="RETAIL_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $retailSqm;

    /**
     * @var float
     *
     * @ORM\Column(name="HOTEL_SQM", type="float", precision=53, scale=0, nullable=true)
     */
    private $hotelSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPL_YEAR", type="string", length=4, nullable=true)
     */
    private $complYear;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_OWNER_TYPE", type="string", length=32, nullable=true)
     */
    private $landOwnerType;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PER_BLOCK", type="string", length=1, nullable=true)
     */
    private $salePerBlock;

    /**
     * @var integer
     *
     * @ORM\Column(name="LAND_LEASE_TERM", type="integer", nullable=true)
     */
    private $landLeaseTerm;

    /**
     * @var float
     *
     * @ORM\Column(name="GROUND_PARKING", type="float", precision=53, scale=0, nullable=true)
     */
    private $groundParking;

    /**
     * @var float
     *
     * @ORM\Column(name="UGROUND_PARKING", type="float", precision=53, scale=0, nullable=true)
     */
    private $ugroundParking;

    /**
     * @var float
     *
     * @ORM\Column(name="MULTILEVEL_PARKING", type="float", precision=53, scale=0, nullable=true)
     */
    private $multilevelParking;

    /**
     * @var string
     *
     * @ORM\Column(name="RECONSTR_YEAR", type="string", length=4, nullable=true)
     */
    private $reconstrYear;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_SQM_", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialSqm;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS", type="smallint", nullable=true)
     */
    private $bedrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="FLOOR", type="string", length=32, nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="UFLOOR", type="string", length=32, nullable=true)
     */
    private $ufloor;


}
