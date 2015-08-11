<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestArea
 *
 * @ORM\Table(name="kf_best_area")
 * @ORM\Entity
 */
class KfBestArea
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
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=true)
     */
    private $areaid;



    /**
     * Set bestid
     *
     * @param string $bestid
     * @return KfBestArea
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
     * Set areaid
     *
     * @param string $areaid
     * @return KfBestArea
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }
}
