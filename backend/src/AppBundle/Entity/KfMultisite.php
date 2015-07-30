<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMultisite
 *
 * @ORM\Table(name="KF_MULTISITE", indexes={@ORM\Index(name="KF_MULTISITE_PRIMARY", columns={"KF_MULTISITEID"}), @ORM\Index(name="KF_MULTISITE_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfMultisite
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MULTISITEID", type="string", length=12, nullable=false)
     */
    private $kfMultisiteid;

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
     * @ORM\Column(name="DEPARTMENT", type="string", length=32, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETERS", type="string", length=512, nullable=true)
     */
    private $parameters;

    /**
     * @var string
     *
     * @ORM\Column(name="VAL", type="string", length=2048, nullable=true)
     */
    private $val;


}
