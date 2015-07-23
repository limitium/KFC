<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParametersManage
 *
 * @ORM\Table(name="SPK_PARAMETERS_MANAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_PARAMETERS_MANAGE_PRIMARY", columns={"SPK_PARAMETERS_MANAGEID"})}, indexes={@ORM\Index(name="SPK_PARAMETERS_MANAGE_PARAMETER_TYPE", columns={"PARAMETER_TYPE"})})
 * @ORM\Entity
 */
class SpkParametersManage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PARAMETERS_MANAGEID", type="string", length=12, nullable=false)
     */
    private $spkParametersManageid;

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
     * @ORM\Column(name="PARAMETER_TYPE", type="string", length=16, nullable=true)
     */
    private $parameterType;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_NAME_RUS", type="string", length=64, nullable=true)
     */
    private $parameterNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_NAME_ENG", type="string", length=64, nullable=true)
     */
    private $parameterNameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="RESIDENTIAL", type="string", length=1, nullable=true)
     */
    private $residential;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY", type="string", length=1, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAIL", type="string", length=1, nullable=true)
     */
    private $retail;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE", type="string", length=1, nullable=true)
     */
    private $office;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL", type="string", length=1, nullable=true)
     */
    private $industrial;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_GROUP", type="string", length=64, nullable=true)
     */
    private $parameterGroup;


}
