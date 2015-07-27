<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResidentialBuffer
 *
 */
class SpkResidentialBuffer
{
    /**
     * @var string
     *
     */
    private $idc;

    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var integer
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $client1;

    /**
     * @var string
     *
     */
    private $client1Phone1;

    /**
     * @var string
     *
     */
    private $client1Phone2;

    /**
     * @var string
     *
     */
    private $client1Phone3;

    /**
     * @var string
     *
     */
    private $client1Phone4;

    /**
     * @var string
     *
     */
    private $client1Email;

    /**
     * @var string
     *
     */
    private $client2;

    /**
     * @var string
     *
     */
    private $client2Phone1;

    /**
     * @var string
     *
     */
    private $client2Phone2;

    /**
     * @var string
     *
     */
    private $client2Phone3;

    /**
     * @var string
     *
     */
    private $client2Phone4;

    /**
     * @var string
     *
     */
    private $dom;

    /**
     * @var string
     *
     */
    private $korpus;

    /**
     * @var string
     *
     */
    private $stroenie;

    /**
     * @var string
     *
     */
    private $drob;

    /**
     * @var string
     *
     */
    private $tire;

    /**
     * @var string
     *
     */
    private $litera;

    /**
     * @var string
     *
     */
    private $vladenie;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $propertyEntrance;

    /**
     * @var string
     *
     */
    private $cityRus;

    /**
     * @var string
     *
     */
    private $cityEng;

    /**
     * @var string
     *
     */
    private $area;

    /**
     * @var string
     *
     */
    private $district;

    /**
     * @var string
     *
     */
    private $street;

    /**
     * @var string
     *
     */
    private $streetType;

    /**
     * @var string
     *
     */
    private $metro;

    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @var string
     *
     */
    private $nameEng;

    /**
     * @var string
     *
     */
    private $vnKod;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var string
     *
     */
    private $propertyType;

    /**
     * @var string
     *
     */
    private $bParkingType1;

    /**
     * @var string
     *
     */
    private $bParkingEntrance1;

    /**
     * @var integer
     *
     */
    private $bParkingCount1;

    /**
     * @var string
     *
     */
    private $bParkingComment1;

    /**
     * @var string
     *
     */
    private $bParkingType2;

    /**
     * @var string
     *
     */
    private $bParkingEntrance2;

    /**
     * @var integer
     *
     */
    private $bParkingCount2;

    /**
     * @var string
     *
     */
    private $bParkingComment2;

    /**
     * @var string
     *
     */
    private $bParkingType3;

    /**
     * @var string
     *
     */
    private $bParkingEntrance3;

    /**
     * @var integer
     *
     */
    private $bParkingCount3;

    /**
     * @var string
     *
     */
    private $bParkingComment3;

    /**
     * @var string
     *
     */
    private $bBuildingType;

    /**
     * @var string
     *
     */
    private $bBuildingClass;

    /**
     * @var string
     *
     */
    private $bProgress;

    /**
     * @var string
     *
     */
    private $bBuildingStartQuarter;

    /**
     * @var integer
     *
     */
    private $bBuildingStartYear;

    /**
     * @var string
     *
     */
    private $bBuildingEndQuarter;

    /**
     * @var integer
     *
     */
    private $bBuildingEndYear;

    /**
     * @var string
     *
     */
    private $bArchitectureStyle;

    /**
     * @var string
     *
     */
    private $bConstruction;

    /**
     * @var float
     *
     */
    private $bTotalArea;

    /**
     * @var float
     *
     */
    private $bLivingArea;

    /**
     * @var integer
     *
     */
    private $bApartmentsCount;

    /**
     * @var float
     *
     */
    private $bApartmentAreaMin;

    /**
     * @var float
     *
     */
    private $bApartmentAreaMax;

    /**
     * @var string
     *
     */
    private $bOssature;

    /**
     * @var string
     *
     */
    private $bOverlap;

    /**
     * @var string
     *
     */
    private $bOutdoorWall;

    /**
     * @var integer
     *
     */
    private $bStoreysCountMin;

