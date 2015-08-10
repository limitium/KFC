<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestment
 *
 */
class SpkInvestment
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
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
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
    private $comments;

    /**
     * @var \DateTime
     *
     */
    private $updated;

    /**
     * @var string
     *
     */
    private $segment;

    private $landlords;
    private $tenants;
    private $blocks;

    public function __construct()
    {
        $this->landlords = new ArrayCollection();
        $this->tenants = new ArrayCollection();
        $this->blocks = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * @param string $spkPropertyid
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;
    }

    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * @param string $createuser
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @param \DateTime $createdate
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;
    }

    /**
     * @return string
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * @param string $modifyuser
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;
    }

    /**
     * @return \DateTime
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * @param \DateTime $modifydate
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;
    }

    /**
     * @return string
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * @param string $seccodeid
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * @param string $nameRus
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;
    }

    /**
     * @return string
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * @param string $nameEng
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * @param string $propertyType
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @param string $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }


    /**
     * @var \AppBundle\Entity\SpkProperty
     */
    private $property;


    /**
     * Set property
     *
     * @param \AppBundle\Entity\SpkProperty $property
     * @return SpkInvestment
     */
    public function setProperty(\AppBundle\Entity\SpkProperty $property = null)
    {
        $this->property = $property;
        $property->setInvestment($this);
        return $this;
    }

    /**
     * Get property
     *
     * @return \AppBundle\Entity\SpkProperty
     */
    public function getProperty()
    {
        return $this->property;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLandlords()
    {
        return $this->landlords;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTenants()
    {
        return $this->tenants;
    }
    /**
     * @return ArrayCollection
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
}
