<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResidentialBuffer
 *
 * @ORM\Table(name="SPK_RESIDENTIAL_BUFFER")
 * @ORM\Entity
 */
class SpkResidentialBuffer
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDC", type="string", length=10, nullable=true)
     */
    private $idc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARENTID", type="integer", nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1", type="string", length=32, nullable=true)
     */
    private $client1;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1_PHONE1", type="string", length=32, nullable=true)
     */
    private $client1Phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1_PHONE2", type="string", length=32, nullable=true)
     */
    private $client1Phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1_PHONE3", type="string", length=32, nullable=true)
     */
    private $client1Phone3;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1_PHONE4", type="string", length=32, nullable=true)
     */
    private $client1Phone4;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT1_EMAIL", type="string", length=32, nullable=true)
     */
    private $client1Email;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT2", type="string", length=32, nullable=true)
     */
    private $client2;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT2_PHONE1", type="string", length=32, nullable=true)
     */
    private $client2Phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT2_PHONE2", type="string", length=32, nullable=true)
     */
    private $client2Phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT2_PHONE3", type="string", length=32, nullable=true)
     */
    private $client2Phone3;

    /**
     * @var string
     *
     * @ORM\Column(name="CLIENT2_PHONE4", type="string", length=32, nullable=true)
     */
    private $client2Phone4;

    /**
     * @var string
     *
     * @ORM\Column(name="DOM", type="string", length=8, nullable=true)
     */
    private $dom;

    /**
     * @var string
     *
     * @ORM\Column(name="KORPUS", type="string", length=8, nullable=true)
     */
    private $korpus;

    /**
     * @var string
     *
     * @ORM\Column(name="STROENIE", type="string", length=8, nullable=true)
     */
    private $stroenie;

    /**
     * @var string
     *
     * @ORM\Column(name="DROB", type="string", length=8, nullable=true)
     */
    private $drob;

    /**
     * @var string
     *
     * @ORM\Column(name="TIRE", type="string", length=8, nullable=true)
     */
    private $tire;

    /**
     * @var string
     *
     * @ORM\Column(name="LITERA", type="string", length=8, nullable=true)
     */
    private $litera;

    /**
     * @var string
     *
     * @ORM\Column(name="VLADENIE", type="string", length=8, nullable=true)
     */
    private $vladenie;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_NUMBER", type="string", length=8, nullable=true)
     */
    private $propertyNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_ENTRANCE", type="string", length=8, nullable=true)
     */
    private $propertyEntrance;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY_RUS", type="string", length=32, nullable=true)
     */
    private $cityRus;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY_ENG", type="string", length=32, nullable=true)
     */
    private $cityEng;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA", type="string", length=64, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTRICT", type="string", length=64, nullable=true)
     */
    private $district;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET", type="string", length=64, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_TYPE", type="string", length=32, nullable=true)
     */
    private $streetType;

    /**
     * @var string
     *
     * @ORM\Column(name="METRO", type="string", length=64, nullable=true)
     */
    private $metro;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RUS", type="string", length=128, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ENG", type="string", length=128, nullable=true)
     */
    private $nameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="VN_KOD", type="string", length=32, nullable=true)
     */
    private $vnKod;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_TYPE", type="string", length=32, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_TYPE1", type="string", length=32, nullable=true)
     */
    private $bParkingType1;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_ENTRANCE1", type="string", length=32, nullable=true)
     */
    private $bParkingEntrance1;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_PARKING_COUNT1", type="smallint", nullable=true)
     */
    private $bParkingCount1;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_COMMENT1", type="string", length=64, nullable=true)
     */
    private $bParkingComment1;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_TYPE2", type="string", length=32, nullable=true)
     */
    private $bParkingType2;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_ENTRANCE2", type="string", length=32, nullable=true)
     */
    private $bParkingEntrance2;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_PARKING_COUNT2", type="smallint", nullable=true)
     */
    private $bParkingCount2;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_COMMENT2", type="string", length=64, nullable=true)
     */
    private $bParkingComment2;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_TYPE3", type="string", length=32, nullable=true)
     */
    private $bParkingType3;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_ENTRANCE3", type="string", length=32, nullable=true)
     */
    private $bParkingEntrance3;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_PARKING_COUNT3", type="smallint", nullable=true)
     */
    private $bParkingCount3;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PARKING_COMMENT3", type="string", length=64, nullable=true)
     */
    private $bParkingComment3;

    /**
     * @var string
     *
     * @ORM\Column(name="B_BUILDING_TYPE", type="string", length=32, nullable=true)
     */
    private $bBuildingType;

    /**
     * @var string
     *
     * @ORM\Column(name="B_BUILDING_CLASS", type="string", length=32, nullable=true)
     */
    private $bBuildingClass;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PROGRESS", type="string", length=32, nullable=true)
     */
    private $bProgress;

    /**
     * @var string
     *
     * @ORM\Column(name="B_BUILDING_START_QUARTER", type="string", length=32, nullable=true)
     */
    private $bBuildingStartQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_BUILDING_START_YEAR", type="smallint", nullable=true)
     */
    private $bBuildingStartYear;

    /**
     * @var string
     *
     * @ORM\Column(name="B_BUILDING_END_QUARTER", type="string", length=32, nullable=true)
     */
    private $bBuildingEndQuarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_BUILDING_END_YEAR", type="smallint", nullable=true)
     */
    private $bBuildingEndYear;

    /**
     * @var string
     *
     * @ORM\Column(name="B_ARCHITECTURE_STYLE", type="string", length=64, nullable=true)
     */
    private $bArchitectureStyle;

    /**
     * @var string
     *
     * @ORM\Column(name="B_CONSTRUCTION", type="string", length=32, nullable=true)
     */
    private $bConstruction;

    /**
     * @var float
     *
     * @ORM\Column(name="B_TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $bTotalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="B_LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $bLivingArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_APARTMENTS_COUNT", type="smallint", nullable=true)
     */
    private $bApartmentsCount;

    /**
     * @var float
     *
     * @ORM\Column(name="B_APARTMENT_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $bApartmentAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="B_APARTMENT_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $bApartmentAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="B_OSSATURE", type="string", length=64, nullable=true)
     */
    private $bOssature;

    /**
     * @var string
     *
     * @ORM\Column(name="B_OVERLAP", type="string", length=64, nullable=true)
     */
    private $bOverlap;

    /**
     * @var string
     *
     * @ORM\Column(name="B_OUTDOOR_WALL", type="string", length=64, nullable=true)
     */
    private $bOutdoorWall;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_STOREYS_COUNT_MIN", type="smallint", nullable=true)
     */
    private $bStoreysCountMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="B_STOREYS_COUNT_MAX", type="smallint", nullable=true)
     */
    private $bStoreysCountMax;

    /**
     * @var float
     *
     * @ORM\Column(name="B_CEILING_HEIGHT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $bCeilingHeightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="B_CEILING_HEIGHT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $bCeilingHeightMax;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PENTHOUSE", type="string", length=1, nullable=true)
     */
    private $bPenthouse;

    /**
     * @var float
     *
     * @ORM\Column(name="B_PENTHOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $bPenthouseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="B_PENTHOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $bPenthouseAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="B_TOWNHOUSE", type="string", length=1, nullable=true)
     */
    private $bTownhouse;

    /**
     * @var float
     *
     * @ORM\Column(name="B_TOWNHOUSE_AREA_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $bTownhouseAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="B_TOWNHOUSE_AREA_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $bTownhouseAreaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="B_OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $bOperationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="B_LIFTS", type="string", length=32, nullable=true)
     */
    private $bLifts;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PLANNING", type="string", length=32, nullable=true)
     */
    private $bPlanning;

    /**
     * @var string
     *
     * @ORM\Column(name="B_WINDOWS", type="string", length=32, nullable=true)
     */
    private $bWindows;

    /**
     * @var string
     *
     * @ORM\Column(name="B_TERRITORY", type="string", length=64, nullable=true)
     */
    private $bTerritory;

    /**
     * @var float
     *
     * @ORM\Column(name="B_TERRITORY_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $bTerritoryArea;

    /**
     * @var string
     *
     * @ORM\Column(name="B_SECURITY", type="string", length=64, nullable=true)
     */
    private $bSecurity;

    /**
     * @var string
     *
     * @ORM\Column(name="B_TECHNICAL_COMMENTS", type="string", length=512, nullable=true)
     */
    private $bTechnicalComments;

    /**
     * @var string
     *
     * @ORM\Column(name="B_INFRASTRUCTURE_COMMENTS", type="string", length=512, nullable=true)
     */
    private $bInfrastructureComments;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_COMMENTS_RUS", type="string", length=512, nullable=true)
     */
    private $briefCommentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_COMMENTS_ENG", type="string", length=512, nullable=true)
     */
    private $briefCommentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_COMMENTS_RUS", type="string", length=512, nullable=true)
     */
    private $siteCommentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_COMMENTS_ENG", type="string", length=512, nullable=true)
     */
    private $siteCommentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR1", type="string", length=1, nullable=true)
     */
    private $bPar1;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR2", type="string", length=1, nullable=true)
     */
    private $bPar2;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR3", type="string", length=1, nullable=true)
     */
    private $bPar3;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR4", type="string", length=1, nullable=true)
     */
    private $bPar4;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR5", type="string", length=1, nullable=true)
     */
    private $bPar5;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR6", type="string", length=1, nullable=true)
     */
    private $bPar6;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR7", type="string", length=1, nullable=true)
     */
    private $bPar7;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR8", type="string", length=1, nullable=true)
     */
    private $bPar8;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR9", type="string", length=1, nullable=true)
     */
    private $bPar9;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR10", type="string", length=1, nullable=true)
     */
    private $bPar10;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR11", type="string", length=1, nullable=true)
     */
    private $bPar11;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR12", type="string", length=1, nullable=true)
     */
    private $bPar12;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR13", type="string", length=1, nullable=true)
     */
    private $bPar13;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR14", type="string", length=1, nullable=true)
     */
    private $bPar14;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR15", type="string", length=1, nullable=true)
     */
    private $bPar15;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR16", type="string", length=1, nullable=true)
     */
    private $bPar16;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR17", type="string", length=1, nullable=true)
     */
    private $bPar17;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR18", type="string", length=1, nullable=true)
     */
    private $bPar18;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR19", type="string", length=1, nullable=true)
     */
    private $bPar19;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR20", type="string", length=1, nullable=true)
     */
    private $bPar20;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR21", type="string", length=1, nullable=true)
     */
    private $bPar21;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR22", type="string", length=1, nullable=true)
     */
    private $bPar22;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR23", type="string", length=1, nullable=true)
     */
    private $bPar23;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR24", type="string", length=1, nullable=true)
     */
    private $bPar24;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR25", type="string", length=1, nullable=true)
     */
    private $bPar25;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR26", type="string", length=1, nullable=true)
     */
    private $bPar26;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR27", type="string", length=1, nullable=true)
     */
    private $bPar27;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR28", type="string", length=1, nullable=true)
     */
    private $bPar28;

    /**
     * @var string
     *
     * @ORM\Column(name="B_PAR29", type="string", length=1, nullable=true)
     */
    private $bPar29;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rent;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="CAR_PLACE_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $carPlaceCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_TN_PERS", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionTnPers;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION_TN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commissionTn;

    /**
     * @var float
     *
     * @ORM\Column(name="COMMISSION_LR_PERS", type="float", precision=53, scale=0, nullable=true)
     */
    private $commissionLrPers;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSION_LR", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commissionLr;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACT_TYPE", type="string", length=128, nullable=true)
     */
    private $contractType;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREYS_COUNT", type="smallint", nullable=true)
     */
    private $storeysCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREY_NUMBER", type="smallint", nullable=true)
     */
    private $storeyNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="LIVING_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $livingArea;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeightMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOMS_COUNT", type="smallint", nullable=true)
     */
    private $roomsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEDROOMS_COUNT", type="smallint", nullable=true)
     */
    private $bedroomsCount;

    /**
     * @var float
     *
     * @ORM\Column(name="BATHROOMS_COUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $bathroomsCount;

    /**
     * @var string
     *
     * @ORM\Column(name="FURNITURE", type="string", length=64, nullable=true)
     */
    private $furniture;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_CONDITION", type="string", length=64, nullable=true)
     */
    private $specialCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="VIEWS", type="string", length=64, nullable=true)
     */
    private $views;

    /**
     * @var string
     *
     * @ORM\Column(name="SECURITY", type="string", length=64, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING", type="string", length=32, nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="CAR_PLACE", type="smallint", nullable=true)
     */
    private $carPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="FLOOR_TYPE", type="string", length=32, nullable=true)
     */
    private $floorType;

    /**
     * @var string
     *
     * @ORM\Column(name="WINDOWS_TYPE", type="string", length=32, nullable=true)
     */
    private $windowsType;

    /**
     * @var string
     *
     * @ORM\Column(name="DECORATION", type="string", length=32, nullable=true)
     */
    private $decoration;

    /**
     * @var string
     *
     * @ORM\Column(name="REPAIR_TYPE", type="string", length=32, nullable=true)
     */
    private $repairType;

    /**
     * @var string
     *
     * @ORM\Column(name="REPAIR_OLD", type="string", length=32, nullable=true)
     */
    private $repairOld;

    /**
     * @var string
     *
     * @ORM\Column(name="DESIGN", type="string", length=32, nullable=true)
     */
    private $design;

    /**
     * @var string
     *
     * @ORM\Column(name="WALLS", type="string", length=32, nullable=true)
     */
    private $walls;

    /**
     * @var string
     *
     * @ORM\Column(name="APARTMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $apartmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="PLANNING", type="string", length=32, nullable=true)
     */
    private $planning;

    /**
     * @var string
     *
     * @ORM\Column(name="A_TECHNICAL_COMMENTS", type="string", length=256, nullable=true)
     */
    private $aTechnicalComments;

    /**
     * @var string
     *
     * @ORM\Column(name="A_COMMERCIAL_COMMENTS", type="string", length=256, nullable=true)
     */
    private $aCommercialComments;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PARKING_COMMENTS", type="string", length=256, nullable=true)
     */
    private $aParkingComments;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR1", type="string", length=1, nullable=true)
     */
    private $aPar1;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR2", type="string", length=1, nullable=true)
     */
    private $aPar2;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR3", type="string", length=1, nullable=true)
     */
    private $aPar3;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR4", type="string", length=1, nullable=true)
     */
    private $aPar4;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR5", type="string", length=1, nullable=true)
     */
    private $aPar5;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR6", type="string", length=1, nullable=true)
     */
    private $aPar6;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR7", type="string", length=1, nullable=true)
     */
    private $aPar7;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR8", type="string", length=1, nullable=true)
     */
    private $aPar8;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR9", type="string", length=1, nullable=true)
     */
    private $aPar9;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR10", type="string", length=1, nullable=true)
     */
    private $aPar10;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR11", type="string", length=1, nullable=true)
     */
    private $aPar11;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR12", type="string", length=1, nullable=true)
     */
    private $aPar12;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR13", type="string", length=1, nullable=true)
     */
    private $aPar13;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR14", type="string", length=1, nullable=true)
     */
    private $aPar14;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR15", type="string", length=1, nullable=true)
     */
    private $aPar15;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR16", type="string", length=1, nullable=true)
     */
    private $aPar16;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR17", type="string", length=1, nullable=true)
     */
    private $aPar17;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR18", type="string", length=1, nullable=true)
     */
    private $aPar18;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR19", type="string", length=1, nullable=true)
     */
    private $aPar19;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR20", type="string", length=1, nullable=true)
     */
    private $aPar20;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR21", type="string", length=1, nullable=true)
     */
    private $aPar21;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR22", type="string", length=1, nullable=true)
     */
    private $aPar22;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR23", type="string", length=1, nullable=true)
     */
    private $aPar23;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR24", type="string", length=1, nullable=true)
     */
    private $aPar24;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR25", type="string", length=1, nullable=true)
     */
    private $aPar25;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR26", type="string", length=1, nullable=true)
     */
    private $aPar26;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR27", type="string", length=1, nullable=true)
     */
    private $aPar27;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR28", type="string", length=1, nullable=true)
     */
    private $aPar28;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR29", type="string", length=1, nullable=true)
     */
    private $aPar29;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR30", type="string", length=1, nullable=true)
     */
    private $aPar30;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR31", type="string", length=1, nullable=true)
     */
    private $aPar31;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR32", type="string", length=1, nullable=true)
     */
    private $aPar32;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR33", type="string", length=1, nullable=true)
     */
    private $aPar33;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR34", type="string", length=1, nullable=true)
     */
    private $aPar34;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR35", type="string", length=1, nullable=true)
     */
    private $aPar35;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR36", type="string", length=1, nullable=true)
     */
    private $aPar36;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR37", type="string", length=1, nullable=true)
     */
    private $aPar37;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR38", type="string", length=1, nullable=true)
     */
    private $aPar38;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR39", type="string", length=1, nullable=true)
     */
    private $aPar39;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR40", type="string", length=1, nullable=true)
     */
    private $aPar40;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR41", type="string", length=1, nullable=true)
     */
    private $aPar41;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR42", type="string", length=1, nullable=true)
     */
    private $aPar42;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR43", type="string", length=1, nullable=true)
     */
    private $aPar43;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR44", type="string", length=1, nullable=true)
     */
    private $aPar44;

    /**
     * @var string
     *
     * @ORM\Column(name="A_PAR45", type="string", length=1, nullable=true)
     */
    private $aPar45;


}
