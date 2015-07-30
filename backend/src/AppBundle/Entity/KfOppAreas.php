<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppAreas
 *
 * @ORM\Table(name="KF_OPP_AREAS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_AREAS_PRIMARY", columns={"KF_OPP_AREASID"})}, indexes={@ORM\Index(name="KF_OPP_AREAS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppAreas
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_AREASID", type="string", length=12, nullable=false)
     */
    private $kfOppAreasid;

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
     * @ORM\Column(name="SPK_AREAID", type="string", length=12, nullable=true)
     */
    private $spkAreaid;


}