    /**
     * @var integer
     *
     */
    private $bStoreysCountMax;

    /**
     * @var float
     *
     */
    private $bCeilingHeightMin;

    /**
     * @var float
     *
     */
    private $bCeilingHeightMax;

    /**
     * @var string
     *
     */
    private $bPenthouse;

    /**
     * @var float
     *
     */
    private $bPenthouseAreaMin;

    /**
     * @var float
     *
     */
    private $bPenthouseAreaMax;

    /**
     * @var string
     *
     */
    private $bTownhouse;

    /**
     * @var float
     *
     */
    private $bTownhouseAreaMin;

    /**
     * @var float
     *
     */
    private $bTownhouseAreaMax;

    /**
     * @var string
     *
     */
    private $bOperationalCost;

    /**
     * @var string
     *
     */
    private $bLifts;

    /**
     * @var string
     *
     */
    private $bPlanning;

    /**
     * @var string
     *
     */
    private $bWindows;

    /**
     * @var string
     *
     */
    private $bTerritory;

    /**
     * @var float
     *
     */
    private $bTerritoryArea;

    /**
     * @var string
     *
     */
    private $bSecurity;

    /**
     * @var string
     *
     */
    private $bTechnicalComments;

    /**
     * @var string
     *
     */
    private $bInfrastructureComments;

    /**
     * @var string
     *
     */
    private $briefCommentsRus;

    /**
     * @var string
     *
     */
    private $briefCommentsEng;

    /**
     * @var string
     *
     */
    private $siteCommentsRus;

    /**
     * @var string
     *
     */
    private $siteCommentsEng;

    /**
     * @var string
     *
     */
    private $bPar1;

    /**
     * @var string
     *
     */
    private $bPar2;

    /**
     * @var string
     *
     */
    private $bPar3;

    /**
     * @var string
     *
     */
    private $bPar4;

    /**
     * @var string
     *
     */
    private $bPar5;

    /**
     * @var string
     *
     */
    private $bPar6;

    /**
     * @var string
     *
     */
    private $bPar7;

    /**
     * @var string
     *
     */
    private $bPar8;

    /**
     * @var string
     *
     */
    private $bPar9;

    /**
     * @var string
     *
     */
    private $bPar10;

    /**
     * @var string
     *
     */
    private $bPar11;

    /**
     * @var string
     *
     */
    private $bPar12;

    /**
     * @var string
     *
     */
    private $bPar13;

    /**
     * @var string
     *
     */
    private $bPar14;

    /**
     * @var string
     *
     */
    private $bPar15;

    /**
     * @var string
     *
     */
    private $bPar16;

    /**
     * @var string
     *
     */
    private $bPar17;

    /**
     * @var string
     *
     */
    private $bPar18;

    /**
     * @var string
     *
     */
    private $bPar19;

    /**
     * @var string
     *
     */
    private $bPar20;

    /**
     * @var string
     *
     */
    private $bPar21;

    /**
     * @var string
     *
     */
    private $bPar22;

    /**
     * @var string
     *
     */
    private $bPar23;

    /**
     * @var string
     *
     */
    private $bPar24;

    /**
     * @var string
     *
     */
    private $bPar25;

    /**
     * @var string
     *
     */
    private $bPar26;

    /**
     * @var string
     *
     */
    private $bPar27;

    /**
     * @var string
     *
     */
    private $bPar28;

    /**
     * @var string
     *
     */
    private $bPar29;

    /**
     * @var string
     *
     */
    private $rent;

    /**
     * @var string
     *
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $carPlaceCost;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var float
     *
     */
    private $commissionTnPers;

    /**
     * @var string
     *
     */
    private $commissionTn;

    /**
     * @var float
     *
     */
    private $commissionLrPers;

    /**
     * @var string
     *
     */
    private $commissionLr;

    /**
     * @var string
     *
     */
    private $contractType;

    /**
     * @var integer
     *
     */
    private $storeysCount;

