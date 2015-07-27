<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffice
 *
 */
class SpkOffice
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
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @var string
     *
     */
    private $nameEng;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var string
     *
     */
    private $propertyType;

    /**
     * @var string
     *
     */
    private $status;

    /**
     * @var string
     *
     */
    private $statusKf;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $complexid;

    /**
     * @var string
     *
     */
    private $leadingBroker;

    /**
     * @var \DateTime
     *
     */
    private $updated;


}
