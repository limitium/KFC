<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndObjTech
 *
 */
class SpkIndObjTech
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
     * @var string
     *
     */
    private $landTarget;

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
     * @var integer
     *
     */
    private $storeys;

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
     * @var integer
     *
     */
    private $lifts;

    /**
     * @var float
     *
     */
    private $liftsWeight;

    /**
     * @var integer
     *
     */
    private $docks;

    /**
     * @var integer
     *
     */
    private $gates;

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
     * @var float
     *
     */
    private $electricity;

    /**
     * @var float
     *
     */
    private $temperature;

    /**
     * @var string
     *
     */
    private $provider;

    /**
     * @var \DateTime
     *
     */
    private $entryDate;

    /**
     * @var string
     *
     */
    private $loadUnloadDock;

    /**
     * @var float
     *
     */
    private $availabilityMkad;

    /**
     * @var string
     *
     */
    private $airport;

    /**
     * @var float
     *
     */
    private $availabilityAirport;

    /**
     * @var float
     *
     */
    private $mezoninArea;

    /**
     * @var string
     *
     */
    private $buildingType;

    /**
     * @var float
     *
     */
    private $freeTotalArea;

    /**
     * @var float
     *
     */
    private $freeMezzanineArea;

    /**
     * @var float
     *
     */
    private $freeIndustrialArea;

    /**
     * @var string
     *
     */
    private $temper;

    /**
     * @var integer
     *
     */
    private $completedQuater;

    /**
     * @var integer
     *
     */
    private $completedYear;

    /**
     * @var string
     *
     */
    private $docksType;

    /**
     * @var string
     *
     */
    private $gatesType;

    /**
     * @var float
     *
     */
    private $nenuzhnoePole;

    /**
     * @var string
     *
     */
    private $completionStage;

    /**
     * @var \DateTime
     *
     */
    private $completionDate;


}