    /**
     * @var integer
     *
     */
    private $storeyNumber;

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
     * @var integer
     *
     */
    private $roomsCount;

    /**
     * @var integer
     *
     */
    private $bedroomsCount;

    /**
     * @var float
     *
     */
    private $bathroomsCount;

    /**
     * @var string
     *
     */
    private $furniture;

    /**
     * @var string
     *
     */
    private $specialCondition;

    /**
     * @var string
     *
     */
    private $views;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $parking;

    /**
     * @var integer
     *
     */
    private $carPlace;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var string
     *
     */
    private $windowsType;

    /**
     * @var string
     *
     */
    private $decoration;

    /**
     * @var string
     *
     */
    private $repairType;

    /**
     * @var string
     *
     */
    private $repairOld;

    /**
     * @var string
     *
     */
    private $design;

    /**
     * @var string
     *
     */
    private $walls;

    /**
     * @var string
     *
     */
    private $apartmentType;

    /**
     * @var string
     *
     */
    private $planning;

    /**
     * @var string
     *
     */
    private $aTechnicalComments;

    /**
     * @var string
     *
     */
    private $aCommercialComments;

    /**
     * @var string
     *
     */
    private $aParkingComments;

    /**
     * @var string
     *
     */
    private $aPar1;

    /**
     * @var string
     *
     */
    private $aPar2;

    /**
     * @var string
     *
     */
    private $aPar3;

    /**
     * @var string
     *
     */
    private $aPar4;

    /**
     * @var string
     *
     */
    private $aPar5;

    /**
     * @var string
     *
     */
    private $aPar6;

    /**
     * @var string
     *
     */
    private $aPar7;

    /**
     * @var string
     *
     */
    private $aPar8;

    /**
     * @var string
     *
     */
    private $aPar9;

    /**
     * @var string
     *
     */
    private $aPar10;

    /**
     * @var string
     *
     */
    private $aPar11;

    /**
     * @var string
     *
     */
    private $aPar12;

    /**
     * @var string
     *
     */
    private $aPar13;

    /**
     * @var string
     *
     */
    private $aPar14;

    /**
     * @var string
     *
     */
    private $aPar15;

    /**
     * @var string
     *
     */
    private $aPar16;

    /**
     * @var string
     *
     */
    private $aPar17;

    /**
     * @var string
     *
     */
    private $aPar18;

    /**
     * @var string
     *
     */
    private $aPar19;

    /**
     * @var string
     *
     */
    private $aPar20;

    /**
     * @var string
     *
     */
    private $aPar21;

    /**
     * @var string
     *
     */
    private $aPar22;

    /**
     * @var string
     *
     */
    private $aPar23;

    /**
     * @var string
     *
     */
    private $aPar24;

    /**
     * @var string
     *
     */
    private $aPar25;

    /**
     * @var string
     *
     */
    private $aPar26;

    /**
     * @var string
     *
     */
    private $aPar27;

    /**
     * @var string
     *
     */
    private $aPar28;

    /**
     * @var string
     *
     */
    private $aPar29;

    /**
     * @var string
     *
     */
    private $aPar30;

    /**
     * @var string
     *
     */
    private $aPar31;

    /**
     * @var string
     *
     */
    private $aPar32;

    /**
     * @var string
     *
     */
    private $aPar33;

    /**
     * @var string
     *
     */
    private $aPar34;

    /**
     * @var string
     *
     */
    private $aPar35;

    /**
     * @var string
     *
     */
    private $aPar36;

    /**
     * @var string
     *
     */
    private $aPar37;

    /**
     * @var string
     *
     */
    private $aPar38;

    /**
     * @var string
     *
     */
    private $aPar39;

    /**
     * @var string
     *
     */
    private $aPar40;

    /**
     * @var string
     *
     */
    private $aPar41;

    /**
     * @var string
     *
     */
    private $aPar42;

    /**
     * @var string
     *
     */
    private $aPar43;

    /**
     * @var string
     *
     */
    private $aPar44;

    /**
     * @var string
     *
     */
    private $aPar45;


}
