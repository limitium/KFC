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



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfFeeCountryTemp
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     * @return KfFeeCountryTemp
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set fee
     *
     * @param string $fee
     * @return KfFeeCountryTemp
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string 
     */
    public function getFee()
    {
        return $this->fee;
    }
}
