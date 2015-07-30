<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfProjectServices
 *
 * @ORM\Table(name="KF_PROJECT_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROJECT_SERVICES_PRIMARY", columns={"KF_PROJECT_SERVICESID"})}, indexes={@ORM\Index(name="KF_PROJECT_SERVICES_KF_PROJECTSID", columns={"KF_PROJECTSID"})})
 * @ORM\Entity
 */
class KfProjectServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECT_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfProjectServicesid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfProjectsid;

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
