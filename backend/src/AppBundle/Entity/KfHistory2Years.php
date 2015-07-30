<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHistory2Years
 *
 * @ORM\Table(name="KF_HISTORY_2_YEARS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_IX_MAIN", columns={"HISTORYID", "TYPE", "STARTDATE", "USERNAME", "COMPLETEDDATE", "NOTES"})})
 * @ORM\Entity
 */
class KfHistory2Years
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


}
