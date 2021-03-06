<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndustrial
 *
 */
class SpkIndustrial
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
    private $comments;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $parentBlock;

    /**
     * @var string
     *
     */
    private $complexid;

    /**
     * @var \DateTime
     *
     */
    private $updated;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * @return SpkIndustrial
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
     * Set comments
     *
     * @param string $comments
     * @return SpkIndustrial
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
     * Set parentid
     *
     * @param string $parentid
     * @return SpkIndustrial
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
     * Set propertyNumber
     *
     * @param string $propertyNumber
     * @return SpkIndustrial
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return SpkIndustrial
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
     * Set parentBlock
     *
     * @param string $parentBlock
     * @return SpkIndustrial
     */
    public function setParentBlock($parentBlock)
    {
        $this->parentBlock = $parentBlock;

        return $this;
    }

    /**
     * Get parentBlock
     *
     * @return string 
     */
    public function getParentBlock()
    {
        return $this->parentBlock;
    }

    /**
     * Set complexid
     *
     * @param string $complexid
     * @return SpkIndustrial
     */
    public function setComplexid($complexid)
    {
        $this->complexid = $complexid;

        return $this;
    }

    /**
     * Get complexid
     *
     * @return string 
     */
    public function getComplexid()
    {
        return $this->complexid;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return SpkIndustrial
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
}
