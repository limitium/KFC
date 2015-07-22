<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjMetro
 *
 * @ORM\Table(name="SPK_OPP_REQ_OBJ_METRO", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_REQ_OBJ_METRO_PRIMARY", columns={"SPK_OPP_REQ_OBJ_METROID"})}, indexes={@ORM\Index(name="SPK_OPP_REQ_OBJ_METRO_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkOppReqObjMetro
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_REQ_OBJ_METROID", type="string", length=12, nullable=false)
     */
    private $spkOppReqObjMetroid;

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
     * @ORM\Column(name="SPK_METROID", type="string", length=12, nullable=true)
     */
    private $spkMetroid;


}
