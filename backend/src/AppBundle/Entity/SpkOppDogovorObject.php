<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppDogovorObject
 *
 */
class SpkOppDogovorObject
{
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
    private $objectid;

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
    private $deposit;

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
     * @var string
     *
     */
    private $additionalServices;

    /**
     * @var float
     *
     */
    private $additionalServicesCost;

    /**
     * @var string
     *
     */
    private $otherExpenses;

    /**
     * @var float
     *
     */
    private $otherExpensesCost;

    /**
     * @var float
     *
     */
    private $finalCarPlaceCost;

    /**
     * @var float
     *
     */
    private $dogovorPeriod;

    /**
     * @var float
     *
     */
    private $offertaPeriod;

    /**
     * @var \DateTime
     *
     */
    private $offertaDate;

    /**
     * @var string
     *
     */
    private $indexation;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var \DateTime
     *
     */
    private $leaseStartDate;

    /**
     * @var float
     *
     */
    private $startCost;

    /**
     * @var float
     *
     */
    private $startRent;

    /**
     * @var string
     *
     */
    private $propertyCondition;

    /**
     * @var integer
     *
     */
    private $workPlaceCount;

    /**
     * @var float
     *
     */
    private $usablearea;

    /**
     * @var float
     *
     */
    private $operationalCost;

    /**
     * @var float
     *
     */
    private $electricityNeeds;

    /**
     * @var float
     *
     */
    private $annualRent;

    /**
     * @var float
     *
     */
    private $prepayRequestD;

    /**
     * @var float
     *
     */
    private $prepayRealD;

    /**
     * @var float
     *
     */
    private $prepayRequestMounth;

    /**
     * @var float
     *
     */
    private $depositRealD;

    /**
     * @var string
     *
     */
    private $municipalCost;

    /**
     * @var float
     *
     */
    private $repairCompensation;

    /**
     * @var float
     *
     */
    private $depositRequestD;

    /**
     * @var float
     *
     */
    private $depositRequestMounth;

    /**
     * @var string
     *
     */
    private $addtitionalNeeds;

    /**
     * @var string
     *
     */
    private $waterNeeds;

    /**
     * @var string
     *
     */
    private $gazNeeds;

    /**
     * @var \DateTime
     *
     */
    private $expoStart;

    /**
     * @var \DateTime
     *
     */
    private $expoEnd;

    /**
     * @var string
     *
     */
    private $shopName;

    /**
     * @var string
     *
     */
    private $propertyType;

    /**
     * @var string
     *
     */
    private $address;

    /**
     * @var string
     *
     */
    private $isprimary;

    /**
     * @var string
     *
     */
    private $paymentSchedule;

    /**
     * @var float
     *
     */
    private $baseRentMin;

    /**
     * @var float
     *
     */
    private $baseRentMax;

    /**
     * @var float
     *
     */
    private $baseCostMax;

    /**
     * @var float
     *
     */
    private $baseCostMin;

    /**
     * @var float
     *
     */
    private $baseLandSquare;

    /**
     * @var float
     *
     */
    private $baseSquare;

    /**
     * @var float
     *
     */
    private $baseCarPlaces;

    /**
     * @var float
     *
     */
    private $baseLandSqmCost;

    /**
     * @var float
     *
     */
    private $baseCarPlaceCost;

    /**
     * @var float
     *
     */
    private $baseSqmCostMin;

    /**
     * @var float
     *
     */
    private $baseSqmCostMax;

    /**
     * @var float
     *
     */
    private $costPer100Min;

    /**
     * @var float
     *
     */
    private $costPer100Max;

    /**
     * @var string
     *
     */
    private $propertyFurneture;

    /**
     * @var string
     *
     */
    private $buildingType;

    /**
     * @var string
     *
     */
    private $mainSearchConditions;

    /**
     * @var integer
     *
     */
    private $undergroundParkingCount;

    /**
     * @var integer
     *
     */
    private $groundParkingCount;

    /**
     * @var integer
     *
     */
    private $roofParkingCount;

    /**
     * @var integer
     *
     */
    private $undergroundParkingCost;

    /**
     * @var integer
     *
     */
    private $groundParkingCost;

    /**
     * @var integer
     *
     */
    private $roofParkingCost;

    /**
     * @var string
     *
     */
    private $notDbObjectAddress;

    /**
     * @var string
     *
     */
    private $currency;

    /**
     * @var string
     *
     */
    private $currencyType;

    /**
     * @var string
     *
     */
    private $officeRate;

    /**
     * @var string
     *
     */
    private $mezzonineRate;

    /**
     * @var string
     *
     */
    private $railwayRate;

    /**
     * @var float
     *
     */
    private $officeSq;

    /**
     * @var float
     *
     */
    private $mezzonineSq;

    /**
     * @var float
     *
     */
    private $railwaySq;

    /**
     * @var string
     *
     */
    private $kfLegalName;

    /**
     * @var string
     *
     */
    private $bookValue;

    /**
     * @var string
     *
     */
    private $capitalisation;

    /**
     * @var string
     *
     */
    private $operatingIncome;

    /**
     * @var string
     *
     */
    private $vatForRepresentation;

    /**
     * @var string
     *
     */
    private $leasebleBuildArea;

    /**
     * @var string
     *
     */
    private $buildingArea;

    /**
     * @var float
     *
     */
    private $finalSquarePlm;

    /**
     * @var string
     *
     */
    private $startRentCurrency;

    /**
     * @var string
     *
     */
    private $municipalCostCurrency;

    /**
     * @var string
     *
     */
    private $finalRentCurrency;

    /**
     * @var string
     *
     */
    private $finalRentVat;

    /**
     * @var string
     *
     */
    private $operCostCurrency;

    /**
     * @var string
     *
     */
    private $operCostVat;

    /**
     * @var string
     *
     */
    private $isIndexation;

    /**
     * @var string
     *
     */
    private $officeRateCurrency;

    /**
     * @var string
     *
     */
    private $mezzonineRateCurrency;

    /**
     * @var string
     *
     */
    private $isDecoration;

    /**
     * @var string
     *
     */
    private $startRentVat;

    /**
     * @var string
     *
     */
    private $newcomer;

    /**
     * @var string
     *
     */
    private $prevObject;

    /**
     * @var float
     *
     */
    private $prevSquare;

    /**
     * @var float
     *
     */
    private $prevRentalRate;

    /**
     * @var float
     *
     */
    private $prevOpex;

    /**
     * @var float
     *
     */
    private $startOpex;

    /**
     * @var string
     *
     */
    private $startOpexCurrency;

    /**
     * @var string
     *
     */
    private $opexType;

    /**
     * @var string
     *
     */
    private $prevObjClass;

    /**
     * @var string
     *
     */
    private $finalCostCurrency;

    /**
     * @var string
     *
     */
    private $finalCarplaceCostCurrency;

    /**
     * @var string
     *
     */
    private $startCostCurrency;

    /**
     * @var string
     *
     */
    private $offPrevObjectid;

    /**
     * @var string
     *
     */
    private $indPrevObjectid;

    /**
     * @var string
     *
     */
    private $abortiveFee;

    /**
     * @var string
     *
     */
    private $baseRentCurrency;

    /**
     * @var string
     *
     */
    private $repairCompensationCurrency;

    /**
     * @var string
     *
     */
    private $depositRequestCurrency;

    /**
     * @var string
     *
     */
    private $opportunityDepositCurrency;

    /**
     * @var string
     *
     */
    private $prepayRequestCurrency;

    /**
     * @var string
     *
     */
    private $opportunityPrepayCurrency;

