<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTypeStreets
 *
 * @ORM\Table(name="kf_type_streets")
 * @ORM\Entity
 */
class KfTypeStreets
{
    /**
     * @var string
     *
     * @ORM\Column(name="street_type_rus", type="string", length=255, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="smallint", nullable=true)
     */
    private $gender;



    /**
     * Set streetTypeRus
     *
     * @param string $streetTypeRus
     * @return KfTypeStreets
     */
    public function setStreetTypeRus($streetTypeRus)
    {
        $this->streetTypeRus = $streetTypeRus;

        return $this;
    }

    /**
     * Get streetTypeRus
     *
     * @return string 
     */
    public function getStreetTypeRus()
    {
        return $this->streetTypeRus;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return KfTypeStreets
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }
}
