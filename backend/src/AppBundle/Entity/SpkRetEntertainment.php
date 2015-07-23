<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetEntertainment
 *
 * @ORM\Table(name="SPK_RET_ENTERTAINMENT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_ENTERTAINMENT_PRIMARY", columns={"SPK_RET_ENTERTAINMENTID"})}, indexes={@ORM\Index(name="SPK_RET_ENTERTAINMENT_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetEntertainment
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_RET_ENTERTAINMENTID", type="string", length=12, nullable=false)
     */
    private $spkRetEntertainmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="ENTERTAINMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $entertainmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_NAME", type="string", length=32, nullable=true)
     */
    private $parameterName;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETER_VALUE", type="string", length=128, nullable=true)
     */
    private $parameterValue;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENT_ORDER", type="smallint", nullable=true)
     */
    private $entOrder;


}
