<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRooms
 *
 * @ORM\Table(name="SPK_ROOMS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_ROOMS_PRIMARY", columns={"SPK_ROOMSID"})}, indexes={@ORM\Index(name="SPK_ROOMS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRooms
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ROOMSID", type="string", length=12, nullable=false)
     */
    private $spkRoomsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOM", type="string", length=32, nullable=true)
     */
    private $room;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $square;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=256, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="ROOMLEVEL", type="string", length=32, nullable=true)
     */
    private $roomlevel;


}
