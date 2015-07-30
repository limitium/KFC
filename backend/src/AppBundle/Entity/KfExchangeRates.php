<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfExchangeRates
 *
 * @ORM\Table(name="KF_EXCHANGE_RATES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_EXCHANGE_RATES_PRIMARY", columns={"KF_EXCHANGE_RATESID"})})
 * @ORM\Entity
 */
class KfExchangeRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_EXCHANGE_RATESID", type="string", length=12, nullable=false)
     */
    private $kfExchangeRatesid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="RATE_DATE", type="datetime", nullable=true)
     */
    private $rateDate;

    /**
     * @var float
     *
     * @ORM\Column(name="RATE_VALUE", type="float", precision=53, scale=0, nullable=true)
     */
    private $rateValue;


}
