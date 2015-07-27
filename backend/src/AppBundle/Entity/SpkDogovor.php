<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDogovor
 *
 */
class SpkDogovor
{
    /**
     * @var string
     *
     */
    private $spkDogovorid;

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
    private $dogNumber;

    /**
     * @var \DateTime
     *
     */
    private $signDate;

    /**
     * @var \DateTime
     *
     */
    private $closedDate;

    /**
     * @var string
     *
     */
    private $dogType;

    /**
     * @var string
     *
     */
    private $note;

    /**
     * @var string
     *
     */
    private $validityDays;

    /**
     * @var string
     *
     */
    private $prolongation;

    /**
     * @var string
     *
     */
    private $pastPayments;

    /**
     * @var string
     *
     */
    private $signatory;

    /**
     * @var float
     *
     */
    private $successFee;



    /**
     * Set spkDogovorid
     *
     * @param string $spkDogovorid
     * @return SpkDogovor
     */
    public function setSpkDogovorid($spkDogovorid)
    {
        $this->spkDogovorid = $spkDogovorid;

        return $this;
    }

    /**
     * Get spkDogovorid
     *
     * @return string 
     */
    public function getSpkDogovorid()
    {
        return $this->spkDogovorid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkDogovor
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
     * @return SpkDogovor
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
     * @return SpkDogovor
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
     * @return SpkDogovor
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
     * @return SpkDogovor
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
     * Set dogNumber
     *
     * @param string $dogNumber
     * @return SpkDogovor
     */
    public function setDogNumber($dogNumber)
    {
        $this->dogNumber = $dogNumber;

        return $this;
    }

    /**
     * Get dogNumber
     *
     * @return string 
     */
    public function getDogNumber()
    {
        return $this->dogNumber;
    }

    /**
     * Set signDate
     *
     * @param \DateTime $signDate
     * @return SpkDogovor
     */
    public function setSignDate($signDate)
    {
        $this->signDate = $signDate;

        return $this;
    }

    /**
     * Get signDate
     *
     * @return \DateTime 
     */
    public function getSignDate()
    {
        return $this->signDate;
    }

    /**
     * Set closedDate
     *
     * @param \DateTime $closedDate
     * @return SpkDogovor
     */
    public function setClosedDate($closedDate)
    {
        $this->closedDate = $closedDate;

        return $this;
    }

    /**
     * Get closedDate
     *
     * @return \DateTime 
     */
    public function getClosedDate()
    {
        return $this->closedDate;
    }

    /**
     * Set dogType
     *
     * @param string $dogType
     * @return SpkDogovor
     */
    public function setDogType($dogType)
    {
        $this->dogType = $dogType;

        return $this;
    }

    /**
     * Get dogType
     *
     * @return string 
     */
    public function getDogType()
    {
        return $this->dogType;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return SpkDogovor
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set validityDays
     *
     * @param string $validityDays
     * @return SpkDogovor
     */
    public function setValidityDays($validityDays)
    {
        $this->validityDays = $validityDays;

        return $this;
    }

    /**
     * Get validityDays
     *
     * @return string 
     */
    public function getValidityDays()
    {
        return $this->validityDays;
    }

    /**
     * Set prolongation
     *
     * @param string $prolongation
     * @return SpkDogovor
     */
    public function setProlongation($prolongation)
    {
        $this->prolongation = $prolongation;

        return $this;
    }

    /**
     * Get prolongation
     *
     * @return string 
     */
    public function getProlongation()
    {
        return $this->prolongation;
    }

    /**
     * Set pastPayments
     *
     * @param string $pastPayments
     * @return SpkDogovor
     */
    public function setPastPayments($pastPayments)
    {
        $this->pastPayments = $pastPayments;

        return $this;
    }

    /**
     * Get pastPayments
     *
     * @return string 
     */
    public function getPastPayments()
    {
        return $this->pastPayments;
    }

    /**
     * Set signatory
     *
     * @param string $signatory
     * @return SpkDogovor
     */
    public function setSignatory($signatory)
    {
        $this->signatory = $signatory;

        return $this;
    }

    /**
     * Get signatory
     *
     * @return string 
     */
    public function getSignatory()
    {
        return $this->signatory;
    }

    /**
     * Set successFee
     *
     * @param float $successFee
     * @return SpkDogovor
     */
    public function setSuccessFee($successFee)
    {
        $this->successFee = $successFee;

        return $this;
    }

    /**
     * Get successFee
     *
     * @return float 
     */
    public function getSuccessFee()
    {
        return $this->successFee;
    }
}
