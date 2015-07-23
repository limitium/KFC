<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjHigh
 *
 * @ORM\Table(name="SPK_OPP_REQ_OBJ_HIGH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_REQ_OBJ_HIGH_PRIMARY", columns={"SPK_OPP_REQ_OBJ_HIGHID"})}, indexes={@ORM\Index(name="SPK_OPP_REQ_OBJ_HIGH_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkOppReqObjHigh
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_REQ_OBJ_HIGHID", type="string", length=12, nullable=false)
     */
    private $spkOppReqObjHighid;

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
     * @ORM\Column(name="HIGHWAYID", type="string", length=12, nullable=true)
     */
    private $highwayid;


}
