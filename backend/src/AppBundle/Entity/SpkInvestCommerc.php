<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestCommerc
 *
 */
class SpkInvestCommerc
{
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
    private $vat;

    /**
     * @var string
     *
     */
    private $amount;

    /**
     * @var string
     *
     */
    private $amountCurrency;

    /**
     * @var string
     *
     */
    private $noi;

    /**
     * @var string
     *
     */
    private $noiCurrency;


}