    /**
     * @var string
     *
     */
    private $carPlaceBaseCostCurrency;

    /**
     * @var string
     *
     */
    private $carPlaceFinalCostCurrenc;

    /**
     * @var string
     *
     */
    private $agreementAmountCurrency;

    /**
     * @var string
     *
     */
    private $askedOpexCurrency;

    /**
     * @var float
     *
     */
    private $forecastTurnover;

    /**
     * @var float
     *
     */
    private $marketingPay;

    /**
     * @var float
     *
     */
    private $openPay;

    /**
     * @var string
     *
     */
    private $forecastTurnoverCurrency;

    /**
     * @var string
     *
     */
    private $marketingPayCurrency;

    /**
     * @var string
     *
     */
    private $openPayCurrency;

    /**
     * @var string
     *
     */
    private $landRate;

    /**
     * @var float
     *
     */
    private $landSq;

    /**
     * @var string
     *
     */
    private $landRateCurrency;

    /**
     * @var string
     *
     */
    private $industrialRate;

    /**
     * @var float
     *
     */
    private $industrialSq;

    /**
     * @var string
     *
     */
    private $industrialRateCurrency;

    /**
     * @var string
     *
     */
    private $operator3pl;

    /**
     * @var string
     *
     */
    private $officeCost;

    /**
     * @var string
     *
     */
    private $mezzonineCost;

    /**
     * @var string
     *
     */
    private $landCost;

    /**
     * @var string
     *
     */
    private $industrialCost;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * Set objectid
     *
     * @param string $objectid
     * @return SpkOppDogovorObject
     */
    public function setObjectid($objectid)
    {
        $this->objectid = $objectid;

        return $this;
    }

    /**
     * Get objectid
     *
     * @return string 
     */
    public function getObjectid()
    {
        return $this->objectid;
    }

    /**
     * Set finalRent
     *
     * @param float $finalRent
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * Set deposit
     *
     * @param float $deposit
     * @return SpkOppDogovorObject
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
     * Set prepayment
     *
     * @param float $prepayment
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * @return SpkOppDogovorObject
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
     * Set additionalServices
     *
     * @param string $additionalServices
     * @return SpkOppDogovorObject
     */
    public function setAdditionalServices($additionalServices)
    {
        $this->additionalServices = $additionalServices;

        return $this;
    }

    /**
     * Get additionalServices
     *
     * @return string 
     */
    public function getAdditionalServices()
    {
        return $this->additionalServices;
    }

    /**
     * Set additionalServicesCost
     *
     * @param float $additionalServicesCost
     * @return SpkOppDogovorObject
     */
    public function setAdditionalServicesCost($additionalServicesCost)
    {
        $this->additionalServicesCost = $additionalServicesCost;

        return $this;
    }

    /**
     * Get additionalServicesCost
     *
     * @return float 
     */
    public function getAdditionalServicesCost()
    {
        return $this->additionalServicesCost;
    }

    /**
     * Set otherExpenses
     *
     * @param string $otherExpenses
     * @return SpkOppDogovorObject
     */
    public function setOtherExpenses($otherExpenses)
    {
        $this->otherExpenses = $otherExpenses;

        return $this;
    }

    /**
     * Get otherExpenses
     *
     * @return string 
     */
    public function getOtherExpenses()
    {
        return $this->otherExpenses;
    }

    /**
     * Set otherExpensesCost
     *
     * @param float $otherExpensesCost
     * @return SpkOppDogovorObject
     */
    public function setOtherExpensesCost($otherExpensesCost)
    {
        $this->otherExpensesCost = $otherExpensesCost;

        return $this;
    }

    /**
     * Get otherExpensesCost
     *
     * @return float 
     */
    public function getOtherExpensesCost()
    {
        return $this->otherExpensesCost;
    }

    /**
     * Set finalCarPlaceCost
     *
     * @param float $finalCarPlaceCost
     * @return SpkOppDogovorObject
     */
    public function setFinalCarPlaceCost($finalCarPlaceCost)
    {
        $this->finalCarPlaceCost = $finalCarPlaceCost;

        return $this;
    }

    /**
     * Get finalCarPlaceCost
     *
     * @return float 
     */
    public function getFinalCarPlaceCost()
    {
        return $this->finalCarPlaceCost;
    }

    /**
     * Set dogovorPeriod
     *
     * @param float $dogovorPeriod
     * @return SpkOppDogovorObject
     */
    public function setDogovorPeriod($dogovorPeriod)
    {
        $this->dogovorPeriod = $dogovorPeriod;

        return $this;
    }

    /**
     * Get dogovorPeriod
     *
     * @return float 
     */
    public function getDogovorPeriod()
    {
        return $this->dogovorPeriod;
    }

    /**
     * Set offertaPeriod
     *
     * @param float $offertaPeriod
     * @return SpkOppDogovorObject
     */
    public function setOffertaPeriod($offertaPeriod)
    {
        $this->offertaPeriod = $offertaPeriod;

        return $this;
    }

    /**
     * Get offertaPeriod
     *
     * @return float 
     */
    public function getOffertaPeriod()
    {
        return $this->offertaPeriod;
    }

    /**
     * Set offertaDate
     *
     * @param \DateTime $offertaDate
     * @return SpkOppDogovorObject
     */
    public function setOffertaDate($offertaDate)
    {
        $this->offertaDate = $offertaDate;

        return $this;
    }

    /**
     * Get offertaDate
     *
     * @return \DateTime 
     */
    public function getOffertaDate()
    {
        return $this->offertaDate;
    }

    /**
     * Set indexation
     *
     * @param string $indexation
     * @return SpkOppDogovorObject
     */
    public function setIndexation($indexation)
    {
        $this->indexation = $indexation;

        return $this;
    }

