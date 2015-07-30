<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfFeeCountryTemp
 *
 * @ORM\Table(name="kf_fee_country_temp")
 * @ORM\Entity
 */
class KfFeeCountryTemp
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="property_type", type="string", length=32, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="fee", type="string", length=8000, nullable=true)
     */
    private $fee;


}
