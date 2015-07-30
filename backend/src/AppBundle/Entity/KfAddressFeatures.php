<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAddressFeatures
 *
 * @ORM\Table(name="KF_ADDRESS_FEATURES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ADDRESS_FEATURES_PRIMARY", columns={"ADDRESSID"})})
 * @ORM\Entity
 */
class KfAddressFeatures
{
    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESSID", type="string", length=12, nullable=false)
     */
    private $addressid;

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
     * @ORM\Column(name="ADDRESS_FEATURES", type="string", length=1024, nullable=true)
     */
    private $addressFeatures;


}
