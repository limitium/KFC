<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAddress
 *
 */
class SpkAddress
{
    /**
     * @var string
     *
     */
    private $spkAddressid;

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
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $spkAreaid;

    /**
     * @var string
     *
     */
    private $spkDistrictid;

    /**
     * @var string
     *
     */
    private $spkStreetid;

    /**
     * @var string
     *
     */
    private $spkHighwayid;

    /**
     * @var integer
     *
     */
    private $gisid;

    /**
     * @var string
     *
     */
    private $newAddress;

    /**
     * @var string
     *
     */
    private $tempAddress;

    /**
     * @var float
     *
     */
    private $distanceMkad;

    /**
     * @var string
     *
     */
    private $importsource;

    /**
     * @var string
     *
     */
    private $kadastr;

    /**
     * @var string
     *
     */
    private $oblastid;

    /**
     * @var float
     *
     */
    private $latitude;

    /**
     * @var float
     *
     */
    private $longtitude;

    /**
     * @var float
     *
     */
    private $accuracy;

    /**
     * @var string
     *
     */
    private $centerOfPopulation;

    /**
     * @var string
     *
     */
    private $coordinate;


}