    /**
     * Get indexation
     *
     * @return string 
     */
    public function getIndexation()
    {
        return $this->indexation;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkOppDogovorObject
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
     * Set leaseStartDate
     *
     * @param \DateTime $leaseStartDate
     * @return SpkOppDogovorObject
     */
    public function setLeaseStartDate($leaseStartDate)
    {
        $this->leaseStartDate = $leaseStartDate;

        return $this;
    }

    /**
     * Get leaseStartDate
     *
     * @return \DateTime 
     */
    public function getLeaseStartDate()
    {
        return $this->leaseStartDate;
    }

    /**
     * Set startCost
     *
     * @param float $startCost
     * @return SpkOppDogovorObject
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

    /**
     * Set startRent
     *
     * @param float $startRent
     * @return SpkOppDogovorObject
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
     * Set propertyCondition
     *
     * @param string $propertyCondition
     * @return SpkOppDogovorObject
     */
    public function setPropertyCondition($propertyCondition)
    {
        $this->propertyCondition = $propertyCondition;

        return $this;
    }

    /**
     * Get propertyCondition
     *
     * @return string 
     */
    public function getPropertyCondition()
    {
        return $this->propertyCondition;
    }

    /**
     * Set workPlaceCount
     *
     * @param integer $workPlaceCount
     * @return SpkOppDogovorObject
     */
    public function setWorkPlaceCount($workPlaceCount)
    {
        $this->workPlaceCount = $workPlaceCount;

        return $this;
    }

    /**
     * Get workPlaceCount
     *
     * @return integer 
     */
    public function getWorkPlaceCount()
    {
        return $this->workPlaceCount;
    }

    /**
     * Set usablearea
     *
     * @param float $usablearea
     * @return SpkOppDogovorObject
     */
    public function setUsablearea($usablearea)
    {
        $this->usablearea = $usablearea;

        return $this;
    }

    /**
     * Get usablearea
     *
     * @return float 
     */
    public function getUsablearea()
    {
        return $this->usablearea;
    }

    /**
     * Set operationalCost
     *
     * @param float $operationalCost
     * @return SpkOppDogovorObject
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return float 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set electricityNeeds
     *
     * @param float $electricityNeeds
     * @return SpkOppDogovorObject
     */
    public function setElectricityNeeds($electricityNeeds)
    {
        $this->electricityNeeds = $electricityNeeds;

        return $this;
    }

    /**
     * Get electricityNeeds
     *
     * @return float 
     */
    public function getElectricityNeeds()
    {
        return $this->electricityNeeds;
    }

    /**
     * Set annualRent
     *
     * @param float $annualRent
     * @return SpkOppDogovorObject
     */
    public function setAnnualRent($annualRent)
    {
        $this->annualRent = $annualRent;

        return $this;
    }

    /**
     * Get annualRent
     *
     * @return float 
     */
    public function getAnnualRent()
    {
        return $this->annualRent;
    }

    /**
     * Set prepayRequestD
     *
     * @param float $prepayRequestD
     * @return SpkOppDogovorObject
     */
    public function setPrepayRequestD($prepayRequestD)
    {
        $this->prepayRequestD = $prepayRequestD;

        return $this;
    }

    /**
     * Get prepayRequestD
     *
     * @return float 
     */
    public function getPrepayRequestD()
    {
        return $this->prepayRequestD;
    }

    /**
     * Set prepayRealD
     *
     * @param float $prepayRealD
     * @return SpkOppDogovorObject
     */
    public function setPrepayRealD($prepayRealD)
    {
        $this->prepayRealD = $prepayRealD;

        return $this;
    }

    /**
     * Get prepayRealD
     *
     * @return float 
     */
    public function getPrepayRealD()
    {
        return $this->prepayRealD;
    }

    /**
     * Set prepayRequestMounth
     *
     * @param float $prepayRequestMounth
     * @return SpkOppDogovorObject
     */
    public function setPrepayRequestMounth($prepayRequestMounth)
    {
        $this->prepayRequestMounth = $prepayRequestMounth;

        return $this;
    }

    /**
     * Get prepayRequestMounth
     *
     * @return float 
     */
    public function getPrepayRequestMounth()
    {
        return $this->prepayRequestMounth;
    }

    /**
     * Set depositRealD
     *
     * @param float $depositRealD
     * @return SpkOppDogovorObject
     */
    public function setDepositRealD($depositRealD)
    {
        $this->depositRealD = $depositRealD;

        return $this;
    }

    /**
     * Get depositRealD
     *
     * @return float 
     */
    public function getDepositRealD()
    {
        return $this->depositRealD;
    }

    /**
     * Set municipalCost
     *
     * @param string $municipalCost
     * @return SpkOppDogovorObject
     */
    public function setMunicipalCost($municipalCost)
    {
        $this->municipalCost = $municipalCost;

        return $this;
    }

    /**
     * Get municipalCost
     *
     * @return string 
     */
    public function getMunicipalCost()
    {
        return $this->municipalCost;
    }

    /**
     * Set repairCompensation
     *
     * @param float $repairCompensation
     * @return SpkOppDogovorObject
     */
    public function setRepairCompensation($repairCompensation)
    {
        $this->repairCompensation = $repairCompensation;

        return $this;
    }

    /**
     * Get repairCompensation
     *
     * @return float 
     */
    public function getRepairCompensation()
    {
        return $this->repairCompensation;
    }

    /**
     * Set depositRequestD
     *
     * @param float $depositRequestD
     * @return SpkOppDogovorObject
     */
    public function setDepositRequestD($depositRequestD)
    {
        $this->depositRequestD = $depositRequestD;

        return $this;
    }

    /**
     * Get depositRequestD
     *
     * @return float 
     */
    public function getDepositRequestD()
    {
        return $this->depositRequestD;
    }

    /**
     * Set depositRequestMounth
     *
     * @param float $depositRequestMounth
     * @return SpkOppDogovorObject
     */
    public function setDepositRequestMounth($depositRequestMounth)
    {
        $this->depositRequestMounth = $depositRequestMounth;

        return $this;
    }

    /**
     * Get depositRequestMounth
     *
     * @return float 
     */
    public function getDepositRequestMounth()
    {
        return $this->depositRequestMounth;
    }

    /**
     * Set addtitionalNeeds
     *
     * @param string $addtitionalNeeds
     * @return SpkOppDogovorObject
     */
    public function setAddtitionalNeeds($addtitionalNeeds)
    {
        $this->addtitionalNeeds = $addtitionalNeeds;

        return $this;
    }

    /**
     * Get addtitionalNeeds
     *
     * @return string 
     */
    public function getAddtitionalNeeds()
    {
        return $this->addtitionalNeeds;
    }

    /**
     * Set waterNeeds
     *
     * @param string $waterNeeds
     * @return SpkOppDogovorObject
     */
    public function setWaterNeeds($waterNeeds)
    {
        $this->waterNeeds = $waterNeeds;

        return $this;
    }

    /**
     * Get waterNeeds
     *
     * @return string 
     */
    public function getWaterNeeds()
    {
        return $this->waterNeeds;
    }

    /**
     * Set gazNeeds
     *
     * @param string $gazNeeds
     * @return SpkOppDogovorObject
     */
    public function setGazNeeds($gazNeeds)
    {
        $this->gazNeeds = $gazNeeds;

        return $this;
    }

    /**
     * Get gazNeeds
     *
     * @return string 
     */
    public function getGazNeeds()
    {
        return $this->gazNeeds;
    }

    /**
     * Set expoStart
     *
     * @param \DateTime $expoStart
     * @return SpkOppDogovorObject
     */
    public function setExpoStart($expoStart)
    {
        $this->expoStart = $expoStart;

        return $this;
    }

    /**
     * Get expoStart
     *
     * @return \DateTime 
     */
    public function getExpoStart()
    {
        return $this->expoStart;
    }

    /**
     * Set expoEnd
     *
     * @param \DateTime $expoEnd
     * @return SpkOppDogovorObject
     */
    public function setExpoEnd($expoEnd)
    {
        $this->expoEnd = $expoEnd;

        return $this;
    }

    /**
     * Get expoEnd
     *
     * @return \DateTime 
     */
    public function getExpoEnd()
    {
        return $this->expoEnd;
    }

    /**
     * Set shopName
     *
     * @param string $shopName
     * @return SpkOppDogovorObject
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;

        return $this;
    }

    /**
     * Get shopName
     *
     * @return string 
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     * @return SpkOppDogovorObject
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return SpkOppDogovorObject
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set isprimary
     *
     * @param string $isprimary
     * @return SpkOppDogovorObject
     */
    public function setIsprimary($isprimary)
    {
        $this->isprimary = $isprimary;

        return $this;
    }

    /**
     * Get isprimary
     *
     * @return string 
     */
    public function getIsprimary()
    {
        return $this->isprimary;
    }

    /**
     * Set paymentSchedule
     *
     * @param string $paymentSchedule
     * @return SpkOppDogovorObject
     */
    public function setPaymentSchedule($paymentSchedule)
    {
        $this->paymentSchedule = $paymentSchedule;

        return $this;
    }

    /**
     * Get paymentSchedule
     *
     * @return string 
     */
    public function getPaymentSchedule()
    {
        return $this->paymentSchedule;
    }

    /**
     * Set baseRentMin
     *
     * @param float $baseRentMin
     * @return SpkOppDogovorObject
     */
    public function setBaseRentMin($baseRentMin)
    {
        $this->baseRentMin = $baseRentMin;

        return $this;
    }

    /**
     * Get baseRentMin
     *
     * @return float 
     */
    public function getBaseRentMin()
    {
        return $this->baseRentMin;
    }

    /**
     * Set baseRentMax
     *
     * @param float $baseRentMax
     * @return SpkOppDogovorObject
     */
    public function setBaseRentMax($baseRentMax)
    {
        $this->baseRentMax = $baseRentMax;

        return $this;
    }

    /**
     * Get baseRentMax
     *
     * @return float 
     */
    public function getBaseRentMax()
    {
        return $this->baseRentMax;
    }

    /**
     * Set baseCostMax
     *
     * @param float $baseCostMax
     * @return SpkOppDogovorObject
     */
    public function setBaseCostMax($baseCostMax)
    {
        $this->baseCostMax = $baseCostMax;

        return $this;
    }

    /**
     * Get baseCostMax
     *
     * @return float 
     */
    public function getBaseCostMax()
    {
        return $this->baseCostMax;
    }

    /**
     * Set baseCostMin
     *
     * @param float $baseCostMin
     * @return SpkOppDogovorObject
     */
    public function setBaseCostMin($baseCostMin)
    {
        $this->baseCostMin = $baseCostMin;

        return $this;
    }

    /**
     * Get baseCostMin
     *
     * @return float 
     */
    public function getBaseCostMin()
    {
        return $this->baseCostMin;
    }

    /**
     * Set baseLandSquare
     *
     * @param float $baseLandSquare
     * @return SpkOppDogovorObject
     */
    public function setBaseLandSquare($baseLandSquare)
    {
        $this->baseLandSquare = $baseLandSquare;

        return $this;
    }

    /**
     * Get baseLandSquare
     *
     * @return float 
     */
    public function getBaseLandSquare()
    {
        return $this->baseLandSquare;
    }

    /**
     * Set baseSquare
     *
     * @param float $baseSquare
     * @return SpkOppDogovorObject
     */
    public function setBaseSquare($baseSquare)
    {
        $this->baseSquare = $baseSquare;

        return $this;
    }

    /**
     * Get baseSquare
     *
     * @return float 
     */
    public function getBaseSquare()
    {
        return $this->baseSquare;
    }

    /**
     * Set baseCarPlaces
     *
     * @param float $baseCarPlaces
     * @return SpkOppDogovorObject
     */
    public function setBaseCarPlaces($baseCarPlaces)
    {
        $this->baseCarPlaces = $baseCarPlaces;

        return $this;
    }

    /**
     * Get baseCarPlaces
     *
     * @return float 
     */
    public function getBaseCarPlaces()
    {
        return $this->baseCarPlaces;
    }

    /**
     * Set baseLandSqmCost
     *
     * @param float $baseLandSqmCost
     * @return SpkOppDogovorObject
     */
    public function setBaseLandSqmCost($baseLandSqmCost)
    {
        $this->baseLandSqmCost = $baseLandSqmCost;

        return $this;
    }

    /**
     * Get baseLandSqmCost
     *
     * @return float 
     */
    public function getBaseLandSqmCost()
    {
        return $this->baseLandSqmCost;
    }

    /**
     * Set baseCarPlaceCost
     *
     * @param float $baseCarPlaceCost
     * @return SpkOppDogovorObject
     */
    public function setBaseCarPlaceCost($baseCarPlaceCost)
    {
        $this->baseCarPlaceCost = $baseCarPlaceCost;

        return $this;
    }

    /**
     * Get baseCarPlaceCost
     *
     * @return float 
     */
    public function getBaseCarPlaceCost()
    {
        return $this->baseCarPlaceCost;
    }

    /**
     * Set baseSqmCostMin
     *
     * @param float $baseSqmCostMin
     * @return SpkOppDogovorObject
     */
    public function setBaseSqmCostMin($baseSqmCostMin)
    {
        $this->baseSqmCostMin = $baseSqmCostMin;

        return $this;
    }

    /**
     * Get baseSqmCostMin
     *
     * @return float 
     */
    public function getBaseSqmCostMin()
    {
        return $this->baseSqmCostMin;
    }

    /**
     * Set baseSqmCostMax
     *
     * @param float $baseSqmCostMax
     * @return SpkOppDogovorObject
     */
    public function setBaseSqmCostMax($baseSqmCostMax)
    {
        $this->baseSqmCostMax = $baseSqmCostMax;

        return $this;
    }

    /**
     * Get baseSqmCostMax
     *
     * @return float 
     */
    public function getBaseSqmCostMax()
    {
        return $this->baseSqmCostMax;
    }

    /**
     * Set costPer100Min
     *
     * @param float $costPer100Min
     * @return SpkOppDogovorObject
     */
    public function setCostPer100Min($costPer100Min)
    {
        $this->costPer100Min = $costPer100Min;

        return $this;
    }

    /**
     * Get costPer100Min
     *
     * @return float 
     */
    public function getCostPer100Min()
    {
        return $this->costPer100Min;
    }

    /**
     * Set costPer100Max
     *
     * @param float $costPer100Max
     * @return SpkOppDogovorObject
     */
    public function setCostPer100Max($costPer100Max)
    {
        $this->costPer100Max = $costPer100Max;

        return $this;
    }

    /**
     * Get costPer100Max
     *
     * @return float 
     */
    public function getCostPer100Max()
    {
        return $this->costPer100Max;
    }

    /**
     * Set propertyFurneture
     *
     * @param string $propertyFurneture
     * @return SpkOppDogovorObject
     */
    public function setPropertyFurneture($propertyFurneture)
    {
        $this->propertyFurneture = $propertyFurneture;

        return $this;
    }

    /**
     * Get propertyFurneture
     *
     * @return string 
     */
    public function getPropertyFurneture()
    {
        return $this->propertyFurneture;
    }

    /**
     * Set buildingType
     *
     * @param string $buildingType
     * @return SpkOppDogovorObject
     */
    public function setBuildingType($buildingType)
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    /**
     * Get buildingType
     *
     * @return string 
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * Set mainSearchConditions
     *
     * @param string $mainSearchConditions
     * @return SpkOppDogovorObject
     */
    public function setMainSearchConditions($mainSearchConditions)
    {
        $this->mainSearchConditions = $mainSearchConditions;

        return $this;
    }

    /**
     * Get mainSearchConditions
     *
     * @return string 
     */
    public function getMainSearchConditions()
    {
        return $this->mainSearchConditions;
    }

    /**
     * Set undergroundParkingCount
     *
     * @param integer $undergroundParkingCount
     * @return SpkOppDogovorObject
     */
    public function setUndergroundParkingCount($undergroundParkingCount)
    {
        $this->undergroundParkingCount = $undergroundParkingCount;

        return $this;
    }

    /**
     * Get undergroundParkingCount
     *
     * @return integer 
     */
    public function getUndergroundParkingCount()
    {
        return $this->undergroundParkingCount;
    }

    /**
     * Set groundParkingCount
     *
     * @param integer $groundParkingCount
     * @return SpkOppDogovorObject
     */
    public function setGroundParkingCount($groundParkingCount)
    {
        $this->groundParkingCount = $groundParkingCount;

        return $this;
    }

    /**
     * Get groundParkingCount
     *
     * @return integer 
     */
    public function getGroundParkingCount()
    {
        return $this->groundParkingCount;
    }

    /**
     * Set roofParkingCount
     *
     * @param integer $roofParkingCount
     * @return SpkOppDogovorObject
     */
    public function setRoofParkingCount($roofParkingCount)
    {
        $this->roofParkingCount = $roofParkingCount;

        return $this;
    }

    /**
     * Get roofParkingCount
     *
     * @return integer 
     */
    public function getRoofParkingCount()
    {
        return $this->roofParkingCount;
    }

    /**
     * Set undergroundParkingCost
     *
     * @param integer $undergroundParkingCost
     * @return SpkOppDogovorObject
     */
    public function setUndergroundParkingCost($undergroundParkingCost)
    {
        $this->undergroundParkingCost = $undergroundParkingCost;

        return $this;
    }

    /**
     * Get undergroundParkingCost
     *
     * @return integer 
     */
    public function getUndergroundParkingCost()
    {
        return $this->undergroundParkingCost;
    }

    /**
     * Set groundParkingCost
     *
     * @param integer $groundParkingCost
     * @return SpkOppDogovorObject
     */
    public function setGroundParkingCost($groundParkingCost)
    {
        $this->groundParkingCost = $groundParkingCost;

        return $this;
    }

    /**
     * Get groundParkingCost
     *
     * @return integer 
     */
    public function getGroundParkingCost()
    {
        return $this->groundParkingCost;
    }

    /**
     * Set roofParkingCost
     *
     * @param integer $roofParkingCost
     * @return SpkOppDogovorObject
     */
    public function setRoofParkingCost($roofParkingCost)
    {
        $this->roofParkingCost = $roofParkingCost;

        return $this;
    }

    /**
     * Get roofParkingCost
     *
     * @return integer 
     */
    public function getRoofParkingCost()
    {
        return $this->roofParkingCost;
    }

    /**
     * Set notDbObjectAddress
     *
     * @param string $notDbObjectAddress
     * @return SpkOppDogovorObject
     */
    public function setNotDbObjectAddress($notDbObjectAddress)
    {
        $this->notDbObjectAddress = $notDbObjectAddress;

        return $this;
    }

    /**
     * Get notDbObjectAddress
     *
     * @return string 
     */
    public function getNotDbObjectAddress()
    {
        return $this->notDbObjectAddress;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return SpkOppDogovorObject
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currencyType
     *
     * @param string $currencyType
     * @return SpkOppDogovorObject
     */
    public function setCurrencyType($currencyType)
    {
        $this->currencyType = $currencyType;

        return $this;
    }

    /**
     * Get currencyType
     *
     * @return string 
     */
    public function getCurrencyType()
    {
        return $this->currencyType;
    }

    /**
     * Set officeRate
     *
     * @param string $officeRate
     * @return SpkOppDogovorObject
     */
    public function setOfficeRate($officeRate)
    {
        $this->officeRate = $officeRate;

        return $this;
    }

    /**
     * Get officeRate
     *
     * @return string 
     */
    public function getOfficeRate()
    {
        return $this->officeRate;
    }

    /**
     * Set mezzonineRate
     *
     * @param string $mezzonineRate
     * @return SpkOppDogovorObject
     */
    public function setMezzonineRate($mezzonineRate)
    {
        $this->mezzonineRate = $mezzonineRate;

        return $this;
    }

    /**
     * Get mezzonineRate
     *
     * @return string 
     */
    public function getMezzonineRate()
    {
        return $this->mezzonineRate;
    }

    /**
     * Set railwayRate
     *
     * @param string $railwayRate
     * @return SpkOppDogovorObject
     */
    public function setRailwayRate($railwayRate)
    {
        $this->railwayRate = $railwayRate;

        return $this;
    }

    /**
     * Get railwayRate
     *
     * @return string 
     */
    public function getRailwayRate()
    {
        return $this->railwayRate;
    }

    /**
     * Set officeSq
     *
     * @param float $officeSq
     * @return SpkOppDogovorObject
     */
    public function setOfficeSq($officeSq)
    {
        $this->officeSq = $officeSq;

        return $this;
    }

    /**
     * Get officeSq
     *
     * @return float 
     */
    public function getOfficeSq()
    {
        return $this->officeSq;
    }

    /**
     * Set mezzonineSq
     *
     * @param float $mezzonineSq
     * @return SpkOppDogovorObject
     */
    public function setMezzonineSq($mezzonineSq)
    {
        $this->mezzonineSq = $mezzonineSq;

        return $this;
    }

    /**
     * Get mezzonineSq
     *
     * @return float 
     */
    public function getMezzonineSq()
    {
        return $this->mezzonineSq;
    }

    /**
     * Set railwaySq
     *
     * @param float $railwaySq
     * @return SpkOppDogovorObject
     */
    public function setRailwaySq($railwaySq)
    {
        $this->railwaySq = $railwaySq;

        return $this;
    }

    /**
     * Get railwaySq
     *
     * @return float 
     */
    public function getRailwaySq()
    {
        return $this->railwaySq;
    }

    /**
     * Set kfLegalName
     *
     * @param string $kfLegalName
     * @return SpkOppDogovorObject
     */
    public function setKfLegalName($kfLegalName)
    {
        $this->kfLegalName = $kfLegalName;

        return $this;
    }

    /**
     * Get kfLegalName
     *
     * @return string 
     */
    public function getKfLegalName()
    {
        return $this->kfLegalName;
    }

    /**
     * Set bookValue
     *
     * @param string $bookValue
     * @return SpkOppDogovorObject
     */
    public function setBookValue($bookValue)
    {
        $this->bookValue = $bookValue;

        return $this;
    }

    /**
     * Get bookValue
     *
     * @return string 
     */
    public function getBookValue()
    {
        return $this->bookValue;
    }

    /**
     * Set capitalisation
     *
     * @param string $capitalisation
     * @return SpkOppDogovorObject
     */
    public function setCapitalisation($capitalisation)
    {
        $this->capitalisation = $capitalisation;

        return $this;
    }

    /**
     * Get capitalisation
     *
     * @return string 
     */
    public function getCapitalisation()
    {
        return $this->capitalisation;
    }

    /**
     * Set operatingIncome
     *
     * @param string $operatingIncome
     * @return SpkOppDogovorObject
     */
    public function setOperatingIncome($operatingIncome)
    {
        $this->operatingIncome = $operatingIncome;

        return $this;
    }

    /**
     * Get operatingIncome
     *
     * @return string 
     */
    public function getOperatingIncome()
    {
        return $this->operatingIncome;
    }

    /**
     * Set vatForRepresentation
     *
     * @param string $vatForRepresentation
     * @return SpkOppDogovorObject
     */
    public function setVatForRepresentation($vatForRepresentation)
    {
        $this->vatForRepresentation = $vatForRepresentation;

        return $this;
    }

    /**
     * Get vatForRepresentation
     *
     * @return string 
     */
    public function getVatForRepresentation()
    {
        return $this->vatForRepresentation;
    }

    /**
     * Set leasebleBuildArea
     *
     * @param string $leasebleBuildArea
     * @return SpkOppDogovorObject
     */
    public function setLeasebleBuildArea($leasebleBuildArea)
    {
        $this->leasebleBuildArea = $leasebleBuildArea;

        return $this;
    }

    /**
     * Get leasebleBuildArea
     *
     * @return string 
     */
    public function getLeasebleBuildArea()
    {
        return $this->leasebleBuildArea;
    }

    /**
     * Set buildingArea
     *
     * @param string $buildingArea
     * @return SpkOppDogovorObject
     */
    public function setBuildingArea($buildingArea)
    {
        $this->buildingArea = $buildingArea;

        return $this;
    }

    /**
     * Get buildingArea
     *
     * @return string 
     */
    public function getBuildingArea()
    {
        return $this->buildingArea;
    }

    /**
     * Set finalSquarePlm
     *
     * @param float $finalSquarePlm
     * @return SpkOppDogovorObject
     */
    public function setFinalSquarePlm($finalSquarePlm)
    {
        $this->finalSquarePlm = $finalSquarePlm;

        return $this;
    }

    /**
     * Get finalSquarePlm
     *
     * @return float 
     */
    public function getFinalSquarePlm()
    {
        return $this->finalSquarePlm;
    }

    /**
     * Set startRentCurrency
     *
     * @param string $startRentCurrency
     * @return SpkOppDogovorObject
     */
    public function setStartRentCurrency($startRentCurrency)
    {
        $this->startRentCurrency = $startRentCurrency;

        return $this;
    }

    /**
     * Get startRentCurrency
     *
     * @return string 
     */
    public function getStartRentCurrency()
    {
        return $this->startRentCurrency;
    }

    /**
     * Set municipalCostCurrency
     *
     * @param string $municipalCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setMunicipalCostCurrency($municipalCostCurrency)
    {
        $this->municipalCostCurrency = $municipalCostCurrency;

        return $this;
    }

    /**
     * Get municipalCostCurrency
     *
     * @return string 
     */
    public function getMunicipalCostCurrency()
    {
        return $this->municipalCostCurrency;
    }

    /**
     * Set finalRentCurrency
     *
     * @param string $finalRentCurrency
     * @return SpkOppDogovorObject
     */
    public function setFinalRentCurrency($finalRentCurrency)
    {
        $this->finalRentCurrency = $finalRentCurrency;

        return $this;
    }

    /**
     * Get finalRentCurrency
     *
     * @return string 
     */
    public function getFinalRentCurrency()
    {
        return $this->finalRentCurrency;
    }

    /**
     * Set finalRentVat
     *
     * @param string $finalRentVat
     * @return SpkOppDogovorObject
     */
    public function setFinalRentVat($finalRentVat)
    {
        $this->finalRentVat = $finalRentVat;

        return $this;
    }

    /**
     * Get finalRentVat
     *
     * @return string 
     */
    public function getFinalRentVat()
    {
        return $this->finalRentVat;
    }

    /**
     * Set operCostCurrency
     *
     * @param string $operCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setOperCostCurrency($operCostCurrency)
    {
        $this->operCostCurrency = $operCostCurrency;

        return $this;
    }

    /**
     * Get operCostCurrency
     *
     * @return string 
     */
    public function getOperCostCurrency()
    {
        return $this->operCostCurrency;
    }

    /**
     * Set operCostVat
     *
     * @param string $operCostVat
     * @return SpkOppDogovorObject
     */
    public function setOperCostVat($operCostVat)
    {
        $this->operCostVat = $operCostVat;

        return $this;
    }

    /**
     * Get operCostVat
     *
     * @return string 
     */
    public function getOperCostVat()
    {
        return $this->operCostVat;
    }

    /**
     * Set isIndexation
     *
     * @param string $isIndexation
     * @return SpkOppDogovorObject
     */
    public function setIsIndexation($isIndexation)
    {
        $this->isIndexation = $isIndexation;

        return $this;
    }

    /**
     * Get isIndexation
     *
     * @return string 
     */
    public function getIsIndexation()
    {
        return $this->isIndexation;
    }

    /**
     * Set officeRateCurrency
     *
     * @param string $officeRateCurrency
     * @return SpkOppDogovorObject
     */
    public function setOfficeRateCurrency($officeRateCurrency)
    {
        $this->officeRateCurrency = $officeRateCurrency;

        return $this;
    }

    /**
     * Get officeRateCurrency
     *
     * @return string 
     */
    public function getOfficeRateCurrency()
    {
        return $this->officeRateCurrency;
    }

    /**
     * Set mezzonineRateCurrency
     *
     * @param string $mezzonineRateCurrency
     * @return SpkOppDogovorObject
     */
    public function setMezzonineRateCurrency($mezzonineRateCurrency)
    {
        $this->mezzonineRateCurrency = $mezzonineRateCurrency;

        return $this;
    }

    /**
     * Get mezzonineRateCurrency
     *
     * @return string 
     */
    public function getMezzonineRateCurrency()
    {
        return $this->mezzonineRateCurrency;
    }

    /**
     * Set isDecoration
     *
     * @param string $isDecoration
     * @return SpkOppDogovorObject
     */
    public function setIsDecoration($isDecoration)
    {
        $this->isDecoration = $isDecoration;

        return $this;
    }

    /**
     * Get isDecoration
     *
     * @return string 
     */
    public function getIsDecoration()
    {
        return $this->isDecoration;
    }

    /**
     * Set startRentVat
     *
     * @param string $startRentVat
     * @return SpkOppDogovorObject
     */
    public function setStartRentVat($startRentVat)
    {
        $this->startRentVat = $startRentVat;

        return $this;
    }

    /**
     * Get startRentVat
     *
     * @return string 
     */
    public function getStartRentVat()
    {
        return $this->startRentVat;
    }

    /**
     * Set newcomer
     *
     * @param string $newcomer
     * @return SpkOppDogovorObject
     */
    public function setNewcomer($newcomer)
    {
        $this->newcomer = $newcomer;

        return $this;
    }

    /**
     * Get newcomer
     *
     * @return string 
     */
    public function getNewcomer()
    {
        return $this->newcomer;
    }

    /**
     * Set prevObject
     *
     * @param string $prevObject
     * @return SpkOppDogovorObject
     */
    public function setPrevObject($prevObject)
    {
        $this->prevObject = $prevObject;

        return $this;
    }

    /**
     * Get prevObject
     *
     * @return string 
     */
    public function getPrevObject()
    {
        return $this->prevObject;
    }

    /**
     * Set prevSquare
     *
     * @param float $prevSquare
     * @return SpkOppDogovorObject
     */
    public function setPrevSquare($prevSquare)
    {
        $this->prevSquare = $prevSquare;

        return $this;
    }

    /**
     * Get prevSquare
     *
     * @return float 
     */
    public function getPrevSquare()
    {
        return $this->prevSquare;
    }

    /**
     * Set prevRentalRate
     *
     * @param float $prevRentalRate
     * @return SpkOppDogovorObject
     */
    public function setPrevRentalRate($prevRentalRate)
    {
        $this->prevRentalRate = $prevRentalRate;

        return $this;
    }

    /**
     * Get prevRentalRate
     *
     * @return float 
     */
    public function getPrevRentalRate()
    {
        return $this->prevRentalRate;
    }

    /**
     * Set prevOpex
     *
     * @param float $prevOpex
     * @return SpkOppDogovorObject
     */
    public function setPrevOpex($prevOpex)
    {
        $this->prevOpex = $prevOpex;

        return $this;
    }

    /**
     * Get prevOpex
     *
     * @return float 
     */
    public function getPrevOpex()
    {
        return $this->prevOpex;
    }

    /**
     * Set startOpex
     *
     * @param float $startOpex
     * @return SpkOppDogovorObject
     */
    public function setStartOpex($startOpex)
    {
        $this->startOpex = $startOpex;

        return $this;
    }

    /**
     * Get startOpex
     *
     * @return float 
     */
    public function getStartOpex()
    {
        return $this->startOpex;
    }

    /**
     * Set startOpexCurrency
     *
     * @param string $startOpexCurrency
     * @return SpkOppDogovorObject
     */
    public function setStartOpexCurrency($startOpexCurrency)
    {
        $this->startOpexCurrency = $startOpexCurrency;

        return $this;
    }

    /**
     * Get startOpexCurrency
     *
     * @return string 
     */
    public function getStartOpexCurrency()
    {
        return $this->startOpexCurrency;
    }

    /**
     * Set opexType
     *
     * @param string $opexType
     * @return SpkOppDogovorObject
     */
    public function setOpexType($opexType)
    {
        $this->opexType = $opexType;

        return $this;
    }

    /**
     * Get opexType
     *
     * @return string 
     */
    public function getOpexType()
    {
        return $this->opexType;
    }

    /**
     * Set prevObjClass
     *
     * @param string $prevObjClass
     * @return SpkOppDogovorObject
     */
    public function setPrevObjClass($prevObjClass)
    {
        $this->prevObjClass = $prevObjClass;

        return $this;
    }

    /**
     * Get prevObjClass
     *
     * @return string 
     */
    public function getPrevObjClass()
    {
        return $this->prevObjClass;
    }

    /**
     * Set finalCostCurrency
     *
     * @param string $finalCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setFinalCostCurrency($finalCostCurrency)
    {
        $this->finalCostCurrency = $finalCostCurrency;

        return $this;
    }

    /**
     * Get finalCostCurrency
     *
     * @return string 
     */
    public function getFinalCostCurrency()
    {
        return $this->finalCostCurrency;
    }

    /**
     * Set finalCarplaceCostCurrency
     *
     * @param string $finalCarplaceCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setFinalCarplaceCostCurrency($finalCarplaceCostCurrency)
    {
        $this->finalCarplaceCostCurrency = $finalCarplaceCostCurrency;

        return $this;
    }

    /**
     * Get finalCarplaceCostCurrency
     *
     * @return string 
     */
    public function getFinalCarplaceCostCurrency()
    {
        return $this->finalCarplaceCostCurrency;
    }

    /**
     * Set startCostCurrency
     *
     * @param string $startCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setStartCostCurrency($startCostCurrency)
    {
        $this->startCostCurrency = $startCostCurrency;

        return $this;
    }

    /**
     * Get startCostCurrency
     *
     * @return string 
     */
    public function getStartCostCurrency()
    {
        return $this->startCostCurrency;
    }

    /**
     * Set offPrevObjectid
     *
     * @param string $offPrevObjectid
     * @return SpkOppDogovorObject
     */
    public function setOffPrevObjectid($offPrevObjectid)
    {
        $this->offPrevObjectid = $offPrevObjectid;

        return $this;
    }

    /**
     * Get offPrevObjectid
     *
     * @return string 
     */
    public function getOffPrevObjectid()
    {
        return $this->offPrevObjectid;
    }

    /**
     * Set indPrevObjectid
     *
     * @param string $indPrevObjectid
     * @return SpkOppDogovorObject
     */
    public function setIndPrevObjectid($indPrevObjectid)
    {
        $this->indPrevObjectid = $indPrevObjectid;

        return $this;
    }

    /**
     * Get indPrevObjectid
     *
     * @return string 
     */
    public function getIndPrevObjectid()
    {
        return $this->indPrevObjectid;
    }

    /**
     * Set abortiveFee
     *
     * @param string $abortiveFee
     * @return SpkOppDogovorObject
     */
    public function setAbortiveFee($abortiveFee)
    {
        $this->abortiveFee = $abortiveFee;

        return $this;
    }

    /**
     * Get abortiveFee
     *
     * @return string 
     */
    public function getAbortiveFee()
    {
        return $this->abortiveFee;
    }

    /**
     * Set baseRentCurrency
     *
     * @param string $baseRentCurrency
     * @return SpkOppDogovorObject
     */
    public function setBaseRentCurrency($baseRentCurrency)
    {
        $this->baseRentCurrency = $baseRentCurrency;

        return $this;
    }

    /**
     * Get baseRentCurrency
     *
     * @return string 
     */
    public function getBaseRentCurrency()
    {
        return $this->baseRentCurrency;
    }

    /**
     * Set repairCompensationCurrency
     *
     * @param string $repairCompensationCurrency
     * @return SpkOppDogovorObject
     */
    public function setRepairCompensationCurrency($repairCompensationCurrency)
    {
        $this->repairCompensationCurrency = $repairCompensationCurrency;

        return $this;
    }

    /**
     * Get repairCompensationCurrency
     *
     * @return string 
     */
    public function getRepairCompensationCurrency()
    {
        return $this->repairCompensationCurrency;
    }

    /**
     * Set depositRequestCurrency
     *
     * @param string $depositRequestCurrency
     * @return SpkOppDogovorObject
     */
    public function setDepositRequestCurrency($depositRequestCurrency)
    {
        $this->depositRequestCurrency = $depositRequestCurrency;

        return $this;
    }

    /**
     * Get depositRequestCurrency
     *
     * @return string 
     */
    public function getDepositRequestCurrency()
    {
        return $this->depositRequestCurrency;
    }

    /**
     * Set opportunityDepositCurrency
     *
     * @param string $opportunityDepositCurrency
     * @return SpkOppDogovorObject
     */
    public function setOpportunityDepositCurrency($opportunityDepositCurrency)
    {
        $this->opportunityDepositCurrency = $opportunityDepositCurrency;

        return $this;
    }

    /**
     * Get opportunityDepositCurrency
     *
     * @return string 
     */
    public function getOpportunityDepositCurrency()
    {
        return $this->opportunityDepositCurrency;
    }

    /**
     * Set prepayRequestCurrency
     *
     * @param string $prepayRequestCurrency
     * @return SpkOppDogovorObject
     */
    public function setPrepayRequestCurrency($prepayRequestCurrency)
    {
        $this->prepayRequestCurrency = $prepayRequestCurrency;

        return $this;
    }

    /**
     * Get prepayRequestCurrency
     *
     * @return string 
     */
    public function getPrepayRequestCurrency()
    {
        return $this->prepayRequestCurrency;
    }

    /**
     * Set opportunityPrepayCurrency
     *
     * @param string $opportunityPrepayCurrency
     * @return SpkOppDogovorObject
     */
    public function setOpportunityPrepayCurrency($opportunityPrepayCurrency)
    {
        $this->opportunityPrepayCurrency = $opportunityPrepayCurrency;

        return $this;
    }

    /**
     * Get opportunityPrepayCurrency
     *
     * @return string 
     */
    public function getOpportunityPrepayCurrency()
    {
        return $this->opportunityPrepayCurrency;
    }

    /**
     * Set carPlaceBaseCostCurrency
     *
     * @param string $carPlaceBaseCostCurrency
     * @return SpkOppDogovorObject
     */
    public function setCarPlaceBaseCostCurrency($carPlaceBaseCostCurrency)
    {
        $this->carPlaceBaseCostCurrency = $carPlaceBaseCostCurrency;

        return $this;
    }

    /**
     * Get carPlaceBaseCostCurrency
     *
     * @return string 
     */
    public function getCarPlaceBaseCostCurrency()
    {
        return $this->carPlaceBaseCostCurrency;
    }

    /**
     * Set carPlaceFinalCostCurrenc
     *
     * @param string $carPlaceFinalCostCurrenc
     * @return SpkOppDogovorObject
     */
    public function setCarPlaceFinalCostCurrenc($carPlaceFinalCostCurrenc)
    {
        $this->carPlaceFinalCostCurrenc = $carPlaceFinalCostCurrenc;

        return $this;
    }

    /**
     * Get carPlaceFinalCostCurrenc
     *
     * @return string 
     */
    public function getCarPlaceFinalCostCurrenc()
    {
        return $this->carPlaceFinalCostCurrenc;
    }

    /**
     * Set agreementAmountCurrency
     *
     * @param string $agreementAmountCurrency
     * @return SpkOppDogovorObject
     */
    public function setAgreementAmountCurrency($agreementAmountCurrency)
    {
        $this->agreementAmountCurrency = $agreementAmountCurrency;

        return $this;
    }

    /**
     * Get agreementAmountCurrency
     *
     * @return string 
     */
    public function getAgreementAmountCurrency()
    {
        return $this->agreementAmountCurrency;
    }

    /**
     * Set askedOpexCurrency
     *
     * @param string $askedOpexCurrency
     * @return SpkOppDogovorObject
     */
    public function setAskedOpexCurrency($askedOpexCurrency)
    {
        $this->askedOpexCurrency = $askedOpexCurrency;

        return $this;
    }

    /**
     * Get askedOpexCurrency
     *
     * @return string 
     */
    public function getAskedOpexCurrency()
    {
        return $this->askedOpexCurrency;
    }

    /**
     * Set forecastTurnover
     *
     * @param float $forecastTurnover
     * @return SpkOppDogovorObject
     */
    public function setForecastTurnover($forecastTurnover)
    {
        $this->forecastTurnover = $forecastTurnover;

        return $this;
    }

    /**
     * Get forecastTurnover
     *
     * @return float 
     */
    public function getForecastTurnover()
    {
        return $this->forecastTurnover;
    }

    /**
     * Set marketingPay
     *
     * @param float $marketingPay
     * @return SpkOppDogovorObject
     */
    public function setMarketingPay($marketingPay)
    {
        $this->marketingPay = $marketingPay;

        return $this;
    }

    /**
     * Get marketingPay
     *
     * @return float 
     */
    public function getMarketingPay()
    {
        return $this->marketingPay;
    }

    /**
     * Set openPay
     *
     * @param float $openPay
     * @return SpkOppDogovorObject
     */
    public function setOpenPay($openPay)
    {
        $this->openPay = $openPay;

        return $this;
    }

    /**
     * Get openPay
     *
     * @return float 
     */
    public function getOpenPay()
    {
        return $this->openPay;
    }

    /**
     * Set forecastTurnoverCurrency
     *
     * @param string $forecastTurnoverCurrency
     * @return SpkOppDogovorObject
     */
    public function setForecastTurnoverCurrency($forecastTurnoverCurrency)
    {
        $this->forecastTurnoverCurrency = $forecastTurnoverCurrency;

        return $this;
    }

    /**
     * Get forecastTurnoverCurrency
     *
     * @return string 
     */
    public function getForecastTurnoverCurrency()
    {
        return $this->forecastTurnoverCurrency;
    }

    /**
     * Set marketingPayCurrency
     *
     * @param string $marketingPayCurrency
     * @return SpkOppDogovorObject
     */
    public function setMarketingPayCurrency($marketingPayCurrency)
    {
        $this->marketingPayCurrency = $marketingPayCurrency;

        return $this;
    }

    /**
     * Get marketingPayCurrency
     *
     * @return string 
     */
    public function getMarketingPayCurrency()
    {
        return $this->marketingPayCurrency;
    }

    /**
     * Set openPayCurrency
     *
     * @param string $openPayCurrency
     * @return SpkOppDogovorObject
     */
    public function setOpenPayCurrency($openPayCurrency)
    {
        $this->openPayCurrency = $openPayCurrency;

        return $this;
    }

    /**
     * Get openPayCurrency
     *
     * @return string 
     */
    public function getOpenPayCurrency()
    {
        return $this->openPayCurrency;
    }

    /**
     * Set landRate
     *
     * @param string $landRate
     * @return SpkOppDogovorObject
     */
    public function setLandRate($landRate)
    {
        $this->landRate = $landRate;

        return $this;
    }

    /**
     * Get landRate
     *
     * @return string 
     */
    public function getLandRate()
    {
        return $this->landRate;
    }

    /**
     * Set landSq
     *
     * @param float $landSq
     * @return SpkOppDogovorObject
     */
    public function setLandSq($landSq)
    {
        $this->landSq = $landSq;

        return $this;
    }

    /**
     * Get landSq
     *
     * @return float 
     */
    public function getLandSq()
    {
        return $this->landSq;
    }

    /**
     * Set landRateCurrency
     *
     * @param string $landRateCurrency
     * @return SpkOppDogovorObject
     */
    public function setLandRateCurrency($landRateCurrency)
    {
        $this->landRateCurrency = $landRateCurrency;

        return $this;
    }

    /**
     * Get landRateCurrency
     *
     * @return string 
     */
    public function getLandRateCurrency()
    {
        return $this->landRateCurrency;
    }

    /**
     * Set industrialRate
     *
     * @param string $industrialRate
     * @return SpkOppDogovorObject
     */
    public function setIndustrialRate($industrialRate)
    {
        $this->industrialRate = $industrialRate;

        return $this;
    }

    /**
     * Get industrialRate
     *
     * @return string 
     */
    public function getIndustrialRate()
    {
        return $this->industrialRate;
    }

    /**
     * Set industrialSq
     *
     * @param float $industrialSq
     * @return SpkOppDogovorObject
     */
    public function setIndustrialSq($industrialSq)
    {
        $this->industrialSq = $industrialSq;

        return $this;
    }

    /**
     * Get industrialSq
     *
     * @return float 
     */
    public function getIndustrialSq()
    {
        return $this->industrialSq;
    }

    /**
     * Set industrialRateCurrency
     *
     * @param string $industrialRateCurrency
     * @return SpkOppDogovorObject
     */
    public function setIndustrialRateCurrency($industrialRateCurrency)
    {
        $this->industrialRateCurrency = $industrialRateCurrency;

        return $this;
    }

    /**
     * Get industrialRateCurrency
     *
     * @return string 
     */
    public function getIndustrialRateCurrency()
    {
        return $this->industrialRateCurrency;
    }

    /**
     * Set operator3pl
     *
     * @param string $operator3pl
     * @return SpkOppDogovorObject
     */
    public function setOperator3pl($operator3pl)
    {
        $this->operator3pl = $operator3pl;

        return $this;
    }

    /**
     * Get operator3pl
     *
     * @return string 
     */
    public function getOperator3pl()
    {
        return $this->operator3pl;
    }

    /**
     * Set officeCost
     *
     * @param string $officeCost
     * @return SpkOppDogovorObject
     */
    public function setOfficeCost($officeCost)
    {
        $this->officeCost = $officeCost;

        return $this;
    }

    /**
     * Get officeCost
     *
     * @return string 
     */
    public function getOfficeCost()
    {
        return $this->officeCost;
    }

    /**
     * Set mezzonineCost
     *
     * @param string $mezzonineCost
     * @return SpkOppDogovorObject
     */
    public function setMezzonineCost($mezzonineCost)
    {
        $this->mezzonineCost = $mezzonineCost;

        return $this;
    }

    /**
     * Get mezzonineCost
     *
     * @return string 
     */
    public function getMezzonineCost()
    {
        return $this->mezzonineCost;
    }

    /**
     * Set landCost
     *
     * @param string $landCost
     * @return SpkOppDogovorObject
     */
    public function setLandCost($landCost)
    {
        $this->landCost = $landCost;

        return $this;
    }

    /**
     * Get landCost
     *
     * @return string 
     */
    public function getLandCost()
    {
        return $this->landCost;
    }

    /**
     * Set industrialCost
     *
     * @param string $industrialCost
     * @return SpkOppDogovorObject
     */
    public function setIndustrialCost($industrialCost)
    {
        $this->industrialCost = $industrialCost;

        return $this;
    }

    /**
     * Get industrialCost
     *
     * @return string 
     */
    public function getIndustrialCost()
    {
        return $this->industrialCost;
    }
}
