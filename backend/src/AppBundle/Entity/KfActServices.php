<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActServices
 *
 * @ORM\Table(name="KF_ACT_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACT_SERVICES_PRIMARY", columns={"KF_ACT_SERVICESID"})}, indexes={@ORM\Index(name="KF_ACT_SERVICES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfActServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACT_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfActServicesid;

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
     * @ORM\Column(name="SERVICE", type="string", length=512, nullable=true)
     */
    private $service;

    /**
     * @var float
     *
     * @ORM\Column(name="SERVICE_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $serviceAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;


}
