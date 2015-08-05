<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountdetail
 *
 * @ORM\Table(name="ACCOUNTDETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="ACCOUNTDETAIL_PRIMARY", columns={"ACCOUNTID"})}, indexes={@ORM\Index(name="KF_SR_IX_ACCOUNTRUS", columns={"ACCOUNTID", "ACCOUNTRUS"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K6_K23_K25", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_1", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_c_7_886294217__K6_K23_K25", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1", columns={"ACCOUNTRUS", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6", columns={"ACCOUNTRUS"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K29_K30", columns={"BRAND", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K29_K30_K1", columns={"BRAND", "FULLNAME", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K29_K30", columns={"ACCOUNTID", "BRAND", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_30", columns={"ACCOUNTID", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_23", columns={"ACCOUNTID", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K23_K1", columns={"MAINPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K23", columns={"MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_K27_K1", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_K27", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K6_K23_K25_K27", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_6_25", columns={"ACCOUNTID", "ACCOUNTRUS", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_25", columns={"ACCOUNTRUS", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1_25", columns={"ACCOUNTRUS", "ACCOUNTID", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1_23_25_27", columns={"ACCOUNTRUS", "ACCOUNTID", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_9_886294217__K6_1_23", columns={"ACCOUNTRUS", "ACCOUNTID", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_9_886294217__K1_K6_23", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K1_6_29", columns={"ACCOUNTID", "ACCOUNTRUS", "BRAND"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K6_K23_1", columns={"ACCOUNTRUS", "MAINPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_c_5_886294217__K6_K23", columns={"ACCOUNTRUS", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K35_K1", columns={"ACC_NATIONALLITY", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K1_35", columns={"ACCOUNTID", "ACC_NATIONALLITY"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K35", columns={"ACC_NATIONALLITY"})})
 * @ORM\Entity
 */
class Accountdetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="ACCOUNTRUS", type="string", length=256, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCCOMMENT", type="string", length=2048, nullable=true)
     */
    private $acccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="WEAKNESSES", type="string", length=128, nullable=true)
     */
    private $weaknesses;

    /**
     * @var string
     *
     * @ORM\Column(name="STRENGTHS", type="string", length=128, nullable=true)
     */
    private $strengths;

    /**
     * @var string
     *
     * @ORM\Column(name="STRATEGY", type="string", length=128, nullable=true)
     */
    private $strategy;

    /**
     * @var integer
     *
     * @ORM\Column(name="RATING", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTS", type="string", length=64, nullable=true)
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIALMANAGERID", type="string", length=32, nullable=true)
     */
    private $industrialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESIDENTIALMANAGERID", type="string", length=32, nullable=true)
     */
    private $residentialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRYHOUSEMANAGERID", type="string", length=32, nullable=true)
     */
    private $countryhousemanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAILMANAGERID", type="string", length=32, nullable=true)
     */
    private $retailmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICESMANAGERID", type="string", length=32, nullable=true)
     */
    private $officesmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSESSMENTMANAGERID", type="string", length=32, nullable=true)
     */
    private $assessmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENTMANAGERID", type="string", length=32, nullable=true)
     */
    private $investmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGMANAGERID", type="string", length=32, nullable=true)
     */
    private $consultingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETRESEACHMANAGERID", type="string", length=32, nullable=true)
     */
    private $marketreseachmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETINGMANAGERID", type="string", length=32, nullable=true)
     */
    private $marketingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINPREFIX", type="string", length=32, nullable=true)
     */
    private $mainprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINSUFIX", type="string", length=32, nullable=true)
     */
    private $mainsufix;

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
     * @ORM\Column(name="TOLLPREFIX", type="string", length=32, nullable=true)
     */
    private $tollprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="TOLLSUFIX", type="string", length=32, nullable=true)
     */
    private $tollsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="FULLNAME", type="string", length=256, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="ISRUSSIAN", type="string", length=1, nullable=true)
     */
    private $isrussian;

    /**
     * @var integer
     *
     * @ORM\Column(name="IND", type="integer", nullable=true)
     */
    private $ind;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMBER_OF_STORES", type="integer", nullable=true)
     */
    private $numberOfStores;

    /**
     * @var string
     *
     * @ORM\Column(name="REFFERED", type="string", length=64, nullable=true)
     */
    private $reffered;

    /**
     * @var string
     *
     * @ORM\Column(name="ACC_NATIONALLITY", type="string", length=128, nullable=true)
     */
    private $accNationallity;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER_OFFICE", type="string", length=32, nullable=true)
     */
    private $otherOffice;


}
