<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDistrict
 *
 */
class SpkDistrict
{
    /**
     * @var string
     *
     */
    private $spkDistrictid;

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
    private $districtRus;

    /**
     * @var string
     *
     */
    private $districtEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $shortDistrictRus;

    /**
     * @var integer
     *
     */
    private $intareaid;


}
