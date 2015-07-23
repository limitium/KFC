<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetail
 *
 * @ORM\Table(name="SPK_RETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RETAIL_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="SPK_RETAIL_ID", columns={"ID"}), @ORM\Index(name="SPK_RETAIL_NAME_RUS", columns={"NAME_RUS"}), @ORM\Index(name="SPK_RETAIL_PARENTID", columns={"PARENTID"}), @ORM\Index(name="SPK_RETAIL_SECCODEID", columns={"SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K9_K10_K8_K7", columns={"ID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K6_K9_K10_K8_K7", columns={"SPK_PROPERTYID", "ID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K9_K10_K8_K7_K1", columns={"ID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_7", columns={"SPK_PROPERTYID", "SECCODEID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_16", columns={"NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_K1_16", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K1_K16", columns={"SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K15_1_16", columns={"ID", "PROPERTY_NUMBER", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K15_K6_1_16", columns={"PROPERTY_NUMBER", "ID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K6_K16_K15", columns={"SPK_PROPERTYID", "ID", "SECCODEID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_K6_K15", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K1_K16_K15", columns={"ID", "SPK_PROPERTYID", "SECCODEID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K15", columns={"PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_14_15_16", columns={"SPK_PROPERTYID", "PARENTID", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_14_15", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_14", columns={"SPK_PROPERTYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K14_9", columns={"SPK_PROPERTYID", "PARENTID", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_1_9", columns={"PARENTID", "SPK_PROPERTYID", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K14_K1", columns={"PARENTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K14_K1_6_7_9_11", columns={"SECCODEID", "PARENTID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_K16", columns={"PARENTID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_K16_K1_6_7_9_11", columns={"PARENTID", "SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "STATUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_K1_K16_6_7_9_11", columns={"PARENTID", "SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_K14_6_7_9_11", columns={"SECCODEID", "SPK_PROPERTYID", "PARENTID", "ID", "NAME_RUS", "TARGET", "STATUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K14_K16_6_7_9_11", columns={"SPK_PROPERTYID", "PARENTID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "STATUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K14_6_7_9_11_16", columns={"SPK_PROPERTYID", "PARENTID", "ID", "NAME_RUS", "TARGET", "STATUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K14", columns={"SECCODEID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K16_K1", columns={"SECCODEID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K6_K9_K10_K8_K7_11_14_16", columns={"SPK_PROPERTYID", "ID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "STATUS", "PARENTID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K1_K16_K15_14", columns={"ID", "SPK_PROPERTYID", "SECCODEID", "PROPERTY_NUMBER", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_9_14_15_16", columns={"SPK_PROPERTYID", "TARGET", "PARENTID", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_15", columns={"SPK_PROPERTYID", "SECCODEID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_14_15", columns={"SECCODEID", "SPK_PROPERTYID", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_15_16", columns={"SPK_PROPERTYID", "PROPERTY_NUMBER", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_K16_K1", columns={"PARENTID", "SECCODEID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_6_7", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K7_6_8_9_10_11_12_16", columns={"SPK_PROPERTYID", "NAME_RUS", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_K1_6_8_9_10_11_12_16", columns={"NAME_RUS", "SPK_PROPERTYID", "ID", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K7_K1", columns={"NAME_RUS", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_6_7_9_10_11_12", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_6_7_9_10_11_12", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_6_7_9_10_11_12_16", columns={"SPK_PROPERTYID", "ID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K6_K9_K10_K8_K7_11_12_14_16", columns={"SPK_PROPERTYID", "ID", "TARGET", "PROPERTY_TYPE", "NAME_ENG", "NAME_RUS", "STATUS", "STATUS_KF", "PARENTID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K1_7_9_10_11_12_16", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K6_K1", columns={"ID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_6_7_16", columns={"SPK_PROPERTYID", "ID", "NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K7_6", columns={"SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_7_628197288__K1_K7", columns={"SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_K7_6", columns={"SPK_PROPERTYID", "SECCODEID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_1_6_16", columns={"NAME_RUS", "SPK_PROPERTYID", "ID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_6_7_8_9_10_11_12_13_14_15", columns={"SPK_PROPERTYID", "SECCODEID", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_6_7_8_9_10_11_12_13_14_15", columns={"SECCODEID", "SPK_PROPERTYID", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PARENTID", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_K7", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_K1_6_9_10_11_12_16", columns={"NAME_RUS", "SPK_PROPERTYID", "ID", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K7_6_9_10_11_12_16", columns={"SPK_PROPERTYID", "NAME_RUS", "ID", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K14_K1_K16", columns={"PARENTID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_K14", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K14_K16", columns={"SPK_PROPERTYID", "PARENTID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K14_K1", columns={"SECCODEID", "PARENTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_K14_6_7_15", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID", "ID", "NAME_RUS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K14_K16_6_7_15", columns={"SPK_PROPERTYID", "PARENTID", "SECCODEID", "ID", "NAME_RUS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_K14_6_7_15", columns={"SECCODEID", "SPK_PROPERTYID", "PARENTID", "ID", "NAME_RUS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K7_K1_K16_K6", columns={"NAME_RUS", "SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_K7_K6", columns={"SECCODEID", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K1_16", columns={"ID", "SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K6_K1_K7_16", columns={"ID", "SPK_PROPERTYID", "NAME_RUS", "SECCODEID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K1_K16_K6", columns={"SPK_PROPERTYID", "SECCODEID", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_7_628197288__K16_K1_K6", columns={"SECCODEID", "SPK_PROPERTYID", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K9_K10", columns={"TARGET", "PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K9_K10_K1_K7_6", columns={"TARGET", "PROPERTY_TYPE", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K9_K10_K1", columns={"TARGET", "PROPERTY_TYPE", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_K9_K10_K7_6", columns={"SPK_PROPERTYID", "TARGET", "PROPERTY_TYPE", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_K10_K9_K7_6", columns={"SPK_PROPERTYID", "PROPERTY_TYPE", "TARGET", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K10_K9_K1_K7_6", columns={"PROPERTY_TYPE", "TARGET", "SPK_PROPERTYID", "NAME_RUS", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K9", columns={"TARGET"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K10", columns={"PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_K7_K10_K9_6", columns={"SPK_PROPERTYID", "NAME_RUS", "PROPERTY_TYPE", "TARGET", "ID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_K9_K10", columns={"SPK_PROPERTYID", "TARGET", "PROPERTY_TYPE"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_5_628197288__K10_K9", columns={"PROPERTY_TYPE", "TARGET"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_K16_K14_6_7_8_9_10_11_12_13_15", columns={"SPK_PROPERTYID", "SECCODEID", "PARENTID", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K16_K1_K14_6_7_8_9_10_11_12_13_15", columns={"SECCODEID", "SPK_PROPERTYID", "PARENTID", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PROPERTY_NUMBER"}), @ORM\Index(name="_dta_index_SPK_RETAIL_c_5_628197288__K16_K1_K14", columns={"SECCODEID", "SPK_PROPERTYID", "PARENTID"}), @ORM\Index(name="_dta_index_SPK_RETAIL_5_628197288__K1_2_3_4_5_6_7_8_9_10_11_12_13_14_15_16", columns={"SPK_PROPERTYID", "CREATEUSER", "CREATEDATE", "MODIFYUSER", "MODIFYDATE", "ID", "NAME_RUS", "NAME_ENG", "TARGET", "PROPERTY_TYPE", "STATUS", "STATUS_KF", "COMMENTS", "PARENTID", "PROPERTY_NUMBER", "SECCODEID"})})
 * @ORM\Entity
 */
class SpkRetail
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
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATED", type="datetime", nullable=true)
     */
    private $updated;


}
