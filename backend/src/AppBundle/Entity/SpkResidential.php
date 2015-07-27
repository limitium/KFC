<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResidential
 *
 */
class SpkResidential
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
    private $parentid;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $oldid;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var \DateTime
     *
     */
    private $updated;

    /**
     * @var integer
     *
     */
    private $ordNewbuilding;

    /**
     * @var string
     *
     */
    private $newbuilding;

    /**
     * @var string
     *
     */
    private $dogovor;

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
    private $dogovorWoEnddate;


}
