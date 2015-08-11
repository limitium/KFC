<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestMetro
 *
 * @ORM\Table(name="kf_best_METRO")
 * @ORM\Entity
 */
class KfBestMetro
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
     * @ORM\Column(name="METROID", type="string", length=12, nullable=true)
     */
    private $metroid;



    /**
     * Set bestid
     *
     * @param string $bestid
     * @return KfBestMetro
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
     * Set metroid
     *
     * @param string $metroid
     * @return KfBestMetro
     */
    public function setMetroid($metroid)
    {
        $this->metroid = $metroid;

        return $this;
    }

    /**
     * Get metroid
     *
     * @return string 
     */
    public function getMetroid()
    {
        return $this->metroid;
    }
}
