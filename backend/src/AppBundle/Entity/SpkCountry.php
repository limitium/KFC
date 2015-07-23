<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCountry
 *
 * @ORM\Table(name="SPK_COUNTRY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_COUNTRY_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="SPK_COUNTRY_ID", columns={"ID"}), @ORM\Index(name="SPK_COUNTRY_NAME_RUS", columns={"NAME_RUS"}), @ORM\Index(name="SPK_COUNTRY_PARENTID", columns={"PARENTID"}), @ORM\Index(name="SPK_COUNTRY_SECCODEID", columns={"SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K9_K10_K8_K7_6", columns={"SPK_PROPERTYID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K9_K10_K8_K7_K1_6", columns={"TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K9_K10_K8_K7_6", columns={"TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_c_7_612197231__K9_K10_K8_K7", columns={"TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K6_1_7_10_17", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "PROPERTY_TYPE", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K17_K6_7_10", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_c_7_612197231__K1_K17", columns={"SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K7_K1_6_9_10_11_12_17", columns={"NAME_RUS", "SPK_PROPERTYID", "ID", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K7_6_9_10_11_12_17", columns={"SPK_PROPERTYID", "NAME_RUS", "ID", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_c_7_612197231__K7_K1", columns={"NAME_RUS", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K9_K10_K8_K7_6_17", columns={"SPK_PROPERTYID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K6_7_9_10_11_12_17", columns={"SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K6_K1_7_9_10_11_12_17", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_c_7_612197231__K6_K1", columns={"ID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_7_612197231__K1_K7_6", columns={"SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_c_7_612197231__K1_K7", columns={"SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K1_7", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10_K9", columns={"PROPERTY_TYPE", "TARGET"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9_K10_K1_K7_6", columns={"TARGET", "PROPERTY_TYPE", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K10_K9_K7_6", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "TARGET", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10_K9_K1_K7_6", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10", columns={"PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K10_K9", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "TARGET"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10_K9_K1", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K7_K10_K9_6", columns={"SPK_PROPERTYID", "NAME_RUS", "PROPERTY_TYPE", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9", columns={"TARGET"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K1_K6_7_9_10_11_12", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K6_K17_7_9_10_11_12", columns={"SPK_PROPERTYID", "ID", "SECCODEID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K6_K17_K1_7_9_10_11_12", columns={"ID", "SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K17_6", columns={"SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K1_6", columns={"SECCODEID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K17_K16_K14_5_6_7_8_9_10_11_12_13_15_18_19", columns={"SPK_PROPERTYID", "SECCODEID", "SPK_STREETID", "PARENTID", "MODIFYDATE", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K16_K1_K14_5_6_7_8_9_10_11_12_13_15_18_19", columns={"SECCODEID", "SPK_STREETID", "SPK_PROPERTYID", "PARENTID", "MODIFYDATE", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10_K9_K1_K7_6_11_12_17", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "NAME_RUS", "ID", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K6_K9_1_17", columns={"ID", "TARGET", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9_K17_K1_K6", columns={"TARGET", "SECCODEID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K9_K17_K6", columns={"SPK_PROPERTYID", "TARGET", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K6_1_17", columns={"ID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K9", columns={"SPK_PROPERTYID", "TARGET"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K1_K9_K6", columns={"SECCODEID", "SPK_PROPERTYID", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9_K1", columns={"TARGET", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9_K1_K17_K6", columns={"TARGET", "SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K16_K1_K14_5_6_7_8_9_10_11_12_13_15_17_18_19", columns={"SPK_STREETID", "SPK_PROPERTYID", "PARENTID", "MODIFYDATE", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "SECCODEID", "STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_6", columns={"SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K16_K14_5_6_7_8_9_10_11_12_13_15_17_18_19", columns={"SPK_PROPERTYID", "SPK_STREETID", "PARENTID", "MODIFYDATE", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER", "SECCODEID", "STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K9_K17_K1_K7", columns={"TARGET", "SECCODEID", "SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K9_K17_K7", columns={"SPK_PROPERTYID", "TARGET", "SECCODEID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K17_K1_K9_K7", columns={"SECCODEID", "SPK_PROPERTYID", "TARGET", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K7_1_17", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K7_K9_1_17", columns={"NAME_RUS", "TARGET", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K14", columns={"SPK_PROPERTYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K6_K14_1_7_9_10_11_12_17", columns={"ID", "PARENTID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K17_K14_K6_7_9_10_11_12", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K14_K17_K6_7_9_10_11_12", columns={"SPK_PROPERTYID", "PARENTID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K1_K17_K6_7_9_10_11_12", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K14_1", columns={"PARENTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K14_K1_K17_K6_7_9_10_11_12", columns={"PARENTID", "SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_COUNTRY_5_612197231__K10_K9_K1_K7_6_11_12_14_17", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "NAME_RUS", "ID", "STATUS", "STATUS_KF", "PARENTID", "SECCODEID"})})
 * @ORM\Entity
 */
class SpkCountry
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="ID", type="string", length=10, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_RUS", type="string", length=128, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME_ENG", type="string", length=128, nullable=true)
     */
    private $nameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGET", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_TYPE", type="string", length=32, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_KF", type="string", length=32, nullable=true)
     */
    private $statusKf;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=256, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTID", type="string", length=12, nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROPERTY_NUMBER", type="string", length=16, nullable=true)
     */
    private $propertyNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_STREETID", type="string", length=12, nullable=true)
     */
    private $spkStreetid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_NAME_RUS", type="string", length=256, nullable=true)
     */
    private $streetNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_TYPE_RUS", type="string", length=32, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVOR", type="string", length=1, nullable=true)
     */
    private $dogovor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;


}
