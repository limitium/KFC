<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequests
 *
 * @ORM\Table(name="SPK_REQUESTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQUESTS_PRIMARY", columns={"SPK_REQUESTSID"})}, indexes={@ORM\Index(name="SPK_REQUESTS_ACCOUNTID", columns={"ACCOUNTID", "CONTACTID"}), @ORM\Index(name="KF_SR_IX_spkRequestsid_incl", columns={"SPK_REQUESTSID", "CREATEDATE", "MANAGERID", "STATUS", "CONTACTID", "CURRENCY"}), @ORM\Index(name="SPK_REQUESTS_CONTACTID", columns={"CONTACTID"}), @ORM\Index(name="SPK_REQUESTS_SECCODEID", columns={"SECCODEID"}), @ORM\Index(name="KF_SR_IX_MANAGERID", columns={"MANAGERID"}), @ORM\Index(name="_dta_index_SPK_REQUESTS_5_1191011324__K10_K1_K136_K11_3_7_8_65", columns={"STATUS", "SPK_REQUESTSID", "CURRENCY", "CONTACTID", "CREATEDATE", "DEPARTMENT", "REQ_TYPE", "SOURCEID"}), @ORM\Index(name="KF_SR_IX_DEPARTMENT", columns={"DEPARTMENT", "MANAGERID", "CONTACTID"}), @ORM\Index(name="budget and square", columns={"DEPARTMENT", "REQ_TYPE", "SUBTYPE", "CREATEDATE", "BUDGET_MAX", "BUDGET_MIN", "SQUARE_MAX", "SQUARE_MIN"})})
 * @ORM\Entity
 */
