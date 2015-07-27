<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkHighway
 *
 */
class SpkHighway
{
    /**
     * @var string
     *
     */
    private $spkHighwayid;

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
    private $highwayRus;

    /**
     * @var string
     *
     */
    private $highwayEng;

    /**
     * @var string
     *
     */
    private $highwayNumber;

    /**
     * @var string
     *
     */
    private $cianNumber;

    /**
     * @var integer
     *
     */
    private $intareaid;

    /**
     * @var string
     *
     */
    private $ssn;


}
