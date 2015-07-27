<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjectsDetail
 *
 */
class SpkOppObjectsDetail
{
    /**
     * @var string
     *
     */
    private $spkOppObjectsid;

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
     * @var float
     *
     */
    private $finalRent;

    /**
     * @var float
     *
     */
    private $finalSquare;

    /**
     * @var float
     *
     */
    private $operationalPayments;

    /**
     * @var float
     *
     */
    private $depopsitRequest;

    /**
     * @var float
     *
     */
    private $deposit;

    /**
     * @var float
     *
     */
    private $prepeymentRequest;

    /**
     * @var float
     *
     */
    private $prepayment;

    /**
     * @var string
     *
     */
    private $paymentType;

    /**
     * @var float
     *
     */
    private $percentBlackWhite;

    /**
     * @var float
     *
     */
    private $percentOborot;

    /**
     * @var \DateTime
     *
     */
    private $leaseEndDate;

    /**
     * @var string
     *
     */
    private $isNds;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $dogovorType;

    /**
     * @var float
     *
     */
    private $finalCost;

    /**
     * @var float
     *
     */
    private $finalSqmCost;

    /**
     * @var float
     *
     */
    private $finalLandSqmCost;

    /**
     * @var float
     *
     */
    private $startRent;

    /**
     * @var float
     *
     */
    private $startCost;



    /**
     * Set spkOppObjectsid
     *
     * @param string $spkOppObjectsid
     * @return SpkOppObjectsDetail
     */
    public function setSpkOppObjectsid($spkOppObjectsid)
    {
        $this->spkOppObjectsid = $spkOppObjectsid;

        return $this;
    }

