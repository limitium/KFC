<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkProperty
 *
 * @ORM\Table(name="SPK_PROPERTY", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_PROPERTY_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="KF_SR_IX_SPK_PropertyID_incl", columns={"SPK_PROPERTYID", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K9_K1", columns={"SPK_ADDRESSID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K1_K9_6", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K9_1_6", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_c_7_1341247833__K9", columns={"SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K1_6_9", columns={"SPK_PROPERTYID", "ACCOUNTMANAGERID", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K1_K9_6_7_8_11_12_13", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT", "WEBADDRESS", "REGION_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K9_K1_6_7_8_11_12_13", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT", "WEBADDRESS", "REGION_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K9_K1_6_7_8_11", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_7_1341247833__K1_K9_6_7_8_11", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_8_1912", columns={"SPK_PROPERTYID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_6_8_9", columns={"SPK_PROPERTYID", "ACCOUNTMANAGERID", "KF_OBJECT", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K8_K1_9", columns={"KF_OBJECT", "SPK_PROPERTYID", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K8_9", columns={"KF_OBJECT", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K9_K1_8", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K9_1_6_8", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K6_K9_1", columns={"ACCOUNTMANAGERID", "SPK_ADDRESSID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_c_5_1341247833__K6_K9", columns={"ACCOUNTMANAGERID", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K9_K1_6_7_8_11_13", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT", "REGION_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_K9_6_7_8_11_13", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT", "COMPETITOR_OBJECT", "REGION_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K8_K1", columns={"KF_OBJECT", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_c_5_1341247833__K8", columns={"KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_K9_6_7_8", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K9_K1_6_7_8", columns={"SPK_ADDRESSID", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "EXPORT", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_8_11", columns={"SPK_PROPERTYID", "KF_OBJECT", "COMPETITOR_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K9_K6_K1", columns={"SPK_ADDRESSID", "ACCOUNTMANAGERID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_c_5_1341247833__K9_K6", columns={"SPK_ADDRESSID", "ACCOUNTMANAGERID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K8_K1_11", columns={"KF_OBJECT", "SPK_PROPERTYID", "COMPETITOR_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_6", columns={"SPK_PROPERTYID", "ACCOUNTMANAGERID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K6_K9_K1_8", columns={"ACCOUNTMANAGERID", "SPK_ADDRESSID", "SPK_PROPERTYID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K6", columns={"ACCOUNTMANAGERID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_K9_K6_8", columns={"SPK_PROPERTYID", "SPK_ADDRESSID", "ACCOUNTMANAGERID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K6_K1_K9_K8", columns={"ACCOUNTMANAGERID", "SPK_PROPERTYID", "SPK_ADDRESSID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K8_K1_6_9", columns={"KF_OBJECT", "SPK_PROPERTYID", "ACCOUNTMANAGERID", "SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_K6_K9_K8", columns={"SPK_PROPERTYID", "ACCOUNTMANAGERID", "SPK_ADDRESSID", "KF_OBJECT"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K6_K1", columns={"ACCOUNTMANAGERID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_PROPERTY_5_1341247833__K1_K8_6_9", columns={"SPK_PROPERTYID", "KF_OBJECT", "ACCOUNTMANAGERID", "SPK_ADDRESSID"})})
 * @ORM\Entity
 */
class SpkProperty
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
     * @ORM\Column(name="ACCOUNTMANAGERID", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT", type="string", length=1, nullable=true)
     */
    private $export;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_OBJECT", type="string", length=1, nullable=true)
     */
    private $kfObject;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=true)
     */
    private $spkAddressid;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORTSOURCE", type="string", length=32, nullable=true)
     */
    private $importsource;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPETITOR_OBJECT", type="string", length=1, nullable=true)
     */
    private $competitorObject;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS", type="string", length=128, nullable=true)
     */
    private $webaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION_OBJECT", type="string", length=1, nullable=true)
     */
    private $regionObject;

    /**
     * @var integer
     *
     * @ORM\Column(name="oldid", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="GPS_ID", type="integer", nullable=true)
     */
    private $gpsId;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENT", type="string", length=128, nullable=true)
     */
    private $investment;


}
