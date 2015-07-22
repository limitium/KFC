<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkCommerc
 *
 * @ORM\Table(name="SPK_OFF_BK_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OFF_BK_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_7_1814297523__K6_K1_12_13", columns={"BASE_RENT", "SPK_PROPERTYID", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_7_1814297523__K1_K6_12_13", columns={"SPK_PROPERTYID", "BASE_RENT", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_c_7_1814297523__K6", columns={"BASE_RENT"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_7_1814297523__K6_12_13", columns={"BASE_RENT", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_7_1814297523__K1_6_10_11", columns={"SPK_PROPERTYID", "BASE_RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_7_1814297523__K1_K6_10_11_12_13", columns={"SPK_PROPERTYID", "BASE_RENT", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_5_1814297523__K1_6_7_8_9_10_11_12_13_14_15", columns={"SPK_PROPERTYID", "BASE_RENT", "INDEXATION_CONDITIONS", "OPERATIONAL_COST", "OTHER", "COST_PER_SQM_MIN", "COST_PER_SQM_MAX", "COST_MIN", "COST_MAX", "COMMENTS_RUS", "COMMENTS_ENG"}), @ORM\Index(name="_dta_index_SPK_OFF_BK_COMMERC_5_1814297523__K1_6", columns={"SPK_PROPERTYID", "BASE_RENT"})})
 * @ORM\Entity
 */
class SpkOffBkCommerc
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
     * @ORM\Column(name="BASE_RENT", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $baseRent;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION_CONDITIONS", type="string", length=128, nullable=true)
     */
    private $indexationConditions;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $other;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=512, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=512, nullable=true)
     */
    private $commentsEng;


}
