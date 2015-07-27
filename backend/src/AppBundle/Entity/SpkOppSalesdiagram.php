<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppSalesdiagram
 *
 */
class SpkOppSalesdiagram
{
    /**
     * @var string
     *
     */
    private $spkOppSalesdiagramid;

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
    private $stage;

    /**
     * @var \DateTime
     *
     */
    private $period;

    /**
     * @var float
     *
     */
    private $square;

    /**
     * @var integer
     *
     */
    private $sections;

    /**
     * @var float
     *
     */
    private $squareBts;

    /**
     * @var integer
     *
     */
    private $sectionsBts;


}
