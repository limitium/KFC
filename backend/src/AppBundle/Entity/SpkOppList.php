<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppList
 *
 * @ORM\Table(name="SPK_OPP_LIST", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_LIST_PRIMARY", columns={"SPK_OPP_LISTID"})}, indexes={@ORM\Index(name="SPK_OPP_LONGLIST_OPPORTUNITYID", columns={"OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K2_K7_1_9_11_12", columns={"OPPORTUNITYID", "CONTACTID", "SPK_OPP_LISTID", "IN_SHORTLIST", "SPK_REQUESTSID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K7_K2_1_9_11_12", columns={"CONTACTID", "OPPORTUNITYID", "SPK_OPP_LISTID", "IN_SHORTLIST", "SPK_REQUESTSID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K7", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K2_K9_K7_K3_K11_1_12", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CONTACTID", "CREATEUSER", "SPK_REQUESTSID", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K7_K3_K11_K2_K9_1_12", columns={"CONTACTID", "CREATEUSER", "SPK_REQUESTSID", "OPPORTUNITYID", "IN_SHORTLIST", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K7_K3_K11", columns={"CONTACTID", "CREATEUSER", "SPK_REQUESTSID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K9_K2", columns={"IN_SHORTLIST", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K12_K7_K9_K2_3", columns={"SECTION_NAME", "CONTACTID", "IN_SHORTLIST", "OPPORTUNITYID", "CREATEUSER"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K2_K9_K7_K3_K12", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CONTACTID", "CREATEUSER", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K7_K3_K2_K9_K12", columns={"CONTACTID", "CREATEUSER", "OPPORTUNITYID", "IN_SHORTLIST", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K7_K3", columns={"CONTACTID", "CREATEUSER"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K12_K7", columns={"SECTION_NAME", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K12_K7_K3_K9_K2", columns={"SECTION_NAME", "CONTACTID", "CREATEUSER", "IN_SHORTLIST", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K7_K2_K3_K9_K12", columns={"CONTACTID", "OPPORTUNITYID", "CREATEUSER", "IN_SHORTLIST", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_7_1213247377__K2_K3_K9_K7_K12", columns={"OPPORTUNITYID", "CREATEUSER", "IN_SHORTLIST", "CONTACTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_7_1213247377__K3_K9_K2", columns={"CREATEUSER", "IN_SHORTLIST", "OPPORTUNITYID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K1_K9_K2_3_7", columns={"SPK_OPP_LISTID", "IN_SHORTLIST", "OPPORTUNITYID", "CREATEUSER", "CONTACTID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K7_K3_K2_K9_K1", columns={"CONTACTID", "CREATEUSER", "OPPORTUNITYID", "IN_SHORTLIST", "SPK_OPP_LISTID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K9_K7_K3_K1", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CONTACTID", "CREATEUSER", "SPK_OPP_LISTID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K9_K7_K3_K1_12", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CONTACTID", "CREATEUSER", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K7_K3_K2_K9_K1_12", columns={"CONTACTID", "CREATEUSER", "OPPORTUNITYID", "IN_SHORTLIST", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K1_K9_K2_3_7_12", columns={"SPK_OPP_LISTID", "IN_SHORTLIST", "OPPORTUNITYID", "CREATEUSER", "CONTACTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K9_K7_K3_K1_11_12", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CONTACTID", "CREATEUSER", "SPK_OPP_LISTID", "SPK_REQUESTSID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K7_1_3_9_11_12", columns={"OPPORTUNITYID", "CONTACTID", "SPK_OPP_LISTID", "CREATEUSER", "IN_SHORTLIST", "SPK_REQUESTSID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K7_K11_K2_K3_K9_1_12", columns={"CONTACTID", "SPK_REQUESTSID", "OPPORTUNITYID", "CREATEUSER", "IN_SHORTLIST", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K3_K9_K7_K11_1_12", columns={"OPPORTUNITYID", "CREATEUSER", "IN_SHORTLIST", "CONTACTID", "SPK_REQUESTSID", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_5_1213247377__K7_K11", columns={"CONTACTID", "SPK_REQUESTSID"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K3_K7_K2_K9_1_12", columns={"CREATEUSER", "CONTACTID", "OPPORTUNITYID", "IN_SHORTLIST", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_5_1213247377__K2_K9_K3_K7_1_12", columns={"OPPORTUNITYID", "IN_SHORTLIST", "CREATEUSER", "CONTACTID", "SPK_OPP_LISTID", "SECTION_NAME"}), @ORM\Index(name="_dta_index_SPK_OPP_LIST_c_5_1213247377__K3_K7", columns={"CREATEUSER", "CONTACTID"})})
 * @ORM\Entity
 */
class SpkOppList
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_LISTID", type="string", length=12, nullable=false)
     */
    private $spkOppListid;

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
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=1024, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="IN_SHORTLIST", type="string", length=1, nullable=true)
     */
    private $inShortlist;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITYID", type="string", length=12, nullable=true)
     */
    private $activityid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTION_NAME", type="string", length=64, nullable=true)
     */
    private $sectionName;

    /**
     * @var string
     *
     * @ORM\Column(name="LONGLISTID", type="string", length=12, nullable=true)
     */
    private $longlistid;


}
