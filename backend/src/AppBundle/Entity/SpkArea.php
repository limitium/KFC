<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkArea
 *
 */
class SpkArea
{
    /**
     * @var string
     *
     */
    private $spkAreaid;

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
    private $areaRus;

    /**
     * @var string
     *
     */
    private $areaEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var integer
     *
     */
    private $resOrd;

    /**
     * @var integer
     *
     */
    private $intareaid;


}
