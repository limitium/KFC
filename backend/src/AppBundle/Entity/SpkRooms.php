<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRooms
 *
 */
class SpkRooms
{
    /**
     * @var string
     *
     */
    private $spkRoomsid;

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
    private $room;

    /**
     * @var float
     *
     */
    private $square;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $roomlevel;


}
