<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppDogovorObject
 *
 * @ORM\Table(name="SPK_OPP_DOGOVOR_OBJECT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_DOGOVOR_OBJECT_PRIMARY", columns={"OPPORTUNITYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6", columns={"OBJECTID"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_1", columns={"OBJECTID", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6", columns={"OPPORTUNITYID", "OBJECTID"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6_K63_58_59_60_61", columns={"OPPORTUNITYID", "OBJECTID", "BASE_SQUARE", "BASE_RENT_MIN", "BASE_RENT_MAX", "BASE_COST_MAX", "BASE_COST_MIN"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K63_1_6_58_59_60_61", columns={"BASE_SQUARE", "OPPORTUNITYID", "OBJECTID", "BASE_RENT_MIN", "BASE_RENT_MAX", "BASE_COST_MAX", "BASE_COST_MIN"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_K1_K63_58_59_60_61", columns={"OBJECTID", "OPPORTUNITYID", "BASE_SQUARE", "BASE_RENT_MIN", "BASE_RENT_MAX", "BASE_COST_MAX", "BASE_COST_MIN"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_c_7_1999346187__K63", columns={"BASE_SQUARE"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6_K33_K7_9_16_29_41", columns={"OPPORTUNITYID", "OBJECTID", "START_RENT", "FINAL_RENT", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_K1_K33_K7_9_16_29_41", columns={"OBJECTID", "OPPORTUNITYID", "START_RENT", "FINAL_RENT", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K33_K7_1_6_9_16_29_41", columns={"START_RENT", "FINAL_RENT", "OPPORTUNITYID", "OBJECTID", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K7_K13_1_6_9_16_29_41", columns={"FINAL_RENT", "PERCENT_OBOROT", "OPPORTUNITYID", "OBJECTID", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6_K7_K13_9_16_29_41", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "PERCENT_OBOROT", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_K1_K7_K13_9_16_29_41", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_RENT", "PERCENT_OBOROT", "DEPOSIT", "NOTES", "INDEXATION", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_K1_K7_K13_9_16_29_33_41", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_RENT", "PERCENT_OBOROT", "DEPOSIT", "NOTES", "INDEXATION", "START_RENT", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_6_7_8_18_80", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "FINAL_SQUARE", "FINAL_COST", "NOT_DB_OBJECT_ADDRESS"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6_K7_K13_9_16_29_33_41", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "PERCENT_OBOROT", "DEPOSIT", "NOTES", "INDEXATION", "START_RENT", "PREPAY_REAL_D"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K1_K6_K8", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_SQUARE"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K8_1_6", columns={"FINAL_SQUARE", "OPPORTUNITYID", "OBJECTID"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_7_1999346187__K6_K1_K8", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_SQUARE"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_c_7_1999346187__K8", columns={"FINAL_SQUARE"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K1_6_7_8_14_17_18_26_31_80", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "FINAL_SQUARE", "LEASE_END_DATE", "DOGOVOR_TYPE", "FINAL_COST", "DOGOVOR_PERIOD", "LEASE_START_DATE", "NOT_DB_OBJECT_ADDRESS"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K6_K1_7_8_14_17_18_26_31_80", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_RENT", "FINAL_SQUARE", "LEASE_END_DATE", "DOGOVOR_TYPE", "FINAL_COST", "DOGOVOR_PERIOD", "LEASE_START_DATE", "NOT_DB_OBJECT_ADDRESS"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K1_K6_7_8_9_10_11_16_17_18_23_25_26_29_31_32_33_35_36_37_42_44_45_47_48_51_52_", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "FINAL_SQUARE", "DEPOSIT", "PREPAYMENT", "PAYMENT_TYPE", "NOTES", "DOGOVOR_TYPE", "FINAL_COST", "OTHER_EXPENSES", "FINAL_CAR_PLACE_COST", "DOGOVOR_PERIOD", "INDEXATION", "LEASE_START_DATE", "START_COST", "START_RENT", "WORK_PLACE_COUNT", "USABLEAREA", "OPERATIONAL_COST", "PREPAY_REQUEST_MOUNTH", "MUNICIPAL_COST", "REPAIR_COMPENSATION", "DEPOSIT_REQUEST_MOUNTH", "ADDTITIONAL_NEEDS", "EXPO_START", "EXPO_END", "SHOP_NAME", "PAYMENT_SCHEDULE", "BASE_CAR_PLACES", "PROPERTY_FURNETURE", "BUILDING_TYPE", "UNDERGROUND_PARKING_COUNT", "GROUND_PARKING_COUNT", "ROOF_PARKING_COUNT", "UNDERGROUND_PARKING_COST", "GROUND_PARKING_COST", "ROOF_PARKING_COST", "NOT_DB_OBJECT_ADDRESS", "OFFICE_RATE", "MEZZONINE_RATE", "RAILWAY_RATE", "OFFICE_SQ", "MEZZONINE_SQ", "RAILWAY_SQ", "BOOK_VALUE", "CAPITALISATION", "OPERATING_INCOME", "VAT_FOR_REPRESENTATION", "leaseble_build_area", "building_area", "FINAL_SQUARE_PLM"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K6_K1_7_8_9_10_11_16_17_18_23_25_26_29_31_32_33_35_36_37_42_44_45_47_48_51_52_", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_RENT", "FINAL_SQUARE", "DEPOSIT", "PREPAYMENT", "PAYMENT_TYPE", "NOTES", "DOGOVOR_TYPE", "FINAL_COST", "OTHER_EXPENSES", "FINAL_CAR_PLACE_COST", "DOGOVOR_PERIOD", "INDEXATION", "LEASE_START_DATE", "START_COST", "START_RENT", "WORK_PLACE_COUNT", "USABLEAREA", "OPERATIONAL_COST", "PREPAY_REQUEST_MOUNTH", "MUNICIPAL_COST", "REPAIR_COMPENSATION", "DEPOSIT_REQUEST_MOUNTH", "ADDTITIONAL_NEEDS", "EXPO_START", "EXPO_END", "SHOP_NAME", "PAYMENT_SCHEDULE", "BASE_CAR_PLACES", "PROPERTY_FURNETURE", "BUILDING_TYPE", "UNDERGROUND_PARKING_COUNT", "GROUND_PARKING_COUNT", "ROOF_PARKING_COUNT", "UNDERGROUND_PARKING_COST", "GROUND_PARKING_COST", "ROOF_PARKING_COST", "NOT_DB_OBJECT_ADDRESS", "OFFICE_RATE", "MEZZONINE_RATE", "RAILWAY_RATE", "OFFICE_SQ", "MEZZONINE_SQ", "RAILWAY_SQ", "BOOK_VALUE", "CAPITALISATION", "OPERATING_INCOME", "VAT_FOR_REPRESENTATION", "leaseble_build_area", "building_area", "FINAL_SQUARE_PLM"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K6_K1_14_17_26_31_90_91_92_93_94_95", columns={"OBJECTID", "OPPORTUNITYID", "LEASE_END_DATE", "DOGOVOR_TYPE", "DOGOVOR_PERIOD", "LEASE_START_DATE", "BOOK_VALUE", "CAPITALISATION", "OPERATING_INCOME", "VAT_FOR_REPRESENTATION", "leaseble_build_area", "building_area"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K1_K6_14_17_26_31_90_91_92_93_94_95", columns={"OPPORTUNITYID", "OBJECTID", "LEASE_END_DATE", "DOGOVOR_TYPE", "DOGOVOR_PERIOD", "LEASE_START_DATE", "BOOK_VALUE", "CAPITALISATION", "OPERATING_INCOME", "VAT_FOR_REPRESENTATION", "leaseble_build_area", "building_area"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K6_K1_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_29_30_31_32_33_", columns={"OBJECTID", "OPPORTUNITYID", "FINAL_RENT", "FINAL_SQUARE", "DEPOSIT", "PREPAYMENT", "PAYMENT_TYPE", "PERCENT_BLACK_WHITE", "PERCENT_OBOROT", "LEASE_END_DATE", "IS_NDS", "NOTES", "DOGOVOR_TYPE", "FINAL_COST", "FINAL_SQM_COST", "FINAL_LAND_SQM_COST", "ADDITIONAL_SERVICES", "ADDITIONAL_SERVICES_COST", "OTHER_EXPENSES", "OTHER_EXPENSES_COST", "FINAL_CAR_PLACE_COST", "DOGOVOR_PERIOD", "INDEXATION", "COMMENTS", "LEASE_START_DATE", "START_COST", "START_RENT", "PROPERTY_CONDITION", "WORK_PLACE_COUNT", "USABLEAREA", "OPERATIONAL_COST", "ELECTRICITY_NEEDS", "PREPAY_REQUEST_D", "PREPAY_REAL_D", "PREPAY_REQUEST_MOUNTH", "DEPOSIT_REAL_D", "MUNICIPAL_COST", "REPAIR_COMPENSATION", "DEPOSIT_REQUEST_D", "DEPOSIT_REQUEST_MOUNTH", "ADDTITIONAL_NEEDS", "WATER_NEEDS", "GAZ_NEEDS", "EXPO_START", "EXPO_END", "SHOP_NAME", "PROPERTY_TYPE", "ISPRIMARY", "PAYMENT_SCHEDULE", "BASE_RENT_MIN", "BASE_RENT_MAX", "BASE_COST_MAX", "BASE_COST_MIN", "BASE_LAND_SQUARE", "BASE_SQUARE", "BASE_CAR_PLACES", "BASE_CAR_PLACE_COST", "BASE_SQM_COST_MIN", "BASE_SQM_COST_MAX", "COST_PER_100_MIN", "COST_PER_100_MAX", "PROPERTY_FURNETURE", "BUILDING_TYPE", "CURRENCY", "CURRENCY_TYPE", "OFFICE_RATE", "MEZZONINE_RATE", "RAILWAY_RATE", "OFFICE_SQ", "MEZZONINE_SQ", "RAILWAY_SQ", "KF_LEGAL_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_DOGOVOR_OBJECT_5_1999346187__K1_K6_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_29_30_31_32_33_", columns={"OPPORTUNITYID", "OBJECTID", "FINAL_RENT", "FINAL_SQUARE", "DEPOSIT", "PREPAYMENT", "PAYMENT_TYPE", "PERCENT_BLACK_WHITE", "PERCENT_OBOROT", "LEASE_END_DATE", "IS_NDS", "NOTES", "DOGOVOR_TYPE", "FINAL_COST", "FINAL_SQM_COST", "FINAL_LAND_SQM_COST", "ADDITIONAL_SERVICES", "ADDITIONAL_SERVICES_COST", "OTHER_EXPENSES", "OTHER_EXPENSES_COST", "FINAL_CAR_PLACE_COST", "DOGOVOR_PERIOD", "INDEXATION", "COMMENTS", "LEASE_START_DATE", "START_COST", "START_RENT", "PROPERTY_CONDITION", "WORK_PLACE_COUNT", "USABLEAREA", "OPERATIONAL_COST", "ELECTRICITY_NEEDS", "PREPAY_REQUEST_D", "PREPAY_REAL_D", "PREPAY_REQUEST_MOUNTH", "DEPOSIT_REAL_D", "MUNICIPAL_COST", "REPAIR_COMPENSATION", "DEPOSIT_REQUEST_D", "DEPOSIT_REQUEST_MOUNTH", "ADDTITIONAL_NEEDS", "WATER_NEEDS", "GAZ_NEEDS", "EXPO_START", "EXPO_END", "SHOP_NAME", "PROPERTY_TYPE", "ISPRIMARY", "PAYMENT_SCHEDULE", "BASE_RENT_MIN", "BASE_RENT_MAX", "BASE_COST_MAX", "BASE_COST_MIN", "BASE_LAND_SQUARE", "BASE_SQUARE", "BASE_CAR_PLACES", "BASE_CAR_PLACE_COST", "BASE_SQM_COST_MIN", "BASE_SQM_COST_MAX", "COST_PER_100_MIN", "COST_PER_100_MAX", "PROPERTY_FURNETURE", "BUILDING_TYPE", "CURRENCY", "CURRENCY_TYPE", "OFFICE_RATE", "MEZZONINE_RATE", "RAILWAY_RATE", "OFFICE_SQ", "MEZZONINE_SQ", "RAILWAY_SQ", "KF_LEGAL_NAME"})})
 * @ORM\Entity
 */
class SpkOppDogovorObject
{
    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="OBJECTID", type="string", length=12, nullable=true)
     */
    private $objectid;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalRent;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalSquare;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT", type="float", precision=53, scale=0, nullable=true)
     */
    private $deposit;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPAYMENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepayment;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=32, nullable=true)
     */
    private $paymentType;

    /**
     * @var float
     *
     * @ORM\Column(name="PERCENT_BLACK_WHITE", type="float", precision=53, scale=0, nullable=true)
     */
    private $percentBlackWhite;

    /**
     * @var float
     *
     * @ORM\Column(name="PERCENT_OBOROT", type="float", precision=53, scale=0, nullable=true)
     */
    private $percentOborot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_END_DATE", type="datetime", nullable=true)
     */
    private $leaseEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_NDS", type="string", length=1, nullable=true)
     */
    private $isNds;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=1024, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR_TYPE", type="string", length=64, nullable=true)
     */
    private $dogovorType;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_SQM_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalSqmCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_LAND_SQM_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalLandSqmCost;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_SERVICES", type="string", length=1024, nullable=true)
     */
    private $additionalServices;

    /**
     * @var float
     *
     * @ORM\Column(name="ADDITIONAL_SERVICES_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $additionalServicesCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER_EXPENSES", type="string", length=1024, nullable=true)
     */
    private $otherExpenses;

    /**
     * @var float
     *
     * @ORM\Column(name="OTHER_EXPENSES_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $otherExpensesCost;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_CAR_PLACE_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalCarPlaceCost;

    /**
     * @var float
     *
     * @ORM\Column(name="DOGOVOR_PERIOD", type="float", precision=53, scale=0, nullable=true)
     */
    private $dogovorPeriod;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFERTA_PERIOD", type="float", precision=53, scale=0, nullable=true)
     */
    private $offertaPeriod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OFFERTA_DATE", type="datetime", nullable=true)
     */
    private $offertaDate;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION", type="string", length=1024, nullable=true)
     */
    private $indexation;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=1024, nullable=true)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_START_DATE", type="datetime", nullable=true)
     */
    private $leaseStartDate;

    /**
     * @var float
     *
     * @ORM\Column(name="START_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $startCost;

    /**
     * @var float
     *
     * @ORM\Column(name="START_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $startRent;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_CONDITION", type="string", length=128, nullable=true)
     */
    private $propertyCondition;

    /**
     * @var integer
     *
     * @ORM\Column(name="WORK_PLACE_COUNT", type="smallint", nullable=true)
     */
    private $workPlaceCount;

    /**
     * @var float
     *
     * @ORM\Column(name="USABLEAREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $usablearea;

    /**
     * @var float
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $operationalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY_NEEDS", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricityNeeds;

    /**
     * @var float
     *
     * @ORM\Column(name="ANNUAL_RENT", type="float", precision=53, scale=0, nullable=true)
     */
    private $annualRent;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPAY_REQUEST_D", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepayRequestD;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPAY_REAL_D", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepayRealD;

    /**
     * @var float
     *
     * @ORM\Column(name="PREPAY_REQUEST_MOUNTH", type="float", precision=53, scale=0, nullable=true)
     */
    private $prepayRequestMounth;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT_REAL_D", type="float", precision=53, scale=0, nullable=true)
     */
    private $depositRealD;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST", type="string", length=128, nullable=true)
     */
    private $municipalCost;

    /**
     * @var float
     *
     * @ORM\Column(name="REPAIR_COMPENSATION", type="float", precision=53, scale=0, nullable=true)
     */
    private $repairCompensation;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT_REQUEST_D", type="float", precision=53, scale=0, nullable=true)
     */
    private $depositRequestD;

    /**
     * @var float
     *
     * @ORM\Column(name="DEPOSIT_REQUEST_MOUNTH", type="float", precision=53, scale=0, nullable=true)
     */
    private $depositRequestMounth;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDTITIONAL_NEEDS", type="string", length=32, nullable=true)
     */
    private $addtitionalNeeds;

    /**
     * @var string
     *
     * @ORM\Column(name="WATER_NEEDS", type="string", length=32, nullable=true)
     */
    private $waterNeeds;

    /**
     * @var string
     *
     * @ORM\Column(name="GAZ_NEEDS", type="string", length=32, nullable=true)
     */
    private $gazNeeds;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPO_START", type="datetime", nullable=true)
     */
    private $expoStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPO_END", type="datetime", nullable=true)
     */
    private $expoEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOP_NAME", type="string", length=32, nullable=true)
     */
    private $shopName;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_TYPE", type="string", length=256, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS", type="string", length=128, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="ISPRIMARY", type="string", length=1, nullable=true)
     */
    private $isprimary;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_SCHEDULE", type="string", length=128, nullable=true)
     */
    private $paymentSchedule;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_RENT_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseRentMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_RENT_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseRentMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseCostMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_LAND_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseLandSquare;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseSquare;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_CAR_PLACES", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseCarPlaces;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_LAND_SQM_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseLandSqmCost;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_CAR_PLACE_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseCarPlaceCost;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_SQM_COST_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseSqmCostMin;

    /**
     * @var float
     *
     * @ORM\Column(name="BASE_SQM_COST_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseSqmCostMax;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_100_MIN", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPer100Min;

    /**
     * @var float
     *
     * @ORM\Column(name="COST_PER_100_MAX", type="float", precision=53, scale=0, nullable=true)
     */
    private $costPer100Max;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_FURNETURE", type="string", length=128, nullable=true)
     */
    private $propertyFurneture;

    /**
     * @var string
     *
     * @ORM\Column(name="BUILDING_TYPE", type="string", length=128, nullable=true)
     */
    private $buildingType;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIN_SEARCH_CONDITIONS", type="string", length=4000, nullable=true)
     */
    private $mainSearchConditions;

    /**
     * @var integer
     *
     * @ORM\Column(name="UNDERGROUND_PARKING_COUNT", type="smallint", nullable=true)
     */
    private $undergroundParkingCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="GROUND_PARKING_COUNT", type="smallint", nullable=true)
     */
    private $groundParkingCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOF_PARKING_COUNT", type="smallint", nullable=true)
     */
    private $roofParkingCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="UNDERGROUND_PARKING_COST", type="smallint", nullable=true)
     */
    private $undergroundParkingCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="GROUND_PARKING_COST", type="smallint", nullable=true)
     */
    private $groundParkingCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROOF_PARKING_COST", type="smallint", nullable=true)
     */
    private $roofParkingCost;

    /**
     * @var string
     *
     * @ORM\Column(name="NOT_DB_OBJECT_ADDRESS", type="string", length=64, nullable=true)
     */
    private $notDbObjectAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY_TYPE", type="string", length=128, nullable=true)
     */
    private $currencyType;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_RATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $officeRate;

    /**
     * @var string
     *
     * @ORM\Column(name="MEZZONINE_RATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $mezzonineRate;

    /**
     * @var string
     *
     * @ORM\Column(name="RAILWAY_RATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $railwayRate;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeSq;

    /**
     * @var float
     *
     * @ORM\Column(name="MEZZONINE_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $mezzonineSq;

    /**
     * @var float
     *
     * @ORM\Column(name="RAILWAY_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $railwaySq;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_LEGAL_NAME", type="string", length=256, nullable=true)
     */
    private $kfLegalName;

    /**
     * @var string
     *
     * @ORM\Column(name="BOOK_VALUE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $bookValue;

    /**
     * @var string
     *
     * @ORM\Column(name="CAPITALISATION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $capitalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATING_INCOME", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operatingIncome;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_FOR_REPRESENTATION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $vatForRepresentation;

    /**
     * @var string
     *
     * @ORM\Column(name="leaseble_build_area", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leasebleBuildArea;

    /**
     * @var string
     *
     * @ORM\Column(name="building_area", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $buildingArea;

    /**
     * @var float
     *
     * @ORM\Column(name="FINAL_SQUARE_PLM", type="float", precision=53, scale=0, nullable=true)
     */
    private $finalSquarePlm;

    /**
     * @var string
     *
     * @ORM\Column(name="START_RENT_CURRENCY", type="string", length=16, nullable=true)
     */
    private $startRentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $municipalCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_RENT_CURRENCY", type="string", length=16, nullable=true)
     */
    private $finalRentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_RENT_VAT", type="string", length=1, nullable=true)
     */
    private $finalRentVat;

    /**
     * @var string
     *
     * @ORM\Column(name="OPER_COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $operCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPER_COST_VAT", type="string", length=1, nullable=true)
     */
    private $operCostVat;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_INDEXATION", type="string", length=1, nullable=true)
     */
    private $isIndexation;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_RATE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $officeRateCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="MEZZONINE_RATE_CURRENCY", type="string", length=16, nullable=true)
     */
    private $mezzonineRateCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_DECORATION", type="string", length=1, nullable=true)
     */
    private $isDecoration;

    /**
     * @var string
     *
     * @ORM\Column(name="START_RENT_VAT", type="string", length=16, nullable=true)
     */
    private $startRentVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NEWCOMER", type="string", length=1, nullable=true)
     */
    private $newcomer;

    /**
     * @var string
     *
     * @ORM\Column(name="PREV_OBJECT", type="string", length=128, nullable=true)
     */
    private $prevObject;

    /**
     * @var float
     *
     * @ORM\Column(name="PREV_SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $prevSquare;

    /**
     * @var float
     *
     * @ORM\Column(name="PREV_RENTAL_RATE", type="float", precision=53, scale=0, nullable=true)
     */
    private $prevRentalRate;

    /**
     * @var float
     *
     * @ORM\Column(name="PREV_OPEX", type="float", precision=53, scale=0, nullable=true)
     */
    private $prevOpex;

    /**
     * @var float
     *
     * @ORM\Column(name="START_OPEX", type="float", precision=53, scale=0, nullable=true)
     */
    private $startOpex;

    /**
     * @var string
     *
     * @ORM\Column(name="START_OPEX_CURRENCY", type="string", length=16, nullable=true)
     */
    private $startOpexCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_TYPE", type="string", length=128, nullable=true)
     */
    private $opexType;

    /**
     * @var string
     *
     * @ORM\Column(name="PREV_OBJ_CLASS", type="string", length=16, nullable=true)
     */
    private $prevObjClass;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $finalCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="FINAL_CARPLACE_COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $finalCarplaceCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="START_COST_CURRENCY", type="string", length=16, nullable=true)
     */
    private $startCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OFF_PREV_OBJECTID", type="string", length=12, nullable=true)
     */
    private $offPrevObjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="IND_PREV_OBJECTID", type="string", length=12, nullable=true)
     */
    private $indPrevObjectid;

    /**
     * @var string
     *
     * @ORM\Column(name="ABORTIVE_FEE", type="string", length=1, nullable=true)
     */
    private $abortiveFee;

    /**
     * @var string
     *
     * @ORM\Column(name="BASE_RENT_CURRENCY", type="string", length=32, nullable=true)
     */
    private $baseRentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="REPAIR_COMPENSATION_CURRENCY", type="string", length=32, nullable=true)
     */
    private $repairCompensationCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPOSIT_REQUEST_CURRENCY", type="string", length=32, nullable=true)
     */
    private $depositRequestCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITY_DEPOSIT_CURRENCY", type="string", length=32, nullable=true)
     */
    private $opportunityDepositCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="PREPAY_REQUEST_CURRENCY", type="string", length=32, nullable=true)
     */
    private $prepayRequestCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITY_PREPAY_CURRENCY", type="string", length=32, nullable=true)
     */
    private $opportunityPrepayCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="CAR_PLACE_BASE_COST_CURRENCY", type="string", length=32, nullable=true)
     */
    private $carPlaceBaseCostCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="CAR_PLACE_FINAL_COST_CURRENC", type="string", length=32, nullable=true)
     */
    private $carPlaceFinalCostCurrenc;

    /**
     * @var string
     *
     * @ORM\Column(name="AGREEMENT_AMOUNT_CURRENCY", type="string", length=32, nullable=true)
     */
    private $agreementAmountCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="ASKED_OPEX_CURRENCY", type="string", length=32, nullable=true)
     */
    private $askedOpexCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="FORECAST_TURNOVER", type="float", precision=53, scale=0, nullable=true)
     */
    private $forecastTurnover;

    /**
     * @var float
     *
     * @ORM\Column(name="MARKETING_PAY", type="float", precision=53, scale=0, nullable=true)
     */
    private $marketingPay;

    /**
     * @var float
     *
     * @ORM\Column(name="OPEN_PAY", type="float", precision=53, scale=0, nullable=true)
     */
    private $openPay;

    /**
     * @var string
     *
     * @ORM\Column(name="FORECAST_TURNOVER_CURRENCY", type="string", length=32, nullable=true)
     */
    private $forecastTurnoverCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETING_PAY_CURRENCY", type="string", length=32, nullable=true)
     */
    private $marketingPayCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEN_PAY_CURRENCY", type="string", length=32, nullable=true)
     */
    private $openPayCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_RATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $landRate;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $landSq;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_RATE_CURRENCY", type="string", length=32, nullable=true)
     */
    private $landRateCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_RATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $industrialRate;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialSq;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_RATE_CURRENCY", type="string", length=32, nullable=true)
     */
    private $industrialRateCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATOR_3PL", type="string", length=12, nullable=true)
     */
    private $operator3pl;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_COST", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $officeCost;

    /**
     * @var string
     *
     * @ORM\Column(name="MEZZONINE_COST", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $mezzonineCost;

    /**
     * @var string
     *
     * @ORM\Column(name="LAND_COST", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $landCost;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_COST", type="decimal", precision=17, scale=2, nullable=true)
     */
    private $industrialCost;


}
