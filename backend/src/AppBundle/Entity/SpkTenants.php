<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkTenants
 *
 */
class SpkTenants
{
    /**
     * @var string
     *
     */
    private $spkTenantsid;

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
    private $accountid;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $currentContact;

    /**
     * @var string
     *
     */
    private $contactType;

    /**
     * @var \DateTime
     *
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     */
    private $enddate;

    /**
     * @var float
     *
     */
    private $area;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $rentalrate;

    /**
     * @var string
     *
     */
    private $opexrate;

    /**
     * @var string
     *
     */
    private $opexinclude;

    /**
     * @var string
     *
     */
    private $opexcur;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $vatinclude;

    /**
     * @var string
     *
     */
    private $indexation;

    /**
     * @var string
     *
     */
    private $deposit;

    /**
     * @var integer
     *
     */
    private $parkinglots;

    /**
     * @var string
     *
     */
    private $parkingrate;

    /**
     * @var string
     *
     */
    private $parkingcur;

    /**
     * @var integer
     *
     */
    private $workplaces;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $breakoption;

    /**
     * @var string
     *
     */
    private $autoprolong;

    /**
     * @var string
     *
     */
    private $rightsublease;

    /**
     * @var string
     *
     */
    private $reminder;

    /**
     * @var string
     *
     */
    private $manactivityid;

    /**
     * @var string
     *
     */
    private $consactivityid;

    /**
     * @var string
     *
     */
    private $penalties;

    /**
     * @var string
     *
     */
    private $rentalcur;

    /**
     * @var string
     *
     */
    private $smallAddress;


}
