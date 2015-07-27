<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAccountProfile
 *
 */
class SpkAccountProfile
{
    /**
     * @var string
     *
     */
    private $spkAccountProfileid;

    /**
     * @var string
     *
     */
    private $accountid;

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
    private $areaid;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;


}
