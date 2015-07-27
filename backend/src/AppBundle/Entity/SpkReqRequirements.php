<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqRequirements
 *
 */
class SpkReqRequirements
{
    /**
     * @var string
     *
     */
    private $spkReqRequirementsid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

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
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var string
     *
     */
    private $industry;

    /**
     * @var string
     *
     */
    private $shopename;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var float
     *
     */
    private $avgbill;

    /**
     * @var float
     *
     */
    private $standing;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $sourceid;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $decorating;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var string
     *
     */
    private $direction;

    /**
     * @var string
     *
     */
    private $areaKf;

    /**
     * @var string
     *
     */
    private $areaMoscow;

    /**
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var string
     *
     */
    private $objectType;

    /**
     * @var float
     *
     */
    private $distanceToMkad;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $isTimberland;

    /**
     * @var string
     *
     */
    private $isFurniture;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $numberPerson;

    /**
     * @var string
     *
     */
    private $regionNotes;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var string
     *
     */
    private $isParking;

    /**
     * @var float
     *
     */
    private $roomsCountMin;

    /**
     * @var float
     *
     */
    private $roomsCountMax;

    /**
     * @var string
     *
     */
    private $regionid;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var string
     *
     */
    private $warehouseType;

    /**
     * @var string
     *
     */
    private $shosse;

    /**
     * @var float
     *
     */
    private $roomHeight;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isElectricity;

    /**
     * @var string
     *
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     */
    private $reqDepartment;

    /**
     * @var string
     *
     */
    private $decorationStyle;

    /**
     * @var string
     *
     */
    private $market;

    /**
     * @var string
     *
     */
    private $isCarPlace;

    /**
     * @var string
     *
     */
    private $isDecoration;

    /**
     * @var string
     *
     */
    private $reqSubtype;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var string
     *
     */
    private $countryHighway;

    /**
     * @var string
     *
     */
    private $countryStatus;

    /**
     * @var string
     *
     */
    private $industrialHighway;

    /**
     * @var float
     *
     */
    private $palletMin;

    /**
     * @var float
     *
     */
    private $palletMax;

    /**
     * @var string
     *
     */
    private $storageType;

    /**
     * @var string
     *
     */
    private $storageMethod;

    /**
     * @var float
     *
     */
    private $distanceToCity;

    /**
     * @var string
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $cityid;

    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $offNameRus;

    /**
     * @var string
     *
     */
    private $offNameEng;

    /**
     * @var string
     *
     */
    private $offStatus;

    /**
     * @var string
     *
     */
    private $offStatusKf;

    /**
     * @var string
     *
     */
    private $offObjType;

    /**
     * @var string
     *
     */
    private $offDelivery;

    /**
     * @var integer
     *
     */
    private $offStoreyMin;

    /**
     * @var integer
     *
     */
    private $offStoreyMax;

    /**
     * @var float
     *
     */
    private $offTotalArea;

    /**
     * @var float
     *
     */
    private $offRentMin;

    /**
     * @var float
     *
     */
    private $offRentMax;

    /**
     * @var float
     *
     */
    private $offCostMin;

    /**
     * @var float
     *
     */
    private $offCostMax;

    /**
     * @var string
     *
     */
    private $offProvider;

    /**
     * @var integer
     *
     */
    private $offStepToMetro;

    /**
     * @var string
     *
     */
    private $offPlaning;

    /**
     * @var integer
     *
     */
    private $offParkingMin;

    /**
     * @var integer
     *
     */
    private $offParkingMax;

    /**
     * @var integer
     *
     */
    private $offDelivQuarter;

    /**
     * @var string
     *
     */
    private $offBuildStage;

    /**
     * @var integer
     *
     */
    private $offDelivYear;

    /**
     * @var float
     *
     */
    private $offMaxBlockArea;

    /**
     * @var \DateTime
     *
     */
    private $offUpdated;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var string
     *
     */
    private $offIsListing;

    /**
     * @var string
     *
     */
    private $offDistrict;

    /**
     * @var string
     *
     */
    private $offDistrictMow;

    /**
     * @var string
     *
     */
    private $offStreetType;

    /**
     * @var string
     *
     */
    private $offMetro;

    /**
     * @var string
     *
     */
    private $offStreetid;


}