class SpkRequests
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsid;

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
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=128, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_TYPE", type="string", length=64, nullable=true)
     */
    private $reqType;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTYPE", type="string", length=64, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=4000, nullable=true)
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
     * @ORM\Column(name="REQUIREMENTS", type="string", length=4000, nullable=true)
     */
    private $requirements;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONDEVELOPMENT", type="string", length=1024, nullable=true)
     */
    private $regiondevelopment;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMINALS", type="string", length=1024, nullable=true)
     */
    private $terminals;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_KF", type="string", length=1024, nullable=true)
     */
    private $areaKf;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_MOSCOW", type="string", length=1024, nullable=true)
     */
    private $areaMoscow;

    /**
     * @var string
     *
     * @ORM\Column(name="AVGBILL", type="string", length=128, nullable=true)
     */
    private $avgbill;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS", type="integer", nullable=true)
     */
    private $bedrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

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
     * @ORM\Column(name="COMMISSION", type="string", length=64, nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATING", type="string", length=128, nullable=true)
     */
    private $decorating;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_MKAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToMkad;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION_STYLE", type="string", length=128, nullable=true)
     */
    private $decorationStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=64, nullable=true)
     */
    private $direction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTRY_DATE", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY", type="string", length=64, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_CAR_PLACE", type="string", length=1, nullable=true)
     */
    private $isCarPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_DECORATION", type="string", length=1, nullable=true)
     */
    private $isDecoration;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_ELECTRICITY", type="string", length=1, nullable=true)
     */
    private $isElectricity;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FURNITURE", type="string", length=1, nullable=true)
     */
    private $isFurniture;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_HEATING", type="string", length=1, nullable=true)
     */
    private $isHeating;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LOCALRAILWAY", type="string", length=1, nullable=true)
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PARKING", type="string", length=1, nullable=true)
     */
    private $isParking;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RAILWAY", type="string", length=1, nullable=true)
     */
    private $isRailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_TIMBERLAND", type="string", length=1, nullable=true)
     */
    private $isTimberland;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSquareMin;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=64, nullable=true)
     */
    private $market;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMBER_PERSON", type="string", length=128, nullable=true)
     */
    private $numberPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECT_TYPE", type="string", length=128, nullable=true)
     */
    private $objectType;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSquareMin;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=64, nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=64, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOD", type="string", length=64, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=128, nullable=true)
     */
    private $preparedness;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION_NOTES", type="string", length=1024, nullable=true)
     */
    private $regionNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONID", type="string", length=12, nullable=true)
     */
    private $regionid;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $reqDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_SUBTYPE", type="string", length=32, nullable=true)
     */
    private $reqSubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOM_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMax;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=256, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOPENAME", type="string", length=128, nullable=true)
     */
    private $shopename;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOSSE", type="string", length=128, nullable=true)
     */
    private $shosse;

    /**
     * @var string
     *
     * @ORM\Column(name="SOURCEID", type="string", length=12, nullable=true)
     */
    private $sourceid;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMax;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareMin;

    /**
     * @var float
     *
     * @ORM\Column(name="STANDING", type="float", precision=53, scale=0, nullable=true)
     */
    private $standing;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="WAREHOUSE_TYPE", type="string", length=64, nullable=true)
     */
    private $warehouseType;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=32, nullable=true)
     */
    private $furniture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CONVERTED_DATE", type="datetime", nullable=true)
     */
    private $convertedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT_SOURCE", type="string", length=64, nullable=true)
     */
    private $importSource;

    /**
     * @var string
     *
     * @ORM\Column(name="DUPLICATE", type="string", length=1, nullable=true)
     */
    private $duplicate;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_STATUS", type="string", length=32, nullable=true)
     */
    private $countryStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_HIGHWAY", type="string", length=128, nullable=true)
     */
    private $countryHighway;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBDIVISION", type="string", length=64, nullable=true)
     */
    private $subdivision;

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_AVAILABLE", type="string", length=1, nullable=true)
     */
    private $notAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LAND", type="string", length=1, nullable=true)
     */
    private $isLand;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_WAREHOUSE", type="string", length=1, nullable=true)
     */
    private $isWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_HIGHWAY", type="string", length=256, nullable=true)
     */
    private $industrialHighway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FIRST", type="string", length=1, nullable=true)
     */
    private $isFirst;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RESP_STORAGE", type="string", length=1, nullable=true)
     */
    private $isRespStorage;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_SEGMENT", type="string", length=128, nullable=true)
     */
    private $marketSegment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FROM_DATE", type="datetime", nullable=true)
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TO_DATE", type="datetime", nullable=true)
     */
    private $toDate;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORT_FORM", type="string", length=128, nullable=true)
     */
    private $reportForm;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORT_LANGUAGE", type="string", length=128, nullable=true)
     */
    private $reportLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="CITYID", type="string", length=12, nullable=true)
     */
    private $cityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CUR_COMMISSION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $curCommission;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL_SERVICES", type="string", length=256, nullable=true)
     */
    private $valServices;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL_TARGET", type="string", length=256, nullable=true)
     */
    private $valTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL_SUBTARGET", type="string", length=256, nullable=true)
     */
    private $valSubtarget;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_SUBTYPE", type="string", length=256, nullable=true)
     */
    private $invSubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_STAGE", type="string", length=256, nullable=true)
     */
    private $invStage;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_SUBSTAGE", type="string", length=256, nullable=true)
     */
    private $invSubstage;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_OWNERSHIP", type="string", length=128, nullable=true)
     */
    private $invOwnership;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_CAPITALISATION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $invCapitalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_VATREP", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $invVatrep;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_OPERATINGINCOME", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $invOperatingincome;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_BOOK", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $invBook;

    /**
     * @var string
     *
     * @ORM\Column(name="BEDROOMS_MAX", type="string", length=2, nullable=true)
     */
    private $bedroomsMax;

    /**
     * @var string
     *
     * @ORM\Column(name="BEDROOMS_MIN", type="string", length=2, nullable=true)
     */
    private $bedroomsMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY", type="string", length=64, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="SEAVIEW", type="string", length=1, nullable=true)
     */
    private $seaview;

    /**
     * @var string
     *
     * @ORM\Column(name="WATERFRONT", type="string", length=1, nullable=true)
     */
    private $waterfront;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_CITY", type="string", length=128, nullable=true)
     */
    private $invCity;

    /**
     * @var string
     *
     * @ORM\Column(name="INV_CITY_TYPE", type="string", length=32, nullable=true)
     */
    private $invCityType;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPONSEID", type="string", length=12, nullable=true)
     */
    private $responseid;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBSITEID", type="string", length=12, nullable=true)
     */
    private $websiteid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTRICTID", type="string", length=12, nullable=true)
     */
    private $districtid;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAIL_TYPE", type="string", length=64, nullable=true)
     */
    private $retailType;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAIL_AGENCY_CONTRACT", type="string", length=1, nullable=true)
     */
    private $retailAgencyContract;

    /**
     * @var float
     *
     * @ORM\Column(name="PALLET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $palletMin;

    /**
     * @var float
     *
     * @ORM\Column(name="PALLET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $palletMax;

    /**
     * @var float
     *
     * @ORM\Column(name="CBM_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $cbmMin;

    /**
     * @var float
     *
     * @ORM\Column(name="CBM_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $cbmMax;

    /**
     * @var float
     *
     * @ORM\Column(name="MASS_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $massMin;

    /**
     * @var float
     *
     * @ORM\Column(name="MASS_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $massMax;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_CITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToCity;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_TYPE", type="string", length=64, nullable=true)
     */
    private $storageType;

    /**
     * @var string
     *
     * @ORM\Column(name="STORAGE_METHOD", type="string", length=64, nullable=true)
     */
    private $storageMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPERATURE", type="string", length=32, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="REFFERALID", type="string", length=12, nullable=true)
     */
    private $refferalid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEADLINE", type="datetime", nullable=true)
     */
    private $deadline;

    /**
     * @var string
     *
     * @ORM\Column(name="PR_STATUS", type="string", length=32, nullable=true)
     */
    private $prStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="PR_CATEGORY", type="string", length=32, nullable=true)
     */
    private $prCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RENEGOTIATION", type="string", length=1, nullable=true)
     */
    private $isRenegotiation;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_RUR_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetRurMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_RUR_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetRurMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_EURO_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetEuroMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_EURO_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetEuroMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_USD_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetUsdMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_USD_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetUsdMax;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_NAME_RUS", type="string", length=256, nullable=true)
     */
    private $offNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_NAME_ENG", type="string", length=64, nullable=true)
     */
    private $offNameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_STATUS", type="string", length=32, nullable=true)
     */
    private $offStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_STATUS_KF", type="string", length=32, nullable=true)
     */
    private $offStatusKf;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_OBJ_TYPE", type="string", length=128, nullable=true)
     */
    private $offObjType;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_DELIVERY", type="string", length=256, nullable=true)
     */
    private $offDelivery;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_STOREY_MIN", type="smallint", nullable=true)
     */
    private $offStoreyMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_STOREY_MAX", type="smallint", nullable=true)
     */
    private $offStoreyMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $offTotalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_RENT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $offRentMin;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_RENT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $offRentMax;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $offCostMin;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $offCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_PROVIDER", type="string", length=512, nullable=true)
     */
    private $offProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_PLANING", type="string", length=64, nullable=true)
     */
    private $offPlaning;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_STEP_TO_METRO", type="smallint", nullable=true)
     */
    private $offStepToMetro;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_PARKING_MIN", type="smallint", nullable=true)
     */
    private $offParkingMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_PARKING_MAX", type="smallint", nullable=true)
     */
    private $offParkingMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_BUILD_STAGE", type="string", length=128, nullable=true)
     */
    private $offBuildStage;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_DELIV_YEAR", type="smallint", nullable=true)
     */
    private $offDelivYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFF_DELIV_QUARTER", type="smallint", nullable=true)
     */
    private $offDelivQuarter;

    /**
     * @var float
     *
     * @ORM\Column(name="OFF_MAX_BLOCK_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $offMaxBlockArea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OFF_UPDATED", type="datetime", nullable=true)
     */
    private $offUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_IS_LISTING", type="string", length=1, nullable=true)
     */
    private $offIsListing;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_DISTRICT", type="string", length=2048, nullable=true)
     */
    private $offDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_DISTRICT_MOW", type="string", length=512, nullable=true)
     */
    private $offDistrictMow;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_STREET_TYPE", type="string", length=64, nullable=true)
     */
    private $offStreetType;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_METRO", type="string", length=2048, nullable=true)
     */
    private $offMetro;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_STREETID", type="string", length=12, nullable=true)
     */
    private $offStreetid;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET_ASQ", type="string", length=64, nullable=true)
     */
    private $targetAsq;

    /**
     * @var string
     *
     * @ORM\Column(name="IPOTEKA", type="string", length=1, nullable=true)
     */
    private $ipoteka;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_MKAD_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToMkadMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_COST_CURRENCY", type="string", length=32, nullable=true)
     */
    private $offCostCurrency;


}
