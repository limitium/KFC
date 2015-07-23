<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestBlocks
 *
 * @ORM\Table(name="SPK_INVEST_BLOCKS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_INVEST_BLOCKS_PRIMARY", columns={"SPK_INVEST_BLOCKSID"})}, indexes={@ORM\Index(name="SPK_INVEST_BLOCKS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkInvestBlocks
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_INVEST_BLOCKSID", type="string", length=12, nullable=false)
     */
    private $spkInvestBlocksid;

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
     * @ORM\Column(name="FLOOR", type="string", length=32, nullable=true)
     */
    private $floor;

    /**
     * @var float
     *
     * @ORM\Column(name="AVAILABLE_SQ", type="float", precision=53, scale=0, nullable=true)
     */
    private $availableSq;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_SQM", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_SQM_CURRENCY", type="string", length=16, nullable=true)
     */
    private $costSqmCurrency;


}
