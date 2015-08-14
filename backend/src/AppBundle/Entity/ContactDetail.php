<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactDetail
 *
 * @ORM\Table(name="CONTACT_DETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="CONTACT_DETAIL_PRIMARY", columns={"CONTACTID"}), @ORM\UniqueConstraint(name="KF_SR_IX_FIONAME", columns={"CONTACTID", "FIRSTRUS", "MIDDLERUS", "LASTRUS", "TITLERUS", "SUFFIXRUS", "PREFIXRUS", "WORKPREFIX", "WORKSUFIX", "MOBILEPREFIX", "MOBILESUFIX", "HOMEPREFIX", "HOMESUFIX", "OTHERPREFIX", "OTHERSUFIX", "FAXPREFIX", "FAXSUFIX", "NATIONALITY", "SEX", "UNSUBSCRIBE", "NON_DELIVERED", "TITLE_TYPE", "KEYCLIENT"})}})
 * @ORM\Entity
 */
class ContactDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLERUS", type="string", length=32, nullable=true)
     */
    private $titlerus;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTRUS", type="string", length=32, nullable=true)
     */
    private $firstrus;

    /**
     * @var string
     *
     * @ORM\Column(name="MIDDLERUS", type="string", length=32, nullable=true)
     */
    private $middlerus;

    /**
     * @var string
     *
     * @ORM\Column(name="LASTRUS", type="string", length=64, nullable=true)
     */
    private $lastrus;

    /**
     * @var string
     *
     * @ORM\Column(name="SUFFIXRUS", type="string", length=32, nullable=true)
     */
    private $suffixrus;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFIXRUS", type="string", length=32, nullable=true)
     */
    private $prefixrus;

    /**
     * @var string
     *
     * @ORM\Column(name="WORKPREFIX", type="string", length=32, nullable=true)
     */
    private $workprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="WORKSUFIX", type="string", length=32, nullable=true)
     */
    private $worksufix;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILEPREFIX", type="string", length=32, nullable=true)
     */
    private $mobileprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="MOBILESUFIX", type="string", length=32, nullable=true)
     */
    private $mobilesufix;

    /**
     * @var string
     *
     * @ORM\Column(name="HOMEPREFIX", type="string", length=32, nullable=true)
     */
    private $homeprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="HOMESUFIX", type="string", length=32, nullable=true)
     */
    private $homesufix;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERPREFIX", type="string", length=32, nullable=true)
     */
    private $otherprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHERSUFIX", type="string", length=32, nullable=true)
     */
    private $othersufix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXPREFIX", type="string", length=32, nullable=true)
     */
    private $faxprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXSUFIX", type="string", length=32, nullable=true)
     */
    private $faxsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="NATIONALITY", type="string", length=32, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="SEX", type="string", length=32, nullable=true)
     */
    private $sex;

    /**
     * @var float
     *
     * @ORM\Column(name="AGE", type="float", precision=53, scale=0, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="FAMILY", type="string", length=1, nullable=true)
     */
    private $family;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMBER_OF_CHILDREN", type="smallint", nullable=true)
     */
    private $numberOfChildren;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURSE", type="string", length=128, nullable=true)
     */
    private $leadsourse;

    /**
     * @var string
     *
     * @ORM\Column(name="WORK_INDUSTRY", type="string", length=128, nullable=true)
     */
    private $workIndustry;

    /**
     * @var string
     *
     * @ORM\Column(name="HASANIMALS", type="string", length=1, nullable=true)
     */
    private $hasanimals;

    /**
     * @var string
     *
     * @ORM\Column(name="UNSUBSCRIBE", type="string", length=1, nullable=true)
     */
    private $unsubscribe;

    /**
     * @var string
     *
     * @ORM\Column(name="NON_DELIVERED", type="string", length=1, nullable=true)
     */
    private $nonDelivered;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIALMANAGERID", type="string", length=12, nullable=true)
     */
    private $industrialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESIDENTIALMANAGERID", type="string", length=12, nullable=true)
     */
    private $residentialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRYMANAGERID", type="string", length=12, nullable=true)
     */
    private $countrymanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAILMANAGERID", type="string", length=12, nullable=true)
     */
    private $retailmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICEMANAGERID", type="string", length=12, nullable=true)
     */
    private $officemanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUATIONMANAGERID", type="string", length=12, nullable=true)
     */
    private $valuationmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENTMANAGERID", type="string", length=12, nullable=true)
     */
    private $investmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGMANAGERID", type="string", length=12, nullable=true)
     */
    private $consultingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESEARCHMANAGERID", type="string", length=12, nullable=true)
     */
    private $researchmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETINGMANAGERID", type="string", length=12, nullable=true)
     */
    private $marketingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE_TYPE", type="string", length=128, nullable=true)
     */
    private $titleType;

    /**
     * @var string
     *
     * @ORM\Column(name="KEYCLIENT", type="string", length=1, nullable=true)
     */
    private $keyclient;

    /**
     * @var string
     *
     * @ORM\Column(name="SEND_SMS", type="string", length=1, nullable=true)
     */
    private $sendSms;

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
    public function getCreateuser()
    {
        return $this->createuser;
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
    public function getModifyuser()
    {
        return $this->modifyuser;
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
    public function getTitlerus()
    {
        return $this->titlerus;
    }

    /**
     * @return string
     */
    public function getFirstrus()
    {
        return $this->firstrus;
    }

    /**
     * @return string
     */
    public function getMiddlerus()
    {
        return $this->middlerus;
    }

    /**
     * @return string
     */
    public function getLastrus()
    {
        return $this->lastrus;
    }

    /**
     * @return string
     */
    public function getSuffixrus()
    {
        return $this->suffixrus;
    }

    /**
     * @return string
     */
    public function getPrefixrus()
    {
        return $this->prefixrus;
    }

    /**
     * @return string
     */
    public function getWorkprefix()
    {
        return $this->workprefix;
    }

    /**
     * @return string
     */
    public function getWorksufix()
    {
        return $this->worksufix;
    }

    /**
     * @return string
     */
    public function getMobileprefix()
    {
        return $this->mobileprefix;
    }

    /**
     * @return string
     */
    public function getMobilesufix()
    {
        return $this->mobilesufix;
    }

    /**
     * @return string
     */
    public function getHomeprefix()
    {
        return $this->homeprefix;
    }

    /**
     * @return string
     */
    public function getHomesufix()
    {
        return $this->homesufix;
    }

    /**
     * @return string
     */
    public function getOtherprefix()
    {
        return $this->otherprefix;
    }

    /**
     * @return string
     */
    public function getOthersufix()
    {
        return $this->othersufix;
    }

    /**
     * @return string
     */
    public function getFaxprefix()
    {
        return $this->faxprefix;
    }

    /**
     * @return string
     */
    public function getFaxsufix()
    {
        return $this->faxsufix;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return float
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @return int
     */
    public function getNumberOfChildren()
    {
        return $this->numberOfChildren;
    }

    /**
     * @return string
     */
    public function getLeadsourse()
    {
        return $this->leadsourse;
    }

    /**
     * @return string
     */
    public function getWorkIndustry()
    {
        return $this->workIndustry;
    }

    /**
     * @return string
     */
    public function getHasanimals()
    {
        return $this->hasanimals;
    }

    /**
     * @return string
     */
    public function getUnsubscribe()
    {
        return $this->unsubscribe;
    }

    /**
     * @return string
     */
    public function getNonDelivered()
    {
        return $this->nonDelivered;
    }

    /**
     * @return string
     */
    public function getIndustrialmanagerid()
    {
        return $this->industrialmanagerid;
    }

    /**
     * @return string
     */
    public function getResidentialmanagerid()
    {
        return $this->residentialmanagerid;
    }

    /**
     * @return string
     */
    public function getCountrymanagerid()
    {
        return $this->countrymanagerid;
    }

    /**
     * @return string
     */
    public function getRetailmanagerid()
    {
        return $this->retailmanagerid;
    }

    /**
     * @return string
     */
    public function getOfficemanagerid()
    {
        return $this->officemanagerid;
    }

    /**
     * @return string
     */
    public function getValuationmanagerid()
    {
        return $this->valuationmanagerid;
    }

    /**
     * @return string
     */
    public function getInvestmentmanagerid()
    {
        return $this->investmentmanagerid;
    }

    /**
     * @return string
     */
    public function getConsultingmanagerid()
    {
        return $this->consultingmanagerid;
    }

    /**
     * @return string
     */
    public function getResearchmanagerid()
    {
        return $this->researchmanagerid;
    }

    /**
     * @return string
     */
    public function getMarketingmanagerid()
    {
        return $this->marketingmanagerid;
    }

    /**
     * @return string
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @return string
     */
    public function getKeyclient()
    {
        return $this->keyclient;
    }

    /**
     * @return string
     */
    public function getSendSms()
    {
        return $this->sendSms;
    }





    /**
     * Set contactid
     *
     * @param string $contactid
     * @return ContactDetail
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return ContactDetail
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return ContactDetail
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return ContactDetail
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return ContactDetail
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Set titlerus
     *
     * @param string $titlerus
     * @return ContactDetail
     */
    public function setTitlerus($titlerus)
    {
        $this->titlerus = $titlerus;

        return $this;
    }

    /**
     * Set firstrus
     *
     * @param string $firstrus
     * @return ContactDetail
     */
    public function setFirstrus($firstrus)
    {
        $this->firstrus = $firstrus;

        return $this;
    }

    /**
     * Set middlerus
     *
     * @param string $middlerus
     * @return ContactDetail
     */
    public function setMiddlerus($middlerus)
    {
        $this->middlerus = $middlerus;

        return $this;
    }

    /**
     * Set lastrus
     *
     * @param string $lastrus
     * @return ContactDetail
     */
    public function setLastrus($lastrus)
    {
        $this->lastrus = $lastrus;

        return $this;
    }

    /**
     * Set suffixrus
     *
     * @param string $suffixrus
     * @return ContactDetail
     */
    public function setSuffixrus($suffixrus)
    {
        $this->suffixrus = $suffixrus;

        return $this;
    }

    /**
     * Set prefixrus
     *
     * @param string $prefixrus
     * @return ContactDetail
     */
    public function setPrefixrus($prefixrus)
    {
        $this->prefixrus = $prefixrus;

        return $this;
    }

    /**
     * Set workprefix
     *
     * @param string $workprefix
     * @return ContactDetail
     */
    public function setWorkprefix($workprefix)
    {
        $this->workprefix = $workprefix;

        return $this;
    }

    /**
     * Set worksufix
     *
     * @param string $worksufix
     * @return ContactDetail
     */
    public function setWorksufix($worksufix)
    {
        $this->worksufix = $worksufix;

        return $this;
    }

    /**
     * Set mobileprefix
     *
     * @param string $mobileprefix
     * @return ContactDetail
     */
    public function setMobileprefix($mobileprefix)
    {
        $this->mobileprefix = $mobileprefix;

        return $this;
    }

    /**
     * Set mobilesufix
     *
     * @param string $mobilesufix
     * @return ContactDetail
     */
    public function setMobilesufix($mobilesufix)
    {
        $this->mobilesufix = $mobilesufix;

        return $this;
    }

    /**
     * Set homeprefix
     *
     * @param string $homeprefix
     * @return ContactDetail
     */
    public function setHomeprefix($homeprefix)
    {
        $this->homeprefix = $homeprefix;

        return $this;
    }

    /**
     * Set homesufix
     *
     * @param string $homesufix
     * @return ContactDetail
     */
    public function setHomesufix($homesufix)
    {
        $this->homesufix = $homesufix;

        return $this;
    }

    /**
     * Set otherprefix
     *
     * @param string $otherprefix
     * @return ContactDetail
     */
    public function setOtherprefix($otherprefix)
    {
        $this->otherprefix = $otherprefix;

        return $this;
    }

    /**
     * Set othersufix
     *
     * @param string $othersufix
     * @return ContactDetail
     */
    public function setOthersufix($othersufix)
    {
        $this->othersufix = $othersufix;

        return $this;
    }

    /**
     * Set faxprefix
     *
     * @param string $faxprefix
     * @return ContactDetail
     */
    public function setFaxprefix($faxprefix)
    {
        $this->faxprefix = $faxprefix;

        return $this;
    }

    /**
     * Set faxsufix
     *
     * @param string $faxsufix
     * @return ContactDetail
     */
    public function setFaxsufix($faxsufix)
    {
        $this->faxsufix = $faxsufix;

        return $this;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return ContactDetail
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return ContactDetail
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Set age
     *
     * @param float $age
     * @return ContactDetail
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Set family
     *
     * @param string $family
     * @return ContactDetail
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Set numberOfChildren
     *
     * @param integer $numberOfChildren
     * @return ContactDetail
     */
    public function setNumberOfChildren($numberOfChildren)
    {
        $this->numberOfChildren = $numberOfChildren;

        return $this;
    }

    /**
     * Set leadsourse
     *
     * @param string $leadsourse
     * @return ContactDetail
     */
    public function setLeadsourse($leadsourse)
    {
        $this->leadsourse = $leadsourse;

        return $this;
    }

    /**
     * Set workIndustry
     *
     * @param string $workIndustry
     * @return ContactDetail
     */
    public function setWorkIndustry($workIndustry)
    {
        $this->workIndustry = $workIndustry;

        return $this;
    }

    /**
     * Set hasanimals
     *
     * @param string $hasanimals
     * @return ContactDetail
     */
    public function setHasanimals($hasanimals)
    {
        $this->hasanimals = $hasanimals;

        return $this;
    }

    /**
     * Set unsubscribe
     *
     * @param string $unsubscribe
     * @return ContactDetail
     */
    public function setUnsubscribe($unsubscribe)
    {
        $this->unsubscribe = $unsubscribe;

        return $this;
    }

    /**
     * Set nonDelivered
     *
     * @param string $nonDelivered
     * @return ContactDetail
     */
    public function setNonDelivered($nonDelivered)
    {
        $this->nonDelivered = $nonDelivered;

        return $this;
    }

    /**
     * Set industrialmanagerid
     *
     * @param string $industrialmanagerid
     * @return ContactDetail
     */
    public function setIndustrialmanagerid($industrialmanagerid)
    {
        $this->industrialmanagerid = $industrialmanagerid;

        return $this;
    }

    /**
     * Set residentialmanagerid
     *
     * @param string $residentialmanagerid
     * @return ContactDetail
     */
    public function setResidentialmanagerid($residentialmanagerid)
    {
        $this->residentialmanagerid = $residentialmanagerid;

        return $this;
    }

    /**
     * Set countrymanagerid
     *
     * @param string $countrymanagerid
     * @return ContactDetail
     */
    public function setCountrymanagerid($countrymanagerid)
    {
        $this->countrymanagerid = $countrymanagerid;

        return $this;
    }

    /**
     * Set retailmanagerid
     *
     * @param string $retailmanagerid
     * @return ContactDetail
     */
    public function setRetailmanagerid($retailmanagerid)
    {
        $this->retailmanagerid = $retailmanagerid;

        return $this;
    }

    /**
     * Set officemanagerid
     *
     * @param string $officemanagerid
     * @return ContactDetail
     */
    public function setOfficemanagerid($officemanagerid)
    {
        $this->officemanagerid = $officemanagerid;

        return $this;
    }

    /**
     * Set valuationmanagerid
     *
     * @param string $valuationmanagerid
     * @return ContactDetail
     */
    public function setValuationmanagerid($valuationmanagerid)
    {
        $this->valuationmanagerid = $valuationmanagerid;

        return $this;
    }

    /**
     * Set investmentmanagerid
     *
     * @param string $investmentmanagerid
     * @return ContactDetail
     */
    public function setInvestmentmanagerid($investmentmanagerid)
    {
        $this->investmentmanagerid = $investmentmanagerid;

        return $this;
    }

    /**
     * Set consultingmanagerid
     *
     * @param string $consultingmanagerid
     * @return ContactDetail
     */
    public function setConsultingmanagerid($consultingmanagerid)
    {
        $this->consultingmanagerid = $consultingmanagerid;

        return $this;
    }

    /**
     * Set researchmanagerid
     *
     * @param string $researchmanagerid
     * @return ContactDetail
     */
    public function setResearchmanagerid($researchmanagerid)
    {
        $this->researchmanagerid = $researchmanagerid;

        return $this;
    }

    /**
     * Set marketingmanagerid
     *
     * @param string $marketingmanagerid
     * @return ContactDetail
     */
    public function setMarketingmanagerid($marketingmanagerid)
    {
        $this->marketingmanagerid = $marketingmanagerid;

        return $this;
    }

    /**
     * Set titleType
     *
     * @param string $titleType
     * @return ContactDetail
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;

        return $this;
    }

    /**
     * Set keyclient
     *
     * @param string $keyclient
     * @return ContactDetail
     */
    public function setKeyclient($keyclient)
    {
        $this->keyclient = $keyclient;

        return $this;
    }

    /**
     * Set sendSms
     *
     * @param string $sendSms
     * @return ContactDetail
     */
    public function setSendSms($sendSms)
    {
        $this->sendSms = $sendSms;

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
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }



}
