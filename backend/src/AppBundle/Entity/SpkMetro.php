<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkMetro
 *
 * @ORM\Table(name="SPK_METRO", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_METRO_PRIMARY", columns={"SPK_METROID"})}, indexes={@ORM\Index(name="KF_SR_SPK_METROID_incl", columns={"SPK_METROID", "METRO_RUS", "METRO_ENG"})})
 * @ORM\Entity
 */
class SpkMetro
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_METROID", type="string", length=12, nullable=false)
     */
    private $spkMetroid;

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
     * @ORM\Column(name="METRO_RUS", type="string", length=128, nullable=true)
     */
    private $metroRus;

    /**
     * @var string
     *
     * @ORM\Column(name="METRO_ENG", type="string", length=128, nullable=true)
     */
    private $metroEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;

    /**
     * @var string
     *
     * @ORM\Column(name="cian_number", type="string", length=3, nullable=true)
     */
    private $cianNumber;


}
