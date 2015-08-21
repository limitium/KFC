<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var ContactDetail
     */
    private $contactDetail;

    /**
     * @var Account
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
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
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $accountName;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=32, nullable=true)
     */
    private $department;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISPRIMARY", type="integer", nullable=true)
     */
    private $isprimary;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTNAME", type="string", length=64, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTNAME", type="string", length=32, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="MIDDLENAME", type="string", length=32, nullable=true)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFIX", type="string", length=16, nullable=true)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="SUFFIX", type="string", length=16, nullable=true)
     */
    private $suffix;

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
     * @ORM\Column(name="WORKPHONE", type="string", length=32, nullable=true)
     */
    private $workphone;

    /**
     * @var string
     *
     * @ORM\Column(name="HOMEPHONE", type="string", length=32, nullable=true)
     */
    private $homephone;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=32, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILE", type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGER", type="string", length=32, nullable=true)
     */
    private $pager;

    /**
     * @var string
     *
     * @ORM\Column(name="PINNUMBER", type="string", length=7, nullable=true)
     */
    private $pinnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGERNUMERIC", type="string", length=128, nullable=true)
     */
    private $pagernumeric;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="SECONDARYEMAIL", type="string", length=128, nullable=true)
     */
    private $secondaryemail;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS", type="string", length=128, nullable=true)
     */
    private $webaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSISTANT", type="string", length=64, nullable=true)
     */
    private $assistant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BIRTHDAY", type="datetime", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="SPOUSE", type="string", length=256, nullable=true)
     */
    private $spouse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SPOUSEBIRTHDAY", type="datetime", nullable=true)
     */
    private $spousebirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="ALUMNI", type="string", length=64, nullable=true)
     */
    private $alumni;

    /**
     * @var integer
     *
     * @ORM\Column(name="YEARGRADUATED", type="integer", nullable=true)
     */
    private $yeargraduated;

    /**
     * @var string
     *
     * @ORM\Column(name="INTERESTS", type="string", length=128, nullable=true)
     */
    private $interests;

    /**
     * @var string
     *
     * @ORM\Column(name="PREVIOUSEMPLOYER", type="string", length=64, nullable=true)
     */
    private $previousemployer;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECTIONS", type="string", length=16, nullable=true)
     */
    private $directions;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTSTO", type="string", length=64, nullable=true)
     */
    private $reportsto;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=false)
     */
    private $seccodeid;

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
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

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
     * @var string
     *
     * @ORM\Column(name="REFERRAL", type="string", length=64, nullable=true)
     */
    private $referral;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTNAME_UC", type="string", length=64, nullable=true)
     */
    private $lastnameUc;

    /**
     * @var string
     *
     * @ORM\Column(name="INITIALS", type="string", length=32, nullable=true)
     */
    private $initials;

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
     * @ORM\Column(name="LOCATIONCODE", type="string", length=12, nullable=true)
     */
    private $locationcode;

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
     * @ORM\Column(name="WEBPASSWORD", type="string", length=20, nullable=true)
     */
    private $webpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBUSERNAME", type="string", length=30, nullable=true)
     */
    private $webusername;

    /**
     * @var string
     *
     * @ORM\Column(name="WEIGHT", type="string", length=12, nullable=true)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="DONOTSOLICIT", type="integer", nullable=true)
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
     * @ORM\Column(name="EMAIL3", type="string", length=128, nullable=true)
     */
    private $email3;

    /**
     * @var string
     *
     * @ORM\Column(name="DONOTEMAIL", type="string", length=1, nullable=true)
     */
    private $donotemail;

    /**
     * @var string
     *
     * @ORM\Column(name="DONOTPHONE", type="string", length=1, nullable=true)
     */
    private $donotphone;

    /**
     * @var string
     *
     * @ORM\Column(name="DONOTMAIL", type="string", length=1, nullable=true)
     */
    private $donotmail;

    /**
     * @var string
     *
     * @ORM\Column(name="DONOTFAX", type="string", length=1, nullable=true)
     */
    private $donotfax;

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORTSOURCE", type="string", length=24, nullable=true)
     */
    private $importsource;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBTYPE", type="string", length=64, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPHONE", type="string", length=32, nullable=true)
     */
    private $otherphone;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFERRED_CONTACT", type="string", length=64, nullable=true)
     */
    private $preferredContact;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBPASSWORDHINT", type="string", length=64, nullable=true)
     */
    private $webpasswordhint;

    /**
     * @var string
     *
     * @ORM\Column(name="ISSERVICEAUTHORIZED", type="string", length=1, nullable=true)
     */
    private $isserviceauthorized;

    /**
     * @var string
     *
     * @ORM\Column(name="CUISINEPREF", type="string", length=64, nullable=true)
     */
    private $cuisinepref;

    /**
     * @var string
     *
     * @ORM\Column(name="CHILDREN", type="string", length=64, nullable=true)
     */
    private $children;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LASTHISTORYDATE", type="datetime", nullable=true)
     */
    private $lasthistorydate;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTHISTORYBY", type="string", length=12, nullable=true)
     */
    private $lasthistoryby;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS2", type="string", length=128, nullable=true)
     */
    private $webaddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="SALUTATION", type="string", length=64, nullable=true)
     */
    private $salutation;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBSCRIBERID", type="string", length=12, nullable=true)
     */
    private $subscriberid;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORIES", type="string", length=255, nullable=true)
     */
    private $categories;

    private $managers;

    public function __construct()
    {
        $this->managers = new ArrayCollection();
    }


    /**
     * @return string
     */
    public function getContactid()
    {
        return $this->contactid;
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
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return int
     */
    public function getIsprimary()
    {
        return $this->isprimary;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
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
    public function getWorkphone()
    {
        return $this->workphone;
    }

    /**
     * @return string
     */
    public function getHomephone()
    {
        return $this->homephone;
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
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * @return string
     */
    public function getPinnumber()
    {
        return $this->pinnumber;
    }

    /**
     * @return string
     */
    public function getPagernumeric()
    {
        return $this->pagernumeric;
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
    public function getSecondaryemail()
    {
        return $this->secondaryemail;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * @return \DateTime
     */
    public function getSpousebirthday()
    {
        return $this->spousebirthday;
    }

    /**
     * @return string
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * @return int
     */
    public function getYeargraduated()
    {
        return $this->yeargraduated;
    }

    /**
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * @return string
     */
    public function getPreviousemployer()
    {
        return $this->previousemployer;
    }

    /**
     * @return string
     */
    public function getDirections()
    {
        return $this->directions;
    }

    /**
     * @return string
     */
    public function getReportsto()
    {
        return $this->reportsto;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
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
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * @return string
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * @return string
     */
    public function getLastnameUc()
    {
        return $this->lastnameUc;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
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
    public function getLocationcode()
    {
        return $this->locationcode;
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
    public function getWebpassword()
    {
        return $this->webpassword;
    }

    /**
     * @return string
     */
    public function getWebusername()
    {
        return $this->webusername;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return int
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
    public function getEmail3()
    {
        return $this->email3;
    }

    /**
     * @return string
     */
    public function getDonotemail()
    {
        return $this->donotemail;
    }

    /**
     * @return string
     */
    public function getDonotphone()
    {
        return $this->donotphone;
    }

    /**
     * @return string
     */
    public function getDonotmail()
    {
        return $this->donotmail;
    }

    /**
     * @return string
     */
    public function getDonotfax()
    {
        return $this->donotfax;
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
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @return string
     */
    public function getOtherphone()
    {
        return $this->otherphone;
    }

    /**
     * @return string
     */
    public function getPreferredContact()
    {
        return $this->preferredContact;
    }

    /**
     * @return string
     */
    public function getWebpasswordhint()
    {
        return $this->webpasswordhint;
    }

    /**
     * @return string
     */
    public function getIsserviceauthorized()
    {
        return $this->isserviceauthorized;
    }

    /**
     * @return string
     */
    public function getCuisinepref()
    {
        return $this->cuisinepref;
    }

    /**
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
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
    public function getLasthistoryby()
    {
        return $this->lasthistoryby;
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
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @return string
     */
    public function getSubscriberid()
    {
        return $this->subscriberid;
    }

    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }




    /**
     * Set contactid
     *
     * @param string $contactid
     * @return Contact
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Contact
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Contact
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return Contact
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Set isprimary
     *
     * @param integer $isprimary
     * @return Contact
     */
    public function setIsprimary($isprimary)
    {
        $this->isprimary = $isprimary;

        return $this;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return Contact
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return Contact
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Contact
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Set addressid
     *
     * @param string $addressid
     * @return Contact
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
     * @return Contact
     */
    public function setShippingid($shippingid)
    {
        $this->shippingid = $shippingid;

        return $this;
    }

    /**
     * Set workphone
     *
     * @param string $workphone
     * @return Contact
     */
    public function setWorkphone($workphone)
    {
        $this->workphone = $workphone;

        return $this;
    }

    /**
     * Set homephone
     *
     * @param string $homephone
     * @return Contact
     */
    public function setHomephone($homephone)
    {
        $this->homephone = $homephone;

        return $this;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Contact
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Contact
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Set pager
     *
     * @param string $pager
     * @return Contact
     */
    public function setPager($pager)
    {
        $this->pager = $pager;

        return $this;
    }

    /**
     * Set pinnumber
     *
     * @param string $pinnumber
     * @return Contact
     */
    public function setPinnumber($pinnumber)
    {
        $this->pinnumber = $pinnumber;

        return $this;
    }

    /**
     * Set pagernumeric
     *
     * @param string $pagernumeric
     * @return Contact
     */
    public function setPagernumeric($pagernumeric)
    {
        $this->pagernumeric = $pagernumeric;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set secondaryemail
     *
     * @param string $secondaryemail
     * @return Contact
     */
    public function setSecondaryemail($secondaryemail)
    {
        $this->secondaryemail = $secondaryemail;

        return $this;
    }

    /**
     * Set webaddress
     *
     * @param string $webaddress
     * @return Contact
     */
    public function setWebaddress($webaddress)
    {
        $this->webaddress = $webaddress;

        return $this;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Contact
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set assistant
     *
     * @param string $assistant
     * @return Contact
     */
    public function setAssistant($assistant)
    {
        $this->assistant = $assistant;

        return $this;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Contact
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Set spouse
     *
     * @param string $spouse
     * @return Contact
     */
    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;

        return $this;
    }

    /**
     * Set spousebirthday
     *
     * @param \DateTime $spousebirthday
     * @return Contact
     */
    public function setSpousebirthday($spousebirthday)
    {
        $this->spousebirthday = $spousebirthday;

        return $this;
    }

    /**
     * Set alumni
     *
     * @param string $alumni
     * @return Contact
     */
    public function setAlumni($alumni)
    {
        $this->alumni = $alumni;

        return $this;
    }

    /**
     * Set yeargraduated
     *
     * @param integer $yeargraduated
     * @return Contact
     */
    public function setYeargraduated($yeargraduated)
    {
        $this->yeargraduated = $yeargraduated;

        return $this;
    }

    /**
     * Set interests
     *
     * @param string $interests
     * @return Contact
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Set previousemployer
     *
     * @param string $previousemployer
     * @return Contact
     */
    public function setPreviousemployer($previousemployer)
    {
        $this->previousemployer = $previousemployer;

        return $this;
    }

    /**
     * Set directions
     *
     * @param string $directions
     * @return Contact
     */
    public function setDirections($directions)
    {
        $this->directions = $directions;

        return $this;
    }

    /**
     * Set reportsto
     *
     * @param string $reportsto
     * @return Contact
     */
    public function setReportsto($reportsto)
    {
        $this->reportsto = $reportsto;

        return $this;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return Contact
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return Contact
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
     * @return Contact
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
     * @return Contact
     */
    public function setDivisionalmanagerid($divisionalmanagerid)
    {
        $this->divisionalmanagerid = $divisionalmanagerid;

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Contact
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Contact
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Contact
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Contact
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Contact
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Set referral
     *
     * @param string $referral
     * @return Contact
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;

        return $this;
    }

    /**
     * Set lastnameUc
     *
     * @param string $lastnameUc
     * @return Contact
     */
    public function setLastnameUc($lastnameUc)
    {
        $this->lastnameUc = $lastnameUc;

        return $this;
    }

    /**
     * Set initials
     *
     * @param string $initials
     * @return Contact
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * Set alternatekeyprefix
     *
     * @param string $alternatekeyprefix
     * @return Contact
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
     * @return Contact
     */
    public function setAlternatekeysuffix($alternatekeysuffix)
    {
        $this->alternatekeysuffix = $alternatekeysuffix;

        return $this;
    }

    /**
     * Set locationcode
     *
     * @param string $locationcode
     * @return Contact
     */
    public function setLocationcode($locationcode)
    {
        $this->locationcode = $locationcode;

        return $this;
    }

    /**
     * Set userfield1
     *
     * @param string $userfield1
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
     */
    public function setUserfield10($userfield10)
    {
        $this->userfield10 = $userfield10;

        return $this;
    }

    /**
     * Set webpassword
     *
     * @param string $webpassword
     * @return Contact
     */
    public function setWebpassword($webpassword)
    {
        $this->webpassword = $webpassword;

        return $this;
    }

    /**
     * Set webusername
     *
     * @param string $webusername
     * @return Contact
     */
    public function setWebusername($webusername)
    {
        $this->webusername = $webusername;

        return $this;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Contact
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Set donotsolicit
     *
     * @param integer $donotsolicit
     * @return Contact
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
     * @return Contact
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Set email3
     *
     * @param string $email3
     * @return Contact
     */
    public function setEmail3($email3)
    {
        $this->email3 = $email3;

        return $this;
    }

    /**
     * Set donotemail
     *
     * @param string $donotemail
     * @return Contact
     */
    public function setDonotemail($donotemail)
    {
        $this->donotemail = $donotemail;

        return $this;
    }

    /**
     * Set donotphone
     *
     * @param string $donotphone
     * @return Contact
     */
    public function setDonotphone($donotphone)
    {
        $this->donotphone = $donotphone;

        return $this;
    }

    /**
     * Set donotmail
     *
     * @param string $donotmail
     * @return Contact
     */
    public function setDonotmail($donotmail)
    {
        $this->donotmail = $donotmail;

        return $this;
    }

    /**
     * Set donotfax
     *
     * @param string $donotfax
     * @return Contact
     */
    public function setDonotfax($donotfax)
    {
        $this->donotfax = $donotfax;

        return $this;
    }

    /**
     * Set importsource
     *
     * @param string $importsource
     * @return Contact
     */
    public function setImportsource($importsource)
    {
        $this->importsource = $importsource;

        return $this;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     * @return Contact
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Set otherphone
     *
     * @param string $otherphone
     * @return Contact
     */
    public function setOtherphone($otherphone)
    {
        $this->otherphone = $otherphone;

        return $this;
    }

    /**
     * Set preferredContact
     *
     * @param string $preferredContact
     * @return Contact
     */
    public function setPreferredContact($preferredContact)
    {
        $this->preferredContact = $preferredContact;

        return $this;
    }

    /**
     * Set webpasswordhint
     *
     * @param string $webpasswordhint
     * @return Contact
     */
    public function setWebpasswordhint($webpasswordhint)
    {
        $this->webpasswordhint = $webpasswordhint;

        return $this;
    }

    /**
     * Set isserviceauthorized
     *
     * @param string $isserviceauthorized
     * @return Contact
     */
    public function setIsserviceauthorized($isserviceauthorized)
    {
        $this->isserviceauthorized = $isserviceauthorized;

        return $this;
    }

    /**
     * Set cuisinepref
     *
     * @param string $cuisinepref
     * @return Contact
     */
    public function setCuisinepref($cuisinepref)
    {
        $this->cuisinepref = $cuisinepref;

        return $this;
    }

    /**
     * Set children
     *
     * @param string $children
     * @return Contact
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Set lasthistorydate
     *
     * @param \DateTime $lasthistorydate
     * @return Contact
     */
    public function setLasthistorydate($lasthistorydate)
    {
        $this->lasthistorydate = $lasthistorydate;

        return $this;
    }

    /**
     * Set lasthistoryby
     *
     * @param string $lasthistoryby
     * @return Contact
     */
    public function setLasthistoryby($lasthistoryby)
    {
        $this->lasthistoryby = $lasthistoryby;

        return $this;
    }

    /**
     * Set webaddress2
     *
     * @param string $webaddress2
     * @return Contact
     */
    public function setWebaddress2($webaddress2)
    {
        $this->webaddress2 = $webaddress2;

        return $this;
    }

    /**
     * Set salutation
     *
     * @param string $salutation
     * @return Contact
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Set subscriberid
     *
     * @param string $subscriberid
     * @return Contact
     */
    public function setSubscriberid($subscriberid)
    {
        $this->subscriberid = $subscriberid;

        return $this;
    }

    /**
     * Set categories
     *
     * @param string $categories
     * @return Contact
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
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
     * @return ContactDetail
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }

    /**
     * @param ContactDetail $contactDetail
     */
    public function setContactDetail($contactDetail)
    {
        $this->contactDetail = $contactDetail;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param Account $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getManagers()
    {
        return $this->managers;
    }

    /**
     * @param mixed $managers
     */
    public function setManagers($managers)
    {
        $this->managers = $managers;
    }

    /**
     * Remove Manager
     *
     * @param \AppBundle\Entity\Userinfo $manager
     */
    public function removeManager(\AppBundle\Entity\Userinfo $manager)
    {
        $this->managers->removeElement($manager);
    }

    /**
     * Add manager
     *
     * @param \AppBundle\Entity\Userinfo $manager
     */
    public function addManager(\AppBundle\Entity\Userinfo $manager)
    {
        $this->managers->add($manager);
    }
}

