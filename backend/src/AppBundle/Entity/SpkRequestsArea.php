<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsArea
 *
 */
class SpkRequestsArea
{
    /**
     * @var string
     *
     */
    private $spkRequestsAreaid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

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


}
