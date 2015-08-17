<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 */
class Account
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=64, nullable=true)
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="SICCODE", type="string", length=64, nullable=true)
     */
    private $siccode;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTID", type="string", length=12, nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESSID", type="string", length=12, nullable=true)
     */
    private $addressid;

    /**
     * @var string
     *
     * @ORM\Column(name="SHIPPINGID", type="string", length=12, nullable=true)
     */
    private $shippingid;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION", type="string", length=64, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINPHONE", type="string", length=32, nullable=true)
     */
    private $mainphone;

    /**
     * @var string
     *
     * @ORM\Column(name="ALTERNATEPHONE", type="string", length=32, nullable=true)
     */
    private $alternatephone;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=32, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="TOLLFREE", type="string", length=32, nullable=true)
     */
    private $tollfree;

    /**
     * @var string
     *
     * @ORM\Column(name="TOLLFREE2", type="string", length=32, nullable=true)
     */
    private $tollfree2;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPHONE1", type="string", length=32, nullable=true)
     */
    private $otherphone1;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPHONE2", type="string", length=32, nullable=true)
     */
    private $otherphone2;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPHONE3", type="string", length=32, nullable=true)
     */
    private $otherphone3;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAILTYPE", type="string", length=64, nullable=true)
     */
    private $emailtype;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS", type="string", length=128, nullable=true)
     */
    private $webaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=false)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="REVENUE", type="string", length=50, nullable=true)
     */
    private $revenue;

    /**
     * @var integer
     *
     * @ORM\Column(name="EMPLOYEES", type="integer", nullable=true)
     */
    private $employees;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRY", type="string", length=64, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="CREDITRATING", type="string", length=10, nullable=true)
     */
    private $creditrating;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTMANAGERID", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="REGIONALMANAGERID", type="string", length=12, nullable=true)
     */
    private $regionalmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISIONALMANAGERID", type="string", length=12, nullable=true)
     */
    private $divisionalmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="NATIONALACCOUNT", type="string", length=1, nullable=true)
     */
    private $nationalaccount;

    /**
     * @var string
     *
     * @ORM\Column(name="TARGETACCOUNT", type="string", length=1, nullable=true)
     */
    private $targetaccount;

    /**
     * @var string
     *
     * @ORM\Column(name="TERRITORY", type="string", length=64, nullable=true)
     */
    private $territory;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_UC", type="string", length=128, nullable=true)
     */
    private $accountUc;

    /**
     * @var string
     *
     * @ORM\Column(name="AKA", type="string", length=64, nullable=true)
     */
    private $aka;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCYCODE", type="string", length=64, nullable=true)
     */
    private $currencycode;

    /**
     * @var string
     *
     * @ORM\Column(name="INTERNALACCOUNTNO", type="string", length=32, nullable=true)
     */
    private $internalaccountno;

    /**
     * @var string
     *
     * @ORM\Column(name="EXTERNALACCOUNTNO", type="string", length=32, nullable=true)
     */
    private $externalaccountno;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTACCOUNTNO", type="string", length=32, nullable=true)
     */
    private $parentaccountno;

    /**
     * @var string
     *
     * @ORM\Column(name="ALTERNATEKEYPREFIX", type="string", length=8, nullable=true)
     */
    private $alternatekeyprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="ALTERNATEKEYSUFFIX", type="string", length=24, nullable=true)
     */
    private $alternatekeysuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFAULTTICKETSECCODEID", type="string", length=12, nullable=true)
     */
    private $defaultticketseccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTIFYDEFECTS", type="string", length=1, nullable=true)
     */
    private $notifydefects;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTIFYONCLOSE", type="string", length=1, nullable=true)
     */
    private $notifyonclose;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTIFYONSTATUS", type="string", length=1, nullable=true)
     */
    private $notifyonstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="SHORTNOTES", type="string", length=255, nullable=true)
     */
    private $shortnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD1", type="string", length=80, nullable=true)
     */
    private $userfield1;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD2", type="string", length=80, nullable=true)
     */
    private $userfield2;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD3", type="string", length=80, nullable=true)
     */
    private $userfield3;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD4", type="string", length=80, nullable=true)
     */
    private $userfield4;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD5", type="string", length=80, nullable=true)
     */
    private $userfield5;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD6", type="string", length=80, nullable=true)
     */
    private $userfield6;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD7", type="string", length=80, nullable=true)
     */
    private $userfield7;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD8", type="string", length=80, nullable=true)
     */
    private $userfield8;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD9", type="string", length=80, nullable=true)
     */
    private $userfield9;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD10", type="string", length=80, nullable=true)
     */
    private $userfield10;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=true)
     */
    private $campaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="DONOTSOLICIT", type="string", length=1, nullable=true)
     */
    private $donotsolicit;

    /**
     * @var string
     *
     * @ORM\Column(name="SCORE", type="string", length=32, nullable=true)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKER", type="string", length=16, nullable=true)
     */
    private $ticker;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTYPE", type="string", length=128, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=true)
     */
    private $leadsourceid;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORTSOURCE", type="string", length=1025, nullable=true)
     */
    private $importsource;

    /**
     * @var string
     *
     * @ORM\Column(name="ENGINEERID", type="string", length=12, nullable=true)
     */
    private $engineerid;

    /**
     * @var string
     *
     * @ORM\Column(name="SALESENGINEERID", type="string", length=12, nullable=true)
     */
    private $salesengineerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RELATIONSHIP", type="integer", nullable=true)
     */
    private $relationship;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTHISTORYBY", type="string", length=12, nullable=true)
     */
    private $lasthistoryby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LASTHISTORYDATE", type="datetime", nullable=true)
     */
    private $lasthistorydate;

    /**
     * @var string
     *
     * @ORM\Column(name="BUSINESSDESCRIPTION", type="string", length=2000, nullable=true)
     */
    private $businessdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS2", type="string", length=128, nullable=true)
     */
    private $webaddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS3", type="string", length=128, nullable=true)
     */
    private $webaddress3;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS4", type="string", length=128, nullable=true)
     */
    private $webaddress4;

    /**
     * @var string
     *
     * @ORM\Column(name="TIN", type="string", length=14, nullable=true)
     */
    private $tin;

    /**
     * @var string
     *
     * @ORM\Column(name="EMPLOYEES2", type="string", length=128, nullable=true)
     */
    private $employees2;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGER", type="string", length=12, nullable=true)
     */
    private $manager;

    /**
     * @var ArrayCollection
     */
    private $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

        /**
     * @return string
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @return string
     */
    public function getSiccode()
    {
        return $this->siccode;
    }

    /**
     * @return string
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * @return string
     */
    public function getShippingid()
    {
        return $this->shippingid;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getMainphone()
    {
        return $this->mainphone;
    }

    /**
     * @return string
     */
    public function getAlternatephone()
    {
        return $this->alternatephone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @return string
     */
    public function getTollfree()
    {
        return $this->tollfree;
    }

    /**
     * @return string
     */
    public function getTollfree2()
    {
        return $this->tollfree2;
    }

    /**
     * @return string
     */
    public function getOtherphone1()
    {
        return $this->otherphone1;
    }

    /**
     * @return string
     */
    public function getOtherphone2()
    {
        return $this->otherphone2;
    }

    /**
     * @return string
     */
    public function getOtherphone3()
    {
        return $this->otherphone3;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getEmailtype()
    {
        return $this->emailtype;
    }

    /**
     * @return string
     */
    public function getWebaddress()
    {
        return $this->webaddress;
    }

    /**
     * @return string
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * @return string
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @return int
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @return string
     */
    public function getCreditrating()
    {
        return $this->creditrating;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getAccountmanagerid()
    {
        return $this->accountmanagerid;
    }

    /**
     * @return string
     */
    public function getRegionalmanagerid()
    {
        return $this->regionalmanagerid;
    }

    /**
     * @return string
     */
    public function getDivisionalmanagerid()
    {
        return $this->divisionalmanagerid;
    }

    /**
     * @return string
     */
    public function getNationalaccount()
    {
        return $this->nationalaccount;
    }

    /**
     * @return string
     */
    public function getTargetaccount()
    {
        return $this->targetaccount;
    }

    /**
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * @return string
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @return \DateTime
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * @return string
     */
    public function getAccountUc()
    {
        return $this->accountUc;
    }

    /**
     * @return string
     */
    public function getAka()
    {
        return $this->aka;
    }

    /**
     * @return string
     */
    public function getCurrencycode()
    {
        return $this->currencycode;
    }

    /**
     * @return string
     */
    public function getInternalaccountno()
    {
        return $this->internalaccountno;
    }

    /**
     * @return string
     */
    public function getExternalaccountno()
    {
        return $this->externalaccountno;
    }

    /**
     * @return string
     */
    public function getParentaccountno()
    {
        return $this->parentaccountno;
    }

    /**
     * @return string
     */
    public function getAlternatekeyprefix()
    {
        return $this->alternatekeyprefix;
    }

    /**
     * @return string
     */
    public function getAlternatekeysuffix()
    {
        return $this->alternatekeysuffix;
    }

    /**
     * @return string
     */
    public function getDefaultticketseccodeid()
    {
        return $this->defaultticketseccodeid;
    }

    /**
     * @return string
     */
    public function getNotifydefects()
    {
        return $this->notifydefects;
    }

    /**
     * @return string
     */
    public function getNotifyonclose()
    {
        return $this->notifyonclose;
    }

    /**
     * @return string
     */
    public function getNotifyonstatus()
    {
        return $this->notifyonstatus;
    }

    /**
     * @return string
     */
    public function getShortnotes()
    {
        return $this->shortnotes;
    }

    /**
     * @return string
     */
    public function getUserfield1()
    {
        return $this->userfield1;
    }

    /**
     * @return string
     */
    public function getUserfield2()
    {
        return $this->userfield2;
    }

    /**
     * @return string
     */
    public function getUserfield3()
    {
        return $this->userfield3;
    }

    /**
     * @return string
     */
    public function getUserfield4()
    {
        return $this->userfield4;
    }

    /**
     * @return string
     */
    public function getUserfield5()
    {
        return $this->userfield5;
    }

    /**
     * @return string
     */
    public function getUserfield6()
    {
        return $this->userfield6;
    }

    /**
     * @return string
     */
    public function getUserfield7()
    {
        return $this->userfield7;
    }

    /**
     * @return string
     */
    public function getUserfield8()
    {
        return $this->userfield8;
    }

    /**
     * @return string
     */
    public function getUserfield9()
    {
        return $this->userfield9;
    }

    /**
     * @return string
     */
    public function getUserfield10()
    {
        return $this->userfield10;
    }

    /**
     * @return string
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * @return string
     */
    public function getDonotsolicit()
    {
        return $this->donotsolicit;
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @return string
     */
    public function getLeadsourceid()
    {
        return $this->leadsourceid;
    }

    /**
     * @return string
     */
    public function getImportsource()
    {
        return $this->importsource;
    }

    /**
     * @return string
     */
    public function getEngineerid()
    {
        return $this->engineerid;
    }

    /**
     * @return string
     */
    public function getSalesengineerid()
    {
        return $this->salesengineerid;
    }

    /**
     * @return int
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @return string
     */
    public function getLasthistoryby()
    {
        return $this->lasthistoryby;
    }

    /**
     * @return \DateTime
     */
    public function getLasthistorydate()
    {
        return $this->lasthistorydate;
    }

    /**
     * @return string
     */
    public function getBusinessdescription()
    {
        return $this->businessdescription;
    }

    /**
     * @return string
     */
    public function getWebaddress2()
    {
        return $this->webaddress2;
    }

    /**
     * @return string
     */
    public function getWebaddress3()
    {
        return $this->webaddress3;
    }

    /**
     * @return string
     */
    public function getWebaddress4()
    {
        return $this->webaddress4;
    }

    /**
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * @return string
     */
    public function getEmployees2()
    {
        return $this->employees2;
    }

    /**
     * @return string
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }





    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Account
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Account
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return Account
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Set division
     *
     * @param string $division
     * @return Account
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Set siccode
     *
     * @param string $siccode
     * @return Account
     */
    public function setSiccode($siccode)
    {
        $this->siccode = $siccode;

        return $this;
    }

    /**
     * Set parentid
     *
     * @param string $parentid
     * @return Account
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Account
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set addressid
     *
     * @param string $addressid
     * @return Account
     */
    public function setAddressid($addressid)
    {
        $this->addressid = $addressid;

        return $this;
    }

    /**
     * Set shippingid
     *
     * @param string $shippingid
     * @return Account
     */
    public function setShippingid($shippingid)
    {
        $this->shippingid = $shippingid;

        return $this;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Account
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Set mainphone
     *
     * @param string $mainphone
     * @return Account
     */
    public function setMainphone($mainphone)
    {
        $this->mainphone = $mainphone;

        return $this;
    }

    /**
     * Set alternatephone
     *
     * @param string $alternatephone
     * @return Account
     */
    public function setAlternatephone($alternatephone)
    {
        $this->alternatephone = $alternatephone;

        return $this;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Account
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Set tollfree
     *
     * @param string $tollfree
     * @return Account
     */
    public function setTollfree($tollfree)
    {
        $this->tollfree = $tollfree;

        return $this;
    }

    /**
     * Set tollfree2
     *
     * @param string $tollfree2
     * @return Account
     */
    public function setTollfree2($tollfree2)
    {
        $this->tollfree2 = $tollfree2;

        return $this;
    }

    /**
     * Set otherphone1
     *
     * @param string $otherphone1
     * @return Account
     */
    public function setOtherphone1($otherphone1)
    {
        $this->otherphone1 = $otherphone1;

        return $this;
    }

    /**
     * Set otherphone2
     *
     * @param string $otherphone2
     * @return Account
     */
    public function setOtherphone2($otherphone2)
    {
        $this->otherphone2 = $otherphone2;

        return $this;
    }

    /**
     * Set otherphone3
     *
     * @param string $otherphone3
     * @return Account
     */
    public function setOtherphone3($otherphone3)
    {
        $this->otherphone3 = $otherphone3;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set emailtype
     *
     * @param string $emailtype
     * @return Account
     */
    public function setEmailtype($emailtype)
    {
        $this->emailtype = $emailtype;

        return $this;
    }

    /**
     * Set webaddress
     *
     * @param string $webaddress
     * @return Account
     */
    public function setWebaddress($webaddress)
    {
        $this->webaddress = $webaddress;

        return $this;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return Account
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Set revenue
     *
     * @param string $revenue
     * @return Account
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Set employees
     *
     * @param integer $employees
     * @return Account
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return Account
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Set creditrating
     *
     * @param string $creditrating
     * @return Account
     */
    public function setCreditrating($creditrating)
    {
        $this->creditrating = $creditrating;

        return $this;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Account
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Account
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return Account
     */
    public function setAccountmanagerid($accountmanagerid)
    {
        $this->accountmanagerid = $accountmanagerid;

        return $this;
    }

    /**
     * Set regionalmanagerid
     *
     * @param string $regionalmanagerid
     * @return Account
     */
    public function setRegionalmanagerid($regionalmanagerid)
    {
        $this->regionalmanagerid = $regionalmanagerid;

        return $this;
    }

    /**
     * Set divisionalmanagerid
     *
     * @param string $divisionalmanagerid
     * @return Account
     */
    public function setDivisionalmanagerid($divisionalmanagerid)
    {
        $this->divisionalmanagerid = $divisionalmanagerid;

        return $this;
    }

    /**
     * Set nationalaccount
     *
     * @param string $nationalaccount
     * @return Account
     */
    public function setNationalaccount($nationalaccount)
    {
        $this->nationalaccount = $nationalaccount;

        return $this;
    }

    /**
     * Set targetaccount
     *
     * @param string $targetaccount
     * @return Account
     */
    public function setTargetaccount($targetaccount)
    {
        $this->targetaccount = $targetaccount;

        return $this;
    }

    /**
     * Set territory
     *
     * @param string $territory
     * @return Account
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Account
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Account
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Account
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Account
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Set accountUc
     *
     * @param string $accountUc
     * @return Account
     */
    public function setAccountUc($accountUc)
    {
        $this->accountUc = $accountUc;

        return $this;
    }

    /**
     * Set aka
     *
     * @param string $aka
     * @return Account
     */
    public function setAka($aka)
    {
        $this->aka = $aka;

        return $this;
    }

    /**
     * Set currencycode
     *
     * @param string $currencycode
     * @return Account
     */
    public function setCurrencycode($currencycode)
    {
        $this->currencycode = $currencycode;

        return $this;
    }

    /**
     * Set internalaccountno
     *
     * @param string $internalaccountno
     * @return Account
     */
    public function setInternalaccountno($internalaccountno)
    {
        $this->internalaccountno = $internalaccountno;

        return $this;
    }

    /**
     * Set externalaccountno
     *
     * @param string $externalaccountno
     * @return Account
     */
    public function setExternalaccountno($externalaccountno)
    {
        $this->externalaccountno = $externalaccountno;

        return $this;
    }

    /**
     * Set parentaccountno
     *
     * @param string $parentaccountno
     * @return Account
     */
    public function setParentaccountno($parentaccountno)
    {
        $this->parentaccountno = $parentaccountno;

        return $this;
    }

    /**
     * Set alternatekeyprefix
     *
     * @param string $alternatekeyprefix
     * @return Account
     */
    public function setAlternatekeyprefix($alternatekeyprefix)
    {
        $this->alternatekeyprefix = $alternatekeyprefix;

        return $this;
    }

    /**
     * Set alternatekeysuffix
     *
     * @param string $alternatekeysuffix
     * @return Account
     */
    public function setAlternatekeysuffix($alternatekeysuffix)
    {
        $this->alternatekeysuffix = $alternatekeysuffix;

        return $this;
    }

    /**
     * Set defaultticketseccodeid
     *
     * @param string $defaultticketseccodeid
     * @return Account
     */
    public function setDefaultticketseccodeid($defaultticketseccodeid)
    {
        $this->defaultticketseccodeid = $defaultticketseccodeid;

        return $this;
    }

    /**
     * Set notifydefects
     *
     * @param string $notifydefects
     * @return Account
     */
    public function setNotifydefects($notifydefects)
    {
        $this->notifydefects = $notifydefects;

        return $this;
    }

    /**
     * Set notifyonclose
     *
     * @param string $notifyonclose
     * @return Account
     */
    public function setNotifyonclose($notifyonclose)
    {
        $this->notifyonclose = $notifyonclose;

        return $this;
    }

    /**
     * Set notifyonstatus
     *
     * @param string $notifyonstatus
     * @return Account
     */
    public function setNotifyonstatus($notifyonstatus)
    {
        $this->notifyonstatus = $notifyonstatus;

        return $this;
    }

    /**
     * Set shortnotes
     *
     * @param string $shortnotes
     * @return Account
     */
    public function setShortnotes($shortnotes)
    {
        $this->shortnotes = $shortnotes;

        return $this;
    }

    /**
     * Set userfield1
     *
     * @param string $userfield1
     * @return Account
     */
    public function setUserfield1($userfield1)
    {
        $this->userfield1 = $userfield1;

        return $this;
    }

    /**
     * Set userfield2
     *
     * @param string $userfield2
     * @return Account
     */
    public function setUserfield2($userfield2)
    {
        $this->userfield2 = $userfield2;

        return $this;
    }

    /**
     * Set userfield3
     *
     * @param string $userfield3
     * @return Account
     */
    public function setUserfield3($userfield3)
    {
        $this->userfield3 = $userfield3;

        return $this;
    }

    /**
     * Set userfield4
     *
     * @param string $userfield4
     * @return Account
     */
    public function setUserfield4($userfield4)
    {
        $this->userfield4 = $userfield4;

        return $this;
    }

    /**
     * Set userfield5
     *
     * @param string $userfield5
     * @return Account
     */
    public function setUserfield5($userfield5)
    {
        $this->userfield5 = $userfield5;

        return $this;
    }

    /**
     * Set userfield6
     *
     * @param string $userfield6
     * @return Account
     */
    public function setUserfield6($userfield6)
    {
        $this->userfield6 = $userfield6;

        return $this;
    }

    /**
     * Set userfield7
     *
     * @param string $userfield7
     * @return Account
     */
    public function setUserfield7($userfield7)
    {
        $this->userfield7 = $userfield7;

        return $this;
    }

    /**
     * Set userfield8
     *
     * @param string $userfield8
     * @return Account
     */
    public function setUserfield8($userfield8)
    {
        $this->userfield8 = $userfield8;

        return $this;
    }

    /**
     * Set userfield9
     *
     * @param string $userfield9
     * @return Account
     */
    public function setUserfield9($userfield9)
    {
        $this->userfield9 = $userfield9;

        return $this;
    }

    /**
     * Set userfield10
     *
     * @param string $userfield10
     * @return Account
     */
    public function setUserfield10($userfield10)
    {
        $this->userfield10 = $userfield10;

        return $this;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     * @return Account
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Set donotsolicit
     *
     * @param string $donotsolicit
     * @return Account
     */
    public function setDonotsolicit($donotsolicit)
    {
        $this->donotsolicit = $donotsolicit;

        return $this;
    }

    /**
     * Set score
     *
     * @param string $score
     * @return Account
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Set ticker
     *
     * @param string $ticker
     * @return Account
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;

        return $this;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     * @return Account
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Set leadsourceid
     *
     * @param string $leadsourceid
     * @return Account
     */
    public function setLeadsourceid($leadsourceid)
    {
        $this->leadsourceid = $leadsourceid;

        return $this;
    }

    /**
     * Set importsource
     *
     * @param string $importsource
     * @return Account
     */
    public function setImportsource($importsource)
    {
        $this->importsource = $importsource;

        return $this;
    }

    /**
     * Set engineerid
     *
     * @param string $engineerid
     * @return Account
     */
    public function setEngineerid($engineerid)
    {
        $this->engineerid = $engineerid;

        return $this;
    }

    /**
     * Set salesengineerid
     *
     * @param string $salesengineerid
     * @return Account
     */
    public function setSalesengineerid($salesengineerid)
    {
        $this->salesengineerid = $salesengineerid;

        return $this;
    }

    /**
     * Set relationship
     *
     * @param integer $relationship
     * @return Account
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * Set lasthistoryby
     *
     * @param string $lasthistoryby
     * @return Account
     */
    public function setLasthistoryby($lasthistoryby)
    {
        $this->lasthistoryby = $lasthistoryby;

        return $this;
    }

    /**
     * Set lasthistorydate
     *
     * @param \DateTime $lasthistorydate
     * @return Account
     */
    public function setLasthistorydate($lasthistorydate)
    {
        $this->lasthistorydate = $lasthistorydate;

        return $this;
    }

    /**
     * Set businessdescription
     *
     * @param string $businessdescription
     * @return Account
     */
    public function setBusinessdescription($businessdescription)
    {
        $this->businessdescription = $businessdescription;

        return $this;
    }

    /**
     * Set webaddress2
     *
     * @param string $webaddress2
     * @return Account
     */
    public function setWebaddress2($webaddress2)
    {
        $this->webaddress2 = $webaddress2;

        return $this;
    }

    /**
     * Set webaddress3
     *
     * @param string $webaddress3
     * @return Account
     */
    public function setWebaddress3($webaddress3)
    {
        $this->webaddress3 = $webaddress3;

        return $this;
    }

    /**
     * Set webaddress4
     *
     * @param string $webaddress4
     * @return Account
     */
    public function setWebaddress4($webaddress4)
    {
        $this->webaddress4 = $webaddress4;

        return $this;
    }

    /**
     * Set tin
     *
     * @param string $tin
     * @return Account
     */
    public function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Set employees2
     *
     * @param string $employees2
     * @return Account
     */
    public function setEmployees2($employees2)
    {
        $this->employees2 = $employees2;

        return $this;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return Account
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Set manager
     *
     * @param string $manager
     * @return Account
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param ArrayCollection $contacts
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @var \AppBundle\Entity\User
     */
    private $createdBy;


    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     * @return SpkInvestment
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
     * @var \AppBundle\Entity\User
     */
    private $updatedBy;


    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\User $updatedBy
     * @return SpkInvestment
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
     * @var \AppBundle\Entity\Accountdetail
     */
    private $detail;


    /**
     * Set detail
     *
     * @param \AppBundle\Entity\Accountdetail $detail
     * @return Account
     */
    public function setDetail(\AppBundle\Entity\Accountdetail $detail = null)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return \AppBundle\Entity\Accountdetail 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Add contacts
     *
     * @param \AppBundle\Entity\Contact $contacts
     * @return Account
     */
    public function addContact(\AppBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \AppBundle\Entity\Contact $contacts
     */
    public function removeContact(\AppBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }
}
