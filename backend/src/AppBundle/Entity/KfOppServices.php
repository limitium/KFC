<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppServices
 *
 * @ORM\Table(name="KF_OPP_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_SERVICES_PRIMARY", columns={"KF_OPP_SERVICESID"})}, indexes={@ORM\Index(name="KF_OPP_SERVICES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfOppServicesid;

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
     * @ORM\Column(name="SERVICEID", type="string", length=12, nullable=true)
     */
    private $serviceid;


}
