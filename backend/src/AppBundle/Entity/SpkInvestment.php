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
    private $encumbrances;
    private $investSegments;

    public function __construct()
    {
        $this->landlords = new ArrayCollection();
        $this->tenants = new ArrayCollection();
        $this->blocks = new ArrayCollection();
        $this->encumbrances = new ArrayCollection();
        $this->investSegments = new ArrayCollection();
        $this->photos = new ArrayCollection();
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

    /**
     * @return ArrayCollection
     */
    public function getEncumbrances()
    {
        return $this->encumbrances;
    }

    /**
     * @param ArrayCollection $encumbrances
     */
    public function setEncumbrances($encumbrances)
    {
        $this->encumbrances = $encumbrances;
    }

    /**
     * @return ArrayCollection
     */
    public function getInvestSegments()
    {
        return $this->investSegments;
    }

    /**
     * @param ArrayCollection $investSegments
     */
    public function setInvestSegments($investSegments)
    {
        $this->investSegments = $investSegments;
    }

    /**
     * @param ArrayCollection $landlords
     */
    public function setLandlords($landlords)
    {
        $this->landlords = $landlords;
    }

    /**
     * @param ArrayCollection $tenants
     */
    public function setTenants($tenants)
    {
        $this->tenants = $tenants;
    }

    /**
     * @param ArrayCollection $blocks
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;
    }





    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photos;


    /**
     * Add blocks
     *
     * @param \AppBundle\Entity\SpkInvestBlocks $blocks
     * @return SpkInvestment
     */
    public function addBlock(\AppBundle\Entity\SpkInvestBlocks $blocks)
    {
        $this->blocks[] = $blocks;

        return $this;
    }

    /**
     * Remove blocks
     *
     * @param \AppBundle\Entity\SpkInvestBlocks $blocks
     */
    public function removeBlock(\AppBundle\Entity\SpkInvestBlocks $blocks)
    {
        $this->blocks->removeElement($blocks);
    }

    /**
     * Add encumbrances
     *
     * @param \AppBundle\Entity\SpkInvestEncumbrances $encumbrances
     * @return SpkInvestment
     */
    public function addEncumbrance(\AppBundle\Entity\SpkInvestEncumbrances $encumbrances)
    {
        $this->encumbrances[] = $encumbrances;

        return $this;
    }

    /**
     * Remove encumbrances
     *
     * @param \AppBundle\Entity\SpkInvestEncumbrances $encumbrances
     */
    public function removeEncumbrance(\AppBundle\Entity\SpkInvestEncumbrances $encumbrances)
    {
        $this->encumbrances->removeElement($encumbrances);
    }

    /**
     * Add investSegments
     *
     * @param \AppBundle\Entity\SpkInvestSegments $investSegments
     * @return SpkInvestment
     */
    public function addInvestSegment(\AppBundle\Entity\SpkInvestSegments $investSegments)
    {
        $this->investSegments[] = $investSegments;

        return $this;
    }

    /**
     * Remove investSegments
     *
     * @param \AppBundle\Entity\SpkInvestSegments $investSegments
     */
    public function removeInvestSegment(\AppBundle\Entity\SpkInvestSegments $investSegments)
    {
        $this->investSegments->removeElement($investSegments);
    }

    /**
     * Add photos
     *
     * @param \AppBundle\Entity\SpkPhoto $photos
     * @return SpkInvestment
     */
    public function addPhoto(\AppBundle\Entity\SpkPhoto $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \AppBundle\Entity\SpkPhoto $photos
     */
    public function removePhoto(\AppBundle\Entity\SpkPhoto $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add landlords
     *
     * @param \AppBundle\Entity\SpkLandlords $landlords
     * @return SpkInvestment
     */
    public function addLandlord(\AppBundle\Entity\SpkLandlords $landlords)
    {
        $this->landlords[] = $landlords;

        return $this;
    }

    /**
     * Remove landlords
     *
     * @param \AppBundle\Entity\SpkLandlords $landlords
     */
    public function removeLandlord(\AppBundle\Entity\SpkLandlords $landlords)
    {
        $this->landlords->removeElement($landlords);
    }

    /**
     * Add tenants
     *
     * @param \AppBundle\Entity\SpkTenants $tenants
     * @return SpkInvestment
     */
    public function addTenant(\AppBundle\Entity\SpkTenants $tenants)
    {
        $this->tenants[] = $tenants;

        return $this;
    }

    /**
     * Remove tenants
     *
     * @param \AppBundle\Entity\SpkTenants $tenants
     */
    public function removeTenant(\AppBundle\Entity\SpkTenants $tenants)
    {
        $this->tenants->removeElement($tenants);
    }
}
