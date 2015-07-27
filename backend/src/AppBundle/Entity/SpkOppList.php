<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppList
 *
 */
class SpkOppList
{
    /**
     * @var string
     *
     */
    private $spkOppListid;

    /**
     * @var string
     *
     */
    private $opportunityid;

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
    private $contactid;

    /**
     * @var string
     *
     */
    private $result;

    /**
     * @var string
     *
     */
    private $inShortlist;

    /**
     * @var string
     *
     */
    private $activityid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     */
    private $sectionName;

    /**
     * @var string
     *
     */
    private $longlistid;


}
