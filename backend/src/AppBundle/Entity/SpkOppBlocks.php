<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppBlocks
 *
 */
class SpkOppBlocks
{
    /**
     * @var string
     *
     */
    private $spkOppBlocksid;

    /**
     * @var string
     *
     */
    private $opportunityid;

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
    private $spkPropertyid;

    /**
     * @var string
     *
     */
    private $include;


}
