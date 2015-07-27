<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppSalesdiagram
 *
 */
class SpkOppSalesdiagram
{
    /**
     * @var string
     *
     */
    private $spkOppSalesdiagramid;

    /**
     * @var string
     *
     */
    private $opportunityid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $stage;

    /**
     * @var \DateTime
     *
     */
    private $period;

    /**
     * @var float
     *
     */
    private $square;

    /**
     * @var integer
     *
     */
    private $sections;

    /**
     * @var float
     *
     */
    private $squareBts;

    /**
     * @var integer
     *
     */
    private $sectionsBts;



    /**
     * Set spkOppSalesdiagramid
     *
     * @param string $spkOppSalesdiagramid
     * @return SpkOppSalesdiagram
     */
    public function setSpkOppSalesdiagramid($spkOppSalesdiagramid)
    {
        $this->spkOppSalesdiagramid = $spkOppSalesdiagramid;

        return $this;
    }

    /**
     * Get spkOppSalesdiagramid
     *
     * @return string 
     */
    public function getSpkOppSalesdiagramid()
    {
        return $this->spkOppSalesdiagramid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppSalesdiagram
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppSalesdiagram
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return SpkOppSalesdiagram
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return SpkOppSalesdiagram
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return SpkOppSalesdiagram
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set stage
     *
     * @param string $stage
     * @return SpkOppSalesdiagram
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set period
     *
     * @param \DateTime $period
     * @return SpkOppSalesdiagram
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return \DateTime 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set square
     *
     * @param float $square
     * @return SpkOppSalesdiagram
     */
    public function setSquare($square)
    {
        $this->square = $square;

        return $this;
    }

    /**
     * Get square
     *
     * @return float 
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * Set sections
     *
     * @param integer $sections
     * @return SpkOppSalesdiagram
     */
    public function setSections($sections)
    {
        $this->sections = $sections;

        return $this;
    }

    /**
     * Get sections
     *
     * @return integer 
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set squareBts
     *
     * @param float $squareBts
     * @return SpkOppSalesdiagram
     */
    public function setSquareBts($squareBts)
    {
        $this->squareBts = $squareBts;

        return $this;
    }

    /**
     * Get squareBts
     *
     * @return float 
     */
    public function getSquareBts()
    {
        return $this->squareBts;
    }

    /**
     * Set sectionsBts
     *
     * @param integer $sectionsBts
     * @return SpkOppSalesdiagram
     */
    public function setSectionsBts($sectionsBts)
    {
        $this->sectionsBts = $sectionsBts;

        return $this;
    }

    /**
     * Get sectionsBts
     *
     * @return integer 
     */
    public function getSectionsBts()
    {
        return $this->sectionsBts;
    }
}
