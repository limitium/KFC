<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStreetPart
 *
 * @ORM\Table(name="KF_Street_Part")
 * @ORM\Entity
 */
class KfStreetPart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_part", type="string", length=50, nullable=true)
     */
    private $spkStreetPart;



    /**
     * Set id
     *
     * @param integer $id
     * @return KfStreetPart
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set spkStreetPart
     *
     * @param string $spkStreetPart
     * @return KfStreetPart
     */
    public function setSpkStreetPart($spkStreetPart)
    {
        $this->spkStreetPart = $spkStreetPart;

        return $this;
    }

    /**
     * Get spkStreetPart
     *
     * @return string 
     */
    public function getSpkStreetPart()
    {
        return $this->spkStreetPart;
    }
}
