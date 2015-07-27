<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestMagistral
 *
 */
class SpkInvestMagistral
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
    private $magistralid;



    /**
     * Set id
     *
     * @param integer $id
     * @return SpkInvestMagistral
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
     * @return SpkInvestMagistral
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
     * Set magistralid
     *
     * @param string $magistralid
     * @return SpkInvestMagistral
     */
    public function setMagistralid($magistralid)
    {
        $this->magistralid = $magistralid;

        return $this;
    }

    /**
     * Get magistralid
     *
     * @return string 
     */
    public function getMagistralid()
    {
        return $this->magistralid;
    }
}
