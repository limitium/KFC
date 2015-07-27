<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParameters
 *
 */
class SpkParameters
{
    /**
     * @var string
     *
     */
    private $spkParametersid;

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
    private $parameterid;

    /**
     * @var string
     *
     */
    private $parameterType;

    /**
     * @var string
     *
     */
    private $isexist;

    /**
     * @var string
     *
     */
    private $isunknown;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $operatorName;


}
