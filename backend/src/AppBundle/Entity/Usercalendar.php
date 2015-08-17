<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usercalendar
 */
class Usercalendar
{
    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $caluserid;

    /**
     * @var string
     */
    private $allowadd;

    /**
     * @var string
     */
    private $allowedit;

    /**
     * @var string
     */
    private $allowdelete;

    /**
     * @var string
     */
    private $allowsync;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $createuser;


    /**
     * Set userid
     *
     * @param string $userid
     * @return Usercalendar
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set caluserid
     *
     * @param string $caluserid
     * @return Usercalendar
     */
    public function setCaluserid($caluserid)
    {
        $this->caluserid = $caluserid;

        return $this;
    }

    /**
     * Get caluserid
     *
     * @return string 
     */
    public function getCaluserid()
    {
        return $this->caluserid;
    }

    /**
     * Set allowadd
     *
     * @param string $allowadd
     * @return Usercalendar
     */
    public function setAllowadd($allowadd)
    {
        $this->allowadd = $allowadd;

        return $this;
    }

    /**
     * Get allowadd
     *
     * @return string 
     */
    public function getAllowadd()
    {
        return $this->allowadd;
    }

    /**
     * Set allowedit
     *
     * @param string $allowedit
     * @return Usercalendar
     */
    public function setAllowedit($allowedit)
    {
        $this->allowedit = $allowedit;

        return $this;
    }

    /**
     * Get allowedit
     *
     * @return string 
     */
    public function getAllowedit()
    {
        return $this->allowedit;
    }

    /**
     * Set allowdelete
     *
     * @param string $allowdelete
     * @return Usercalendar
     */
    public function setAllowdelete($allowdelete)
    {
        $this->allowdelete = $allowdelete;

        return $this;
    }

    /**
     * Get allowdelete
     *
     * @return string 
     */
    public function getAllowdelete()
    {
        return $this->allowdelete;
    }

    /**
     * Set allowsync
     *
     * @param string $allowsync
     * @return Usercalendar
     */
    public function setAllowsync($allowsync)
    {
        $this->allowsync = $allowsync;

        return $this;
    }

    /**
     * Get allowsync
     *
     * @return string 
     */
    public function getAllowsync()
    {
        return $this->allowsync;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Usercalendar
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Usercalendar
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Usercalendar
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
     * Set createuser
     *
     * @param string $createuser
     * @return Usercalendar
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
}
