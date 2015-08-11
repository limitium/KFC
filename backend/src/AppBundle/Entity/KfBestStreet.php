<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestStreet
 *
 * @ORM\Table(name="KF_BEST_STREET")
 * @ORM\Entity
 */
class KfBestStreet
{
    /**
     * @var string
     *
     * @ORM\Column(name="BESTID", type="string", length=12, nullable=true)
     */
    private $bestid;

    /**
     * @var string
     *
     * @ORM\Column(name="STREETID", type="string", length=12, nullable=true)
     */
    private $streetid;



    /**
     * Set bestid
     *
     * @param string $bestid
     * @return KfBestStreet
     */
    public function setBestid($bestid)
    {
        $this->bestid = $bestid;

        return $this;
    }

    /**
     * Get bestid
     *
     * @return string 
     */
    public function getBestid()
    {
        return $this->bestid;
    }

    /**
     * Set streetid
     *
     * @param string $streetid
     * @return KfBestStreet
     */
    public function setStreetid($streetid)
    {
        $this->streetid = $streetid;

        return $this;
    }

    /**
     * Get streetid
     *
     * @return string 
     */
    public function getStreetid()
    {
        return $this->streetid;
    }
}