    /**
     * Get spkOppObjectsid
     *
     * @return string 
     */
    public function getSpkOppObjectsid()
    {
        return $this->spkOppObjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppObjectsDetail
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
     * @return SpkOppObjectsDetail
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
     * @return SpkOppObjectsDetail
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
     * @return SpkOppObjectsDetail
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
     * Set finalRent
     *
     * @param float $finalRent
     * @return SpkOppObjectsDetail
     */
    public function setFinalRent($finalRent)
    {
        $this->finalRent = $finalRent;

        return $this;
    }

    /**
     * Get finalRent
     *
     * @return float 
     */
    public function getFinalRent()
    {
        return $this->finalRent;
    }

    /**
     * Set finalSquare
     *
     * @param float $finalSquare
     * @return SpkOppObjectsDetail
     */
    public function setFinalSquare($finalSquare)
    {
        $this->finalSquare = $finalSquare;

        return $this;
    }

    /**
     * Get finalSquare
     *
     * @return float 
     */
    public function getFinalSquare()
    {
        return $this->finalSquare;
    }

    /**
     * Set operationalPayments
     *
     * @param float $operationalPayments
     * @return SpkOppObjectsDetail
     */
    public function setOperationalPayments($operationalPayments)
    {
        $this->operationalPayments = $operationalPayments;

        return $this;
    }

    /**
     * Get operationalPayments
     *
     * @return float 
     */
    public function getOperationalPayments()
    {
        return $this->operationalPayments;
    }

    /**
     * Set depopsitRequest
     *
     * @param float $depopsitRequest
     * @return SpkOppObjectsDetail
     */
    public function setDepopsitRequest($depopsitRequest)
    {
        $this->depopsitRequest = $depopsitRequest;

        return $this;
    }

    /**
     * Get depopsitRequest
     *
     * @return float 
     */
    public function getDepopsitRequest()
    {
        return $this->depopsitRequest;
    }

    /**
     * Set deposit
     *
     * @param float $deposit
     * @return SpkOppObjectsDetail
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return float 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set prepeymentRequest
     *
     * @param float $prepeymentRequest
     * @return SpkOppObjectsDetail
     */
    public function setPrepeymentRequest($prepeymentRequest)
    {
        $this->prepeymentRequest = $prepeymentRequest;

        return $this;
    }

    /**
     * Get prepeymentRequest
     *
     * @return float 
     */
    public function getPrepeymentRequest()
    {
        return $this->prepeymentRequest;
    }

    /**
     * Set prepayment
     *
     * @param float $prepayment
     * @return SpkOppObjectsDetail
     */
    public function setPrepayment($prepayment)
    {
        $this->prepayment = $prepayment;

        return $this;
    }

    /**
     * Get prepayment
     *
     * @return float 
     */
    public function getPrepayment()
    {
        return $this->prepayment;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return SpkOppObjectsDetail
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set percentBlackWhite
     *
     * @param float $percentBlackWhite
     * @return SpkOppObjectsDetail
     */
    public function setPercentBlackWhite($percentBlackWhite)
    {
        $this->percentBlackWhite = $percentBlackWhite;

        return $this;
    }

    /**
     * Get percentBlackWhite
     *
     * @return float 
     */
    public function getPercentBlackWhite()
    {
        return $this->percentBlackWhite;
    }

    /**
     * Set percentOborot
     *
     * @param float $percentOborot
     * @return SpkOppObjectsDetail
     */
    public function setPercentOborot($percentOborot)
    {
        $this->percentOborot = $percentOborot;

        return $this;
    }

    /**
     * Get percentOborot
     *
     * @return float 
     */
    public function getPercentOborot()
    {
        return $this->percentOborot;
    }

    /**
     * Set leaseEndDate
     *
     * @param \DateTime $leaseEndDate
     * @return SpkOppObjectsDetail
     */
    public function setLeaseEndDate($leaseEndDate)
    {
        $this->leaseEndDate = $leaseEndDate;

        return $this;
    }

    /**
     * Get leaseEndDate
     *
     * @return \DateTime 
     */
    public function getLeaseEndDate()
    {
        return $this->leaseEndDate;
    }

    /**
     * Set isNds
     *
     * @param string $isNds
     * @return SpkOppObjectsDetail
     */
    public function setIsNds($isNds)
    {
        $this->isNds = $isNds;

        return $this;
    }

    /**
     * Get isNds
     *
     * @return string 
     */
    public function getIsNds()
    {
        return $this->isNds;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return SpkOppObjectsDetail
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set dogovorType
     *
     * @param string $dogovorType
     * @return SpkOppObjectsDetail
     */
    public function setDogovorType($dogovorType)
    {
        $this->dogovorType = $dogovorType;

        return $this;
    }

    /**
     * Get dogovorType
     *
     * @return string 
     */
    public function getDogovorType()
    {
        return $this->dogovorType;
    }

    /**
     * Set finalCost
     *
     * @param float $finalCost
     * @return SpkOppObjectsDetail
     */
    public function setFinalCost($finalCost)
    {
        $this->finalCost = $finalCost;

        return $this;
    }

    /**
     * Get finalCost
     *
     * @return float 
     */
    public function getFinalCost()
    {
        return $this->finalCost;
    }

    /**
     * Set finalSqmCost
     *
     * @param float $finalSqmCost
     * @return SpkOppObjectsDetail
     */
    public function setFinalSqmCost($finalSqmCost)
    {
        $this->finalSqmCost = $finalSqmCost;

        return $this;
    }

    /**
     * Get finalSqmCost
     *
     * @return float 
     */
    public function getFinalSqmCost()
    {
        return $this->finalSqmCost;
    }

    /**
     * Set finalLandSqmCost
     *
     * @param float $finalLandSqmCost
     * @return SpkOppObjectsDetail
     */
    public function setFinalLandSqmCost($finalLandSqmCost)
    {
        $this->finalLandSqmCost = $finalLandSqmCost;

        return $this;
    }

    /**
     * Get finalLandSqmCost
     *
     * @return float 
     */
    public function getFinalLandSqmCost()
    {
        return $this->finalLandSqmCost;
    }

    /**
     * Set startRent
     *
     * @param float $startRent
     * @return SpkOppObjectsDetail
     */
    public function setStartRent($startRent)
    {
        $this->startRent = $startRent;

        return $this;
    }

    /**
     * Get startRent
     *
     * @return float 
     */
    public function getStartRent()
    {
        return $this->startRent;
    }

    /**
     * Set startCost
     *
     * @param float $startCost
     * @return SpkOppObjectsDetail
     */
    public function setStartCost($startCost)
    {
        $this->startCost = $startCost;

        return $this;
    }

    /**
     * Get startCost
     *
     * @return float 
     */
    public function getStartCost()
    {
        return $this->startCost;
    }
}
