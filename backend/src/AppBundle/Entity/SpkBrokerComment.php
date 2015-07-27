<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkBrokerComment
 *
 */
class SpkBrokerComment
{
    /**
     * @var string
     *
     */
    private $spkBrokerCommentid;

    /**
     * @var string
     *
     */
    private $spkAllLonglistid;

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
    private $commentar;

    /**
     * @var string
     *
     */
    private $opportunityid;


}
