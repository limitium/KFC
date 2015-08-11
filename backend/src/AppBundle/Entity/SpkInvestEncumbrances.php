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
     * @var \AppBundle\Entity\SpkInvestment
     */
    private $investment;

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

    /**
     * Set investment
     *
     * @param \AppBundle\Entity\SpkInvestment $investment
     * @return SpkProperty
     */
    public function setInvestment(\AppBundle\Entity\SpkInvestment $investment)
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
