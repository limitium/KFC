<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetBkTech
 *
 * @ORM\Table(name="SPK_RET_BK_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_BK_TECH_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K11_K1_7", columns={"PROFILEID", "SPK_PROPERTYID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_7_11", columns={"SPK_PROPERTYID", "TOTAL_AREA", "PROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K11_7", columns={"SPK_PROPERTYID", "PROFILEID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K7_K1", columns={"TOTAL_AREA", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K7", columns={"TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K7", columns={"SPK_PROPERTYID", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K11_K1", columns={"PROFILEID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K27_K11_K1_K12_K7_K19_K30", columns={"AREAID", "PROFILEID", "SPK_PROPERTYID", "SUBPROFILEID", "TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K27_K11_K12_K7_K19_K30", columns={"SPK_PROPERTYID", "AREAID", "PROFILEID", "SUBPROFILEID", "TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K7_K19_K30_11_12_27", columns={"TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME", "PROFILEID", "SUBPROFILEID", "AREAID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K7_K19_K30_K1_11_12_27", columns={"TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME", "SPK_PROPERTYID", "PROFILEID", "SUBPROFILEID", "AREAID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K7_K19_K30", columns={"TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K27_K11_K1_K12", columns={"AREAID", "PROFILEID", "SPK_PROPERTYID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K11_K1_K12_K6_K7", columns={"PROFILEID", "SPK_PROPERTYID", "SUBPROFILEID", "STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K6_K7_11_12", columns={"STOREY_NUMBER", "TOTAL_AREA", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K6_K7_K1_11_12", columns={"STOREY_NUMBER", "TOTAL_AREA", "SPK_PROPERTYID", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K11_K12_K6_K7", columns={"SPK_PROPERTYID", "PROFILEID", "SUBPROFILEID", "STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K6_K7", columns={"STOREY_NUMBER", "TOTAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K11_K1_K12", columns={"PROFILEID", "SPK_PROPERTYID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_6_7_11_12", columns={"SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K27_K11_K12_K1_6_7_13_14_16_19_30", columns={"AREAID", "PROFILEID", "SUBPROFILEID", "SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "ANCHOR", "ENTERTAINMENT", "INDUSTRIAL_AREA", "OFFICE_AREA", "SHOP_NAME"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K27_K11_K12_6_7_13_14_16_19_30", columns={"SPK_PROPERTYID", "AREAID", "PROFILEID", "SUBPROFILEID", "STOREY_NUMBER", "TOTAL_AREA", "ANCHOR", "ENTERTAINMENT", "INDUSTRIAL_AREA", "OFFICE_AREA", "SHOP_NAME"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_c_7_2004202190__K27_K11_K12", columns={"AREAID", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_7_2004202190__K1_K27_K11_K12_K7_K19_K30_6_13_14_16", columns={"SPK_PROPERTYID", "AREAID", "PROFILEID", "SUBPROFILEID", "TOTAL_AREA", "OFFICE_AREA", "SHOP_NAME", "STOREY_NUMBER", "ANCHOR", "ENTERTAINMENT", "INDUSTRIAL_AREA"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_5_2004202190__K1_K27_K11_K12_6_7_13_14_16_19_30_31", columns={"SPK_PROPERTYID", "AREAID", "PROFILEID", "SUBPROFILEID", "STOREY_NUMBER", "TOTAL_AREA", "ANCHOR", "ENTERTAINMENT", "INDUSTRIAL_AREA", "OFFICE_AREA", "SHOP_NAME", "STOREY_MAX"}), @ORM\Index(name="_dta_index_SPK_RET_BK_TECH_5_2004202190__K27_K11_K12_K1_6_7_13_14_16_19_30_31", columns={"AREAID", "PROFILEID", "SUBPROFILEID", "SPK_PROPERTYID", "STOREY_NUMBER", "TOTAL_AREA", "ANCHOR", "ENTERTAINMENT", "INDUSTRIAL_AREA", "OFFICE_AREA", "SHOP_NAME", "STOREY_MAX"})})
 * @ORM\Entity
 */
class SpkRetBkTech
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
     * @ORM\Column(name="STOREY_NUMBER", type="smallint", nullable=true)
     */
    private $storeyNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="VACANT", type="string", length=1, nullable=true)
     */
    private $vacant;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKET_NAME", type="string", length=64, nullable=true)
     */
    private $marketName;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=12, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=12, nullable=true)
     */
    private $subprofileid;

    /**
     * @var string
     *
     * @ORM\Column(name="ANCHOR", type="string", length=1, nullable=true)
     */
    private $anchor;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTERTAINMENT", type="string", length=1, nullable=true)
     */
    private $entertainment;

    /**
     * @var string
     *
     * @ORM\Column(name="BRANDS", type="string", length=64, nullable=true)
     */
    private $brands;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $industrialCost;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIAL_OUTSIDE", type="string", length=1, nullable=true)
     */
    private $industrialOutside;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $officeCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICE_OUTSIDE", type="string", length=1, nullable=true)
     */
    private $officeOutside;

    /**
     * @var string
     *
     * @ORM\Column(name="ELECTRICITY", type="string", length=128, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="WATER", type="string", length=128, nullable=true)
     */
    private $water;

    /**
     * @var string
     *
     * @ORM\Column(name="GAZ", type="string", length=128, nullable=true)
     */
    private $gaz;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=256, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=256, nullable=true)
     */
    private $commentsEng;

    /**
     * @var string
     *
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=true)
     */
    private $areaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="KF_ORDER", type="integer", nullable=true)
     */
    private $kfOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDITIONAL_NEEDS", type="string", length=128, nullable=true)
     */
    private $additionalNeeds;

    /**
     * @var string
     *
     * @ORM\Column(name="SHOP_NAME", type="string", length=128, nullable=true)
     */
    private $shopName;

    /**
     * @var integer
     *
     * @ORM\Column(name="STOREY_MAX", type="smallint", nullable=true)
     */
    private $storeyMax;

    /**
     * @var string
     *
     * @ORM\Column(name="FITOUT", type="string", length=64, nullable=true)
     */
    private $fitout;


}
