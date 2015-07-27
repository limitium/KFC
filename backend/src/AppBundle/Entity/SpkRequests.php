<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequests
 *
 */
class SpkRequests
{
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
     * @var string
     *
     */
    private $managerid;

    /**
     * @var string
     *
     */
    private $department;

    /**
     * @var string
     *
     */
    private $reqType;

    /**
     * @var string
     *
     */
    private $subtype;

    /**
     * @var string
     *
     */
    private $status;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $requirements;

    /**
     * @var string
     *
     */
    private $regiondevelopment;

    /**
     * @var string
     *
     */
    private $terminals;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
     * @var string
     *
     */
    private $avgbill;

    /**
     * @var integer
     *
     */
    private $bedrooms;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var string
     *
     */
    private $commission;

    /**
     * @var string
     *
     */
    private $decorating;

    /**
     * @var float
     *
     */
    private $distanceToMkad;

    /**
     * @var string
     *
     */
    private $decorationStyle;

    /**
     * @var string
     *
     */
    private $direction;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $industry;

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
    private $isElectricity;

    /**
     * @var string
     *
     */
    private $isFurniture;

    /**
     * @var string
     *
     */
    private $isHeating;

    /**
     * @var string
     *
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     */
    private $isParking;

    /**
     * @var string
     *
     */
    private $isRailway;

    /**
     * @var string
     *
     */
    private $isTimberland;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var string
     *
     */
    private $market;

    /**
     * @var string
     *
     */
    private $numberPerson;

    /**
     * @var string
     *
     */
    private $objectType;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $regionNotes;

    /**
     * @var string
     *
     */
    private $regionid;

    /**
     * @var string
     *
     */
    private $reqDepartment;

    /**
     * @var string
     *
     */
    private $reqSubtype;

    /**
     * @var string
     *
     */
    private $rings;

    /**
     * @var float
     *
     */
    private $roomHeight;

    /**
     * @var float
     *
     */
    private $roomsCountMax;

    /**
     * @var float
     *
     */
    private $roomsCountMin;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $shopename;

    /**
     * @var string
     *
     */
    private $shosse;

    /**
     * @var string
     *
     */
    private $sourceid;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $standing;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $warehouseType;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var \DateTime
     *
     */
    private $convertedDate;

    /**
     * @var string
     *
     */
    private $importSource;

    /**
     * @var string
     *
     */
    private $duplicate;

    /**
     * @var string
     *
     */
    private $countryStatus;

    /**
     * @var string
     *
     */
    private $countryHighway;

    /**
     * @var string
     *
     */
    private $subdivision;

    /**
     * @var string
     *
     */
    private $notAvailable;

    /**
     * @var string
     *
     */
    private $isLand;

    /**
     * @var string
     *
     */
    private $isWarehouse;

    /**
     * @var string
     *
     */
    private $industrialHighway;

    /**
     * @var string
     *
     */
    private $isFirst;

    /**
     * @var string
     *
     */
    private $isRespStorage;

    /**
     * @var string
     *
     */
    private $marketSegment;

    /**
     * @var \DateTime
     *
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     */
    private $toDate;

    /**
     * @var string
     *
     */
    private $reportForm;

    /**
     * @var string
     *
     */
    private $reportLanguage;

    /**
     * @var string
     *
     */
    private $cityid;

    /**
     * @var string
     *
     */
    private $curCommission;

    /**
     * @var string
     *
     */
    private $valServices;

    /**
     * @var string
     *
     */
    private $valTarget;

    /**
     * @var string
     *
     */
    private $valSubtarget;

    /**
     * @var string
     *
     */
    private $invSubtype;

    /**
     * @var string
     *
     */
    private $invStage;

    /**
     * @var string
     *
     */
    private $invSubstage;

    /**
     * @var string
     *
     */
    private $invOwnership;

    /**
     * @var string
     *
     */
    private $invCapitalisation;

    /**
     * @var string
     *
     */
    private $invVatrep;

    /**
     * @var string
     *
     */
    private $invOperatingincome;

    /**
     * @var string
     *
     */
    private $invBook;

    /**
     * @var string
     *
     */
    private $bedroomsMax;

    /**
     * @var string
     *
     */
    private $bedroomsMin;

    /**
     * @var string
     *
     */
    private $country;

    /**
     * @var string
     *
     */
    private $seaview;

    /**
     * @var string
     *
     */
    private $waterfront;

    /**
     * @var string
     *
     */
    private $invCity;

    /**
     * @var string
     *
     */
    private $invCityType;

    /**
     * @var string
     *
     */
    private $responseid;

    /**
     * @var string
     *
     */
    private $websiteid;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var string
     *
     */
    private $districtid;

    /**
     * @var string
     *
     */
    private $retailType;

    /**
     * @var string
     *
     */
    private $retailAgencyContract;

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
     * @var float
     *
     */
    private $cbmMin;

    /**
     * @var float
     *
     */
    private $cbmMax;

    /**
     * @var float
     *
     */
    private $massMin;

    /**
     * @var float
     *
     */
    private $massMax;

    /**
     * @var float
     *
     */
    private $distanceToCity;

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
     * @var string
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $refferalid;

    /**
     * @var \DateTime
     *
     */
    private $deadline;

    /**
     * @var string
     *
     */
    private $prStatus;

    /**
     * @var string
     *
     */
    private $prCategory;

    /**
     * @var string
     *
     */
    private $isRenegotiation;

    /**
     * @var float
     *
     */
    private $budgetRurMin;

    /**
     * @var float
     *
     */
    private $budgetRurMax;

    /**
     * @var float
     *
     */
    private $budgetEuroMin;

    /**
     * @var float
     *
     */
    private $budgetEuroMax;

    /**
     * @var float
     *
     */
    private $budgetUsdMin;

    /**
     * @var float
     *
     */
    private $budgetUsdMax;

    /**
     * @var string
     *
     */
    private $currency;

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
     * @var string
     *
     */
    private $offPlaning;

    /**
     * @var integer
     *
     */
    private $offStepToMetro;

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
     * @var integer
     *
     */
    private $offDelivQuarter;

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

    /**
     * @var string
     *
     */
    private $targetAsq;

    /**
     * @var string
     *
     */
    private $ipoteka;

    /**
     * @var float
     *
     */
    private $distanceToMkadMax;

    /**
     * @var string
     *
     */
    private $offCostCurrency;


}
