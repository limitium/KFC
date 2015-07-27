<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetStoreys
 *
 */
class SpkRetStoreys
{
    /**
     * @var string
     *
     */
    private $spkRetStoreysid;

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
     * @var integer
     *
     */
    private $storeyNumber;

    /**
     * @var float
     *
     */
    private $square;

    /**
     * @var float
     *
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $saleMin;

    /**
     * @var string
     *
     */
    private $saleMax;

    /**
     * @var string
     *
     */
    private $leaseMin;

    /**
     * @var string
     *
     */
    private $leaseMax;


}
