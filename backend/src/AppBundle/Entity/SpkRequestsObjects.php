<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsObjects
 *
 * @ORM\Table(name="SPK_REQUESTS_OBJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQUESTS_OBJECTS_PRIMARY", columns={"SPK_REQUESTS_OBJECTSID"})}, indexes={@ORM\Index(name="SPK_REQUESTS_OBJECTS_SPK_REQUESTSID", columns={"SPK_REQUESTSID"}), @ORM\Index(name="_dta_index_SPK_REQUESTS_OBJECTS_7_1988202133__K7", columns={"OBJECTID"}), @ORM\Index(name="_dta_index_SPK_REQUESTS_OBJECTS_7_1988202133__K2_K7", columns={"SPK_REQUESTSID", "OBJECTID"}), @ORM\Index(name="_dta_index_SPK_REQUESTS_OBJECTS_7_1988202133__K7_K2", columns={"OBJECTID", "SPK_REQUESTSID"})})
 * @ORM\Entity
 */
class SpkRequestsObjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTS_OBJECTSID", type="string", length=12, nullable=false)
     */
    private $spkRequestsObjectsid;

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
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;


}
