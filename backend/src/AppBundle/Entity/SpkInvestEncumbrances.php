<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestEncumbrances
 *
 */
class SpkInvestEncumbrances
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
    private $encumbranceid;



    /**
     * Set id
     *
     * @param integer $id
     * @return SpkInvestEncumbrances
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
     * @return SpkInvestEncumbrances
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
     * Set encumbranceid
     *
     * @param string $encumbranceid
     * @return SpkInvestEncumbrances
     */
    public function setEncumbranceid($encumbranceid)
    {
        $this->encumbranceid = $encumbranceid;

        return $this;
    }

    /**
     * Get encumbranceid
     *
     * @return string 
     */
    public function getEncumbranceid()
    {
        return $this->encumbranceid;
    }
}
