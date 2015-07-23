<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkStreet
 *
 * @ORM\Table(name="SPK_STREET", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_STREET_PRIMARY", columns={"SPK_STREETID"})}, indexes={@ORM\Index(name="KF_SR_IX_STREETID_incl", columns={"SPK_STREETID", "STREET_NAME_RUS", "STREET_NAME_ENG", "STREET_TYPE_RUS", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_8", columns={"STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_K1_8", columns={"STREET_NAME_RUS", "SPK_STREETID", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K1_6_8", columns={"SPK_STREETID", "STREET_NAME_RUS", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_1", columns={"STREET_NAME_RUS", "SPK_STREETID"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K1_K6", columns={"SPK_STREETID", "STREET_NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6", columns={"STREET_NAME_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_K8_K1", columns={"STREET_NAME_RUS", "STREET_TYPE_RUS", "SPK_STREETID"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K1_K6_7_9", columns={"SPK_STREETID", "STREET_NAME_RUS", "STREET_NAME_ENG", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_1_7_9", columns={"STREET_NAME_RUS", "SPK_STREETID", "STREET_NAME_ENG", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_1_7_8_9", columns={"STREET_NAME_RUS", "SPK_STREETID", "STREET_NAME_ENG", "STREET_TYPE_RUS", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K1_K6_K7", columns={"SPK_STREETID", "STREET_NAME_RUS", "STREET_NAME_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_K7_K1", columns={"STREET_NAME_RUS", "STREET_NAME_ENG", "SPK_STREETID"}), @ORM\Index(name="_dta_index_SPK_STREET_7_1847677630__K6_K7_K1_8_9", columns={"STREET_NAME_RUS", "STREET_NAME_ENG", "SPK_STREETID", "STREET_TYPE_RUS", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_c_7_1847677630__K6_K7", columns={"STREET_NAME_RUS", "STREET_NAME_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_9_1847677630__K1_7_9", columns={"SPK_STREETID", "STREET_NAME_ENG", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_9_1847677630__K7_9", columns={"STREET_NAME_ENG", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_9_1847677630__K7_K1_9", columns={"STREET_NAME_ENG", "SPK_STREETID", "STREET_TYPE_ENG"}), @ORM\Index(name="_dta_index_SPK_STREET_5_1847677630__K1_8", columns={"SPK_STREETID", "STREET_TYPE_RUS"}), @ORM\Index(name="_dta_index_SPK_STREET_5_1847677630__K10_K6_K1", columns={"SPK_CITYID", "STREET_NAME_RUS", "SPK_STREETID"}), @ORM\Index(name="_dta_index_SPK_STREET_5_1847677630__K6_K1_K10", columns={"STREET_NAME_RUS", "SPK_STREETID", "SPK_CITYID"}), @ORM\Index(name="_dta_index_SPK_STREET_c_5_1847677630__K10_K6", columns={"SPK_CITYID", "STREET_NAME_RUS"})})
 * @ORM\Entity
 */
class SpkStreet
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_STREETID", type="string", length=12, nullable=false)
     */
    private $spkStreetid;

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
     * @ORM\Column(name="STREET_NAME_RUS", type="string", length=128, nullable=true)
     */
    private $streetNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_NAME_ENG", type="string", length=128, nullable=true)
     */
    private $streetNameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_TYPE_RUS", type="string", length=128, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     * @ORM\Column(name="STREET_TYPE_ENG", type="string", length=128, nullable=true)
     */
    private $streetTypeEng;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTRICTID", type="string", length=12, nullable=true)
     */
    private $districtid;


}
