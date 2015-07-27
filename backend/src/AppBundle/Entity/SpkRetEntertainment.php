<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetEntertainment
 *
 */
class SpkRetEntertainment
{
    /**
     * @var string
     *
     */
    private $spkRetEntertainmentid;

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
    private $entertainmentType;

    /**
     * @var string
     *
     */
    private $parameterName;

    /**
     * @var string
     *
     */
    private $parameterValue;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var integer
     *
     */
    private $entOrder;


}
