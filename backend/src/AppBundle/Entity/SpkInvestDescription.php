<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestDescription
 *
 * @ORM\Table(name="SPK_INVEST_DESCRIPTION", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_INVEST_DESCRIPTION_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkInvestDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
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
     * @ORM\Column(name="OBREMENENIE", type="string", length=2048, nullable=true)
     */
    private $obremenenie;

    /**
     * @var integer
     *
     * @ORM\Column(name="POTOKI", type="integer", nullable=true)
     */
    private $potoki;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDINGS", type="string", length=16, nullable=true)
     */
    private $buildings;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDINGS_STATUS", type="string", length=32, nullable=true)
     */
    private $buildingsStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITIES", type="string", length=1024, nullable=true)
     */
    private $utilities;

    /**
     * @var string
     *
     * @ORM\Column(name="TENANTS", type="string", length=1024, nullable=true)
     */
    private $tenants;

    /**
     * @var float
     *
     * @ORM\Column(name="SCHOOL_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $schoolSq;

    /**
     * @var float
     *
     * @ORM\Column(name="SCHOOL_PLACE", type="float", precision=53, scale=0, nullable=true)
     */
    private $schoolPlace;

    /**
     * @var float
     *
     * @ORM\Column(name="KINDERGARTEN_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $kindergartenSq;

    /**
     * @var float
     *
     * @ORM\Column(name="KINDERGARTEN_PLACE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kindergartenPlace;

    /**
     * @var float
     *
     * @ORM\Column(name="CLINIC_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $clinicSq;

    /**
     * @var float
     *
     * @ORM\Column(name="MFC_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $mfcSq;

    /**
     * @var float
     *
     * @ORM\Column(name="FOK_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $fokSq;


}
