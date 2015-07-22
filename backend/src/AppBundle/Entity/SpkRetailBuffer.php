<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetailBuffer
 *
 * @ORM\Table(name="SPK_RETAIL_BUFFER")
 * @ORM\Entity
 */
class SpkRetailBuffer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDC", type="integer", nullable=true)
     */
    private $idc;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILE", type="string", length=64, nullable=true)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILE", type="string", length=64, nullable=true)
     */
    private $subprofile;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=255, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=32, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILE", type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="string", length=32, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="FULLACCOUNT", type="string", length=256, nullable=true)
     */
    private $fullaccount;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=32, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="WEB", type="string", length=32, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTION", type="string", length=128, nullable=true)
     */
    private $production;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_LEVEL", type="string", length=64, nullable=true)
     */
    private $costLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENT_SECTIONS", type="string", length=128, nullable=true)
     */
    private $currentSections;

    /**
     * @var string
     *
     * @ORM\Column(name="WORK_TIME", type="string", length=64, nullable=true)
     */
    private $workTime;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="S_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $sMin;

    /**
     * @var float
     *
     * @ORM\Column(name="S_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $sMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $budgetMax;

    /**
     * @var string
     *
     * @ORM\Column(name="REQUEST_NOTE", type="string", length=8000, nullable=true)
     */
    private $requestNote;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_NOTE", type="string", length=8000, nullable=true)
     */
    private $additionalNote;

    /**
     * @var string
     *
     * @ORM\Column(name="SOURCE_CATEGORY", type="string", length=50, nullable=true)
     */
    private $sourceCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT_SOURCE", type="string", length=50, nullable=true)
     */
    private $importSource;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORTID", type="string", length=12, nullable=true)
     */
    private $importid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="REQUEST_DATE", type="datetime", nullable=true)
     */
    private $requestDate;


}
