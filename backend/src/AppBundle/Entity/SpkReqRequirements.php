<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqRequirements
 *
 * @ORM\Table(name="SPK_REQ_REQUIREMENTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQ_REQUIREMENTS_PRIMARY", columns={"SPK_REQ_REQUIREMENTSID"})}, indexes={@ORM\Index(name="SPK_REQ_REQUIREMENTS_SPK_REQUESTSID", columns={"SPK_REQUESTSID"})})
 * @ORM\Entity
 */
class SpkReqRequirements
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQ_REQUIREMENTSID", type="string", length=12, nullable=false)
     */
    private $spkReqRequirementsid;

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
     * @ORM\Column(name="BUDGET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMax;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY", type="string", length=64, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOPENAME", type="string", length=128, nullable=true)
     */
    private $shopename;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

    /**
     * @var float
     *
     * @ORM\Column(name="AVGBILL", type="float", precision=53, scale=0, nullable=true)
     */
    private $avgbill;

    /**
     * @var float
     *
     * @ORM\Column(name="STANDING", type="float", precision=53, scale=0, nullable=true)
     */
    private $standing;

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
     * @ORM\Column(name="SOURCEID", type="string", length=12, nullable=true)
     */
    private $sourceid;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=64, nullable=true)
     */
    private $parking;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTRY_DATE", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATING", type="string", length=128, nullable=true)
     */
    private $decorating;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAREDNESS", type="string", length=128, nullable=true)
     */
    private $preparedness;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTION", type="string", length=128, nullable=true)
     */
    private $direction;

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
     * @var string
     *
     * @ORM\Column(name="OBJECT_TYPE", type="string", length=128, nullable=true)
     */
    private $objectType;

    /**
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_MKAD", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToMkad;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS", type="integer", nullable=true)
     */
    private $bedrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_TIMBERLAND", type="string", length=1, nullable=true)
     */
    private $isTimberland;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_FURNITURE", type="string", length=1, nullable=true)
     */
    private $isFurniture;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=256, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMBER_PERSON", type="string", length=128, nullable=true)
     */
    private $numberPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION_NOTES", type="string", length=1024, nullable=true)
     */
    private $regionNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOD", type="string", length=64, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION", type="string", length=64, nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=64, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_PARKING", type="string", length=1, nullable=true)
     */
    private $isParking;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMin;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOMS_COUNT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomsCountMax;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONID", type="string", length=12, nullable=true)
     */
    private $regionid;

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
     * @var string
     *
     * @ORM\Column(name="WAREHOUSE_TYPE", type="string", length=64, nullable=true)
     */
    private $warehouseType;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOSSE", type="string", length=128, nullable=true)
     */
    private $shosse;

    /**
     * @var float
     *
     * @ORM\Column(name="ROOM_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $roomHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_HEATING", type="string", length=1, nullable=true)
     */
    private $isHeating;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RAILWAY", type="string", length=1, nullable=true)
     */
    private $isRailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_ELECTRICITY", type="string", length=1, nullable=true)
     */
    private $isElectricity;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LOCALRAILWAY", type="string", length=1, nullable=true)
     */
    private $isLocalrailway;

    /**
     * @var string
     *
     * @ORM\Column(name="REQ_DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $reqDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION_STYLE", type="string", length=128, nullable=true)
     */
    private $decorationStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET", type="string", length=64, nullable=true)
     */
    private $market;

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
     * @ORM\Column(name="REQ_SUBTYPE", type="string", length=32, nullable=true)
     */
    private $reqSubtype;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=32, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_HIGHWAY", type="string", length=128, nullable=true)
     */
    private $countryHighway;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY_STATUS", type="string", length=32, nullable=true)
     */
    private $countryStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_HIGHWAY", type="string", length=256, nullable=true)
     */
    private $industrialHighway;

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
     * @var float
     *
     * @ORM\Column(name="DISTANCE_TO_CITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $distanceToCity;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMPERATURE", type="string", length=32, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="CITYID", type="string", length=12, nullable=true)
     */
    private $cityid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_NAME_RUS", type="string", length=64, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="OFF_STEP_TO_METRO", type="smallint", nullable=true)
     */
    private $offStepToMetro;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_PLANING", type="string", length=64, nullable=true)
     */
    private $offPlaning;

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
     * @var integer
     *
     * @ORM\Column(name="OFF_DELIV_QUARTER", type="smallint", nullable=true)
     */
    private $offDelivQuarter;

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
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

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


}
