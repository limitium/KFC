<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersecfunctions
 */
class Usersecfunctions
{
    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $functionname;

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
     * @return Usersecfunctions
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
     * Set functionname
     *
     * @param string $functionname
     * @return Usersecfunctions
     */
    public function setFunctionname($functionname)
    {
        $this->functionname = $functionname;

        return $this;
    }

    /**
     * Get functionname
     *
     * @return string 
     */
    public function getFunctionname()
    {
        return $this->functionname;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Usersecfunctions
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
     * @return Usersecfunctions
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
     * @return Usersecfunctions
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
     * @return Usersecfunctions
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
