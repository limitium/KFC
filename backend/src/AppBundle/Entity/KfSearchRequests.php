<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSearchRequests
 *
 * @ORM\Table(name="KF_SEARCH_REQUESTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SEARCH_REQUESTS_PRIMARY", columns={"KF_SEARCH_REQUESTSID"})})
 * @ORM\Entity
 */
class KfSearchRequests
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SEARCH_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $kfSearchRequestsid;

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
     * @ORM\Column(name="SEARCH_REQUESTS", type="string", length=1000, nullable=true)
     */
    private $searchRequests;


}
