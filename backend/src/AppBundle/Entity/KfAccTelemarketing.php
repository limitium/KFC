<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccTelemarketing
 *
 * @ORM\Table(name="KF_ACC_TELEMARKETING", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACC_TELEMARKETING_PRIMARY", columns={"KF_ACC_TELEMARKETINGID"})}, indexes={@ORM\Index(name="KF_ACC_TELEMARKETING_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfAccTelemarketing
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACC_TELEMARKETINGID", type="string", length=12, nullable=false)
     */
    private $kfAccTelemarketingid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="PARAMETERS", type="string", length=128, nullable=true)
     */
    private $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL", type="string", length=128, nullable=true)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCE", type="string", length=128, nullable=true)
     */
    private $leadsource;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_PARAMETERSID", type="string", length=12, nullable=true)
     */
    private $kfTeleParametersid;


}
