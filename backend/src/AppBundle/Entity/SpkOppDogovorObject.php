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


}
