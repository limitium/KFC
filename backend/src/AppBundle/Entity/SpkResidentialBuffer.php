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



    /**
     * Set idc
     *
     * @param string $idc
     * @return SpkResidentialBuffer
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;

        return $this;
    }

    /**
     * Get idc
     *
     * @return string 
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return SpkResidentialBuffer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return SpkResidentialBuffer
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set client1
     *
     * @param string $client1
     * @return SpkResidentialBuffer
     */
    public function setClient1($client1)
    {
        $this->client1 = $client1;

        return $this;
    }

    /**
     * Get client1
     *
     * @return string 
     */
    public function getClient1()
    {
        return $this->client1;
    }

    /**
     * Set client1Phone1
     *
     * @param string $client1Phone1
     * @return SpkResidentialBuffer
     */
    public function setClient1Phone1($client1Phone1)
    {
        $this->client1Phone1 = $client1Phone1;

        return $this;
    }

    /**
     * Get client1Phone1
     *
     * @return string 
     */
    public function getClient1Phone1()
    {
        return $this->client1Phone1;
    }

    /**
     * Set client1Phone2
     *
     * @param string $client1Phone2
     * @return SpkResidentialBuffer
     */
    public function setClient1Phone2($client1Phone2)
    {
        $this->client1Phone2 = $client1Phone2;

        return $this;
    }

    /**
     * Get client1Phone2
     *
     * @return string 
     */
    public function getClient1Phone2()
    {
        return $this->client1Phone2;
    }

    /**
     * Set client1Phone3
     *
     * @param string $client1Phone3
     * @return SpkResidentialBuffer
     */
    public function setClient1Phone3($client1Phone3)
    {
        $this->client1Phone3 = $client1Phone3;

        return $this;
    }

    /**
     * Get client1Phone3
     *
     * @return string 
     */
    public function getClient1Phone3()
    {
        return $this->client1Phone3;
    }

    /**
     * Set client1Phone4
     *
     * @param string $client1Phone4
     * @return SpkResidentialBuffer
     */
    public function setClient1Phone4($client1Phone4)
    {
        $this->client1Phone4 = $client1Phone4;

        return $this;
    }

    /**
     * Get client1Phone4
     *
     * @return string 
     */
    public function getClient1Phone4()
    {
        return $this->client1Phone4;
    }

    /**
     * Set client1Email
     *
     * @param string $client1Email
     * @return SpkResidentialBuffer
     */
    public function setClient1Email($client1Email)
    {
        $this->client1Email = $client1Email;

        return $this;
    }

    /**
     * Get client1Email
     *
     * @return string 
     */
    public function getClient1Email()
    {
        return $this->client1Email;
    }

    /**
     * Set client2
     *
     * @param string $client2
     * @return SpkResidentialBuffer
     */
    public function setClient2($client2)
    {
        $this->client2 = $client2;

        return $this;
    }

    /**
     * Get client2
     *
     * @return string 
     */
    public function getClient2()
    {
        return $this->client2;
    }

    /**
     * Set client2Phone1
     *
     * @param string $client2Phone1
     * @return SpkResidentialBuffer
     */
    public function setClient2Phone1($client2Phone1)
    {
        $this->client2Phone1 = $client2Phone1;

        return $this;
    }

    /**
     * Get client2Phone1
     *
     * @return string 
     */
    public function getClient2Phone1()
    {
        return $this->client2Phone1;
    }

    /**
     * Set client2Phone2
     *
     * @param string $client2Phone2
     * @return SpkResidentialBuffer
     */
    public function setClient2Phone2($client2Phone2)
    {
        $this->client2Phone2 = $client2Phone2;

        return $this;
    }

    /**
     * Get client2Phone2
     *
     * @return string 
     */
    public function getClient2Phone2()
    {
        return $this->client2Phone2;
    }

    /**
     * Set client2Phone3
     *
     * @param string $client2Phone3
     * @return SpkResidentialBuffer
     */
    public function setClient2Phone3($client2Phone3)
    {
        $this->client2Phone3 = $client2Phone3;

        return $this;
    }

    /**
     * Get client2Phone3
     *
     * @return string 
     */
    public function getClient2Phone3()
    {
        return $this->client2Phone3;
    }

    /**
     * Set client2Phone4
     *
     * @param string $client2Phone4
     * @return SpkResidentialBuffer
     */
    public function setClient2Phone4($client2Phone4)
    {
        $this->client2Phone4 = $client2Phone4;

        return $this;
    }

    /**
     * Get client2Phone4
     *
     * @return string 
     */
    public function getClient2Phone4()
    {
        return $this->client2Phone4;
    }

    /**
     * Set dom
     *
     * @param string $dom
     * @return SpkResidentialBuffer
     */
    public function setDom($dom)
    {
        $this->dom = $dom;

        return $this;
    }

    /**
     * Get dom
     *
     * @return string 
     */
    public function getDom()
    {
        return $this->dom;
    }

    /**
     * Set korpus
     *
     * @param string $korpus
     * @return SpkResidentialBuffer
     */
    public function setKorpus($korpus)
    {
        $this->korpus = $korpus;

        return $this;
    }

    /**
     * Get korpus
     *
     * @return string 
     */
    public function getKorpus()
    {
        return $this->korpus;
    }

    /**
     * Set stroenie
     *
     * @param string $stroenie
     * @return SpkResidentialBuffer
     */
    public function setStroenie($stroenie)
    {
        $this->stroenie = $stroenie;

        return $this;
    }

    /**
     * Get stroenie
     *
     * @return string 
     */
    public function getStroenie()
    {
        return $this->stroenie;
    }

    /**
     * Set drob
     *
     * @param string $drob
     * @return SpkResidentialBuffer
     */
    public function setDrob($drob)
    {
        $this->drob = $drob;

        return $this;
    }

    /**
     * Get drob
     *
     * @return string 
     */
    public function getDrob()
    {
        return $this->drob;
    }

    /**
     * Set tire
     *
     * @param string $tire
     * @return SpkResidentialBuffer
     */
    public function setTire($tire)
    {
        $this->tire = $tire;

        return $this;
    }

    /**
     * Get tire
     *
     * @return string 
     */
    public function getTire()
    {
        return $this->tire;
    }

    /**
     * Set litera
     *
     * @param string $litera
     * @return SpkResidentialBuffer
     */
    public function setLitera($litera)
    {
        $this->litera = $litera;

        return $this;
    }

    /**
     * Get litera
     *
     * @return string 
     */
    public function getLitera()
    {
        return $this->litera;
    }

    /**
     * Set vladenie
     *
     * @param string $vladenie
     * @return SpkResidentialBuffer
     */
    public function setVladenie($vladenie)
    {
        $this->vladenie = $vladenie;

        return $this;
    }

    /**
     * Get vladenie
     *
     * @return string 
     */
    public function getVladenie()
    {
        return $this->vladenie;
    }

    /**
     * Set propertyNumber
     *
     * @param string $propertyNumber
     * @return SpkResidentialBuffer
     */
    public function setPropertyNumber($propertyNumber)
    {
        $this->propertyNumber = $propertyNumber;

        return $this;
    }

    /**
     * Get propertyNumber
     *
     * @return string 
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * Set propertyEntrance
     *
     * @param string $propertyEntrance
     * @return SpkResidentialBuffer
     */
    public function setPropertyEntrance($propertyEntrance)
    {
        $this->propertyEntrance = $propertyEntrance;

        return $this;
    }

    /**
     * Get propertyEntrance
     *
     * @return string 
     */
    public function getPropertyEntrance()
    {
        return $this->propertyEntrance;
    }

    /**
     * Set cityRus
     *
     * @param string $cityRus
     * @return SpkResidentialBuffer
     */
    public function setCityRus($cityRus)
    {
        $this->cityRus = $cityRus;

        return $this;
    }

    /**
     * Get cityRus
     *
     * @return string 
     */
    public function getCityRus()
    {
        return $this->cityRus;
    }

    /**
     * Set cityEng
     *
     * @param string $cityEng
     * @return SpkResidentialBuffer
     */
    public function setCityEng($cityEng)
    {
        $this->cityEng = $cityEng;

        return $this;
    }

    /**
     * Get cityEng
     *
     * @return string 
     */
    public function getCityEng()
    {
        return $this->cityEng;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return SpkResidentialBuffer
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set district
     *
     * @param string $district
     * @return SpkResidentialBuffer
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return SpkResidentialBuffer
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetType
     *
     * @param string $streetType
     * @return SpkResidentialBuffer
     */
    public function setStreetType($streetType)
    {
        $this->streetType = $streetType;

        return $this;
    }

    /**
     * Get streetType
     *
     * @return string 
     */
    public function getStreetType()
    {
        return $this->streetType;
    }

    /**
     * Set metro
     *
     * @param string $metro
     * @return SpkResidentialBuffer
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * Get metro
     *
     * @return string 
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Set nameRus
     *
     * @param string $nameRus
     * @return SpkResidentialBuffer
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string 
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set nameEng
     *
     * @param string $nameEng
     * @return SpkResidentialBuffer
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string 
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * Set vnKod
     *
     * @param string $vnKod
     * @return SpkResidentialBuffer
     */
    public function setVnKod($vnKod)
    {
        $this->vnKod = $vnKod;

        return $this;
    }

    /**
     * Get vnKod
     *
     * @return string 
     */
    public function getVnKod()
    {
        return $this->vnKod;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return SpkResidentialBuffer
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     * @return SpkResidentialBuffer
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set bParkingType1
     *
     * @param string $bParkingType1
     * @return SpkResidentialBuffer
     */
    public function setBParkingType1($bParkingType1)
    {
        $this->bParkingType1 = $bParkingType1;

        return $this;
    }

    /**
     * Get bParkingType1
     *
     * @return string 
     */
    public function getBParkingType1()
    {
        return $this->bParkingType1;
    }

    /**
     * Set bParkingEntrance1
     *
     * @param string $bParkingEntrance1
     * @return SpkResidentialBuffer
     */
    public function setBParkingEntrance1($bParkingEntrance1)
    {
        $this->bParkingEntrance1 = $bParkingEntrance1;

        return $this;
    }

    /**
     * Get bParkingEntrance1
     *
     * @return string 
     */
    public function getBParkingEntrance1()
    {
        return $this->bParkingEntrance1;
    }

    /**
     * Set bParkingCount1
     *
     * @param integer $bParkingCount1
     * @return SpkResidentialBuffer
     */
    public function setBParkingCount1($bParkingCount1)
    {
        $this->bParkingCount1 = $bParkingCount1;

        return $this;
    }

    /**
     * Get bParkingCount1
     *
     * @return integer 
     */
    public function getBParkingCount1()
    {
        return $this->bParkingCount1;
    }

    /**
     * Set bParkingComment1
     *
     * @param string $bParkingComment1
     * @return SpkResidentialBuffer
     */
    public function setBParkingComment1($bParkingComment1)
    {
        $this->bParkingComment1 = $bParkingComment1;

        return $this;
    }

    /**
     * Get bParkingComment1
     *
     * @return string 
     */
    public function getBParkingComment1()
    {
        return $this->bParkingComment1;
    }

    /**
     * Set bParkingType2
     *
     * @param string $bParkingType2
     * @return SpkResidentialBuffer
     */
    public function setBParkingType2($bParkingType2)
    {
        $this->bParkingType2 = $bParkingType2;

        return $this;
    }

    /**
     * Get bParkingType2
     *
     * @return string 
     */
    public function getBParkingType2()
    {
        return $this->bParkingType2;
    }

    /**
     * Set bParkingEntrance2
     *
     * @param string $bParkingEntrance2
     * @return SpkResidentialBuffer
     */
    public function setBParkingEntrance2($bParkingEntrance2)
    {
        $this->bParkingEntrance2 = $bParkingEntrance2;

        return $this;
    }

    /**
     * Get bParkingEntrance2
     *
     * @return string 
     */
    public function getBParkingEntrance2()
    {
        return $this->bParkingEntrance2;
    }

    /**
     * Set bParkingCount2
     *
     * @param integer $bParkingCount2
     * @return SpkResidentialBuffer
     */
    public function setBParkingCount2($bParkingCount2)
    {
        $this->bParkingCount2 = $bParkingCount2;

        return $this;
    }

    /**
     * Get bParkingCount2
     *
     * @return integer 
     */
    public function getBParkingCount2()
    {
        return $this->bParkingCount2;
    }

    /**
     * Set bParkingComment2
     *
     * @param string $bParkingComment2
     * @return SpkResidentialBuffer
     */
    public function setBParkingComment2($bParkingComment2)
    {
        $this->bParkingComment2 = $bParkingComment2;

        return $this;
    }

    /**
     * Get bParkingComment2
     *
     * @return string 
     */
    public function getBParkingComment2()
    {
        return $this->bParkingComment2;
    }

    /**
     * Set bParkingType3
     *
     * @param string $bParkingType3
     * @return SpkResidentialBuffer
     */
    public function setBParkingType3($bParkingType3)
    {
        $this->bParkingType3 = $bParkingType3;

        return $this;
    }

    /**
     * Get bParkingType3
     *
     * @return string 
     */
    public function getBParkingType3()
    {
        return $this->bParkingType3;
    }

    /**
     * Set bParkingEntrance3
     *
     * @param string $bParkingEntrance3
     * @return SpkResidentialBuffer
     */
    public function setBParkingEntrance3($bParkingEntrance3)
    {
        $this->bParkingEntrance3 = $bParkingEntrance3;

        return $this;
    }

    /**
     * Get bParkingEntrance3
     *
     * @return string 
     */
    public function getBParkingEntrance3()
    {
        return $this->bParkingEntrance3;
    }

    /**
     * Set bParkingCount3
     *
     * @param integer $bParkingCount3
     * @return SpkResidentialBuffer
     */
    public function setBParkingCount3($bParkingCount3)
    {
        $this->bParkingCount3 = $bParkingCount3;

        return $this;
    }

    /**
     * Get bParkingCount3
     *
     * @return integer 
     */
    public function getBParkingCount3()
    {
        return $this->bParkingCount3;
    }

    /**
     * Set bParkingComment3
     *
     * @param string $bParkingComment3
     * @return SpkResidentialBuffer
     */
    public function setBParkingComment3($bParkingComment3)
    {
        $this->bParkingComment3 = $bParkingComment3;

        return $this;
    }

    /**
     * Get bParkingComment3
     *
     * @return string 
     */
    public function getBParkingComment3()
    {
        return $this->bParkingComment3;
    }

    /**
     * Set bBuildingType
     *
     * @param string $bBuildingType
     * @return SpkResidentialBuffer
     */
    public function setBBuildingType($bBuildingType)
    {
        $this->bBuildingType = $bBuildingType;

        return $this;
    }

    /**
     * Get bBuildingType
     *
     * @return string 
     */
    public function getBBuildingType()
    {
        return $this->bBuildingType;
    }

    /**
     * Set bBuildingClass
     *
     * @param string $bBuildingClass
     * @return SpkResidentialBuffer
     */
    public function setBBuildingClass($bBuildingClass)
    {
        $this->bBuildingClass = $bBuildingClass;

        return $this;
    }

    /**
     * Get bBuildingClass
     *
     * @return string 
     */
    public function getBBuildingClass()
    {
        return $this->bBuildingClass;
    }

    /**
     * Set bProgress
     *
     * @param string $bProgress
     * @return SpkResidentialBuffer
     */
    public function setBProgress($bProgress)
    {
        $this->bProgress = $bProgress;

        return $this;
    }

    /**
     * Get bProgress
     *
     * @return string 
     */
    public function getBProgress()
    {
        return $this->bProgress;
    }

    /**
     * Set bBuildingStartQuarter
     *
     * @param string $bBuildingStartQuarter
     * @return SpkResidentialBuffer
     */
    public function setBBuildingStartQuarter($bBuildingStartQuarter)
    {
        $this->bBuildingStartQuarter = $bBuildingStartQuarter;

        return $this;
    }

    /**
     * Get bBuildingStartQuarter
     *
     * @return string 
     */
    public function getBBuildingStartQuarter()
    {
        return $this->bBuildingStartQuarter;
    }

    /**
     * Set bBuildingStartYear
     *
     * @param integer $bBuildingStartYear
     * @return SpkResidentialBuffer
     */
    public function setBBuildingStartYear($bBuildingStartYear)
    {
        $this->bBuildingStartYear = $bBuildingStartYear;

        return $this;
    }

    /**
     * Get bBuildingStartYear
     *
     * @return integer 
     */
    public function getBBuildingStartYear()
    {
        return $this->bBuildingStartYear;
    }

    /**
     * Set bBuildingEndQuarter
     *
     * @param string $bBuildingEndQuarter
     * @return SpkResidentialBuffer
     */
    public function setBBuildingEndQuarter($bBuildingEndQuarter)
    {
        $this->bBuildingEndQuarter = $bBuildingEndQuarter;

        return $this;
    }

    /**
     * Get bBuildingEndQuarter
     *
     * @return string 
     */
    public function getBBuildingEndQuarter()
    {
        return $this->bBuildingEndQuarter;
    }

    /**
     * Set bBuildingEndYear
     *
     * @param integer $bBuildingEndYear
     * @return SpkResidentialBuffer
     */
    public function setBBuildingEndYear($bBuildingEndYear)
    {
        $this->bBuildingEndYear = $bBuildingEndYear;

        return $this;
    }

    /**
     * Get bBuildingEndYear
     *
     * @return integer 
     */
    public function getBBuildingEndYear()
    {
        return $this->bBuildingEndYear;
    }

    /**
     * Set bArchitectureStyle
     *
     * @param string $bArchitectureStyle
     * @return SpkResidentialBuffer
     */
    public function setBArchitectureStyle($bArchitectureStyle)
    {
        $this->bArchitectureStyle = $bArchitectureStyle;

        return $this;
    }

    /**
     * Get bArchitectureStyle
     *
     * @return string 
     */
    public function getBArchitectureStyle()
    {
        return $this->bArchitectureStyle;
    }

    /**
     * Set bConstruction
     *
     * @param string $bConstruction
     * @return SpkResidentialBuffer
     */
    public function setBConstruction($bConstruction)
    {
        $this->bConstruction = $bConstruction;

        return $this;
    }

    /**
     * Get bConstruction
     *
     * @return string 
     */
    public function getBConstruction()
    {
        return $this->bConstruction;
    }

    /**
     * Set bTotalArea
     *
     * @param float $bTotalArea
     * @return SpkResidentialBuffer
     */
    public function setBTotalArea($bTotalArea)
    {
        $this->bTotalArea = $bTotalArea;

        return $this;
    }

    /**
     * Get bTotalArea
     *
     * @return float 
     */
    public function getBTotalArea()
    {
        return $this->bTotalArea;
    }

    /**
     * Set bLivingArea
     *
     * @param float $bLivingArea
     * @return SpkResidentialBuffer
     */
    public function setBLivingArea($bLivingArea)
    {
        $this->bLivingArea = $bLivingArea;

        return $this;
    }

    /**
     * Get bLivingArea
     *
     * @return float 
     */
    public function getBLivingArea()
    {
        return $this->bLivingArea;
    }

    /**
     * Set bApartmentsCount
     *
     * @param integer $bApartmentsCount
     * @return SpkResidentialBuffer
     */
    public function setBApartmentsCount($bApartmentsCount)
    {
        $this->bApartmentsCount = $bApartmentsCount;

        return $this;
    }

    /**
     * Get bApartmentsCount
     *
     * @return integer 
     */
    public function getBApartmentsCount()
    {
        return $this->bApartmentsCount;
    }

    /**
     * Set bApartmentAreaMin
     *
     * @param float $bApartmentAreaMin
     * @return SpkResidentialBuffer
     */
    public function setBApartmentAreaMin($bApartmentAreaMin)
    {
        $this->bApartmentAreaMin = $bApartmentAreaMin;

        return $this;
    }

    /**
     * Get bApartmentAreaMin
     *
     * @return float 
     */
    public function getBApartmentAreaMin()
    {
        return $this->bApartmentAreaMin;
    }

    /**
     * Set bApartmentAreaMax
     *
     * @param float $bApartmentAreaMax
     * @return SpkResidentialBuffer
     */
    public function setBApartmentAreaMax($bApartmentAreaMax)
    {
        $this->bApartmentAreaMax = $bApartmentAreaMax;

        return $this;
    }

    /**
     * Get bApartmentAreaMax
     *
     * @return float 
     */
    public function getBApartmentAreaMax()
    {
        return $this->bApartmentAreaMax;
    }

    /**
     * Set bOssature
     *
     * @param string $bOssature
     * @return SpkResidentialBuffer
     */
    public function setBOssature($bOssature)
    {
        $this->bOssature = $bOssature;

        return $this;
    }

    /**
     * Get bOssature
     *
     * @return string 
     */
    public function getBOssature()
    {
        return $this->bOssature;
    }

    /**
     * Set bOverlap
     *
     * @param string $bOverlap
     * @return SpkResidentialBuffer
     */
    public function setBOverlap($bOverlap)
    {
        $this->bOverlap = $bOverlap;

        return $this;
    }

    /**
     * Get bOverlap
     *
     * @return string 
     */
    public function getBOverlap()
    {
        return $this->bOverlap;
    }

    /**
     * Set bOutdoorWall
     *
     * @param string $bOutdoorWall
     * @return SpkResidentialBuffer
     */
    public function setBOutdoorWall($bOutdoorWall)
    {
        $this->bOutdoorWall = $bOutdoorWall;

        return $this;
    }

    /**
     * Get bOutdoorWall
     *
     * @return string 
     */
    public function getBOutdoorWall()
    {
        return $this->bOutdoorWall;
    }

    /**
     * Set bStoreysCountMin
     *
     * @param integer $bStoreysCountMin
     * @return SpkResidentialBuffer
     */
    public function setBStoreysCountMin($bStoreysCountMin)
    {
        $this->bStoreysCountMin = $bStoreysCountMin;

        return $this;
    }

    /**
     * Get bStoreysCountMin
     *
     * @return integer 
     */
    public function getBStoreysCountMin()
    {
        return $this->bStoreysCountMin;
    }

    /**
     * Set bStoreysCountMax
     *
     * @param integer $bStoreysCountMax
     * @return SpkResidentialBuffer
     */
    public function setBStoreysCountMax($bStoreysCountMax)
    {
        $this->bStoreysCountMax = $bStoreysCountMax;

        return $this;
    }

    /**
     * Get bStoreysCountMax
     *
     * @return integer 
     */
    public function getBStoreysCountMax()
    {
        return $this->bStoreysCountMax;
    }

    /**
     * Set bCeilingHeightMin
     *
     * @param float $bCeilingHeightMin
     * @return SpkResidentialBuffer
     */
    public function setBCeilingHeightMin($bCeilingHeightMin)
    {
        $this->bCeilingHeightMin = $bCeilingHeightMin;

        return $this;
    }

    /**
     * Get bCeilingHeightMin
     *
     * @return float 
     */
    public function getBCeilingHeightMin()
    {
        return $this->bCeilingHeightMin;
    }

    /**
     * Set bCeilingHeightMax
     *
     * @param float $bCeilingHeightMax
     * @return SpkResidentialBuffer
     */
    public function setBCeilingHeightMax($bCeilingHeightMax)
    {
        $this->bCeilingHeightMax = $bCeilingHeightMax;

        return $this;
    }

    /**
     * Get bCeilingHeightMax
     *
     * @return float 
     */
    public function getBCeilingHeightMax()
    {
        return $this->bCeilingHeightMax;
    }

    /**
     * Set bPenthouse
     *
     * @param string $bPenthouse
     * @return SpkResidentialBuffer
     */
    public function setBPenthouse($bPenthouse)
    {
        $this->bPenthouse = $bPenthouse;

        return $this;
    }

    /**
     * Get bPenthouse
     *
     * @return string 
     */
    public function getBPenthouse()
    {
        return $this->bPenthouse;
    }

    /**
     * Set bPenthouseAreaMin
     *
     * @param float $bPenthouseAreaMin
     * @return SpkResidentialBuffer
     */
    public function setBPenthouseAreaMin($bPenthouseAreaMin)
    {
        $this->bPenthouseAreaMin = $bPenthouseAreaMin;

        return $this;
    }

    /**
     * Get bPenthouseAreaMin
     *
     * @return float 
     */
    public function getBPenthouseAreaMin()
    {
        return $this->bPenthouseAreaMin;
    }

    /**
     * Set bPenthouseAreaMax
     *
     * @param float $bPenthouseAreaMax
     * @return SpkResidentialBuffer
     */
    public function setBPenthouseAreaMax($bPenthouseAreaMax)
    {
        $this->bPenthouseAreaMax = $bPenthouseAreaMax;

        return $this;
    }

    /**
     * Get bPenthouseAreaMax
     *
     * @return float 
     */
    public function getBPenthouseAreaMax()
    {
        return $this->bPenthouseAreaMax;
    }

    /**
     * Set bTownhouse
     *
     * @param string $bTownhouse
     * @return SpkResidentialBuffer
     */
    public function setBTownhouse($bTownhouse)
    {
        $this->bTownhouse = $bTownhouse;

        return $this;
    }

    /**
     * Get bTownhouse
     *
     * @return string 
     */
    public function getBTownhouse()
    {
        return $this->bTownhouse;
    }

    /**
     * Set bTownhouseAreaMin
     *
     * @param float $bTownhouseAreaMin
     * @return SpkResidentialBuffer
     */
    public function setBTownhouseAreaMin($bTownhouseAreaMin)
    {
        $this->bTownhouseAreaMin = $bTownhouseAreaMin;

        return $this;
    }

    /**
     * Get bTownhouseAreaMin
     *
     * @return float 
     */
    public function getBTownhouseAreaMin()
    {
        return $this->bTownhouseAreaMin;
    }

    /**
     * Set bTownhouseAreaMax
     *
     * @param float $bTownhouseAreaMax
     * @return SpkResidentialBuffer
     */
    public function setBTownhouseAreaMax($bTownhouseAreaMax)
    {
        $this->bTownhouseAreaMax = $bTownhouseAreaMax;

        return $this;
    }

    /**
     * Get bTownhouseAreaMax
     *
     * @return float 
     */
    public function getBTownhouseAreaMax()
    {
        return $this->bTownhouseAreaMax;
    }

    /**
     * Set bOperationalCost
     *
     * @param string $bOperationalCost
     * @return SpkResidentialBuffer
     */
    public function setBOperationalCost($bOperationalCost)
    {
        $this->bOperationalCost = $bOperationalCost;

        return $this;
    }

    /**
     * Get bOperationalCost
     *
     * @return string 
     */
    public function getBOperationalCost()
    {
        return $this->bOperationalCost;
    }

    /**
     * Set bLifts
     *
     * @param string $bLifts
     * @return SpkResidentialBuffer
     */
    public function setBLifts($bLifts)
    {
        $this->bLifts = $bLifts;

        return $this;
    }

    /**
     * Get bLifts
     *
     * @return string 
     */
    public function getBLifts()
    {
        return $this->bLifts;
    }

    /**
     * Set bPlanning
     *
     * @param string $bPlanning
     * @return SpkResidentialBuffer
     */
    public function setBPlanning($bPlanning)
    {
        $this->bPlanning = $bPlanning;

        return $this;
    }

    /**
     * Get bPlanning
     *
     * @return string 
     */
    public function getBPlanning()
    {
        return $this->bPlanning;
    }

    /**
     * Set bWindows
     *
     * @param string $bWindows
     * @return SpkResidentialBuffer
     */
    public function setBWindows($bWindows)
    {
        $this->bWindows = $bWindows;

        return $this;
    }

    /**
     * Get bWindows
     *
     * @return string 
     */
    public function getBWindows()
    {
        return $this->bWindows;
    }

    /**
     * Set bTerritory
     *
     * @param string $bTerritory
     * @return SpkResidentialBuffer
     */
    public function setBTerritory($bTerritory)
    {
        $this->bTerritory = $bTerritory;

        return $this;
    }

    /**
     * Get bTerritory
     *
     * @return string 
     */
    public function getBTerritory()
    {
        return $this->bTerritory;
    }

    /**
     * Set bTerritoryArea
     *
     * @param float $bTerritoryArea
     * @return SpkResidentialBuffer
     */
    public function setBTerritoryArea($bTerritoryArea)
    {
        $this->bTerritoryArea = $bTerritoryArea;

        return $this;
    }

    /**
     * Get bTerritoryArea
     *
     * @return float 
     */
    public function getBTerritoryArea()
    {
        return $this->bTerritoryArea;
    }

    /**
     * Set bSecurity
     *
     * @param string $bSecurity
     * @return SpkResidentialBuffer
     */
    public function setBSecurity($bSecurity)
    {
        $this->bSecurity = $bSecurity;

        return $this;
    }

    /**
     * Get bSecurity
     *
     * @return string 
     */
    public function getBSecurity()
    {
        return $this->bSecurity;
    }

    /**
     * Set bTechnicalComments
     *
     * @param string $bTechnicalComments
     * @return SpkResidentialBuffer
     */
    public function setBTechnicalComments($bTechnicalComments)
    {
        $this->bTechnicalComments = $bTechnicalComments;

        return $this;
    }

    /**
     * Get bTechnicalComments
     *
     * @return string 
     */
    public function getBTechnicalComments()
    {
        return $this->bTechnicalComments;
    }

    /**
     * Set bInfrastructureComments
     *
     * @param string $bInfrastructureComments
     * @return SpkResidentialBuffer
     */
    public function setBInfrastructureComments($bInfrastructureComments)
    {
        $this->bInfrastructureComments = $bInfrastructureComments;

        return $this;
    }

    /**
     * Get bInfrastructureComments
     *
     * @return string 
     */
    public function getBInfrastructureComments()
    {
        return $this->bInfrastructureComments;
    }

    /**
     * Set briefCommentsRus
     *
     * @param string $briefCommentsRus
     * @return SpkResidentialBuffer
     */
    public function setBriefCommentsRus($briefCommentsRus)
    {
        $this->briefCommentsRus = $briefCommentsRus;

        return $this;
    }

    /**
     * Get briefCommentsRus
     *
     * @return string 
     */
    public function getBriefCommentsRus()
    {
        return $this->briefCommentsRus;
    }

    /**
     * Set briefCommentsEng
     *
     * @param string $briefCommentsEng
     * @return SpkResidentialBuffer
     */
    public function setBriefCommentsEng($briefCommentsEng)
    {
        $this->briefCommentsEng = $briefCommentsEng;

        return $this;
    }

    /**
     * Get briefCommentsEng
     *
     * @return string 
     */
    public function getBriefCommentsEng()
    {
        return $this->briefCommentsEng;
    }

    /**
     * Set siteCommentsRus
     *
     * @param string $siteCommentsRus
     * @return SpkResidentialBuffer
     */
    public function setSiteCommentsRus($siteCommentsRus)
    {
        $this->siteCommentsRus = $siteCommentsRus;

        return $this;
    }

    /**
     * Get siteCommentsRus
     *
     * @return string 
     */
    public function getSiteCommentsRus()
    {
        return $this->siteCommentsRus;
    }

    /**
     * Set siteCommentsEng
     *
     * @param string $siteCommentsEng
     * @return SpkResidentialBuffer
     */
    public function setSiteCommentsEng($siteCommentsEng)
    {
        $this->siteCommentsEng = $siteCommentsEng;

        return $this;
    }

    /**
     * Get siteCommentsEng
     *
     * @return string 
     */
    public function getSiteCommentsEng()
    {
        return $this->siteCommentsEng;
    }

    /**
     * Set bPar1
     *
     * @param string $bPar1
     * @return SpkResidentialBuffer
     */
    public function setBPar1($bPar1)
    {
        $this->bPar1 = $bPar1;

        return $this;
    }

    /**
     * Get bPar1
     *
     * @return string 
     */
    public function getBPar1()
    {
        return $this->bPar1;
    }

    /**
     * Set bPar2
     *
     * @param string $bPar2
     * @return SpkResidentialBuffer
     */
    public function setBPar2($bPar2)
    {
        $this->bPar2 = $bPar2;

        return $this;
    }

    /**
     * Get bPar2
     *
     * @return string 
     */
    public function getBPar2()
    {
        return $this->bPar2;
    }

    /**
     * Set bPar3
     *
     * @param string $bPar3
     * @return SpkResidentialBuffer
     */
    public function setBPar3($bPar3)
    {
        $this->bPar3 = $bPar3;

        return $this;
    }

    /**
     * Get bPar3
     *
     * @return string 
     */
    public function getBPar3()
    {
        return $this->bPar3;
    }

    /**
     * Set bPar4
     *
     * @param string $bPar4
     * @return SpkResidentialBuffer
     */
    public function setBPar4($bPar4)
    {
        $this->bPar4 = $bPar4;

        return $this;
    }

    /**
     * Get bPar4
     *
     * @return string 
     */
    public function getBPar4()
    {
        return $this->bPar4;
    }

    /**
     * Set bPar5
     *
     * @param string $bPar5
     * @return SpkResidentialBuffer
     */
    public function setBPar5($bPar5)
    {
        $this->bPar5 = $bPar5;

        return $this;
    }

    /**
     * Get bPar5
     *
     * @return string 
     */
    public function getBPar5()
    {
        return $this->bPar5;
    }

    /**
     * Set bPar6
     *
     * @param string $bPar6
     * @return SpkResidentialBuffer
     */
    public function setBPar6($bPar6)
    {
        $this->bPar6 = $bPar6;

        return $this;
    }

    /**
     * Get bPar6
     *
     * @return string 
     */
    public function getBPar6()
    {
        return $this->bPar6;
    }

    /**
     * Set bPar7
     *
     * @param string $bPar7
     * @return SpkResidentialBuffer
     */
    public function setBPar7($bPar7)
    {
        $this->bPar7 = $bPar7;

        return $this;
    }

    /**
     * Get bPar7
     *
     * @return string 
     */
    public function getBPar7()
    {
        return $this->bPar7;
    }

    /**
     * Set bPar8
     *
     * @param string $bPar8
     * @return SpkResidentialBuffer
     */
    public function setBPar8($bPar8)
    {
        $this->bPar8 = $bPar8;

        return $this;
    }

    /**
     * Get bPar8
     *
     * @return string 
     */
    public function getBPar8()
    {
        return $this->bPar8;
    }

    /**
     * Set bPar9
     *
     * @param string $bPar9
     * @return SpkResidentialBuffer
     */
    public function setBPar9($bPar9)
    {
        $this->bPar9 = $bPar9;

        return $this;
    }

    /**
     * Get bPar9
     *
     * @return string 
     */
    public function getBPar9()
    {
        return $this->bPar9;
    }

    /**
     * Set bPar10
     *
     * @param string $bPar10
     * @return SpkResidentialBuffer
     */
    public function setBPar10($bPar10)
    {
        $this->bPar10 = $bPar10;

        return $this;
    }

    /**
     * Get bPar10
     *
     * @return string 
     */
    public function getBPar10()
    {
        return $this->bPar10;
    }

    /**
     * Set bPar11
     *
     * @param string $bPar11
     * @return SpkResidentialBuffer
     */
    public function setBPar11($bPar11)
    {
        $this->bPar11 = $bPar11;

        return $this;
    }

    /**
     * Get bPar11
     *
     * @return string 
     */
    public function getBPar11()
    {
        return $this->bPar11;
    }

    /**
     * Set bPar12
     *
     * @param string $bPar12
     * @return SpkResidentialBuffer
     */
    public function setBPar12($bPar12)
    {
        $this->bPar12 = $bPar12;

        return $this;
    }

    /**
     * Get bPar12
     *
     * @return string 
     */
    public function getBPar12()
    {
        return $this->bPar12;
    }

    /**
     * Set bPar13
     *
     * @param string $bPar13
     * @return SpkResidentialBuffer
     */
    public function setBPar13($bPar13)
    {
        $this->bPar13 = $bPar13;

        return $this;
    }

    /**
     * Get bPar13
     *
     * @return string 
     */
    public function getBPar13()
    {
        return $this->bPar13;
    }

    /**
     * Set bPar14
     *
     * @param string $bPar14
     * @return SpkResidentialBuffer
     */
    public function setBPar14($bPar14)
    {
        $this->bPar14 = $bPar14;

        return $this;
    }

    /**
     * Get bPar14
     *
     * @return string 
     */
    public function getBPar14()
    {
        return $this->bPar14;
    }

    /**
     * Set bPar15
     *
     * @param string $bPar15
     * @return SpkResidentialBuffer
     */
    public function setBPar15($bPar15)
    {
        $this->bPar15 = $bPar15;

        return $this;
    }

    /**
     * Get bPar15
     *
     * @return string 
     */
    public function getBPar15()
    {
        return $this->bPar15;
    }

    /**
     * Set bPar16
     *
     * @param string $bPar16
     * @return SpkResidentialBuffer
     */
    public function setBPar16($bPar16)
    {
        $this->bPar16 = $bPar16;

        return $this;
    }

    /**
     * Get bPar16
     *
     * @return string 
     */
    public function getBPar16()
    {
        return $this->bPar16;
    }

    /**
     * Set bPar17
     *
     * @param string $bPar17
     * @return SpkResidentialBuffer
     */
    public function setBPar17($bPar17)
    {
        $this->bPar17 = $bPar17;

        return $this;
    }

    /**
     * Get bPar17
     *
     * @return string 
     */
    public function getBPar17()
    {
        return $this->bPar17;
    }

    /**
     * Set bPar18
     *
     * @param string $bPar18
     * @return SpkResidentialBuffer
     */
    public function setBPar18($bPar18)
    {
        $this->bPar18 = $bPar18;

        return $this;
    }

    /**
     * Get bPar18
     *
     * @return string 
     */
    public function getBPar18()
    {
        return $this->bPar18;
    }

    /**
     * Set bPar19
     *
     * @param string $bPar19
     * @return SpkResidentialBuffer
     */
    public function setBPar19($bPar19)
    {
        $this->bPar19 = $bPar19;

        return $this;
    }

    /**
     * Get bPar19
     *
     * @return string 
     */
    public function getBPar19()
    {
        return $this->bPar19;
    }

    /**
     * Set bPar20
     *
     * @param string $bPar20
     * @return SpkResidentialBuffer
     */
    public function setBPar20($bPar20)
    {
        $this->bPar20 = $bPar20;

        return $this;
    }

    /**
     * Get bPar20
     *
     * @return string 
     */
    public function getBPar20()
    {
        return $this->bPar20;
    }

    /**
     * Set bPar21
     *
     * @param string $bPar21
     * @return SpkResidentialBuffer
     */
    public function setBPar21($bPar21)
    {
        $this->bPar21 = $bPar21;

        return $this;
    }

    /**
     * Get bPar21
     *
     * @return string 
     */
    public function getBPar21()
    {
        return $this->bPar21;
    }

    /**
     * Set bPar22
     *
     * @param string $bPar22
     * @return SpkResidentialBuffer
     */
    public function setBPar22($bPar22)
    {
        $this->bPar22 = $bPar22;

        return $this;
    }

    /**
     * Get bPar22
     *
     * @return string 
     */
    public function getBPar22()
    {
        return $this->bPar22;
    }

    /**
     * Set bPar23
     *
     * @param string $bPar23
     * @return SpkResidentialBuffer
     */
    public function setBPar23($bPar23)
    {
        $this->bPar23 = $bPar23;

        return $this;
    }

    /**
     * Get bPar23
     *
     * @return string 
     */
    public function getBPar23()
    {
        return $this->bPar23;
    }

    /**
     * Set bPar24
     *
     * @param string $bPar24
     * @return SpkResidentialBuffer
     */
    public function setBPar24($bPar24)
    {
        $this->bPar24 = $bPar24;

        return $this;
    }

    /**
     * Get bPar24
     *
     * @return string 
     */
    public function getBPar24()
    {
        return $this->bPar24;
    }

    /**
     * Set bPar25
     *
     * @param string $bPar25
     * @return SpkResidentialBuffer
     */
    public function setBPar25($bPar25)
    {
        $this->bPar25 = $bPar25;

        return $this;
    }

    /**
     * Get bPar25
     *
     * @return string 
     */
    public function getBPar25()
    {
        return $this->bPar25;
    }

    /**
     * Set bPar26
     *
     * @param string $bPar26
     * @return SpkResidentialBuffer
     */
    public function setBPar26($bPar26)
    {
        $this->bPar26 = $bPar26;

        return $this;
    }

    /**
     * Get bPar26
     *
     * @return string 
     */
    public function getBPar26()
    {
        return $this->bPar26;
    }

    /**
     * Set bPar27
     *
     * @param string $bPar27
     * @return SpkResidentialBuffer
     */
    public function setBPar27($bPar27)
    {
        $this->bPar27 = $bPar27;

        return $this;
    }

    /**
     * Get bPar27
     *
     * @return string 
     */
    public function getBPar27()
    {
        return $this->bPar27;
    }

    /**
     * Set bPar28
     *
     * @param string $bPar28
     * @return SpkResidentialBuffer
     */
    public function setBPar28($bPar28)
    {
        $this->bPar28 = $bPar28;

        return $this;
    }

    /**
     * Get bPar28
     *
     * @return string 
     */
    public function getBPar28()
    {
        return $this->bPar28;
    }

    /**
     * Set bPar29
     *
     * @param string $bPar29
     * @return SpkResidentialBuffer
     */
    public function setBPar29($bPar29)
    {
        $this->bPar29 = $bPar29;

        return $this;
    }

    /**
     * Get bPar29
     *
     * @return string 
     */
    public function getBPar29()
    {
        return $this->bPar29;
    }

    /**
     * Set rent
     *
     * @param string $rent
     * @return SpkResidentialBuffer
     */
    public function setRent($rent)
    {
        $this->rent = $rent;

        return $this;
    }

    /**
     * Get rent
     *
     * @return string 
     */
    public function getRent()
    {
        return $this->rent;
    }

    /**
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return SpkResidentialBuffer
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return string 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param string $costPerSqmMax
     * @return SpkResidentialBuffer
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return string 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return SpkResidentialBuffer
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return SpkResidentialBuffer
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set carPlaceCost
     *
     * @param string $carPlaceCost
     * @return SpkResidentialBuffer
     */
    public function setCarPlaceCost($carPlaceCost)
    {
        $this->carPlaceCost = $carPlaceCost;

        return $this;
    }

    /**
     * Get carPlaceCost
     *
     * @return string 
     */
    public function getCarPlaceCost()
    {
        return $this->carPlaceCost;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkResidentialBuffer
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set commissionTnPers
     *
     * @param float $commissionTnPers
     * @return SpkResidentialBuffer
     */
    public function setCommissionTnPers($commissionTnPers)
    {
        $this->commissionTnPers = $commissionTnPers;

        return $this;
    }

    /**
     * Get commissionTnPers
     *
     * @return float 
     */
    public function getCommissionTnPers()
    {
        return $this->commissionTnPers;
    }

    /**
     * Set commissionTn
     *
     * @param string $commissionTn
     * @return SpkResidentialBuffer
     */
    public function setCommissionTn($commissionTn)
    {
        $this->commissionTn = $commissionTn;

        return $this;
    }

    /**
     * Get commissionTn
     *
     * @return string 
     */
    public function getCommissionTn()
    {
        return $this->commissionTn;
    }

    /**
     * Set commissionLrPers
     *
     * @param float $commissionLrPers
     * @return SpkResidentialBuffer
     */
    public function setCommissionLrPers($commissionLrPers)
    {
        $this->commissionLrPers = $commissionLrPers;

        return $this;
    }

    /**
     * Get commissionLrPers
     *
     * @return float 
     */
    public function getCommissionLrPers()
    {
        return $this->commissionLrPers;
    }

    /**
     * Set commissionLr
     *
     * @param string $commissionLr
     * @return SpkResidentialBuffer
     */
    public function setCommissionLr($commissionLr)
    {
        $this->commissionLr = $commissionLr;

        return $this;
    }

    /**
     * Get commissionLr
     *
     * @return string 
     */
    public function getCommissionLr()
    {
        return $this->commissionLr;
    }

    /**
     * Set contractType
     *
     * @param string $contractType
     * @return SpkResidentialBuffer
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string 
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set storeysCount
     *
     * @param integer $storeysCount
     * @return SpkResidentialBuffer
     */
    public function setStoreysCount($storeysCount)
    {
        $this->storeysCount = $storeysCount;

        return $this;
    }

    /**
     * Get storeysCount
     *
     * @return integer 
     */
    public function getStoreysCount()
    {
        return $this->storeysCount;
    }

    /**
     * Set storeyNumber
     *
     * @param integer $storeyNumber
     * @return SpkResidentialBuffer
     */
    public function setStoreyNumber($storeyNumber)
    {
        $this->storeyNumber = $storeyNumber;

        return $this;
    }

    /**
     * Get storeyNumber
     *
     * @return integer 
     */
    public function getStoreyNumber()
    {
        return $this->storeyNumber;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkResidentialBuffer
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set livingArea
     *
     * @param float $livingArea
     * @return SpkResidentialBuffer
     */
    public function setLivingArea($livingArea)
    {
        $this->livingArea = $livingArea;

        return $this;
    }

    /**
     * Get livingArea
     *
     * @return float 
     */
    public function getLivingArea()
    {
        return $this->livingArea;
    }

    /**
     * Set ceilingHeightMin
     *
     * @param float $ceilingHeightMin
     * @return SpkResidentialBuffer
     */
    public function setCeilingHeightMin($ceilingHeightMin)
    {
        $this->ceilingHeightMin = $ceilingHeightMin;

        return $this;
    }

    /**
     * Get ceilingHeightMin
     *
     * @return float 
     */
    public function getCeilingHeightMin()
    {
        return $this->ceilingHeightMin;
    }

    /**
     * Set ceilingHeightMax
     *
     * @param float $ceilingHeightMax
     * @return SpkResidentialBuffer
     */
    public function setCeilingHeightMax($ceilingHeightMax)
    {
        $this->ceilingHeightMax = $ceilingHeightMax;

        return $this;
    }

    /**
     * Get ceilingHeightMax
     *
     * @return float 
     */
    public function getCeilingHeightMax()
    {
        return $this->ceilingHeightMax;
    }

    /**
     * Set roomsCount
     *
     * @param integer $roomsCount
     * @return SpkResidentialBuffer
     */
    public function setRoomsCount($roomsCount)
    {
        $this->roomsCount = $roomsCount;

        return $this;
    }

    /**
     * Get roomsCount
     *
     * @return integer 
     */
    public function getRoomsCount()
    {
        return $this->roomsCount;
    }

    /**
     * Set bedroomsCount
     *
     * @param integer $bedroomsCount
     * @return SpkResidentialBuffer
     */
    public function setBedroomsCount($bedroomsCount)
    {
        $this->bedroomsCount = $bedroomsCount;

        return $this;
    }

    /**
     * Get bedroomsCount
     *
     * @return integer 
     */
    public function getBedroomsCount()
    {
        return $this->bedroomsCount;
    }

    /**
     * Set bathroomsCount
     *
     * @param float $bathroomsCount
     * @return SpkResidentialBuffer
     */
    public function setBathroomsCount($bathroomsCount)
    {
        $this->bathroomsCount = $bathroomsCount;

        return $this;
    }

    /**
     * Get bathroomsCount
     *
     * @return float 
     */
    public function getBathroomsCount()
    {
        return $this->bathroomsCount;
    }

    /**
     * Set furniture
     *
     * @param string $furniture
     * @return SpkResidentialBuffer
     */
    public function setFurniture($furniture)
    {
        $this->furniture = $furniture;

        return $this;
    }

    /**
     * Get furniture
     *
     * @return string 
     */
    public function getFurniture()
    {
        return $this->furniture;
    }

    /**
     * Set specialCondition
     *
     * @param string $specialCondition
     * @return SpkResidentialBuffer
     */
    public function setSpecialCondition($specialCondition)
    {
        $this->specialCondition = $specialCondition;

        return $this;
    }

    /**
     * Get specialCondition
     *
     * @return string 
     */
    public function getSpecialCondition()
    {
        return $this->specialCondition;
    }

    /**
     * Set views
     *
     * @param string $views
     * @return SpkResidentialBuffer
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return string 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return SpkResidentialBuffer
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return SpkResidentialBuffer
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return string 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set carPlace
     *
     * @param integer $carPlace
     * @return SpkResidentialBuffer
     */
    public function setCarPlace($carPlace)
    {
        $this->carPlace = $carPlace;

        return $this;
    }

    /**
     * Get carPlace
     *
     * @return integer 
     */
    public function getCarPlace()
    {
        return $this->carPlace;
    }

    /**
     * Set floorType
     *
     * @param string $floorType
     * @return SpkResidentialBuffer
     */
    public function setFloorType($floorType)
    {
        $this->floorType = $floorType;

        return $this;
    }

    /**
     * Get floorType
     *
     * @return string 
     */
    public function getFloorType()
    {
        return $this->floorType;
    }

    /**
     * Set windowsType
     *
     * @param string $windowsType
     * @return SpkResidentialBuffer
     */
    public function setWindowsType($windowsType)
    {
        $this->windowsType = $windowsType;

        return $this;
    }

    /**
     * Get windowsType
     *
     * @return string 
     */
    public function getWindowsType()
    {
        return $this->windowsType;
    }

    /**
     * Set decoration
     *
     * @param string $decoration
     * @return SpkResidentialBuffer
     */
    public function setDecoration($decoration)
    {
        $this->decoration = $decoration;

        return $this;
    }

    /**
     * Get decoration
     *
     * @return string 
     */
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * Set repairType
     *
     * @param string $repairType
     * @return SpkResidentialBuffer
     */
    public function setRepairType($repairType)
    {
        $this->repairType = $repairType;

        return $this;
    }

    /**
     * Get repairType
     *
     * @return string 
     */
    public function getRepairType()
    {
        return $this->repairType;
    }

    /**
     * Set repairOld
     *
     * @param string $repairOld
     * @return SpkResidentialBuffer
     */
    public function setRepairOld($repairOld)
    {
        $this->repairOld = $repairOld;

        return $this;
    }

    /**
     * Get repairOld
     *
     * @return string 
     */
    public function getRepairOld()
    {
        return $this->repairOld;
    }

    /**
     * Set design
     *
     * @param string $design
     * @return SpkResidentialBuffer
     */
    public function setDesign($design)
    {
        $this->design = $design;

        return $this;
    }

    /**
     * Get design
     *
     * @return string 
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set walls
     *
     * @param string $walls
     * @return SpkResidentialBuffer
     */
    public function setWalls($walls)
    {
        $this->walls = $walls;

        return $this;
    }

    /**
     * Get walls
     *
     * @return string 
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * Set apartmentType
     *
     * @param string $apartmentType
     * @return SpkResidentialBuffer
     */
    public function setApartmentType($apartmentType)
    {
        $this->apartmentType = $apartmentType;

        return $this;
    }

    /**
     * Get apartmentType
     *
     * @return string 
     */
    public function getApartmentType()
    {
        return $this->apartmentType;
    }

    /**
     * Set planning
     *
     * @param string $planning
     * @return SpkResidentialBuffer
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return string 
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set aTechnicalComments
     *
     * @param string $aTechnicalComments
     * @return SpkResidentialBuffer
     */
    public function setATechnicalComments($aTechnicalComments)
    {
        $this->aTechnicalComments = $aTechnicalComments;

        return $this;
    }

    /**
     * Get aTechnicalComments
     *
     * @return string 
     */
    public function getATechnicalComments()
    {
        return $this->aTechnicalComments;
    }

    /**
     * Set aCommercialComments
     *
     * @param string $aCommercialComments
     * @return SpkResidentialBuffer
     */
    public function setACommercialComments($aCommercialComments)
    {
        $this->aCommercialComments = $aCommercialComments;

        return $this;
    }

    /**
     * Get aCommercialComments
     *
     * @return string 
     */
    public function getACommercialComments()
    {
        return $this->aCommercialComments;
    }

    /**
     * Set aParkingComments
     *
     * @param string $aParkingComments
     * @return SpkResidentialBuffer
     */
    public function setAParkingComments($aParkingComments)
    {
        $this->aParkingComments = $aParkingComments;

        return $this;
    }

    /**
     * Get aParkingComments
     *
     * @return string 
     */
    public function getAParkingComments()
    {
        return $this->aParkingComments;
    }

    /**
     * Set aPar1
     *
     * @param string $aPar1
     * @return SpkResidentialBuffer
     */
    public function setAPar1($aPar1)
    {
        $this->aPar1 = $aPar1;

        return $this;
    }

    /**
     * Get aPar1
     *
     * @return string 
     */
    public function getAPar1()
    {
        return $this->aPar1;
    }

    /**
     * Set aPar2
     *
     * @param string $aPar2
     * @return SpkResidentialBuffer
     */
    public function setAPar2($aPar2)
    {
        $this->aPar2 = $aPar2;

        return $this;
    }

    /**
     * Get aPar2
     *
     * @return string 
     */
    public function getAPar2()
    {
        return $this->aPar2;
    }

    /**
     * Set aPar3
     *
     * @param string $aPar3
     * @return SpkResidentialBuffer
     */
    public function setAPar3($aPar3)
    {
        $this->aPar3 = $aPar3;

        return $this;
    }

    /**
     * Get aPar3
     *
     * @return string 
     */
    public function getAPar3()
    {
        return $this->aPar3;
    }

    /**
     * Set aPar4
     *
     * @param string $aPar4
     * @return SpkResidentialBuffer
     */
    public function setAPar4($aPar4)
    {
        $this->aPar4 = $aPar4;

        return $this;
    }

    /**
     * Get aPar4
     *
     * @return string 
     */
    public function getAPar4()
    {
        return $this->aPar4;
    }

    /**
     * Set aPar5
     *
     * @param string $aPar5
     * @return SpkResidentialBuffer
     */
    public function setAPar5($aPar5)
    {
        $this->aPar5 = $aPar5;

        return $this;
    }

    /**
     * Get aPar5
     *
     * @return string 
     */
    public function getAPar5()
    {
        return $this->aPar5;
    }

    /**
     * Set aPar6
     *
     * @param string $aPar6
     * @return SpkResidentialBuffer
     */
    public function setAPar6($aPar6)
    {
        $this->aPar6 = $aPar6;

        return $this;
    }

    /**
     * Get aPar6
     *
     * @return string 
     */
    public function getAPar6()
    {
        return $this->aPar6;
    }

    /**
     * Set aPar7
     *
     * @param string $aPar7
     * @return SpkResidentialBuffer
     */
    public function setAPar7($aPar7)
    {
        $this->aPar7 = $aPar7;

        return $this;
    }

    /**
     * Get aPar7
     *
     * @return string 
     */
    public function getAPar7()
    {
        return $this->aPar7;
    }

    /**
     * Set aPar8
     *
     * @param string $aPar8
     * @return SpkResidentialBuffer
     */
    public function setAPar8($aPar8)
    {
        $this->aPar8 = $aPar8;

        return $this;
    }

    /**
     * Get aPar8
     *
     * @return string 
     */
    public function getAPar8()
    {
        return $this->aPar8;
    }

    /**
     * Set aPar9
     *
     * @param string $aPar9
     * @return SpkResidentialBuffer
     */
    public function setAPar9($aPar9)
    {
        $this->aPar9 = $aPar9;

        return $this;
    }

    /**
     * Get aPar9
     *
     * @return string 
     */
    public function getAPar9()
    {
        return $this->aPar9;
    }

    /**
     * Set aPar10
     *
     * @param string $aPar10
     * @return SpkResidentialBuffer
     */
    public function setAPar10($aPar10)
    {
        $this->aPar10 = $aPar10;

        return $this;
    }

    /**
     * Get aPar10
     *
     * @return string 
     */
    public function getAPar10()
    {
        return $this->aPar10;
    }

    /**
     * Set aPar11
     *
     * @param string $aPar11
     * @return SpkResidentialBuffer
     */
    public function setAPar11($aPar11)
    {
        $this->aPar11 = $aPar11;

        return $this;
    }

    /**
     * Get aPar11
     *
     * @return string 
     */
    public function getAPar11()
    {
        return $this->aPar11;
    }

    /**
     * Set aPar12
     *
     * @param string $aPar12
     * @return SpkResidentialBuffer
     */
    public function setAPar12($aPar12)
    {
        $this->aPar12 = $aPar12;

        return $this;
    }

    /**
     * Get aPar12
     *
     * @return string 
     */
    public function getAPar12()
    {
        return $this->aPar12;
    }

    /**
     * Set aPar13
     *
     * @param string $aPar13
     * @return SpkResidentialBuffer
     */
    public function setAPar13($aPar13)
    {
        $this->aPar13 = $aPar13;

        return $this;
    }

    /**
     * Get aPar13
     *
     * @return string 
     */
    public function getAPar13()
    {
        return $this->aPar13;
    }

    /**
     * Set aPar14
     *
     * @param string $aPar14
     * @return SpkResidentialBuffer
     */
    public function setAPar14($aPar14)
    {
        $this->aPar14 = $aPar14;

        return $this;
    }

    /**
     * Get aPar14
     *
     * @return string 
     */
    public function getAPar14()
    {
        return $this->aPar14;
    }

    /**
     * Set aPar15
     *
     * @param string $aPar15
     * @return SpkResidentialBuffer
     */
    public function setAPar15($aPar15)
    {
        $this->aPar15 = $aPar15;

        return $this;
    }

    /**
     * Get aPar15
     *
     * @return string 
     */
    public function getAPar15()
    {
        return $this->aPar15;
    }

    /**
     * Set aPar16
     *
     * @param string $aPar16
     * @return SpkResidentialBuffer
     */
    public function setAPar16($aPar16)
    {
        $this->aPar16 = $aPar16;

        return $this;
    }

    /**
     * Get aPar16
     *
     * @return string 
     */
    public function getAPar16()
    {
        return $this->aPar16;
    }

    /**
     * Set aPar17
     *
     * @param string $aPar17
     * @return SpkResidentialBuffer
     */
    public function setAPar17($aPar17)
    {
        $this->aPar17 = $aPar17;

        return $this;
    }

    /**
     * Get aPar17
     *
     * @return string 
     */
    public function getAPar17()
    {
        return $this->aPar17;
    }

    /**
     * Set aPar18
     *
     * @param string $aPar18
     * @return SpkResidentialBuffer
     */
    public function setAPar18($aPar18)
    {
        $this->aPar18 = $aPar18;

        return $this;
    }

    /**
     * Get aPar18
     *
     * @return string 
     */
    public function getAPar18()
    {
        return $this->aPar18;
    }

    /**
     * Set aPar19
     *
     * @param string $aPar19
     * @return SpkResidentialBuffer
     */
    public function setAPar19($aPar19)
    {
        $this->aPar19 = $aPar19;

        return $this;
    }

    /**
     * Get aPar19
     *
     * @return string 
     */
    public function getAPar19()
    {
        return $this->aPar19;
    }

    /**
     * Set aPar20
     *
     * @param string $aPar20
     * @return SpkResidentialBuffer
     */
    public function setAPar20($aPar20)
    {
        $this->aPar20 = $aPar20;

        return $this;
    }

    /**
     * Get aPar20
     *
     * @return string 
     */
    public function getAPar20()
    {
        return $this->aPar20;
    }

    /**
     * Set aPar21
     *
     * @param string $aPar21
     * @return SpkResidentialBuffer
     */
    public function setAPar21($aPar21)
    {
        $this->aPar21 = $aPar21;

        return $this;
    }

    /**
     * Get aPar21
     *
     * @return string 
     */
    public function getAPar21()
    {
        return $this->aPar21;
    }

    /**
     * Set aPar22
     *
     * @param string $aPar22
     * @return SpkResidentialBuffer
     */
    public function setAPar22($aPar22)
    {
        $this->aPar22 = $aPar22;

        return $this;
    }

    /**
     * Get aPar22
     *
     * @return string 
     */
    public function getAPar22()
    {
        return $this->aPar22;
    }

    /**
     * Set aPar23
     *
     * @param string $aPar23
     * @return SpkResidentialBuffer
     */
    public function setAPar23($aPar23)
    {
        $this->aPar23 = $aPar23;

        return $this;
    }

    /**
     * Get aPar23
     *
     * @return string 
     */
    public function getAPar23()
    {
        return $this->aPar23;
    }

    /**
     * Set aPar24
     *
     * @param string $aPar24
     * @return SpkResidentialBuffer
     */
    public function setAPar24($aPar24)
    {
        $this->aPar24 = $aPar24;

        return $this;
    }

    /**
     * Get aPar24
     *
     * @return string 
     */
    public function getAPar24()
    {
        return $this->aPar24;
    }

    /**
     * Set aPar25
     *
     * @param string $aPar25
     * @return SpkResidentialBuffer
     */
    public function setAPar25($aPar25)
    {
        $this->aPar25 = $aPar25;

        return $this;
    }

    /**
     * Get aPar25
     *
     * @return string 
     */
    public function getAPar25()
    {
        return $this->aPar25;
    }

    /**
     * Set aPar26
     *
     * @param string $aPar26
     * @return SpkResidentialBuffer
     */
    public function setAPar26($aPar26)
    {
        $this->aPar26 = $aPar26;

        return $this;
    }

    /**
     * Get aPar26
     *
     * @return string 
     */
    public function getAPar26()
    {
        return $this->aPar26;
    }

    /**
     * Set aPar27
     *
     * @param string $aPar27
     * @return SpkResidentialBuffer
     */
    public function setAPar27($aPar27)
    {
        $this->aPar27 = $aPar27;

        return $this;
    }

    /**
     * Get aPar27
     *
     * @return string 
     */
    public function getAPar27()
    {
        return $this->aPar27;
    }

    /**
     * Set aPar28
     *
     * @param string $aPar28
     * @return SpkResidentialBuffer
     */
    public function setAPar28($aPar28)
    {
        $this->aPar28 = $aPar28;

        return $this;
    }

    /**
     * Get aPar28
     *
     * @return string 
     */
    public function getAPar28()
    {
        return $this->aPar28;
    }

    /**
     * Set aPar29
     *
     * @param string $aPar29
     * @return SpkResidentialBuffer
     */
    public function setAPar29($aPar29)
    {
        $this->aPar29 = $aPar29;

        return $this;
    }

    /**
     * Get aPar29
     *
     * @return string 
     */
    public function getAPar29()
    {
        return $this->aPar29;
    }

    /**
     * Set aPar30
     *
     * @param string $aPar30
     * @return SpkResidentialBuffer
     */
    public function setAPar30($aPar30)
    {
        $this->aPar30 = $aPar30;

        return $this;
    }

    /**
     * Get aPar30
     *
     * @return string 
     */
    public function getAPar30()
    {
        return $this->aPar30;
    }

    /**
     * Set aPar31
     *
     * @param string $aPar31
     * @return SpkResidentialBuffer
     */
    public function setAPar31($aPar31)
    {
        $this->aPar31 = $aPar31;

        return $this;
    }

    /**
     * Get aPar31
     *
     * @return string 
     */
    public function getAPar31()
    {
        return $this->aPar31;
    }

    /**
     * Set aPar32
     *
     * @param string $aPar32
     * @return SpkResidentialBuffer
     */
    public function setAPar32($aPar32)
    {
        $this->aPar32 = $aPar32;

        return $this;
    }

    /**
     * Get aPar32
     *
     * @return string 
     */
    public function getAPar32()
    {
        return $this->aPar32;
    }

    /**
     * Set aPar33
     *
     * @param string $aPar33
     * @return SpkResidentialBuffer
     */
    public function setAPar33($aPar33)
    {
        $this->aPar33 = $aPar33;

        return $this;
    }

    /**
     * Get aPar33
     *
     * @return string 
     */
    public function getAPar33()
    {
        return $this->aPar33;
    }

    /**
     * Set aPar34
     *
     * @param string $aPar34
     * @return SpkResidentialBuffer
     */
    public function setAPar34($aPar34)
    {
        $this->aPar34 = $aPar34;

        return $this;
    }

    /**
     * Get aPar34
     *
     * @return string 
     */
    public function getAPar34()
    {
        return $this->aPar34;
    }

    /**
     * Set aPar35
     *
     * @param string $aPar35
     * @return SpkResidentialBuffer
     */
    public function setAPar35($aPar35)
    {
        $this->aPar35 = $aPar35;

        return $this;
    }

    /**
     * Get aPar35
     *
     * @return string 
     */
    public function getAPar35()
    {
        return $this->aPar35;
    }

    /**
     * Set aPar36
     *
     * @param string $aPar36
     * @return SpkResidentialBuffer
     */
    public function setAPar36($aPar36)
    {
        $this->aPar36 = $aPar36;

        return $this;
    }

    /**
     * Get aPar36
     *
     * @return string 
     */
    public function getAPar36()
    {
        return $this->aPar36;
    }

    /**
     * Set aPar37
     *
     * @param string $aPar37
     * @return SpkResidentialBuffer
     */
    public function setAPar37($aPar37)
    {
        $this->aPar37 = $aPar37;

        return $this;
    }

    /**
     * Get aPar37
     *
     * @return string 
     */
    public function getAPar37()
    {
        return $this->aPar37;
    }

    /**
     * Set aPar38
     *
     * @param string $aPar38
     * @return SpkResidentialBuffer
     */
    public function setAPar38($aPar38)
    {
        $this->aPar38 = $aPar38;

        return $this;
    }

    /**
     * Get aPar38
     *
     * @return string 
     */
    public function getAPar38()
    {
        return $this->aPar38;
    }

    /**
     * Set aPar39
     *
     * @param string $aPar39
     * @return SpkResidentialBuffer
     */
    public function setAPar39($aPar39)
    {
        $this->aPar39 = $aPar39;

        return $this;
    }

    /**
     * Get aPar39
     *
     * @return string 
     */
    public function getAPar39()
    {
        return $this->aPar39;
    }

    /**
     * Set aPar40
     *
     * @param string $aPar40
     * @return SpkResidentialBuffer
     */
    public function setAPar40($aPar40)
    {
        $this->aPar40 = $aPar40;

        return $this;
    }

    /**
     * Get aPar40
     *
     * @return string 
     */
    public function getAPar40()
    {
        return $this->aPar40;
    }

    /**
     * Set aPar41
     *
     * @param string $aPar41
     * @return SpkResidentialBuffer
     */
    public function setAPar41($aPar41)
    {
        $this->aPar41 = $aPar41;

        return $this;
    }

    /**
     * Get aPar41
     *
     * @return string 
     */
    public function getAPar41()
    {
        return $this->aPar41;
    }

    /**
     * Set aPar42
     *
     * @param string $aPar42
     * @return SpkResidentialBuffer
     */
    public function setAPar42($aPar42)
    {
        $this->aPar42 = $aPar42;

        return $this;
    }

    /**
     * Get aPar42
     *
     * @return string 
     */
    public function getAPar42()
    {
        return $this->aPar42;
    }

    /**
     * Set aPar43
     *
     * @param string $aPar43
     * @return SpkResidentialBuffer
     */
    public function setAPar43($aPar43)
    {
        $this->aPar43 = $aPar43;

        return $this;
    }

    /**
     * Get aPar43
     *
     * @return string 
     */
    public function getAPar43()
    {
        return $this->aPar43;
    }

    /**
     * Set aPar44
     *
     * @param string $aPar44
     * @return SpkResidentialBuffer
     */
    public function setAPar44($aPar44)
    {
        $this->aPar44 = $aPar44;

        return $this;
    }

    /**
     * Get aPar44
     *
     * @return string 
     */
    public function getAPar44()
    {
        return $this->aPar44;
    }

    /**
     * Set aPar45
     *
     * @param string $aPar45
     * @return SpkResidentialBuffer
     */
    public function setAPar45($aPar45)
    {
        $this->aPar45 = $aPar45;

        return $this;
    }

    /**
     * Get aPar45
     *
     * @return string 
     */
    public function getAPar45()
    {
        return $this->aPar45;
    }
}
