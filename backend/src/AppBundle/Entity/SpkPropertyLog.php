<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPropertyLog
 *
 */
class SpkPropertyLog
{
    /**
     * @var string
     *
     */
    private $spkPropertyLogid;

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
    private $changedField;

    /**
     * @var string
     *
     */
    private $oldValue;

    /**
     * @var string
     *
     */
    private $newValue;

    /**
     * @var string
     *
     */
    private $comments;


}
