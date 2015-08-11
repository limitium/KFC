<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactObjSrch
 *
 * @ORM\Table(name="KF_CONTACT_OBJ_SRCH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CONTACT_OBJ_SRCH_PRIMARY", columns={"KF_CONTACT_OBJ_SRCHID"})}, indexes={@ORM\Index(name="KF_CONTACT_OBJ_SRCH_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfContactObjSrch
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CONTACT_OBJ_SRCHID", type="string", length=12, nullable=false)
     */
    private $kfContactObjSrchid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SHOW_DATE", type="datetime", nullable=true)
     */
    private $showDate;

    /**
     * @var string
     *
     * @ORM\Column(name="INTERESTED", type="string", length=1, nullable=true)
     */
    private $interested;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEGALAUDITDATE", type="datetime", nullable=true)
     */
    private $legalauditdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CHOSEN_ONE", type="string", length=1, nullable=true)
     */
    private $chosenOne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CHOSEN_DATE", type="datetime", nullable=true)
     */
    private $chosenDate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TECHAUDITDATE", type="datetime", nullable=true)
     */
    private $techauditdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OFFERTA_DATE", type="datetime", nullable=true)
     */
    private $offertaDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_START_DATE", type="datetime", nullable=true)
     */
    private $leaseStartDate;



    /**
     * Set kfContactObjSrchid
     *
     * @param string $kfContactObjSrchid
     * @return KfContactObjSrch
     */
    public function setKfContactObjSrchid($kfContactObjSrchid)
    {
        $this->kfContactObjSrchid = $kfContactObjSrchid;

        return $this;
    }

    /**
     * Get kfContactObjSrchid
     *
     * @return string 
     */
    public function getKfContactObjSrchid()
    {
        return $this->kfContactObjSrchid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContactObjSrch
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfContactObjSrch
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
     * @return KfContactObjSrch
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
     * @return KfContactObjSrch
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
     * @return KfContactObjSrch
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfContactObjSrch
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
     * Set managerid
     *
     * @param string $managerid
     * @return KfContactObjSrch
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }

    /**
     * Set showDate
     *
     * @param \DateTime $showDate
     * @return KfContactObjSrch
     */
    public function setShowDate($showDate)
    {
        $this->showDate = $showDate;

        return $this;
    }

    /**
     * Get showDate
     *
     * @return \DateTime 
     */
    public function getShowDate()
    {
        return $this->showDate;
    }

    /**
     * Set interested
     *
     * @param string $interested
     * @return KfContactObjSrch
     */
    public function setInterested($interested)
    {
        $this->interested = $interested;

        return $this;
    }

    /**
     * Get interested
     *
     * @return string 
     */
    public function getInterested()
    {
        return $this->interested;
    }

    /**
     * Set legalauditdate
     *
     * @param \DateTime $legalauditdate
     * @return KfContactObjSrch
     */
    public function setLegalauditdate($legalauditdate)
    {
        $this->legalauditdate = $legalauditdate;

        return $this;
    }

    /**
     * Get legalauditdate
     *
     * @return \DateTime 
     */
    public function getLegalauditdate()
    {
        return $this->legalauditdate;
    }

    /**
     * Set chosenOne
     *
     * @param string $chosenOne
     * @return KfContactObjSrch
     */
    public function setChosenOne($chosenOne)
    {
        $this->chosenOne = $chosenOne;

        return $this;
    }

    /**
     * Get chosenOne
     *
     * @return string 
     */
    public function getChosenOne()
    {
        return $this->chosenOne;
    }

    /**
     * Set chosenDate
     *
     * @param \DateTime $chosenDate
     * @return KfContactObjSrch
     */
    public function setChosenDate($chosenDate)
    {
        $this->chosenDate = $chosenDate;

        return $this;
    }

    /**
     * Get chosenDate
     *
     * @return \DateTime 
     */
    public function getChosenDate()
    {
        return $this->chosenDate;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfContactObjSrch
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
     * Set techauditdate
     *
     * @param \DateTime $techauditdate
     * @return KfContactObjSrch
     */
    public function setTechauditdate($techauditdate)
    {
        $this->techauditdate = $techauditdate;

        return $this;
    }

    /**
     * Get techauditdate
     *
     * @return \DateTime 
     */
    public function getTechauditdate()
    {
        return $this->techauditdate;
    }

    /**
     * Set offertaDate
     *
     * @param \DateTime $offertaDate
     * @return KfContactObjSrch
     */
    public function setOffertaDate($offertaDate)
    {
        $this->offertaDate = $offertaDate;

        return $this;
    }

    /**
     * Get offertaDate
     *
     * @return \DateTime 
     */
    public function getOffertaDate()
    {
        return $this->offertaDate;
    }

    /**
     * Set leaseStartDate
     *
     * @param \DateTime $leaseStartDate
     * @return KfContactObjSrch
     */
    public function setLeaseStartDate($leaseStartDate)
    {
        $this->leaseStartDate = $leaseStartDate;

        return $this;
    }

    /**
     * Get leaseStartDate
     *
     * @return \DateTime 
     */
    public function getLeaseStartDate()
    {
        return $this->leaseStartDate;
    }
}
