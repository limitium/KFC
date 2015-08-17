<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userview
 */
class Userview
{
    /**
     * @var string
     */
    private $userviewid;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $defview;

    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $modifieduser;

    /**
     * @var \DateTime
     */
    private $modifieddate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $createuser;


    /**
     * Set userviewid
     *
     * @param string $userviewid
     * @return Userview
     */
    public function setUserviewid($userviewid)
    {
        $this->userviewid = $userviewid;

        return $this;
    }

    /**
     * Get userviewid
     *
     * @return string 
     */
    public function getUserviewid()
    {
        return $this->userviewid;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return Userview
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
     * Set name
     *
     * @param string $name
     * @return Userview
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set defview
     *
     * @param integer $defview
     * @return Userview
     */
    public function setDefview($defview)
    {
        $this->defview = $defview;

        return $this;
    }

    /**
     * Get defview
     *
     * @return integer 
     */
    public function getDefview()
    {
        return $this->defview;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Userview
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set modifieduser
     *
     * @param string $modifieduser
     * @return Userview
     */
    public function setModifieduser($modifieduser)
    {
        $this->modifieduser = $modifieduser;

        return $this;
    }

    /**
     * Get modifieduser
     *
     * @return string 
     */
    public function getModifieduser()
    {
        return $this->modifieduser;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     * @return Userview
     */
    public function setModifieddate($modifieddate)
    {
        $this->modifieddate = $modifieddate;

        return $this;
    }

    /**
     * Get modifieddate
     *
     * @return \DateTime 
     */
    public function getModifieddate()
    {
        return $this->modifieddate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Userview
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
     * @return Userview
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Userview
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
     * @return Userview
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
