<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppDistricts
 *
 * @ORM\Table(name="KF_OPP_DISTRICTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_DISTRICTS_PRIMARY", columns={"KF_OPP_DISTRICTSID"})}, indexes={@ORM\Index(name="KF_OPP_DISTRICTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppDistricts
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_DISTRICTSID", type="string", length=12, nullable=false)
     */
    private $kfOppDistrictsid;

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
     * @ORM\Column(name="SPK_DISTRICTID", type="string", length=12, nullable=true)
     */
    private $spkDistrictid;


}
