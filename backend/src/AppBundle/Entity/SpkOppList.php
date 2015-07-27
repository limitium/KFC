<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppList
 *
 */
class SpkOppList
{
    /**
     * @var string
     *
     */
    private $spkOppListid;

    /**
     * @var string
     *
     */
    private $opportunityid;

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
    private $contactid;

    /**
     * @var string
     *
     */
    private $result;

    /**
     * @var string
     *
     */
    private $inShortlist;

    /**
     * @var string
     *
     */
    private $activityid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

    /**
     * @var string
     *
     */
    private $sectionName;

    /**
     * @var string
     *
     */
    private $longlistid;



    /**
     * Set spkOppListid
     *
     * @param string $spkOppListid
     * @return SpkOppList
     */
    public function setSpkOppListid($spkOppListid)
    {
        $this->spkOppListid = $spkOppListid;

        return $this;
    }

    /**
     * Get spkOppListid
     *
     * @return string 
     */
    public function getSpkOppListid()
    {
        return $this->spkOppListid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppList
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppList
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
     * @return SpkOppList
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
     * @return SpkOppList
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
     * @return SpkOppList
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
     * Set contactid
     *
     * @param string $contactid
     * @return SpkOppList
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
     * Set result
     *
     * @param string $result
     * @return SpkOppList
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set inShortlist
     *
     * @param string $inShortlist
     * @return SpkOppList
     */
    public function setInShortlist($inShortlist)
    {
        $this->inShortlist = $inShortlist;

        return $this;
    }

    /**
     * Get inShortlist
     *
     * @return string 
     */
    public function getInShortlist()
    {
        return $this->inShortlist;
    }

    /**
     * Set activityid
     *
     * @param string $activityid
     * @return SpkOppList
     */
    public function setActivityid($activityid)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return string 
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkOppList
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set sectionName
     *
     * @param string $sectionName
     * @return SpkOppList
     */
    public function setSectionName($sectionName)
    {
        $this->sectionName = $sectionName;

        return $this;
    }

    /**
     * Get sectionName
     *
     * @return string 
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * Set longlistid
     *
     * @param string $longlistid
     * @return SpkOppList
     */
    public function setLonglistid($longlistid)
    {
        $this->longlistid = $longlistid;

        return $this;
    }

    /**
     * Get longlistid
     *
     * @return string 
     */
    public function getLonglistid()
    {
        return $this->longlistid;
    }
}
