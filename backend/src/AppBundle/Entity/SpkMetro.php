<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkMetro
 *
 */
class SpkMetro
{
    /**
     * @var string
     *
     */
    private $spkMetroid;

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
    private $metroRus;

    /**
     * @var string
     *
     */
    private $metroEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $cianNumber;


}
