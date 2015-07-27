<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAccountProfile
 *
 */
class SpkAccountProfile
{
    /**
     * @var string
     *
     */
    private $spkAccountProfileid;

    /**
     * @var string
     *
     */
    private $accountid;

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
    private $areaid;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;



    /**
     * Set spkAccountProfileid
     *
     * @param string $spkAccountProfileid
     * @return SpkAccountProfile
     */
    public function setSpkAccountProfileid($spkAccountProfileid)
    {
        $this->spkAccountProfileid = $spkAccountProfileid;

        return $this;
    }

    /**
     * Get spkAccountProfileid
     *
     * @return string 
     */
    public function getSpkAccountProfileid()
    {
        return $this->spkAccountProfileid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkAccountProfile
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkAccountProfile
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
     * @return SpkAccountProfile
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
     * @return SpkAccountProfile
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
     * @return SpkAccountProfile
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
     * Set areaid
     *
     * @param string $areaid
     * @return SpkAccountProfile
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkAccountProfile
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return SpkAccountProfile
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }
}
