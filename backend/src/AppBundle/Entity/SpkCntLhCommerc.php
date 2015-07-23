<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntLhCommerc
 *
 * @ORM\Table(name="SPK_CNT_LH_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_CNT_LH_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkCntLhCommerc
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
     * @ORM\Column(name="COST_PER_100_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Min;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100Max;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EURO_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costEuroMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_EURO_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costEuroMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_EURO_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmEuroMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_SQM_EURO_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPerSqmEuroMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_EURO_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100EuroMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PER_100_EURO_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPer100EuroMax;

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
     * @ORM\Column(name="RENT_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $rentMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COSTNSHARED", type="string", length=1, nullable=true)
     */
    private $costnshared;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIN_VAL", type="string", length=10, nullable=true)
     */
    private $mainVal;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_MIN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costRurMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_MAX", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costRurMax;

    /**
     * @var float
     *
     * @ORM\Column(name="KF_FEE", type="float", precision=53, scale=0, nullable=true)
     */
    private $kfFee;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_RUR", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentRur;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_EUR", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentEur;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_CURRENCY", type="string", length=8, nullable=true)
     */
    private $rentCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIVATE_SALE", type="string", length=1, nullable=true)
     */
    private $privateSale;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_SQM_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_RUR_SQM_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costRurSqmMax;


}
