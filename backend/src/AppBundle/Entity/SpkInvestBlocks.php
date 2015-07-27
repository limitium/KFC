<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestBlocks
 *
 */
class SpkInvestBlocks
{
    /**
     * @var string
     *
     */
    private $spkInvestBlocksid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $floor;

    /**
     * @var float
     *
     */
    private $availableSq;

    /**
     * @var string
     *
     */
    private $costSqm;

    /**
     * @var string
     *
     */
    private $costSqmCurrency;


}
