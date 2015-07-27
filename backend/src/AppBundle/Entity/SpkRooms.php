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



    /**
     * Set spkRoomsid
     *
     * @param string $spkRoomsid
     * @return SpkRooms
     */
    public function setSpkRoomsid($spkRoomsid)
    {
        $this->spkRoomsid = $spkRoomsid;

        return $this;
    }

    /**
     * Get spkRoomsid
     *
     * @return string 
     */
    public function getSpkRoomsid()
    {
        return $this->spkRoomsid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRooms
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkRooms
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return SpkRooms
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return SpkRooms
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return SpkRooms
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set room
     *
     * @param string $room
     * @return SpkRooms
     */
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return string 
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set square
     *
     * @param float $square
     * @return SpkRooms
     */
    public function setSquare($square)
    {
        $this->square = $square;

        return $this;
    }

    /**
     * Get square
     *
     * @return float 
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkRooms
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set roomlevel
     *
     * @param string $roomlevel
     * @return SpkRooms
     */
    public function setRoomlevel($roomlevel)
    {
        $this->roomlevel = $roomlevel;

        return $this;
    }

    /**
     * Get roomlevel
     *
     * @return string 
     */
    public function getRoomlevel()
    {
        return $this->roomlevel;
    }
}
