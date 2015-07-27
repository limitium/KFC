<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestTech
 *
 */
class SpkInvestTech
{
    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $class;

    /**
     * @var string
     *
     */
    private $fitOut;

    /**
     * @var float
     *
     */
    private $landGa;

    /**
     * @var string
     *
     */
    private $leaseStatus;

    /**
     * @var float
     *
     */
    private $occupancy;

    /**
     * @var string
     *
     */
    private $individualSale;

    /**
     * @var float
     *
     */
    private $totalSqm;

    /**
     * @var float
     *
     */
    private $groundSqm;

    /**
     * @var float
     *
     */
    private $ugroundSqm;

    /**
     * @var float
     *
     */
    private $leaseableSqm;

    /**
     * @var float
     *
     */
    private $officeSqm;

    /**
     * @var float
     *
     */
    private $retailSqm;

    /**
     * @var float
     *
     */
    private $hotelSqm;

    /**
     * @var string
     *
     */
    private $complYear;

    /**
     * @var string
     *
     */
    private $landOwnerType;

    /**
     * @var string
     *
     */
    private $salePerBlock;

    /**
     * @var integer
     *
     */
    private $landLeaseTerm;

    /**
     * @var float
     *
     */
    private $groundParking;

    /**
     * @var float
     *
     */
    private $ugroundParking;

    /**
     * @var float
     *
     */
    private $multilevelParking;

    /**
     * @var string
     *
     */
    private $reconstrYear;

    /**
     * @var float
     *
     */
    private $industrialSqm;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $floor;

    /**
     * @var string
     *
     */
    private $ufloor;


}
