<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userfeaturesecurity
 */
class Userfeaturesecurity
{
    /**
     * @var string
     */
    private $userfeaturesecurityid;

    /**
     * @var string
     */
    private $featuresecurityid;

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
    private $familypluginname;

    /**
     * @var string
     */
    private $userid;


    /**
     * Set userfeaturesecurityid
     *
     * @param string $userfeaturesecurityid
     * @return Userfeaturesecurity
     */
    public function setUserfeaturesecurityid($userfeaturesecurityid)
    {
        $this->userfeaturesecurityid = $userfeaturesecurityid;

        return $this;
    }

    /**
     * Get userfeaturesecurityid
     *
     * @return string 
     */
    public function getUserfeaturesecurityid()
    {
        return $this->userfeaturesecurityid;
    }

    /**
     * Set featuresecurityid
     *
     * @param string $featuresecurityid
     * @return Userfeaturesecurity
     */
    public function setFeaturesecurityid($featuresecurityid)
    {
        $this->featuresecurityid = $featuresecurityid;

        return $this;
    }

    /**
     * Get featuresecurityid
     *
     * @return string 
     */
    public function getFeaturesecurityid()
    {
        return $this->featuresecurityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Userfeaturesecurity
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
     * @return Userfeaturesecurity
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
     * @return Userfeaturesecurity
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
     * @return Userfeaturesecurity
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
     * Set allowadd
     *
     * @param string $allowadd
     * @return Userfeaturesecurity
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
     * @return Userfeaturesecurity
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
     * @return Userfeaturesecurity
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
     * Set familypluginname
     *
     * @param string $familypluginname
     * @return Userfeaturesecurity
     */
    public function setFamilypluginname($familypluginname)
    {
        $this->familypluginname = $familypluginname;

        return $this;
    }

    /**
     * Get familypluginname
     *
     * @return string 
     */
    public function getFamilypluginname()
    {
        return $this->familypluginname;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return Userfeaturesecurity
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
}
