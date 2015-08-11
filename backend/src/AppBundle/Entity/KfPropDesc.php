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



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfPropDesc
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
     * Set description
     *
     * @param string $description
     * @return KfPropDesc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set slxid
     *
     * @param string $slxid
     * @return KfPropDesc
     */
    public function setSlxid($slxid)
    {
        $this->slxid = $slxid;

        return $this;
    }

    /**
     * Get slxid
     *
     * @return string 
     */
    public function getSlxid()
    {
        return $this->slxid;
    }

    /**
     * Set specialOfferRus
     *
     * @param string $specialOfferRus
     * @return KfPropDesc
     */
    public function setSpecialOfferRus($specialOfferRus)
    {
        $this->specialOfferRus = $specialOfferRus;

        return $this;
    }

    /**
     * Get specialOfferRus
     *
     * @return string 
     */
    public function getSpecialOfferRus()
    {
        return $this->specialOfferRus;
    }
}
