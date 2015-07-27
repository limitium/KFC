<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResidential
 *
 */
class SpkResidential
{
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
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @var string
     *
     */
    private $nameEng;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var string
     *
     */
    private $propertyType;

    /**
     * @var string
     *
     */
    private $status;

    /**
     * @var string
     *
     */
    private $statusKf;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $oldid;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var \DateTime
     *
     */
    private $updated;

    /**
     * @var integer
     *
     */
    private $ordNewbuilding;

    /**
     * @var string
     *
     */
    private $newbuilding;

    /**
     * @var string
     *
     */
    private $dogovor;

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
     * @var string
     *
     */
    private $dogovorWoEnddate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResidential
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
     * @return SpkResidential
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
     * @return SpkResidential
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
     * @return SpkResidential
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
     * @return SpkResidential
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
     * Set id
     *
     * @param integer $id
     * @return SpkResidential
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameRus
     *
     * @param string $nameRus
     * @return SpkResidential
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string 
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set nameEng
     *
     * @param string $nameEng
     * @return SpkResidential
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string 
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return SpkResidential
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     * @return SpkResidential
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return SpkResidential
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusKf
     *
     * @param string $statusKf
     * @return SpkResidential
     */
    public function setStatusKf($statusKf)
    {
        $this->statusKf = $statusKf;

        return $this;
    }

    /**
     * Get statusKf
     *
     * @return string 
     */
    public function getStatusKf()
    {
        return $this->statusKf;
    }

    /**
     * Set parentid
     *
     * @param string $parentid
     * @return SpkResidential
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return string 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkResidential
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
     * Set propertyNumber
     *
     * @param string $propertyNumber
     * @return SpkResidential
     */
    public function setPropertyNumber($propertyNumber)
    {
        $this->propertyNumber = $propertyNumber;

        return $this;
    }

    /**
     * Get propertyNumber
     *
     * @return string 
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * Set oldid
     *
     * @param string $oldid
     * @return SpkResidential
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return string 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return SpkResidential
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return SpkResidential
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set ordNewbuilding
     *
     * @param integer $ordNewbuilding
     * @return SpkResidential
     */
    public function setOrdNewbuilding($ordNewbuilding)
    {
        $this->ordNewbuilding = $ordNewbuilding;

        return $this;
    }

    /**
     * Get ordNewbuilding
     *
     * @return integer 
     */
    public function getOrdNewbuilding()
    {
        return $this->ordNewbuilding;
    }

    /**
     * Set newbuilding
     *
     * @param string $newbuilding
     * @return SpkResidential
     */
    public function setNewbuilding($newbuilding)
    {
        $this->newbuilding = $newbuilding;

        return $this;
    }

    /**
     * Get newbuilding
     *
     * @return string 
     */
    public function getNewbuilding()
    {
        return $this->newbuilding;
    }

    /**
     * Set dogovor
     *
     * @param string $dogovor
     * @return SpkResidential
     */
    public function setDogovor($dogovor)
    {
        $this->dogovor = $dogovor;

        return $this;
    }

    /**
     * Get dogovor
     *
     * @return string 
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return SpkResidential
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
     * @return SpkResidential
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
     * Set dogovorWoEnddate
     *
     * @param string $dogovorWoEnddate
     * @return SpkResidential
     */
    public function setDogovorWoEnddate($dogovorWoEnddate)
    {
        $this->dogovorWoEnddate = $dogovorWoEnddate;

        return $this;
    }

    /**
     * Get dogovorWoEnddate
     *
     * @return string 
     */
    public function getDogovorWoEnddate()
    {
        return $this->dogovorWoEnddate;
    }
}
