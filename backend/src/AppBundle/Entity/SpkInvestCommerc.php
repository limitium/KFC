<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestCommerc
 *
 * @ORM\Table(name="SPK_INVEST_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_INVEST_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkInvestCommerc
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
     * @ORM\Column(name="VAT", type="string", length=32, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="AMOUNT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="AMOUNT_CURRENCY", type="string", length=16, nullable=true)
     */
    private $amountCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="NOI", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $noi;

    /**
     * @var string
     *
     * @ORM\Column(name="NOI_CURRENCY", type="string", length=16, nullable=true)
     */
    private $noiCurrency;


}
