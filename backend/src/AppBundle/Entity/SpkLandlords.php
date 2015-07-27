<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkLandlords
 *
 */
class SpkLandlords
{
    /**
     * @var string
     *
     */
    private $spkLandlordsid;

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
    private $accountid;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $primaryContact;

    /**
     * @var string
     *
     */
    private $contactType;

    /**
     * @var string
     *
     */
    private $partOwned;

    /**
     * @var \DateTime
     *
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     */
    private $enddate;

    /**
     * @var string
     *
     */
    private $currentContact;


}
