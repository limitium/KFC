<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaProfile
 *
 * @ORM\Table(name="AREA_PROFILE", uniqueConstraints={@ORM\UniqueConstraint(name="AREA_PROFILE_PRIMARY", columns={"AREA_PROFILEID"})}, indexes={@ORM\Index(name="AREA_PROFILE_AREAID", columns={"AREAID"})})
 * @ORM\Entity
 */
class AreaProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="AREA_PROFILEID", type="string", length=12, nullable=false)
     */
    private $areaProfileid;

    /**
     * @var string
     *
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=false)
     */
    private $areaid;

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
     * @ORM\Column(name="PROFILENAME", type="string", length=64, nullable=true)
     */
    private $profilename;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILENAMERUS", type="string", length=64, nullable=true)
     */
    private $profilenamerus;


}
