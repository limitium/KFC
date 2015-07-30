<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropDesc
 *
 * @ORM\Table(name="KF_PROP_DESC")
 * @ORM\Entity
 */
class KfPropDesc
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="SLXID", type="string", length=255, nullable=true)
     */
    private $slxid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIAL_OFFER_RUS", type="string", length=255, nullable=true)
     */
    private $specialOfferRus;


}
