<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParametersManage
 *
 */
class SpkParametersManage
{
    /**
     * @var string
     *
     */
    private $spkParametersManageid;

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
    private $parameterType;

    /**
     * @var string
     *
     */
    private $parameterNameRus;

    /**
     * @var string
     *
     */
    private $parameterNameEng;

    /**
     * @var string
     *
     */
    private $residential;

    /**
     * @var string
     *
     */
    private $country;

    /**
     * @var string
     *
     */
    private $retail;

    /**
     * @var string
     *
     */
    private $office;

    /**
     * @var string
     *
     */
    private $industrial;

    /**
     * @var string
     *
     */
    private $parameterGroup;


}
