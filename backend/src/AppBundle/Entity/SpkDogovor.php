<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDogovor
 *
 */
class SpkDogovor
{
    /**
     * @var string
     *
     */
    private $spkDogovorid;

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
    private $dogNumber;

    /**
     * @var \DateTime
     *
     */
    private $signDate;

    /**
     * @var \DateTime
     *
     */
    private $closedDate;

    /**
     * @var string
     *
     */
    private $dogType;

    /**
     * @var string
     *
     */
    private $note;

    /**
     * @var string
     *
     */
    private $validityDays;

    /**
     * @var string
     *
     */
    private $prolongation;

    /**
     * @var string
     *
     */
    private $pastPayments;

    /**
     * @var string
     *
     */
    private $signatory;

    /**
     * @var float
     *
     */
    private $successFee;


}
