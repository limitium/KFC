<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqObjects
 *
 * @ORM\Table(name="SPK_REQ_OBJECTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_REQ_OBJECTS_PRIMARY", columns={"SPK_REQ_OBJECTSID"})}, indexes={@ORM\Index(name="SPK_REQ_OBJECTS_SPK_REQ_REQUIREMENTSID", columns={"SPK_REQ_REQUIREMENTSID"})})
 * @ORM\Entity
 */
class SpkReqObjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQ_OBJECTSID", type="string", length=12, nullable=false)
     */
    private $spkReqObjectsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQ_REQUIREMENTSID", type="string", length=12, nullable=false)
     */
    private $spkReqRequirementsid;

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
