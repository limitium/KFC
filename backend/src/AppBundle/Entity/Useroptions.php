<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useroptions
 */
class Useroptions
{
    /**
     * @var string
     */
    private $optionid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $optionvalue;

    /**
     * @var string
     */
    private $locked;

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
     * Set optionid
     *
     * @param string $optionid
     * @return Useroptions
     */
    public function setOptionid($optionid)
    {
        $this->optionid = $optionid;

        return $this;
    }

    /**
     * Get optionid
     *
     * @return string 
     */
    public function getOptionid()
    {
        return $this->optionid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Useroptions
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
     * Set category
     *
     * @param string $category
     * @return Useroptions
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return Useroptions
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
     * Set optionvalue
     *
     * @param string $optionvalue
     * @return Useroptions
     */
    public function setOptionvalue($optionvalue)
    {
        $this->optionvalue = $optionvalue;

        return $this;
    }

    /**
     * Get optionvalue
     *
     * @return string 
     */
    public function getOptionvalue()
    {
        return $this->optionvalue;
    }

    /**
     * Set locked
     *
     * @param string $locked
     * @return Useroptions
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return string 
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Useroptions
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
     * @return Useroptions
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
     * @return Useroptions
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
     * @return Useroptions
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
