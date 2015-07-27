<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjects
 *
 */
class SpkOppObjects
{
    /**
     * @var string
     *
     */
    private $spkOppObjectsid;

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
    private $objectid;

    /**
     * @var string
     *
     */
    private $inReport;

    /**
     * @var string
     *
     */
    private $inList;


}
