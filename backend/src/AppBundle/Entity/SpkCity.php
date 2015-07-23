<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCity
 *
 * @ORM\Table(name="SPK_CITY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CITY_PRIMARY", columns={"SPK_CITYID"})}, indexes={@ORM\Index(name="KF_SR_IX_spk_cityid_incl", columns={"SPK_CITYID", "CITY_RUS", "CITY_ENG"})})
 * @ORM\Entity
 */
class SpkCity
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=false)
     */
    private $spkCityid;

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
     * @ORM\Column(name="CITY_RUS", type="string", length=64, nullable=true)
     */
    private $cityRus;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY_ENG", type="string", length=64, nullable=true)
     */
    private $cityEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_lang", type="integer", nullable=true)
     */
    private $cityLang;

    /**
     * @var integer
     *
     * @ORM\Column(name="CITY_REGION", type="smallint", nullable=true)
     */
    private $cityRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="intareaid", type="integer", nullable=true)
     */
    private $intareaid;


}
