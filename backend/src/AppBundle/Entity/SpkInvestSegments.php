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
    /**
     * @var string
     */
    private $generator;

    /**
     * @var string
     */
    private $customIdGenerator;

    /**
     * @var \AppBundle\Entity\SpkInvestment
     */
    private $investment;


    /**
     * Set generator
     *
     * @param string $generator
     * @return SpkInvestSegments
     */
    public function setGenerator($generator)
    {
        $this->generator = $generator;

        return $this;
    }

    /**
     * Get generator
     *
     * @return string 
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * Set customIdGenerator
     *
     * @param string $customIdGenerator
     * @return SpkInvestSegments
     */
    public function setCustomIdGenerator($customIdGenerator)
    {
        $this->customIdGenerator = $customIdGenerator;

        return $this;
    }

    /**
     * Get customIdGenerator
     *
     * @return string 
     */
    public function getCustomIdGenerator()
    {
        return $this->customIdGenerator;
    }

    /**
     * Set investment
     *
     * @param \AppBundle\Entity\SpkInvestment $investment
     * @return SpkInvestSegments
     */
    public function setInvestment(\AppBundle\Entity\SpkInvestment $investment = null)
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Get investment
     *
     * @return \AppBundle\Entity\SpkInvestment 
     */
    public function getInvestment()
    {
        return $this->investment;
    }
}
