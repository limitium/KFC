<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkContactsHistory
 *
 */
class SpkContactsHistory
{
    /**
     * @var string
     *
     */
    private $spkContactsHistoryid;

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
     * @var \DateTime
     *
     */
    private $workedFrom;

    /**
     * @var \DateTime
     *
     */
    private $workedTo;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $workPosition;

    /**
     * @var string
     *
     */
    private $contactid;


}
