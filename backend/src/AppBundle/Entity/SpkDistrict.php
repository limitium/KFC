<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDistrict
 *
 * @ORM\Table(name="SPK_DISTRICT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_DISTRICT_PRIMARY", columns={"SPK_DISTRICTID"})}, indexes={@ORM\Index(name="KF_SR_SPK_DISTRICTID_incl", columns={"SPK_DISTRICTID", "DISTRICT_RUS", "DISTRICT_ENG"})})
 * @ORM\Entity
 */
class SpkDistrict
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_DISTRICTID", type="string", length=12, nullable=false)
     */
    private $spkDistrictid;

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
     * @ORM\Column(name="DISTRICT_RUS", type="string", length=128, nullable=true)
     */
    private $districtRus;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTRICT_ENG", type="string", length=128, nullable=true)
     */
    private $districtEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;

    /**
     * @var string
     *
     * @ORM\Column(name="SHORT_DISTRICT_RUS", type="string", length=32, nullable=true)
     */
    private $shortDistrictRus;

    /**
     * @var integer
     *
     * @ORM\Column(name="intareaid", type="integer", nullable=true)
     */
    private $intareaid;


}
