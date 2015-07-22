<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsServices
 *
 * @ORM\Table(name="SPK_REQUESTS_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQUESTS_SERVICES_PRIMARY", columns={"SPK_REQUESTS_SERVICESID"})}, indexes={@ORM\Index(name="SPK_REQUESTS_SERVICES_SPK_REQUESTSID", columns={"SPK_REQUESTSID"})})
 * @ORM\Entity
 */
class SpkRequestsServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTS_SERVICESID", type="string", length=12, nullable=false)
     */
    private $spkRequestsServicesid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsid;

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
