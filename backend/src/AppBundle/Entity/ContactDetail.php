<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactDetail
 *
 * @ORM\Table(name="CONTACT_DETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="CONTACT_DETAIL_PRIMARY", columns={"CONTACTID"}), @ORM\UniqueConstraint(name="KF_SR_IX_FIONAME", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "TITLERUS", "SUFFIXRUS", "PREFIXRUS", "WORKPREFIX", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX", "OTHERPREFIX", "OTHERSUFIX", "FAXPREFIX", "FAXSUFIX", "NATIONALITY", "SEX", "UNSUBSCRIBE", "NON_DELIVERED", "TITLE_TYPE", "KEYCLIENT"})}, indexes={@ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_7_8_9", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_8_9", columns={"FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_K1_8_9", columns={"FIRSTRUS", "CONTACTID", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K11_K7_K8_K9_K23_K22_K12_K14_K20_K27_K28_1", columns={"PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SEX", "NATIONALITY", "WORKPREFIX", "MOBILEPREFIX", "FAXPREFIX", "LEADSOURSE", "WORK_INDUSTRY", "CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_K11_K7_K8_K9_K23_K22_K12_K14_K20_K27_K28", columns={"CONTACTID", "PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SEX", "NATIONALITY", "WORKPREFIX", "MOBILEPREFIX", "FAXPREFIX", "LEADSOURSE", "WORK_INDUSTRY"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_c_7_942626401__K11_K7_K8_K9_K23_K22_K12_K14_K20_K27_K28", columns={"PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SEX", "NATIONALITY", "WORKPREFIX", "MOBILEPREFIX", "FAXPREFIX", "LEADSOURSE", "WORK_INDUSTRY"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K12_14", columns={"WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12_14", columns={"CONTACTID", "WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K12_K1_14", columns={"WORKPREFIX", "CONTACTID", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_14", columns={"CONTACTID", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12", columns={"CONTACTID", "WORKPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_7_8_9_12_14", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_8_9_12_14", columns={"FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_K1_8_9_12_14", columns={"FIRSTRUS", "CONTACTID", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_7_8_9_12_14_16", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_7_8_9_14", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12_14_16", columns={"CONTACTID", "WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12_13_14_15_16_17", columns={"CONTACTID", "WORKPREFIX", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_7_8_9_27", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "LEADSOURSE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K12_14_16_20", columns={"WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K12_K1_14_16_20", columns={"WORKPREFIX", "CONTACTID", "MOBILEPREFIX", "HOMEPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12_14_16_20", columns={"CONTACTID", "WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_12_14_16_18", columns={"CONTACTID", "WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX", "OTHERPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K1_K7_8_9_11_12_14_18_20_22_23", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "PREFIXRUS", "WORKPREFIX", "MOBILEPREFIX", "OTHERPREFIX", "FAXPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_K1_8_9_11_12_14_18_20_22_23", columns={"FIRSTRUS", "CONTACTID", "MIDDLERUS", "LASTRUS", "PREFIXRUS", "WORKPREFIX", "MOBILEPREFIX", "OTHERPREFIX", "FAXPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_7_942626401__K7_8_9_11_12_14_18_20_22_23", columns={"FIRSTRUS", "MIDDLERUS", "LASTRUS", "PREFIXRUS", "WORKPREFIX", "MOBILEPREFIX", "OTHERPREFIX", "FAXPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_c_7_942626401__K7", columns={"FIRSTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_9_942626401__K11_K7_K8_K9_K12_K20_K14_K22_K23_1", columns={"PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "FAXPREFIX", "MOBILEPREFIX", "NATIONALITY", "SEX", "CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_9_942626401__K1_K11_K7_K8_K9_K12_K20_K14_K22_K23", columns={"CONTACTID", "PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "FAXPREFIX", "MOBILEPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_c_9_942626401__K11_K7_K8_K9_K12_K20_K14_K22_K23", columns={"PREFIXRUS", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "FAXPREFIX", "MOBILEPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_9_942626401__K1_7_8_9_22_23", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_7_8_9_12_22_23", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "NATIONALITY", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K42", columns={"TITLE_TYPE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31", columns={"NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31_K42_K1", columns={"NON_DELIVERED", "TITLE_TYPE", "CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31_K42", columns={"NON_DELIVERED", "TITLE_TYPE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31_K1_K42_7_8_9", columns={"NON_DELIVERED", "CONTACTID", "TITLE_TYPE", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K31_K42_7_8_9", columns={"CONTACTID", "NON_DELIVERED", "TITLE_TYPE", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K31_K42", columns={"CONTACTID", "NON_DELIVERED", "TITLE_TYPE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K31_7_8_9", columns={"CONTACTID", "NON_DELIVERED", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31_K42_K1_7_8_9", columns={"NON_DELIVERED", "TITLE_TYPE", "CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K31_K1_7_8_9", columns={"NON_DELIVERED", "CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K42_K1_K31_7_8_9", columns={"TITLE_TYPE", "CONTACTID", "NON_DELIVERED", "FIRSTRUS", "MIDDLERUS", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K14", columns={"MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K12", columns={"WORKPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_7_8_9_12_22_23_31_42", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "WORKPREFIX", "NATIONALITY", "SEX", "NON_DELIVERED", "TITLE_TYPE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K7_K8_K9_K22_K30_1", columns={"FIRSTRUS", "MIDDLERUS", "LASTRUS", "NATIONALITY", "UNSUBSCRIBE", "CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K7_K8_K9_K22_K30", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "NATIONALITY", "UNSUBSCRIBE"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K9", columns={"CONTACTID", "LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K9_K1", columns={"LASTRUS", "CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K9_7_8", columns={"CONTACTID", "LASTRUS", "FIRSTRUS", "MIDDLERUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K9_K1_7_8", columns={"LASTRUS", "CONTACTID", "FIRSTRUS", "MIDDLERUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K9", columns={"LASTRUS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_12", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "WORKPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_32_33_34_35_36_37_38_39_40_41_42_43", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SUFFIXRUS", "PREFIXRUS", "WORKPREFIX", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX", "OTHERPREFIX", "OTHERSUFIX", "FAXPREFIX", "FAXSUFIX", "INDUSTRIALMANAGERID", "RESIDENTIALMANAGERID", "COUNTRYMANAGERID", "RETAILMANAGERID", "OFFICEMANAGERID", "VALUATIONMANAGERID", "INVESTMENTMANAGERID", "CONSULTINGMANAGERID", "RESEARCHMANAGERID", "MARKETINGMANAGERID", "TITLE_TYPE", "KEYCLIENT"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_7_8_9_10_11_13_14_15_16_17_18_19_20_21_32_33_34_35_36_37_38_39_40_41_42_43", columns={"UNSUBSCRIBE", "NON_DELIVERED", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SUFFIXRUS", "PREFIXRUS", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX", "OTHERPREFIX", "OTHERSUFIX", "FAXPREFIX", "FAXSUFIX", "INDUSTRIALMANAGERID", "RESIDENTIALMANAGERID", "COUNTRYMANAGERID", "RETAILMANAGERID", "OFFICEMANAGERID", "VALUATIONMANAGERID", "INVESTMENTMANAGERID", "CONSULTINGMANAGERID", "RESEARCHMANAGERID", "MARKETINGMANAGERID", "TITLE_TYPE", "KEYCLIENT"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_K1_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_32_33_34_35_36_37_38_39_40_41_42_43", columns={"UNSUBSCRIBE", "NON_DELIVERED", "CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "SUFFIXRUS", "PREFIXRUS", "WORKPREFIX", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX", "OTHERPREFIX", "OTHERSUFIX", "FAXPREFIX", "FAXSUFIX", "INDUSTRIALMANAGERID", "RESIDENTIALMANAGERID", "COUNTRYMANAGERID", "RETAILMANAGERID", "OFFICEMANAGERID", "VALUATIONMANAGERID", "INVESTMENTMANAGERID", "CONSULTINGMANAGERID", "RESEARCHMANAGERID", "MARKETINGMANAGERID", "TITLE_TYPE", "KEYCLIENT"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_K1_12", columns={"UNSUBSCRIBE", "NON_DELIVERED", "CONTACTID", "WORKPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_12_14_16", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "WORKPREFIX", "MOBILEPREFIX", "HOMEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_K1_14_16", columns={"UNSUBSCRIBE", "NON_DELIVERED", "CONTACTID", "MOBILEPREFIX", "HOMEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_16", columns={"UNSUBSCRIBE", "NON_DELIVERED", "HOMEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_12_14", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "WORKPREFIX", "MOBILEPREFIX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_23_25_26_27_28_29", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "SEX", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "WORK_INDUSTRY", "HASANIMALS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K25_26_27_28_29_30_31", columns={"FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "WORK_INDUSTRY", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_23", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "SEX"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K23_K1_25_26_27_28_29_30_31", columns={"SEX", "CONTACTID", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "WORK_INDUSTRY", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K23_25_26_27_28_29_30_31", columns={"SEX", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "WORK_INDUSTRY", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K23_30_31", columns={"SEX", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_25_26_27_28_29", columns={"UNSUBSCRIBE", "NON_DELIVERED", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "WORK_INDUSTRY", "HASANIMALS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_K30_K31_23_25_26_27_29", columns={"CONTACTID", "UNSUBSCRIBE", "NON_DELIVERED", "SEX", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "HASANIMALS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K30_K31_25_26_27_29", columns={"UNSUBSCRIBE", "NON_DELIVERED", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "HASANIMALS"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K23_25_26_27_29_30_31", columns={"SEX", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K23_K1_25_26_27_29_30_31", columns={"SEX", "CONTACTID", "FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K25_26_27_29_30_31", columns={"FAMILY", "NUMBER_OF_CHILDREN", "LEADSOURSE", "HASANIMALS", "UNSUBSCRIBE", "NON_DELIVERED"}), @ORM\Index(name="_dta_index_CONTACT_DETAIL_5_942626401__K1_22", columns={"CONTACTID", "NATIONALITY"})})
 * @ORM\Entity
 */
class ContactDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

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
     * @ORM\Column(name="TITLERUS", type="string", length=32, nullable=true)
     */
    private $titlerus;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTRUS", type="string", length=32, nullable=true)
     */
    private $firstrus;

    /**
     * @var string
     *
     * @ORM\Column(name="MIDDLERUS", type="string", length=32, nullable=true)
     */
    private $middlerus;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTRUS", type="string", length=64, nullable=true)
     */
    private $lastrus;

    /**
     * @var string
     *
     * @ORM\Column(name="SUFFIXRUS", type="string", length=32, nullable=true)
     */
    private $suffixrus;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFIXRUS", type="string", length=32, nullable=true)
     */
    private $prefixrus;

    /**
     * @var string
     *
     * @ORM\Column(name="WORKPREFIX", type="string", length=32, nullable=true)
     */
    private $workprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="WORKSUFIX", type="string", length=32, nullable=true)
     */
    private $worksufix;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILEPREFIX", type="string", length=32, nullable=true)
     */
    private $mobileprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILESUFIX", type="string", length=32, nullable=true)
     */
    private $mobilesufix;

    /**
     * @var string
     *
     * @ORM\Column(name="HOMEPREFIX", type="string", length=32, nullable=true)
     */
    private $homeprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="HOMESUFIX", type="string", length=32, nullable=true)
     */
    private $homesufix;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPREFIX", type="string", length=32, nullable=true)
     */
    private $otherprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERSUFIX", type="string", length=32, nullable=true)
     */
    private $othersufix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXPREFIX", type="string", length=32, nullable=true)
     */
    private $faxprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXSUFIX", type="string", length=32, nullable=true)
     */
    private $faxsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="NATIONALITY", type="string", length=32, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="SEX", type="string", length=32, nullable=true)
     */
    private $sex;

    /**
     * @var float
     *
     * @ORM\Column(name="AGE", type="float", precision=53, scale=0, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="FAMILY", type="string", length=1, nullable=true)
     */
    private $family;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMBER_OF_CHILDREN", type="smallint", nullable=true)
     */
    private $numberOfChildren;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURSE", type="string", length=128, nullable=true)
     */
    private $leadsourse;

    /**
     * @var string
     *
     * @ORM\Column(name="WORK_INDUSTRY", type="string", length=128, nullable=true)
     */
    private $workIndustry;

    /**
     * @var string
     *
     * @ORM\Column(name="HASANIMALS", type="string", length=1, nullable=true)
     */
    private $hasanimals;

    /**
     * @var string
     *
     * @ORM\Column(name="UNSUBSCRIBE", type="string", length=1, nullable=true)
     */
    private $unsubscribe;

    /**
     * @var string
     *
     * @ORM\Column(name="NON_DELIVERED", type="string", length=1, nullable=true)
     */
    private $nonDelivered;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIALMANAGERID", type="string", length=12, nullable=true)
     */
    private $industrialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESIDENTIALMANAGERID", type="string", length=12, nullable=true)
     */
    private $residentialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRYMANAGERID", type="string", length=12, nullable=true)
     */
    private $countrymanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAILMANAGERID", type="string", length=12, nullable=true)
     */
    private $retailmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICEMANAGERID", type="string", length=12, nullable=true)
     */
    private $officemanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUATIONMANAGERID", type="string", length=12, nullable=true)
     */
    private $valuationmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENTMANAGERID", type="string", length=12, nullable=true)
     */
    private $investmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGMANAGERID", type="string", length=12, nullable=true)
     */
    private $consultingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESEARCHMANAGERID", type="string", length=12, nullable=true)
     */
    private $researchmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETINGMANAGERID", type="string", length=12, nullable=true)
     */
    private $marketingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE_TYPE", type="string", length=128, nullable=true)
     */
    private $titleType;

    /**
     * @var string
     *
     * @ORM\Column(name="KEYCLIENT", type="string", length=1, nullable=true)
     */
    private $keyclient;

    /**
     * @var string
     *
     * @ORM\Column(name="SEND_SMS", type="string", length=1, nullable=true)
     */
    private $sendSms;

    /**
     * @return string
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @return string
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * @return \DateTime
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * @return string
     */
    public function getTitlerus()
    {
        return $this->titlerus;
    }

    /**
     * @return string
     */
    public function getFirstrus()
    {
        return $this->firstrus;
    }

    /**
     * @return string
     */
    public function getMiddlerus()
    {
        return $this->middlerus;
    }

    /**
     * @return string
     */
    public function getLastrus()
    {
        return $this->lastrus;
    }

    /**
     * @return string
     */
    public function getSuffixrus()
    {
        return $this->suffixrus;
    }

    /**
     * @return string
     */
    public function getPrefixrus()
    {
        return $this->prefixrus;
    }

    /**
     * @return string
     */
    public function getWorkprefix()
    {
        return $this->workprefix;
    }

    /**
     * @return string
     */
    public function getWorksufix()
    {
        return $this->worksufix;
    }

    /**
     * @return string
     */
    public function getMobileprefix()
    {
        return $this->mobileprefix;
    }

    /**
     * @return string
     */
    public function getMobilesufix()
    {
        return $this->mobilesufix;
    }

    /**
     * @return string
     */
    public function getHomeprefix()
    {
        return $this->homeprefix;
    }

    /**
     * @return string
     */
    public function getHomesufix()
    {
        return $this->homesufix;
    }

    /**
     * @return string
     */
    public function getOtherprefix()
    {
        return $this->otherprefix;
    }

    /**
     * @return string
     */
    public function getOthersufix()
    {
        return $this->othersufix;
    }

    /**
     * @return string
     */
    public function getFaxprefix()
    {
        return $this->faxprefix;
    }

    /**
     * @return string
     */
    public function getFaxsufix()
    {
        return $this->faxsufix;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return float
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @return int
     */
    public function getNumberOfChildren()
    {
        return $this->numberOfChildren;
    }

    /**
     * @return string
     */
    public function getLeadsourse()
    {
        return $this->leadsourse;
    }

    /**
     * @return string
     */
    public function getWorkIndustry()
    {
        return $this->workIndustry;
    }

    /**
     * @return string
     */
    public function getHasanimals()
    {
        return $this->hasanimals;
    }

    /**
     * @return string
     */
    public function getUnsubscribe()
    {
        return $this->unsubscribe;
    }

    /**
     * @return string
     */
    public function getNonDelivered()
    {
        return $this->nonDelivered;
    }

    /**
     * @return string
     */
    public function getIndustrialmanagerid()
    {
        return $this->industrialmanagerid;
    }

    /**
     * @return string
     */
    public function getResidentialmanagerid()
    {
        return $this->residentialmanagerid;
    }

    /**
     * @return string
     */
    public function getCountrymanagerid()
    {
        return $this->countrymanagerid;
    }

    /**
     * @return string
     */
    public function getRetailmanagerid()
    {
        return $this->retailmanagerid;
    }

    /**
     * @return string
     */
    public function getOfficemanagerid()
    {
        return $this->officemanagerid;
    }

    /**
     * @return string
     */
    public function getValuationmanagerid()
    {
        return $this->valuationmanagerid;
    }

    /**
     * @return string
     */
    public function getInvestmentmanagerid()
    {
        return $this->investmentmanagerid;
    }

    /**
     * @return string
     */
    public function getConsultingmanagerid()
    {
        return $this->consultingmanagerid;
    }

    /**
     * @return string
     */
    public function getResearchmanagerid()
    {
        return $this->researchmanagerid;
    }

    /**
     * @return string
     */
    public function getMarketingmanagerid()
    {
        return $this->marketingmanagerid;
    }

    /**
     * @return string
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @return string
     */
    public function getKeyclient()
    {
        return $this->keyclient;
    }

    /**
     * @return string
     */
    public function getSendSms()
    {
        return $this->sendSms;
    }




}
