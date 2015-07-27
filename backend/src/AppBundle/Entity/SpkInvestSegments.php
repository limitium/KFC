<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestSegments
 *
 */
class SpkInvestSegments
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
    private $segmentid;



    /**
     * Set id
     *
     * @param integer $id
     * @return SpkInvestSegments
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
     * @return SpkInvestSegments
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
     * Set segmentid
     *
     * @param string $segmentid
     * @return SpkInvestSegments
     */
    public function setSegmentid($segmentid)
    {
        $this->segmentid = $segmentid;

        return $this;
    }

    /**
     * Get segmentid
     *
     * @return string 
     */
    public function getSegmentid()
    {
        return $this->segmentid;
    }
}
