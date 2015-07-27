<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCity
 *
 */
class SpkCity
{
    /**
     * @var string
     *
     */
    private $spkCityid;

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
    private $cityRus;

    /**
     * @var string
     *
     */
    private $cityEng;

    /**
     * @var integer
     *
     */
    private $cityLang;

    /**
     * @var integer
     *
     */
    private $cityRegion;

    /**
     * @var integer
     *
     */
    private $intareaid;


}
