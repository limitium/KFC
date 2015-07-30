<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCurrencyRates
 *
 * @ORM\Table(name="KF_CURRENCY_RATES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CURRENCY_RATES_PRIMARY", columns={"KF_CURRENCY_RATESID"})}, indexes={@ORM\Index(name="KF_SR_IX_createDatecmp", columns={"CREATEDATE_cmp"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_5_567009101__K6_3_7", columns={"CURRENCY", "CREATEDATE", "CUR_VALUE"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_c_5_567009101__K6", columns={"CURRENCY"}), @ORM\Index(name="_dta_index_KF_CURRENCY_RATES_5_567009101__K6_7", columns={"CURRENCY", "CUR_VALUE"}), @ORM\Index(name="KF_SR_IX_CREATEDATE", columns={"CREATEDATE"})})
 * @ORM\Entity
 */
class KfCurrencyRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CURRENCY_RATESID", type="string", length=12, nullable=false)
     */
    private $kfCurrencyRatesid;

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
     * @ORM\Column(name="CURRENCY", type="string", length=16, nullable=true)
     */
    private $currency;

    /**
     * @var float
     *
     * @ORM\Column(name="CUR_VALUE", type="float", precision=53, scale=0, nullable=true)
     */
    private $curValue;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEDATE_cmp", type="string", length=10, nullable=true)
     */
    private $createdateCmp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CUR_DATE", type="datetime", nullable=true)
     */
    private $curDate;


}
