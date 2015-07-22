<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjObject
 *
 * @ORM\Table(name="SPK_OPP_REQ_OBJ_OBJECT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_REQ_OBJ_OBJECT_PRIMARY", columns={"SPK_OPP_REQ_OBJ_OBJECTID"})}, indexes={@ORM\Index(name="SPK_OPP_REQ_OBJ_OBJECT_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkOppReqObjObject
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_REQ_OBJ_OBJECTID", type="string", length=12, nullable=false)
     */
    private $spkOppReqObjObjectid;

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
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;


}
