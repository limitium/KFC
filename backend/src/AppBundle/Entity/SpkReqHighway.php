<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqHighway
 *
 */
class SpkReqHighway
{
    /**
     * @var string
     *
     */
    private $spkReqHighwayid;

    /**
     * @var string
     *
     */
    private $spkReqRequirementsid;

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
    private $highwayid;


}
