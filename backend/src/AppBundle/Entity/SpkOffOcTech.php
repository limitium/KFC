<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffOcTech
 *
 */
class SpkOffOcTech
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
     * @var integer
     *
     */
    private $storeysCountMin;

    /**
     * @var string
     *
     */
    private $storeysCountMax;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $leaseArea;

    /**
     * @var float
     *
     */
    private $freeArea;

    /**
     * @var float
     *
     */
    private $usefulArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $retailArea;

    /**
     * @var float
     *
     */
    private $livingArea;

    /**
     * @var float
     *
     */
    private $leaseAreaMin;

    /**
     * @var integer
     *
     */
    private $liftCount;

    /**
     * @var string
     *
     */
    private $liftDescription;

    /**
     * @var integer
     *
     */
    private $liftWeight;

    /**
     * @var float
     *
     */
    private $overlapWeight;

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
    private $ventilation;

    /**
     * @var string
     *
     */
    private $energyCategory;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $provider;

    /**
     * @var integer
     *
     */
    private $phoneLineCount;

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
     * @var string
     *
     */
    private $floorType;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var string
     *
     */
    private $kfDistrict;

    /**
     * @var string
     *
     */
    private $planning;

    /**
     * @var float
     *
     */
    private $storeyDeepness;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var integer
     *
     */
    private $stepAccessibility;

    /**
     * @var string
     *
     */
    private $columnStep;

    /**
     * @var string
     *
     */
    private $actuality;

    /**
     * @var integer
     *
     */
    private $complYear;

    /**
     * @var integer
     *
     */
    private $complQuarter;

    /**
     * @var float
     *
     */
    private $minFloorPlate;

    /**
     * @var float
     *
     */
    private $maxFloorPlate;

    /**
     * @var float
     *
     */
    private $vacancyRate;

    /**
     * @var float
     *
     */
    private $hotelArea;

    /**
     * @var string
     *
     */
    private $notInList;

    /**
     * @var string
     *
     */
    private $listing;

    /**
     * @var float
     *
     */
    private $freeSaleArea;

    /**
     * @var string
     *
     */
    private $mrefClass;

    /**
     * @var string
     *
     */
    private $exportSale;

    /**
     * @var string
     *
     */
    private $costNotPublish;

    /**
     * @var float
     *
     */
    private $ordListing;

    /**
     * @var string
     *
     */
    private $transportAccessibility;

    /**
     * @var string
     *
     */
    private $shuttleBus;

    /**
     * @var float
     *
     */
    private $lastFreeAreaSale;

    /**
     * @var float
     *
     */
    private $lastFreeAreaLease;


}
