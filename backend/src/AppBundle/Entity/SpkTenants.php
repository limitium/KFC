<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkTenants
 *
 */
class SpkTenants
{
    /**
     * @var string
     *
     */
    private $spkTenantsid;

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
    private $currentContact;

    /**
     * @var string
     *
     */
    private $contactType;

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
     * @var float
     *
     */
    private $area;

    /**
     * @var string
     *
     */
    private $period;

    /**
     * @var string
     *
     */
    private $rentalrate;

    /**
     * @var string
     *
     */
    private $opexrate;

    /**
     * @var string
     *
     */
    private $opexinclude;

    /**
     * @var string
     *
     */
    private $opexcur;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $vatinclude;

    /**
     * @var string
     *
     */
    private $indexation;

    /**
     * @var string
     *
     */
    private $deposit;

    /**
     * @var integer
     *
     */
    private $parkinglots;

    /**
     * @var string
     *
     */
    private $parkingrate;

    /**
     * @var string
     *
     */
    private $parkingcur;

    /**
     * @var integer
     *
     */
    private $workplaces;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $breakoption;

    /**
     * @var string
     *
     */
    private $autoprolong;

    /**
     * @var string
     *
     */
    private $rightsublease;

    /**
     * @var string
     *
     */
    private $reminder;

    /**
     * @var string
     *
     */
    private $manactivityid;

    /**
     * @var string
     *
     */
    private $consactivityid;

    /**
     * @var string
     *
     */
    private $penalties;

    /**
     * @var string
     *
     */
    private $rentalcur;

    /**
     * @var string
     *
     */
    private $smallAddress;



    /**
     * Set spkTenantsid
     *
     * @param string $spkTenantsid
     * @return SpkTenants
     */
    public function setSpkTenantsid($spkTenantsid)
    {
        $this->spkTenantsid = $spkTenantsid;

        return $this;
    }

