<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropertyActions
 *
 * @ORM\Table(name="KF_PROPERTY_ACTIONS")
 * @ORM\Entity
 */
class KfPropertyActions
{
    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=50, nullable=true)
     */
    private $type;


}
