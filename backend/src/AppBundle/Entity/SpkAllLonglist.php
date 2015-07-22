<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAllLonglist
 *
 * @ORM\Table(name="SPK_ALL_LONGLIST", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_ALL_LONGLIST_PRIMARY", columns={"SPK_ALL_LONGLISTID"})}, indexes={@ORM\Index(name="SPK_ALL_LONGLIST_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkAllLonglist
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ALL_LONGLISTID", type="string", length=12, nullable=false)
     */
    private $spkAllLonglistid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="ACCOUNT_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $accountAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $contactAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_ALL_LONGLIST", type="string", length=32, nullable=true)
     */
    private $sectionAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_ALL_LONGLIST", type="string", length=15, nullable=true)
     */
    private $statusAllLonglist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEREPLY", type="datetime", nullable=true)
     */
    private $datereply;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=70, nullable=true)
     */
    private $brand;

    /**
     * @var float
     *
     * @ORM\Column(name="SQ_MIN_ALL_LONGLIST", type="float", precision=53, scale=0, nullable=true)
     */
    private $sqMinAllLonglist;

    /**
     * @var float
     *
     * @ORM\Column(name="SQ_MAX_ALL_LONGLIST", type="float", precision=53, scale=0, nullable=true)
     */
    private $sqMaxAllLonglist;

    /**
     * @var float
     *
     * @ORM\Column(name="BUD_MIN_ALL_LONGLIST", type="float", precision=53, scale=0, nullable=true)
     */
    private $budMinAllLonglist;

    /**
     * @var float
     *
     * @ORM\Column(name="BUD_MAX_ALL_LONGLIST", type="float", precision=53, scale=0, nullable=true)
     */
    private $budMaxAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $industryAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILE_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $profileAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILE_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $subprofileAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $emailAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME_ALL_LONGLIST", type="string", length=70, nullable=true)
     */
    private $usernameAllLonglist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_OTKAZA", type="datetime", nullable=true)
     */
    private $dataOtkaza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_SOGLASIA", type="datetime", nullable=true)
     */
    private $dataSoglasia;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID_ALL_LONGLIST", type="string", length=12, nullable=true)
     */
    private $contactidAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKER_COUNTER", type="string", length=45, nullable=true)
     */
    private $brokerCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTAR", type="string", length=1300, nullable=true)
     */
    private $commentar;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES_COMENTS", type="text", length=16, nullable=true)
     */
    private $notesComents;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_MANAGER", type="string", length=128, nullable=true)
     */
    private $contactManager;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRYID_ALL_LONGLIST", type="string", length=12, nullable=true)
     */
    private $industryidAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID_ALL_LONGLIST", type="string", length=12, nullable=true)
     */
    private $profileidAllLonglist;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID_ALL_LONGLIST", type="string", length=12, nullable=true)
     */
    private $subprofileidAllLonglist;


}
