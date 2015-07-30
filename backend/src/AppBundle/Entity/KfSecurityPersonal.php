<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSecurityPersonal
 *
 * @ORM\Table(name="KF_SECURITY_PERSONAL", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SECURITY_PERSONAL_PRIMARY", columns={"KF_SECURITY_PERSONALID"})})
 * @ORM\Entity
 */
class KfSecurityPersonal
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SECURITY_PERSONALID", type="string", length=12, nullable=false)
     */
    private $kfSecurityPersonalid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=32, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION_PALO", type="string", length=128, nullable=true)
     */
    private $divisionPalo;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION_CRM", type="string", length=128, nullable=true)
     */
    private $divisionCrm;


}
