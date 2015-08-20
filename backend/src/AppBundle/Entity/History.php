<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 */
class History
{
    /**
     * @var string
     */
    private $historyid;

    /**
     * @var string
     */
    private $activityid;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $accountid;

    /**
     * @var string
     */
    private $contactid;

    /**
     * @var string
     */
    private $opportunityid;

    /**
     * @var string
     */
    private $accountname;

    /**
     * @var string
     */
    private $contactname;

    /**
     * @var string
     */
    private $opportunityname;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var string
     */
    private $category;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $processid;

    /**
     * @var string
     */
    private $processnode;

    /**
     * @var integer
     */
    private $timeless;

    /**
     * @var integer
     */
    private $recurring;

    /**
     * @var string
     */
    private $activitybasedon;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $username;

    /**
     * @var \DateTime
     */
    private $originaldate;

    /**
     * @var string
     */
    private $result;

    /**
     * @var string
     */
    private $resultcode;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var \DateTime
     */
    private $completeddate;

    /**
     * @var string
     */
    private $completeduser;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $longnotes;

    /**
     * @var integer
     */
    private $attachment;

    /**
     * @var string
     */
    private $userdef1;

    /**
     * @var string
     */
    private $userdef2;

    /**
     * @var string
     */
    private $userdef3;

    /**
     * @var string
     */
    private $ticketid;

    /**
     * @var string
     */
    private $ticketnumber;

    /**
     * @var string
     */
    private $leadname;

    /**
     * @var string
     */
    private $leadid;

    /**
     * @var string
     */
    private $userdef4;

    /**
     * @var string
     */
    private $kfMarketingProjectsid;

    /**
     * @var string
     */
    private $spkRequestsid;

    /**
     * @var \AppBundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $updatedBy;


    /**
     * Get historyid
     *
     * @return string 
     */
    public function getHistoryid()
    {
        return $this->historyid;
    }

    /**
     * Set activityid
     *
     * @param string $activityid
     * @return History
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
     * Set type
     *
     * @param integer $type
     * @return History
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return History
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
     * @return History
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
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return History
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
     * Set accountname
     *
     * @param string $accountname
     * @return History
     */
    public function setAccountname($accountname)
    {
        $this->accountname = $accountname;

        return $this;
    }

    /**
     * Get accountname
     *
     * @return string 
     */
    public function getAccountname()
    {
        return $this->accountname;
    }

    /**
     * Set contactname
     *
     * @param string $contactname
     * @return History
     */
    public function setContactname($contactname)
    {
        $this->contactname = $contactname;

        return $this;
    }

    /**
     * Get contactname
     *
     * @return string 
     */
    public function getContactname()
    {
        return $this->contactname;
    }

    /**
     * Set opportunityname
     *
     * @param string $opportunityname
     * @return History
     */
    public function setOpportunityname($opportunityname)
    {
        $this->opportunityname = $opportunityname;

        return $this;
    }

    /**
     * Get opportunityname
     *
     * @return string 
     */
    public function getOpportunityname()
    {
        return $this->opportunityname;
    }

    /**
     * Set priority
     *
     * @param string $priority
     * @return History
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return History
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
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return History
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
     * Set duration
     *
     * @param integer $duration
     * @return History
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return History
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set processid
     *
     * @param string $processid
     * @return History
     */
    public function setProcessid($processid)
    {
        $this->processid = $processid;

        return $this;
    }

    /**
     * Get processid
     *
     * @return string 
     */
    public function getProcessid()
    {
        return $this->processid;
    }

    /**
     * Set processnode
     *
     * @param string $processnode
     * @return History
     */
    public function setProcessnode($processnode)
    {
        $this->processnode = $processnode;

        return $this;
    }

    /**
     * Get processnode
     *
     * @return string 
     */
    public function getProcessnode()
    {
        return $this->processnode;
    }

    /**
     * Set timeless
     *
     * @param integer $timeless
     * @return History
     */
    public function setTimeless($timeless)
    {
        $this->timeless = $timeless;

        return $this;
    }

    /**
     * Get timeless
     *
     * @return integer 
     */
    public function getTimeless()
    {
        return $this->timeless;
    }

    /**
     * Set recurring
     *
     * @param integer $recurring
     * @return History
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get recurring
     *
     * @return integer 
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Set activitybasedon
     *
     * @param string $activitybasedon
     * @return History
     */
    public function setActivitybasedon($activitybasedon)
    {
        $this->activitybasedon = $activitybasedon;

        return $this;
    }

