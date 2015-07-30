<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempOpp
 *
 * @ORM\Table(name="KF_TEMP_OPP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TEMP_OPP_PRIMARY", columns={"KF_TEMP_OPPID"})})
 * @ORM\Entity
 */
class KfTempOpp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TEMP_OPPID", type="string", length=12, nullable=false)
     */
    private $kfTempOppid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTID", type="string", length=12, nullable=true)
     */
    private $spkRequestid;

    /**
     * @var string
     *
     * @ORM\Column(name="LONGLISTID", type="string", length=12, nullable=true)
     */
    private $longlistid;


}
