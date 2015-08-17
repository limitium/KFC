<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userrole
 */
class Userrole
{
    /**
     * @var string
     */
    private $userroleid;

    /**
     * @var string
     */
    private $createuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $roleid;


    /**
     * Set userroleid
     *
     * @param string $userroleid
     * @return Userrole
     */
    public function setUserroleid($userroleid)
    {
        $this->userroleid = $userroleid;

        return $this;
    }

    /**
     * Get userroleid
     *
     * @return string 
     */
    public function getUserroleid()
    {
        return $this->userroleid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Userrole
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
     * @return Userrole
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
     * @return Userrole
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
     * @return Userrole
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
     * Set userid
     *
     * @param string $userid
     * @return Userrole
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
     * Set roleid
     *
     * @param string $roleid
     * @return Userrole
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return string 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }
}
