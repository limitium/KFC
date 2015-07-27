<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntStTech
 *
 */
class SpkCntStTech
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
    private $houseTypes;

    /**
     * @var string
     *
     */
    private $houseMaterials;

    /**
     * @var integer
     *
     */
    private $standartDesignCount;

    /**
     * @var integer
     *
     */
    private $houseCount;

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
    private $landAreaMin;

    /**
     * @var float
     *
     */
    private $landAreaMax;

    /**
     * @var float
     *
     */
    private $totalArea;

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
     * @var integer
     *
     */
    private $cottageCount;

    /**
     * @var integer
     *
     */
    private $townhouseCount;

    /**
     * @var string
     *
     */
    private $sewerage;

    /**
     * @var float
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $water;

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
     * @var integer
     *
     */
    private $estimatedHouseCount;

    /**
     * @var float
     *
     */
    private $houseAreaMin;

    /**
     * @var float
     *
     */
    private $houseAreaMax;

    /**
     * @var float
     *
     */
    private $veryLandArea;

    /**
     * @var float
     *
     */
    private $landAreaCottageMin;

    /**
     * @var float
     *
     */
    private $landAreaCottageMax;

    /**
     * @var float
     *
     */
    private $landAreaTownhouseMin;

    /**
     * @var float
     *
     */
    private $landAreaTownhouseMax;

    /**
     * @var string
     *
     */
    private $security;

    /**
     * @var string
     *
     */
    private $kfClass;

    /**
     * @var string
     *
     */
    private $thisProject;

    /**
     * @var string
     *
     */
    private $market;

    /**
     * @var string
     *
     */
    private $categoryLandlord;


}
