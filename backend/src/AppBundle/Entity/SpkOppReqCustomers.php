<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqCustomers
 *
 */
class SpkOppReqCustomers
{
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
     * @var float
     *
     */
    private $squareMin;

    /**
     * @var float
     *
     */
    private $squareMax;

    /**
     * @var float
     *
     */
    private $officeSquareMin;

    /**
     * @var float
     *
     */
    private $officeSquareMax;

    /**
     * @var float
     *
     */
    private $landSquareMin;

    /**
     * @var float
     *
     */
    private $landSquareMax;

    /**
     * @var float
     *
     */
    private $budgetMax;

    /**
     * @var float
     *
     */
    private $budgetMin;

    /**
     * @var string
     *
     */
    private $industry;

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
     * @var string
     *
     */
    private $brand;

    /**
     * @var string
     *
     */
    private $sectionName;

    /**
     * @var string
     *
     */
    private $capitalRaising;

    /**
     * @var string
     *
     */
    private $buyer;

    /**
     * @var string
     *
     */
    private $subtype;

    /**
     * @var string
     *
     */
    private $isSrOnly;

    /**
     * @var \DateTime
     *
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     */
    private $dateTo;

    /**
     * @var string
     *
     */
    private $emailOnly;

    /**
     * @var string
     *
     */
    private $notPrivateClient;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppReqCustomers
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
     * @return SpkOppReqCustomers
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
     * @return SpkOppReqCustomers
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
     * @return SpkOppReqCustomers
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
     * @return SpkOppReqCustomers
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
     * Set squareMin
     *
     * @param float $squareMin
     * @return SpkOppReqCustomers
     */
    public function setSquareMin($squareMin)
    {
        $this->squareMin = $squareMin;

        return $this;
    }

    /**
     * Get squareMin
     *
     * @return float 
     */
    public function getSquareMin()
    {
        return $this->squareMin;
    }

    /**
     * Set squareMax
     *
     * @param float $squareMax
     * @return SpkOppReqCustomers
     */
    public function setSquareMax($squareMax)
    {
        $this->squareMax = $squareMax;

        return $this;
    }

    /**
     * Get squareMax
     *
     * @return float 
     */
    public function getSquareMax()
    {
        return $this->squareMax;
    }

    /**
     * Set officeSquareMin
     *
     * @param float $officeSquareMin
     * @return SpkOppReqCustomers
     */
    public function setOfficeSquareMin($officeSquareMin)
    {
        $this->officeSquareMin = $officeSquareMin;

        return $this;
    }

    /**
     * Get officeSquareMin
     *
     * @return float 
     */
    public function getOfficeSquareMin()
    {
        return $this->officeSquareMin;
    }

    /**
     * Set officeSquareMax
     *
     * @param float $officeSquareMax
     * @return SpkOppReqCustomers
     */
    public function setOfficeSquareMax($officeSquareMax)
    {
        $this->officeSquareMax = $officeSquareMax;

        return $this;
    }

    /**
     * Get officeSquareMax
     *
     * @return float 
     */
    public function getOfficeSquareMax()
    {
        return $this->officeSquareMax;
    }

    /**
     * Set landSquareMin
     *
     * @param float $landSquareMin
     * @return SpkOppReqCustomers
     */
    public function setLandSquareMin($landSquareMin)
    {
        $this->landSquareMin = $landSquareMin;

        return $this;
    }

    /**
     * Get landSquareMin
     *
     * @return float 
     */
    public function getLandSquareMin()
    {
        return $this->landSquareMin;
    }

    /**
     * Set landSquareMax
     *
     * @param float $landSquareMax
     * @return SpkOppReqCustomers
     */
    public function setLandSquareMax($landSquareMax)
    {
        $this->landSquareMax = $landSquareMax;

        return $this;
    }

    /**
     * Get landSquareMax
     *
     * @return float 
     */
    public function getLandSquareMax()
    {
        return $this->landSquareMax;
    }

    /**
     * Set budgetMax
     *
     * @param float $budgetMax
     * @return SpkOppReqCustomers
     */
    public function setBudgetMax($budgetMax)
    {
        $this->budgetMax = $budgetMax;

        return $this;
    }

    /**
     * Get budgetMax
     *
     * @return float 
     */
    public function getBudgetMax()
    {
        return $this->budgetMax;
    }

    /**
     * Set budgetMin
     *
     * @param float $budgetMin
     * @return SpkOppReqCustomers
     */
    public function setBudgetMin($budgetMin)
    {
        $this->budgetMin = $budgetMin;

        return $this;
    }

    /**
     * Get budgetMin
     *
     * @return float 
     */
    public function getBudgetMin()
    {
        return $this->budgetMin;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return SpkOppReqCustomers
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkOppReqCustomers
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
     * @return SpkOppReqCustomers
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

    /**
     * Set brand
     *
     * @param string $brand
     * @return SpkOppReqCustomers
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set sectionName
     *
     * @param string $sectionName
     * @return SpkOppReqCustomers
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
     * Set capitalRaising
     *
     * @param string $capitalRaising
     * @return SpkOppReqCustomers
     */
    public function setCapitalRaising($capitalRaising)
    {
        $this->capitalRaising = $capitalRaising;

        return $this;
    }

    /**
     * Get capitalRaising
     *
     * @return string 
     */
    public function getCapitalRaising()
    {
        return $this->capitalRaising;
    }

    /**
     * Set buyer
     *
     * @param string $buyer
     * @return SpkOppReqCustomers
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer
     *
     * @return string 
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     * @return SpkOppReqCustomers
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string 
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set isSrOnly
     *
     * @param string $isSrOnly
     * @return SpkOppReqCustomers
     */
    public function setIsSrOnly($isSrOnly)
    {
        $this->isSrOnly = $isSrOnly;

        return $this;
    }

    /**
     * Get isSrOnly
     *
     * @return string 
     */
    public function getIsSrOnly()
    {
        return $this->isSrOnly;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return SpkOppReqCustomers
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return SpkOppReqCustomers
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set emailOnly
     *
     * @param string $emailOnly
     * @return SpkOppReqCustomers
     */
    public function setEmailOnly($emailOnly)
    {
        $this->emailOnly = $emailOnly;

        return $this;
    }

    /**
     * Get emailOnly
     *
     * @return string 
     */
    public function getEmailOnly()
    {
        return $this->emailOnly;
    }

    /**
     * Set notPrivateClient
     *
     * @param string $notPrivateClient
     * @return SpkOppReqCustomers
     */
    public function setNotPrivateClient($notPrivateClient)
    {
        $this->notPrivateClient = $notPrivateClient;

        return $this;
    }

    /**
     * Get notPrivateClient
     *
     * @return string 
     */
    public function getNotPrivateClient()
    {
        return $this->notPrivateClient;
    }
}
