<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBkTech
 *
 */
class SpkIndBkTech
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
     * @var float
     *
     */
    private $ceillingHeight;

    /**
     * @var string
     *
     */
    private $floorType;

    /**
     * @var float
     *
     */
    private $floorHeight;

    /**
     * @var float
     *
     */
    private $floorWeight;

    /**
     * @var string
     *
     */
    private $columnGrid;

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
    private $storey;

    /**
     * @var string
     *
     */
    private $class;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $storageArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $groundArea;

    /**
     * @var float
     *
     */
    private $landArea;

    /**
     * @var float
     *
     */
    private $freeStorageArea;

    /**
     * @var float
     *
     */
    private $freeOfficeArea;

    /**
     * @var float
     *
     */
    private $additionalArea;

    /**
     * @var string
     *
     */
    private $bockType;

    /**
     * @var float
     *
     */
    private $mezoninArea;

    /**
     * @var string
     *
     */
    private $goods;

    /**
     * @var float
     *
     */
    private $availablePaletomest;

    /**
     * @var float
     *
     */
    private $totalAreaPaletomest;

    /**
     * @var float
     *
     */
    private $availableArea;

    /**
     * @var float
     *
     */
    private $availableAreaM3;

    /**
     * @var float
     *
     */
    private $totalAreaM3;

    /**
     * @var float
     *
     */
    private $availableAreaMass;

    /**
     * @var float
     *
     */
    private $totalAreaMass;

    /**
     * @var string
     *
     */
    private $palletType;

    /**
     * @var string
     *
     */
    private $temperatureType;

    /**
     * @var string
     *
     */
    private $mezoninStorage;

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
    private $pandus;

    /**
     * @var string
     *
     */
    private $pandusNear;

    /**
     * @var string
     *
     */
    private $tplServices;

    /**
     * @var string
     *
     */
    private $landCategory;

    /**
     * @var string
     *
     */
    private $landUsetype;

    /**
     * @var integer
     *
     */
    private $termOfLease;

    /**
     * @var float
     *
     */
    private $landAreaSqm;

    /**
     * @var string
     *
     */
    private $divided;

    /**
     * @var string
     *
     */
    private $coordinate;


}
