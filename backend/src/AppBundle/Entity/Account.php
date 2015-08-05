<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="ACCOUNT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SR_IX_ACCOUNTID", columns={"ACCOUNTID"})}, indexes={@ORM\Index(name="KF_SR_IX_MAINPHONE", columns={"MAINPHONE"}), @ORM\Index(name="_dta_index_ACCOUNT_5_1076914908__K1_3_11", columns={"ACCOUNTID", "ACCOUNT", "MAINPHONE"}), @ORM\Index(name="_dta_index_ACCOUNT_5_1101299033__K1_21", columns={"ACCOUNTID", "WEBADDRESS"})})
 * @ORM\Entity
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




}
