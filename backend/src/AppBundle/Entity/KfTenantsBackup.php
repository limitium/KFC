<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTenantsBackup
 *
 * @ORM\Table(name="kf_tenants_backup")
 * @ORM\Entity
 */
class KfTenantsBackup
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_TENANTSID", type="string", length=12, nullable=false)
     */
    private $spkTenantsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="CURRENT_CONTACT", type="string", length=1, nullable=true)
     */
    private $currentContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT_TYPE", type="string", length=32, nullable=true)
     */
    private $contactType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var float
     *
     * @ORM\Column(name="AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="PERIOD", type="string", length=32, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTALRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalrate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $opexrate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXINCLUDE", type="string", length=1, nullable=true)
     */
    private $opexinclude;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEXCUR", type="string", length=32, nullable=true)
     */
    private $opexcur;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="VATINCLUDE", type="string", length=1, nullable=true)
     */
    private $vatinclude;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEXATION", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $indexation;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPOSIT", type="string", length=32, nullable=true)
     */
    private $deposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARKINGLOTS", type="integer", nullable=true)
     */
    private $parkinglots;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKINGRATE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingrate;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKINGCUR", type="string", length=32, nullable=true)
     */
    private $parkingcur;

    /**
     * @var integer
     *
     * @ORM\Column(name="WORKPLACES", type="integer", nullable=true)
     */
    private $workplaces;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="text", length=16, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="BREAKOPTION", type="string", length=1, nullable=true)
     */
    private $breakoption;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTOPROLONG", type="string", length=1, nullable=true)
     */
    private $autoprolong;

    /**
     * @var string
     *
     * @ORM\Column(name="RIGHTSUBLEASE", type="string", length=32, nullable=true)
     */
    private $rightsublease;

    /**
     * @var string
     *
     * @ORM\Column(name="REMINDER", type="string", length=1, nullable=true)
     */
    private $reminder;

    /**
     * @var string
     *
     * @ORM\Column(name="MANACTIVITYID", type="string", length=12, nullable=true)
     */
    private $manactivityid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSACTIVITYID", type="string", length=12, nullable=true)
     */
    private $consactivityid;

    /**
     * @var string
     *
     * @ORM\Column(name="PENALTIES", type="string", length=64, nullable=true)
     */
    private $penalties;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTALCUR", type="string", length=32, nullable=true)
     */
    private $rentalcur;

    /**
     * @var string
     *
     * @ORM\Column(name="SMALL_ADDRESS", type="string", length=255, nullable=true)
     */
    private $smallAddress;



    /**
     * Set spkTenantsid
     *
     * @param string $spkTenantsid
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
     * @return KfTenantsBackup
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
