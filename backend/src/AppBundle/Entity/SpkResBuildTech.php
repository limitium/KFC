<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResBuildTech
 *
 */
class SpkResBuildTech
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
    private $buildingType;

    /**
     * @var string
     *
     */
    private $buildingClass;

    /**
     * @var string
     *
     */
    private $progress;

    /**
     * @var string
     *
     */
    private $buildingStartQuarter;

    /**
     * @var integer
     *
     */
    private $buildingStartYear;

    /**
     * @var string
     *
     */
    private $buildingEndQuarter;

    /**
     * @var integer
     *
     */
    private $buildingEndYear;

    /**
     * @var string
     *
     */
    private $architectureStyle;

    /**
     * @var string
     *
     */
    private $construction;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $livingArea;

    /**
     * @var integer
     *
     */
    private $apartmentsCount;

    /**
     * @var float
     *
     */
    private $apartmentAreaMin;

    /**
     * @var float
     *
     */
    private $apartmentAreaMax;

    /**
     * @var string
     *
     */
    private $ossature;

    /**
     * @var string
     *
     */
    private $overlap;

    /**
     * @var string
     *
     */
    private $outdoorWall;

    /**
     * @var integer
     *
     */
    private $storeysCountMin;

    /**
     * @var integer
     *
     */
    private $storeysCountMax;

    /**
     * @var float
     *
     */
    private $ceilingHeightMin;

    /**
     * @var float
     *
     */
    private $ceilingHeightMax;

    /**
     * @var string
     *
     */
    private $penthouse;

    /**
     * @var float
     *
     */
    private $penthouseAreaMin;

    /**
     * @var float
     *
     */
    private $penthouseAreaMax;

    /**
     * @var string
     *
     */
    private $townhouse;

    /**
     * @var float
     *
     */
    private $townhouseAreaMin;

    /**
     * @var float
     *
     */
    private $townhouseAreaMax;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var string
     *
     */
    private $lifts;

    /**
     * @var string
     *
     */
    private $planning;

    /**
     * @var string
     *
     */
    private $windows;

    /**
     * @var string
     *
     */
    private $territory;

    /**
     * @var float
     *
     */
    private $territoryArea;

    /**
     * @var string
     *
     */
    private $permission;

    /**
     * @var string
     *
     */
    private $leaseContract;

    /**
     * @var string
     *
     */
    private $outBuyContract;

    /**
     * @var string
     *
     */
    private $investmentContract;

    /**
     * @var integer
     *
     */
    private $forLease;

    /**
     * @var integer
     *
     */
    private $forSale;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;

    /**
     * @var float
     *
     */
    private $undergroundParking;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $numberOfFloors;

    /**
     * @var string
     *
     */
    private $currencyHouse;

    /**
     * @var string
     *
     */
    private $onlystreet;

    /**
     * @var integer
     *
     */
    private $ord;

    /**
     * @var string
     *
     */
    private $investmentProject;

    /**
     * @var float
     *
     */
    private $kfFee;

    /**
     * @var string
     *
     */
    private $categoryLandlord;


}
