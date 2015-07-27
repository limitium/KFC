<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestRing
 *
 */
class SpkInvestRing
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $ringid;



    /**
     * Set id
     *
     * @param integer $id
     * @return SpkInvestRing
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestRing
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
     * Set ringid
     *
     * @param string $ringid
     * @return SpkInvestRing
     */
    public function setRingid($ringid)
    {
        $this->ringid = $ringid;

        return $this;
    }

    /**
     * Get ringid
     *
     * @return string 
     */
    public function getRingid()
    {
        return $this->ringid;
    }
}
