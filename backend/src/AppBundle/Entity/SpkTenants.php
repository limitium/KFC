<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkTenants
 *
 * @ORM\Table(name="SPK_TENANTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_TENANTS_PRIMARY", columns={"SPK_TENANTSID"})}, indexes={@ORM\Index(name="SPK_TENANTS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkTenants
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_TENANTSID", type="string", length=12, nullable=false)
     */
    private $spkTenantsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENT_CONTACT", type="string", length=1, nullable=true)
     */
    private $currentContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_TYPE", type="string", length=32, nullable=true)
     */
    private $contactType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var float
     *
     * @ORM\Column(name="AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOD", type="string", length=32, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTALRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalrate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $opexrate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXINCLUDE", type="string", length=1, nullable=true)
     */
    private $opexinclude;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXCUR", type="string", length=32, nullable=true)
     */
    private $opexcur;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="VATINCLUDE", type="string", length=1, nullable=true)
     */
    private $vatinclude;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $indexation;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPOSIT", type="string", length=32, nullable=true)
     */
    private $deposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKINGLOTS", type="integer", nullable=true)
     */
    private $parkinglots;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKINGRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingrate;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKINGCUR", type="string", length=32, nullable=true)
     */
    private $parkingcur;

    /**
     * @var integer
     *
     * @ORM\Column(name="WORKPLACES", type="integer", nullable=true)
     */
    private $workplaces;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="text", length=16, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="BREAKOPTION", type="string", length=1, nullable=true)
     */
    private $breakoption;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTOPROLONG", type="string", length=1, nullable=true)
     */
    private $autoprolong;

    /**
     * @var string
     *
     * @ORM\Column(name="RIGHTSUBLEASE", type="string", length=32, nullable=true)
     */
    private $rightsublease;

    /**
     * @var string
     *
     * @ORM\Column(name="REMINDER", type="string", length=1, nullable=true)
     */
    private $reminder;

    /**
     * @var string
     *
     * @ORM\Column(name="MANACTIVITYID", type="string", length=12, nullable=true)
     */
    private $manactivityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSACTIVITYID", type="string", length=12, nullable=true)
     */
    private $consactivityid;

    /**
     * @var string
     *
     * @ORM\Column(name="PENALTIES", type="string", length=64, nullable=true)
     */
    private $penalties;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTALCUR", type="string", length=32, nullable=true)
     */
    private $rentalcur;

    /**
     * @var string
     *
     * @ORM\Column(name="SMALL_ADDRESS", type="string", length=255, nullable=true)
     */
    private $smallAddress;


}
