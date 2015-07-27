<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkProperty
 *
 */
class SpkProperty
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
    private $accountmanagerid;

    /**
     * @var string
     *
     */
    private $export;

    /**
     * @var string
     *
     */
    private $kfObject;

    /**
     * @var string
     *
     */
    private $spkAddressid;

    /**
     * @var string
     *
     */
    private $importsource;

    /**
     * @var string
     *
     */
    private $competitorObject;

    /**
     * @var string
     *
     */
    private $webaddress;

    /**
     * @var string
     *
     */
    private $regionObject;

    /**
     * @var integer
     *
     */
    private $oldid;

    /**
     * @var integer
     *
     */
    private $gpsId;

    /**
     * @var string
     *
     */
    private $investment;


}
