<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndBuildingStage
 *
 */
class SpkIndBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkIndBuildingStageid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var float
     *
     */
    private $mesoninArea;

    /**
     * @var float
     *
     */
    private $availiableArea;

    /**
     * @var \DateTime
     *
     */
    private $startDate;

    /**
     * @var string
     *
     */
    private $iscurrent;

    /**
     * @var \DateTime
     *
     */
    private $endDate;

    /**
     * @var string
     *
     */
    private $finished;



    /**
     * Set spkIndBuildingStageid
     *
     * @param string $spkIndBuildingStageid
     * @return SpkIndBuildingStage
     */
    public function setSpkIndBuildingStageid($spkIndBuildingStageid)
    {
        $this->spkIndBuildingStageid = $spkIndBuildingStageid;

        return $this;
    }

    /**
     * Get spkIndBuildingStageid
     *
     * @return string 
     */
    public function getSpkIndBuildingStageid()
    {
        return $this->spkIndBuildingStageid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndBuildingStage
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkIndBuildingStage
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
     * @return SpkIndBuildingStage
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
     * @return SpkIndBuildingStage
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
     * @return SpkIndBuildingStage
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
     * @return SpkIndBuildingStage
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
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return SpkIndBuildingStage
     */
    public function setIndustrialArea($industrialArea)
    {
        $this->industrialArea = $industrialArea;

        return $this;
    }

    /**
     * Get industrialArea
     *
     * @return float 
     */
    public function getIndustrialArea()
    {
        return $this->industrialArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return SpkIndBuildingStage
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    /**
     * Get officeArea
     *
     * @return float 
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Set mesoninArea
     *
     * @param float $mesoninArea
     * @return SpkIndBuildingStage
     */
    public function setMesoninArea($mesoninArea)
    {
        $this->mesoninArea = $mesoninArea;

        return $this;
    }

    /**
     * Get mesoninArea
     *
     * @return float 
     */
    public function getMesoninArea()
    {
        return $this->mesoninArea;
    }

    /**
     * Set availiableArea
     *
     * @param float $availiableArea
     * @return SpkIndBuildingStage
     */
    public function setAvailiableArea($availiableArea)
    {
        $this->availiableArea = $availiableArea;

        return $this;
    }

    /**
     * Get availiableArea
     *
     * @return float 
     */
    public function getAvailiableArea()
    {
        return $this->availiableArea;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return SpkIndBuildingStage
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set iscurrent
     *
     * @param string $iscurrent
     * @return SpkIndBuildingStage
     */
    public function setIscurrent($iscurrent)
    {
        $this->iscurrent = $iscurrent;

        return $this;
    }

    /**
     * Get iscurrent
     *
     * @return string 
     */
    public function getIscurrent()
    {
        return $this->iscurrent;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return SpkIndBuildingStage
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set finished
     *
     * @param string $finished
     * @return SpkIndBuildingStage
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return string 
     */
    public function getFinished()
    {
        return $this->finished;
    }
}
