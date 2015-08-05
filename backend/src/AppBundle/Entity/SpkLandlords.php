<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkLandlords
 *
 */
class SpkLandlords
{
    /**
     * @var string
     *
     */
    private $spkLandlordsid;

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
    private $accountid;

    /**
     * @var string
     *
     */
    private $contactid;

    /**
     * @var string
     *
     */
    private $primaryContact;

    /**
     * @var string
     *
     */
    private $contactType;

    /**
     * @var string
     *
     */
    private $partOwned;

    /**
     * @var \DateTime
     *
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     */
    private $enddate;

    /**
     * @var string
     *
     */
    private $currentContact;



    /**
     * Set spkLandlordsid
     *
     * @param string $spkLandlordsid
     * @return SpkLandlords
     */
    public function setSpkLandlordsid($spkLandlordsid)
    {
        $this->spkLandlordsid = $spkLandlordsid;

        return $this;
    }

    /**
     * Get spkLandlordsid
     *
     * @return string 
     */
    public function getSpkLandlordsid()
    {
        return $this->spkLandlordsid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkLandlords
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
     * @return SpkLandlords
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
     * @return SpkLandlords
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
     * @return SpkLandlords
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
     * @return SpkLandlords
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
     * Set accountid
     *
     * @param string $accountid
     * @return SpkLandlords
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
     * Set contactid
     *
     * @param string $contactid
     * @return SpkLandlords
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set primaryContact
     *
     * @param string $primaryContact
     * @return SpkLandlords
     */
    public function setPrimaryContact($primaryContact)
    {
        $this->primaryContact = $primaryContact;

        return $this;
    }

    /**
     * Get primaryContact
     *
     * @return string 
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * Set contactType
     *
     * @param string $contactType
     * @return SpkLandlords
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Get contactType
     *
     * @return string 
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Set partOwned
     *
     * @param string $partOwned
     * @return SpkLandlords
     */
    public function setPartOwned($partOwned)
    {
        $this->partOwned = $partOwned;

        return $this;
    }

    /**
     * Get partOwned
     *
     * @return string 
     */
    public function getPartOwned()
    {
        return $this->partOwned;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return SpkLandlords
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return SpkLandlords
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set currentContact
     *
     * @param string $currentContact
     * @return SpkLandlords
     */
    public function setCurrentContact($currentContact)
    {
        $this->currentContact = $currentContact;

        return $this;
    }

    /**
     * Get currentContact
     *
     * @return string 
     */
    public function getCurrentContact()
    {
        return $this->currentContact;
    }


}
