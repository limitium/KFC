<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkArea
 *
 * @ORM\Table(name="SPK_AREA", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_AREA_PRIMARY", columns={"SPK_AREAID"})}, indexes={@ORM\Index(name="KF_SR_IX_SPK_AREAID_incl", columns={"SPK_AREAID", "AREA_RUS", "AREA_ENG"})})
 * @ORM\Entity
 */
class SpkArea
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_AREAID", type="string", length=12, nullable=false)
     */
    private $spkAreaid;

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
     * @ORM\Column(name="AREA_RUS", type="string", length=128, nullable=true)
     */
    private $areaRus;

    /**
     * @var string
     *
     * @ORM\Column(name="AREA_ENG", type="string", length=128, nullable=true)
     */
    private $areaEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RES_ORD", type="smallint", nullable=true)
     */
    private $resOrd;

    /**
     * @var integer
     *
     * @ORM\Column(name="intareaid", type="integer", nullable=true)
     */
    private $intareaid;


}
