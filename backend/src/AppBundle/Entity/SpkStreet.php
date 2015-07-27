<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkStreet
 *
 */
class SpkStreet
{
    /**
     * @var string
     *
     */
    private $spkStreetid;

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
    private $streetNameRus;

    /**
     * @var string
     *
     */
    private $streetNameEng;

    /**
     * @var string
     *
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     */
    private $streetTypeEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $districtid;


}
