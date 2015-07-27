<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPhoto
 *
 */
class SpkPhoto
{
    /**
     * @var string
     *
     */
    private $spkPhotoid;

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
    private $description;

    /**
     * @var string
     *
     */
    private $photoType;

    /**
     * @var integer
     *
     */
    private $photoOrder;

    /**
     * @var string
     *
     */
    private $brief;

    /**
     * @var string
     *
     */
    private $filename;

    /**
     * @var integer
     *
     */
    private $siteOrder;

    /**
     * @var integer
     *
     */
    private $briefOrder;


}
