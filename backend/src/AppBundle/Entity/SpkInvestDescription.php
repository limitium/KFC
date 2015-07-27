<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestDescription
 *
 */
class SpkInvestDescription
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
    private $obremenenie;

    /**
     * @var integer
     *
     */
    private $potoki;

    /**
     * @var string
     *
     */
    private $buildings;

    /**
     * @var string
     *
     */
    private $buildingsStatus;

    /**
     * @var string
     *
     */
    private $utilities;

    /**
     * @var string
     *
     */
    private $tenants;

    /**
     * @var float
     *
     */
    private $schoolSq;

    /**
     * @var float
     *
     */
    private $schoolPlace;

    /**
     * @var float
     *
     */
    private $kindergartenSq;

    /**
     * @var float
     *
     */
    private $kindergartenPlace;

    /**
     * @var float
     *
     */
    private $clinicSq;

    /**
     * @var float
     *
     */
    private $mfcSq;

    /**
     * @var float
     *
     */
    private $fokSq;


}
