<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTeleParameters
 *
 * @ORM\Table(name="KF_TELE_PARAMETERS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TELE_PARAMETERS_PRIMARY", columns={"KF_TELE_PARAMETERSID"})})
 * @ORM\Entity
 */
class KfTeleParameters
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_PARAMETERSID", type="string", length=12, nullable=false)
     */
    private $kfTeleParametersid;

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
     * @ORM\Column(name="PARAMETR", type="string", length=256, nullable=true)
     */
    private $parametr;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCE", type="string", length=256, nullable=true)
     */
    private $leadsource;


}
