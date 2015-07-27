<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqCustomers
 *
 */
class SpkOppReqCustomers
{
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
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var string
     *
     */
    private $industry;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $brand;

    /**
     * @var string
     *
     */
    private $sectionName;

    /**
     * @var string
     *
     */
    private $capitalRaising;

    /**
     * @var string
     *
     */
    private $buyer;

    /**
     * @var string
     *
     */
    private $subtype;

    /**
     * @var string
     *
     */
    private $isSrOnly;

    /**
     * @var \DateTime
     *
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     */
    private $dateTo;

    /**
     * @var string
     *
     */
    private $emailOnly;

    /**
     * @var string
     *
     */
    private $notPrivateClient;


}
