<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkLandlords
 *
 * @ORM\Table(name="SPK_LANDLORDS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_LANDLORDS_PRIMARY", columns={"SPK_LANDLORDSID"})}, indexes={@ORM\Index(name="_dta_index_SPK_LANDLORDS_c_5_1678629023__K9D", columns={"PRIMARY_CONTACT"}), @ORM\Index(name="SPK_LANDLORDS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_K2_K8_K10_K14_K11_K12_K13_K9", columns={"ACCOUNTID", "SPK_PROPERTYID", "CONTACTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_K2", columns={"ACCOUNTID", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7", columns={"ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_K8_K10_K14_K11_K12_K13_K9_2", columns={"ACCOUNTID", "CONTACTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K7_K8_K10_K14_K11_K12_K13_K9", columns={"SPK_PROPERTYID", "ACCOUNTID", "CONTACTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K7", columns={"SPK_PROPERTYID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_c_7_1678629023__K7_K8_K10_K14_K11_K12_K13_K9", columns={"ACCOUNTID", "CONTACTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K8_K7_K10_K14_K11_K12_K13_K9", columns={"SPK_PROPERTYID", "CONTACTID", "ACCOUNTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K8_K2_K7_K10_K14_K11_K12_K13_K9", columns={"CONTACTID", "SPK_PROPERTYID", "ACCOUNTID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_K8_K2_K10_K14_K11_K12_K13_K9", columns={"ACCOUNTID", "CONTACTID", "SPK_PROPERTYID", "CONTACT_TYPE", "CURRENT_CONTACT", "PART_OWNED", "STARTDATE", "ENDDATE", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_c_7_1678629023__K8", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K8_K7_K9_1_10_11_12_13_14", columns={"SPK_PROPERTYID", "CONTACTID", "ACCOUNTID", "PRIMARY_CONTACT", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K8_K7_K2_K9_1_10_11_12_13_14", columns={"CONTACTID", "ACCOUNTID", "SPK_PROPERTYID", "PRIMARY_CONTACT", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K9D_K2_1_7_8_10_11_12_13_14", columns={"PRIMARY_CONTACT", "SPK_PROPERTYID", "SPK_LANDLORDSID", "ACCOUNTID", "CONTACTID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_c_7_1678629023__K8_K7", columns={"CONTACTID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K8_K7_K2_K9_K14", columns={"CONTACTID", "ACCOUNTID", "SPK_PROPERTYID", "PRIMARY_CONTACT", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K9_K14_K8_K7", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT", "CURRENT_CONTACT", "CONTACTID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_c_7_1678629023__K9_K14_K2", columns={"PRIMARY_CONTACT", "CURRENT_CONTACT", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K7_9_14", columns={"SPK_PROPERTYID", "ACCOUNTID", "PRIMARY_CONTACT", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_9_14", columns={"ACCOUNTID", "PRIMARY_CONTACT", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K7_K2_9_14", columns={"ACCOUNTID", "SPK_PROPERTYID", "PRIMARY_CONTACT", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_7_1678629023__K2_K7_8_9_14", columns={"SPK_PROPERTYID", "ACCOUNTID", "CONTACTID", "PRIMARY_CONTACT", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K7_K9", columns={"ACCOUNTID", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K2_K8_K7", columns={"PRIMARY_CONTACT", "SPK_PROPERTYID", "CONTACTID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K2", columns={"PRIMARY_CONTACT", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K9", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K7_K2_K8", columns={"PRIMARY_CONTACT", "ACCOUNTID", "SPK_PROPERTYID", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K8_K9", columns={"CONTACTID", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K7_K9_K2_K8", columns={"ACCOUNTID", "PRIMARY_CONTACT", "SPK_PROPERTYID", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K8_K7", columns={"PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K9_K8_K7", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K7_8_9", columns={"ACCOUNTID", "CONTACTID", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K8_K2_K7", columns={"PRIMARY_CONTACT", "CONTACTID", "SPK_PROPERTYID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K8_K9_K2_K7", columns={"CONTACTID", "PRIMARY_CONTACT", "SPK_PROPERTYID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K8", columns={"PRIMARY_CONTACT", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K7", columns={"PRIMARY_CONTACT", "ACCOUNTID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K10", columns={"SPK_PROPERTYID", "CONTACT_TYPE"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K10_K2", columns={"CONTACT_TYPE", "SPK_PROPERTYID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K9_K8_K7_10", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID", "CONTACT_TYPE"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K2_K8_K7_1_10_11_12_13_14", columns={"PRIMARY_CONTACT", "SPK_PROPERTYID", "CONTACTID", "ACCOUNTID", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K8_K7_1_10_11_12_13_14", columns={"PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K9_K8_K7_1_10_11_12_13_14", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K8_K7_K2_1_10_11_12_13_14", columns={"PRIMARY_CONTACT", "CONTACTID", "ACCOUNTID", "SPK_PROPERTYID", "SPK_LANDLORDSID", "CONTACT_TYPE", "PART_OWNED", "STARTDATE", "ENDDATE", "CURRENT_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K9_K7_1", columns={"PRIMARY_CONTACT", "ACCOUNTID", "SPK_LANDLORDSID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K2_K9_K7_1", columns={"SPK_PROPERTYID", "PRIMARY_CONTACT", "ACCOUNTID", "SPK_LANDLORDSID"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K1_7_9", columns={"SPK_LANDLORDSID", "ACCOUNTID", "PRIMARY_CONTACT"}), @ORM\Index(name="_dta_index_SPK_LANDLORDS_5_1678629023__K1_K2_7_9", columns={"SPK_LANDLORDSID", "SPK_PROPERTYID", "ACCOUNTID", "PRIMARY_CONTACT"})})
 * @ORM\Entity
 */
class SpkLandlords
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_LANDLORDSID", type="string", length=12, nullable=false)
     */
    private $spkLandlordsid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIMARY_CONTACT", type="string", length=1, nullable=true)
     */
    private $primaryContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_TYPE", type="string", length=32, nullable=true)
     */
    private $contactType;

    /**
     * @var string
     *
     * @ORM\Column(name="PART_OWNED", type="string", length=32, nullable=true)
     */
    private $partOwned;

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

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENT_CONTACT", type="string", length=1, nullable=true)
     */
    private $currentContact;


}
