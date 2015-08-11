<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHistoryThisYear
 *
 * @ORM\Table(name="KF_HISTORY_THIS_YEAR")
 * @ORM\Entity
 */
class KfHistoryThisYear
{
    /**
     * @var string
     *
     * @ORM\Column(name="HISTORYID", type="string", length=12, nullable=false)
     */
    private $historyid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITYID", type="string", length=12, nullable=true)
     */
    private $activityid;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTNAME", type="string", length=128, nullable=true)
     */
    private $accountname;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTNAME", type="string", length=64, nullable=true)
     */
    private $contactname;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYNAME", type="string", length=64, nullable=true)
     */
    private $opportunityname;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORITY", type="string", length=64, nullable=true)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY", type="string", length=64, nullable=true)
     */
    private $category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="DURATION", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=64, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="PROCESSID", type="string", length=12, nullable=true)
     */
    private $processid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROCESSNODE", type="string", length=16, nullable=true)
     */
    private $processnode;

    /**
     * @var integer
     *
     * @ORM\Column(name="TIMELESS", type="integer", nullable=true)
     */
    private $timeless;

    /**
     * @var integer
     *
     * @ORM\Column(name="RECURRING", type="integer", nullable=true)
     */
    private $recurring;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVITYBASEDON", type="string", length=12, nullable=true)
     */
    private $activitybasedon;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=64, nullable=true)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ORIGINALDATE", type="datetime", nullable=true)
     */
    private $originaldate;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=64, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULTCODE", type="string", length=8, nullable=true)
     */
    private $resultcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="COMPLETEDDATE", type="datetime", nullable=true)
     */
    private $completeddate;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLETEDUSER", type="string", length=12, nullable=true)
     */
    private $completeduser;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="LONGNOTES", type="string", length=16, nullable=true)
     */
    private $longnotes;

    /**
     * @var integer
     *
     * @ORM\Column(name="ATTACHMENT", type="integer", nullable=true)
     */
    private $attachment;

    /**
     * @var string
     *
     * @ORM\Column(name="USERDEF1", type="string", length=255, nullable=true)
     */
    private $userdef1;

    /**
     * @var string
     *
     * @ORM\Column(name="USERDEF2", type="string", length=255, nullable=true)
     */
    private $userdef2;

    /**
     * @var string
     *
     * @ORM\Column(name="USERDEF3", type="string", length=255, nullable=true)
     */
    private $userdef3;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETID", type="string", length=12, nullable=true)
     */
    private $ticketid;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETNUMBER", type="string", length=64, nullable=true)
     */
    private $ticketnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADNAME", type="string", length=64, nullable=true)
     */
    private $leadname;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADID", type="string", length=12, nullable=true)
     */
    private $leadid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERDEF4", type="text", length=16, nullable=true)
     */
    private $userdef4;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=true)
     */
    private $kfMarketingProjectsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;



    /**
     * Set historyid
     *
     * @param string $historyid
     * @return KfHistoryThisYear
     */
    public function setHistoryid($historyid)
    {
        $this->historyid = $historyid;

        return $this;
    }

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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * Set completeddate
     *
     * @param \DateTime $completeddate
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
     * @return KfHistoryThisYear
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
}