    /**
     * Get activitybasedon
     *
     * @return string 
     */
    public function getActivitybasedon()
    {
        return $this->activitybasedon;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return History
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
     * Set username
     *
     * @param string $username
     * @return History
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set originaldate
     *
     * @param \DateTime $originaldate
     * @return History
     */
    public function setOriginaldate($originaldate)
    {
        $this->originaldate = $originaldate;

        return $this;
    }

    /**
     * Get originaldate
     *
     * @return \DateTime 
     */
    public function getOriginaldate()
    {
        return $this->originaldate;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return History
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
     * Set resultcode
     *
     * @param string $resultcode
     * @return History
     */
    public function setResultcode($resultcode)
    {
        $this->resultcode = $resultcode;

        return $this;
    }

    /**
     * Get resultcode
     *
     * @return string 
     */
    public function getResultcode()
    {
        return $this->resultcode;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return History
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return History
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
     * Set completeddate
     *
     * @param \DateTime $completeddate
     * @return History
     */
    public function setCompleteddate($completeddate)
    {
        $this->completeddate = $completeddate;

        return $this;
    }

    /**
     * Get completeddate
     *
     * @return \DateTime 
     */
    public function getCompleteddate()
    {
        return $this->completeddate;
    }

    /**
     * Set completeduser
     *
     * @param string $completeduser
     * @return History
     */
    public function setCompleteduser($completeduser)
    {
        $this->completeduser = $completeduser;

        return $this;
    }

    /**
     * Get completeduser
     *
     * @return string 
     */
    public function getCompleteduser()
    {
        return $this->completeduser;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return History
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set longnotes
     *
     * @param string $longnotes
     * @return History
     */
    public function setLongnotes($longnotes)
    {
        $this->longnotes = $longnotes;

        return $this;
    }

    /**
     * Get longnotes
     *
     * @return string 
     */
    public function getLongnotes()
    {
        return $this->longnotes;
    }

    /**
     * Set attachment
     *
     * @param integer $attachment
     * @return History
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return integer 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set userdef1
     *
     * @param string $userdef1
     * @return History
     */
    public function setUserdef1($userdef1)
    {
        $this->userdef1 = $userdef1;

        return $this;
    }

    /**
     * Get userdef1
     *
     * @return string 
     */
    public function getUserdef1()
    {
        return $this->userdef1;
    }

    /**
     * Set userdef2
     *
     * @param string $userdef2
     * @return History
     */
    public function setUserdef2($userdef2)
    {
        $this->userdef2 = $userdef2;

        return $this;
    }

    /**
     * Get userdef2
     *
     * @return string 
     */
    public function getUserdef2()
    {
        return $this->userdef2;
    }

    /**
     * Set userdef3
     *
     * @param string $userdef3
     * @return History
     */
    public function setUserdef3($userdef3)
    {
        $this->userdef3 = $userdef3;

        return $this;
    }

    /**
     * Get userdef3
     *
     * @return string 
     */
    public function getUserdef3()
    {
        return $this->userdef3;
    }

    /**
     * Set ticketid
     *
     * @param string $ticketid
     * @return History
     */
    public function setTicketid($ticketid)
    {
        $this->ticketid = $ticketid;

        return $this;
    }

    /**
     * Get ticketid
     *
     * @return string 
     */
    public function getTicketid()
    {
        return $this->ticketid;
    }

    /**
     * Set ticketnumber
     *
     * @param string $ticketnumber
     * @return History
     */
    public function setTicketnumber($ticketnumber)
    {
        $this->ticketnumber = $ticketnumber;

        return $this;
    }

    /**
     * Get ticketnumber
     *
     * @return string 
     */
    public function getTicketnumber()
    {
        return $this->ticketnumber;
    }

    /**
     * Set leadname
     *
     * @param string $leadname
     * @return History
     */
    public function setLeadname($leadname)
    {
        $this->leadname = $leadname;

        return $this;
    }

    /**
     * Get leadname
     *
     * @return string 
     */
    public function getLeadname()
    {
        return $this->leadname;
    }

    /**
     * Set leadid
     *
     * @param string $leadid
     * @return History
     */
    public function setLeadid($leadid)
    {
        $this->leadid = $leadid;

        return $this;
    }

    /**
     * Get leadid
     *
     * @return string 
     */
    public function getLeadid()
    {
        return $this->leadid;
    }

    /**
     * Set userdef4
     *
     * @param string $userdef4
     * @return History
     */
    public function setUserdef4($userdef4)
    {
        $this->userdef4 = $userdef4;

        return $this;
    }

    /**
     * Get userdef4
     *
     * @return string 
     */
    public function getUserdef4()
    {
        return $this->userdef4;
    }

    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return History
     */
    public function setKfMarketingProjectsid($kfMarketingProjectsid)
    {
        $this->kfMarketingProjectsid = $kfMarketingProjectsid;

        return $this;
    }

    /**
     * Get kfMarketingProjectsid
     *
     * @return string 
     */
    public function getKfMarketingProjectsid()
    {
        return $this->kfMarketingProjectsid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return History
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
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     * @return History
     */
    public function setCreatedBy(\AppBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\User $updatedBy
     * @return History
     */
    public function setUpdatedBy(\AppBundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
    /**
     * @var \AppBundle\Entity\Account
     */
    private $account;


    /**
     * Set account
     *
     * @param \AppBundle\Entity\Account $account
     * @return History
     */
    public function setAccount(\AppBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \AppBundle\Entity\Account 
     */
    public function getAccount()
    {
        return $this->account;
    }
}
