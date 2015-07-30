<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfServices
 *
 * @ORM\Table(name="KF_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SERVICES_PRIMARY", columns={"KF_SERVICESID"})}, indexes={@ORM\Index(name="KF_SR_IXKF_SERVICESID_incl", columns={"KF_SERVICESID", "SERVICENAME", "SERVICE_ENG"}), @ORM\Index(name="KF_SR_IX_Servicename", columns={"SERVICENAME"})})
 * @ORM\Entity
 */
class KfServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfServicesid;

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
     * @ORM\Column(name="SERVICENAME", type="string", length=256, nullable=true)
     */
    private $servicename;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_ENG", type="string", length=256, nullable=true)
     */
    private $serviceEng;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=128, nullable=true)
     */
    private $department;


}