    /**
     * Get spkTenantsid
     *
     * @return string 
     */
    public function getSpkTenantsid()
    {
        return $this->spkTenantsid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkTenants
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
     * @return SpkTenants
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
     * @return SpkTenants
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
     * @return SpkTenants
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
     * @return SpkTenants
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
     * @return SpkTenants
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
     * @return SpkTenants
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
     * Set currentContact
     *
     * @param string $currentContact
     * @return SpkTenants
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

    /**
     * Set contactType
     *
     * @param string $contactType
     * @return SpkTenants
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
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return SpkTenants
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
     * @return SpkTenants
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
     * Set area
     *
     * @param float $area
     * @return SpkTenants
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return SpkTenants
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set rentalrate
     *
     * @param string $rentalrate
     * @return SpkTenants
     */
    public function setRentalrate($rentalrate)
    {
        $this->rentalrate = $rentalrate;

        return $this;
    }

    /**
     * Get rentalrate
     *
     * @return string 
     */
    public function getRentalrate()
    {
        return $this->rentalrate;
    }

    /**
     * Set opexrate
     *
     * @param string $opexrate
     * @return SpkTenants
     */
    public function setOpexrate($opexrate)
    {
        $this->opexrate = $opexrate;

        return $this;
    }

    /**
     * Get opexrate
     *
     * @return string 
     */
    public function getOpexrate()
    {
        return $this->opexrate;
    }

    /**
     * Set opexinclude
     *
     * @param string $opexinclude
     * @return SpkTenants
     */
    public function setOpexinclude($opexinclude)
    {
        $this->opexinclude = $opexinclude;

        return $this;
    }

    /**
     * Get opexinclude
     *
     * @return string 
     */
    public function getOpexinclude()
    {
        return $this->opexinclude;
    }

    /**
     * Set opexcur
     *
     * @param string $opexcur
     * @return SpkTenants
     */
    public function setOpexcur($opexcur)
    {
        $this->opexcur = $opexcur;

        return $this;
    }

    /**
     * Get opexcur
     *
     * @return string 
     */
    public function getOpexcur()
    {
        return $this->opexcur;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return SpkTenants
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set vatinclude
     *
     * @param string $vatinclude
     * @return SpkTenants
     */
    public function setVatinclude($vatinclude)
    {
        $this->vatinclude = $vatinclude;

        return $this;
    }

    /**
     * Get vatinclude
     *
     * @return string 
     */
    public function getVatinclude()
    {
        return $this->vatinclude;
    }

    /**
     * Set indexation
     *
     * @param string $indexation
     * @return SpkTenants
     */
    public function setIndexation($indexation)
    {
        $this->indexation = $indexation;

        return $this;
    }

    /**
     * Get indexation
     *
     * @return string 
     */
    public function getIndexation()
    {
        return $this->indexation;
    }

    /**
     * Set deposit
     *
     * @param string $deposit
     * @return SpkTenants
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return string 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set parkinglots
     *
     * @param integer $parkinglots
     * @return SpkTenants
     */
    public function setParkinglots($parkinglots)
    {
        $this->parkinglots = $parkinglots;

        return $this;
    }

    /**
     * Get parkinglots
     *
     * @return integer 
     */
    public function getParkinglots()
    {
        return $this->parkinglots;
    }

    /**
     * Set parkingrate
     *
     * @param string $parkingrate
     * @return SpkTenants
     */
    public function setParkingrate($parkingrate)
    {
        $this->parkingrate = $parkingrate;

        return $this;
    }

    /**
     * Get parkingrate
     *
     * @return string 
     */
    public function getParkingrate()
    {
        return $this->parkingrate;
    }

    /**
     * Set parkingcur
     *
     * @param string $parkingcur
     * @return SpkTenants
     */
    public function setParkingcur($parkingcur)
    {
        $this->parkingcur = $parkingcur;

        return $this;
    }

    /**
     * Get parkingcur
     *
     * @return string 
     */
    public function getParkingcur()
    {
        return $this->parkingcur;
    }

    /**
     * Set workplaces
     *
     * @param integer $workplaces
     * @return SpkTenants
     */
    public function setWorkplaces($workplaces)
    {
        $this->workplaces = $workplaces;

        return $this;
    }

    /**
     * Get workplaces
     *
     * @return integer 
     */
    public function getWorkplaces()
    {
        return $this->workplaces;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkTenants
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set breakoption
     *
     * @param string $breakoption
     * @return SpkTenants
     */
    public function setBreakoption($breakoption)
    {
        $this->breakoption = $breakoption;

        return $this;
    }

    /**
     * Get breakoption
     *
     * @return string 
     */
    public function getBreakoption()
    {
        return $this->breakoption;
    }

    /**
     * Set autoprolong
     *
     * @param string $autoprolong
     * @return SpkTenants
     */
    public function setAutoprolong($autoprolong)
    {
        $this->autoprolong = $autoprolong;

        return $this;
    }

    /**
     * Get autoprolong
     *
     * @return string 
     */
    public function getAutoprolong()
    {
        return $this->autoprolong;
    }

    /**
     * Set rightsublease
     *
     * @param string $rightsublease
     * @return SpkTenants
     */
    public function setRightsublease($rightsublease)
    {
        $this->rightsublease = $rightsublease;

        return $this;
    }

    /**
     * Get rightsublease
     *
     * @return string 
     */
    public function getRightsublease()
    {
        return $this->rightsublease;
    }

    /**
     * Set reminder
     *
     * @param string $reminder
     * @return SpkTenants
     */
    public function setReminder($reminder)
    {
        $this->reminder = $reminder;

        return $this;
    }

    /**
     * Get reminder
     *
     * @return string 
     */
    public function getReminder()
    {
        return $this->reminder;
    }

    /**
     * Set manactivityid
     *
     * @param string $manactivityid
     * @return SpkTenants
     */
    public function setManactivityid($manactivityid)
    {
        $this->manactivityid = $manactivityid;

        return $this;
    }

    /**
     * Get manactivityid
     *
     * @return string 
     */
    public function getManactivityid()
    {
        return $this->manactivityid;
    }

    /**
     * Set consactivityid
     *
     * @param string $consactivityid
     * @return SpkTenants
     */
    public function setConsactivityid($consactivityid)
    {
        $this->consactivityid = $consactivityid;

        return $this;
    }

    /**
     * Get consactivityid
     *
     * @return string 
     */
    public function getConsactivityid()
    {
        return $this->consactivityid;
    }

    /**
     * Set penalties
     *
     * @param string $penalties
     * @return SpkTenants
     */
    public function setPenalties($penalties)
    {
        $this->penalties = $penalties;

        return $this;
    }

    /**
     * Get penalties
     *
     * @return string 
     */
    public function getPenalties()
    {
        return $this->penalties;
    }

    /**
     * Set rentalcur
     *
     * @param string $rentalcur
     * @return SpkTenants
     */
    public function setRentalcur($rentalcur)
    {
        $this->rentalcur = $rentalcur;

        return $this;
    }

    /**
     * Get rentalcur
     *
     * @return string 
     */
    public function getRentalcur()
    {
        return $this->rentalcur;
    }

    /**
     * Set smallAddress
     *
     * @param string $smallAddress
     * @return SpkTenants
     */
    public function setSmallAddress($smallAddress)
    {
        $this->smallAddress = $smallAddress;

        return $this;
    }

    /**
     * Get smallAddress
     *
     * @return string 
     */
    public function getSmallAddress()
    {
        return $this->smallAddress;
    }
}
