<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBuildingStage
 *
 */
class SpkOffBuildingStage
{
    /**
     * @var string
     *
     */
    private $spkOffBuildingStageid;

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
     * @var string
     *
     */
    private $stageDate;

    /**
     * @var string
     *
     */
    private $preparedness;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $currentStage;

    /**
     * @var integer
     *
     */
    private $stageYear;

    /**
     * @var integer
     *
     */
    private $stageQuarter;

    /**
     * @var integer
     *
     */
    private $stageMonth;

    /**
     * @var integer
     *
     */
    private $stageDay;

    /**
     * @var string
     *
     */
    private $phaseNumber;



    /**
     * Set spkOffBuildingStageid
     *
     * @param string $spkOffBuildingStageid
     * @return SpkOffBuildingStage
     */
    public function setSpkOffBuildingStageid($spkOffBuildingStageid)
    {
        $this->spkOffBuildingStageid = $spkOffBuildingStageid;

        return $this;
    }

    /**
     * Get spkOffBuildingStageid
     *
     * @return string 
     */
    public function getSpkOffBuildingStageid()
    {
        return $this->spkOffBuildingStageid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffBuildingStage
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
     * @return SpkOffBuildingStage
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
     * @return SpkOffBuildingStage
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
     * @return SpkOffBuildingStage
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
     * @return SpkOffBuildingStage
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
     * @return SpkOffBuildingStage
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
     * Set stageDate
     *
     * @param string $stageDate
     * @return SpkOffBuildingStage
     */
    public function setStageDate($stageDate)
    {
        $this->stageDate = $stageDate;

        return $this;
    }

    /**
     * Get stageDate
     *
     * @return string 
     */
    public function getStageDate()
    {
        return $this->stageDate;
    }

    /**
     * Set preparedness
     *
     * @param string $preparedness
     * @return SpkOffBuildingStage
     */
    public function setPreparedness($preparedness)
    {
        $this->preparedness = $preparedness;

        return $this;
    }

    /**
     * Get preparedness
     *
     * @return string 
     */
    public function getPreparedness()
    {
        return $this->preparedness;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkOffBuildingStage
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set currentStage
     *
     * @param string $currentStage
     * @return SpkOffBuildingStage
     */
    public function setCurrentStage($currentStage)
    {
        $this->currentStage = $currentStage;

        return $this;
    }

    /**
     * Get currentStage
     *
     * @return string 
     */
    public function getCurrentStage()
    {
        return $this->currentStage;
    }

    /**
     * Set stageYear
     *
     * @param integer $stageYear
     * @return SpkOffBuildingStage
     */
    public function setStageYear($stageYear)
    {
        $this->stageYear = $stageYear;

        return $this;
    }

    /**
     * Get stageYear
     *
     * @return integer 
     */
    public function getStageYear()
    {
        return $this->stageYear;
    }

    /**
     * Set stageQuarter
     *
     * @param integer $stageQuarter
     * @return SpkOffBuildingStage
     */
    public function setStageQuarter($stageQuarter)
    {
        $this->stageQuarter = $stageQuarter;

        return $this;
    }

    /**
     * Get stageQuarter
     *
     * @return integer 
     */
    public function getStageQuarter()
    {
        return $this->stageQuarter;
    }

    /**
     * Set stageMonth
     *
     * @param integer $stageMonth
     * @return SpkOffBuildingStage
     */
    public function setStageMonth($stageMonth)
    {
        $this->stageMonth = $stageMonth;

        return $this;
    }

    /**
     * Get stageMonth
     *
     * @return integer 
     */
    public function getStageMonth()
    {
        return $this->stageMonth;
    }

    /**
     * Set stageDay
     *
     * @param integer $stageDay
     * @return SpkOffBuildingStage
     */
    public function setStageDay($stageDay)
    {
        $this->stageDay = $stageDay;

        return $this;
    }

    /**
     * Get stageDay
     *
     * @return integer 
     */
    public function getStageDay()
    {
        return $this->stageDay;
    }

    /**
     * Set phaseNumber
     *
     * @param string $phaseNumber
     * @return SpkOffBuildingStage
     */
    public function setPhaseNumber($phaseNumber)
    {
        $this->phaseNumber = $phaseNumber;

        return $this;
    }

    /**
     * Get phaseNumber
     *
     * @return string 
     */
    public function getPhaseNumber()
    {
        return $this->phaseNumber;
    }
}
