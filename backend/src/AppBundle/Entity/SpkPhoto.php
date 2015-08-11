<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPhoto
 */
class SpkPhoto
{
    /**
     * @var string
     */
    private $spkPhotoid;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $photoType;

    /**
     * @var integer
     */
    private $photoOrder;

    /**
     * @var string
     */
    private $brief;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var integer
     */
    private $siteOrder;

    /**
     * @var integer
     */
    private $briefOrder;

    /**
     * @var \AppBundle\Entity\SpkInvestment
     */
    private $investment;

    /**
     * @var \AppBundle\Entity\User
     */
    private $createdBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $updatedBy;


    /**
     * Get spkPhotoid
     *
     * @return string 
     */
    public function getSpkPhotoid()
    {
        return $this->spkPhotoid;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return SpkPhoto
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return SpkPhoto
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
     * Set description
     *
     * @param string $description
     * @return SpkPhoto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photoType
     *
     * @param string $photoType
     * @return SpkPhoto
     */
    public function setPhotoType($photoType)
    {
        $this->photoType = $photoType;

        return $this;
    }

    /**
     * Get photoType
     *
     * @return string 
     */
    public function getPhotoType()
    {
        return $this->photoType;
    }

    /**
     * Set photoOrder
     *
     * @param integer $photoOrder
     * @return SpkPhoto
     */
    public function setPhotoOrder($photoOrder)
    {
        $this->photoOrder = $photoOrder;

        return $this;
    }

    /**
     * Get photoOrder
     *
     * @return integer 
     */
    public function getPhotoOrder()
    {
        return $this->photoOrder;
    }

    /**
     * Set brief
     *
     * @param string $brief
     * @return SpkPhoto
     */
    public function setBrief($brief)
    {
        $this->brief = $brief;

        return $this;
    }

    /**
     * Get brief
     *
     * @return string 
     */
    public function getBrief()
    {
        return $this->brief;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return SpkPhoto
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set siteOrder
     *
     * @param integer $siteOrder
     * @return SpkPhoto
     */
    public function setSiteOrder($siteOrder)
    {
        $this->siteOrder = $siteOrder;

        return $this;
    }

    /**
     * Get siteOrder
     *
     * @return integer 
     */
    public function getSiteOrder()
    {
        return $this->siteOrder;
    }

    /**
     * Set briefOrder
     *
     * @param integer $briefOrder
     * @return SpkPhoto
     */
    public function setBriefOrder($briefOrder)
    {
        $this->briefOrder = $briefOrder;

        return $this;
    }

    /**
     * Get briefOrder
     *
     * @return integer 
     */
    public function getBriefOrder()
    {
        return $this->briefOrder;
    }

    /**
     * Set investment
     *
     * @param \AppBundle\Entity\SpkInvestment $investment
     * @return SpkPhoto
     */
    public function setInvestment(\AppBundle\Entity\SpkInvestment $investment = null)
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Get investment
     *
     * @return \AppBundle\Entity\SpkInvestment 
     */
    public function getInvestment()
    {
        return $this->investment;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     * @return SpkPhoto
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
     * Set updatedBy
     *
     * @param \AppBundle\Entity\User $updatedBy
     * @return SpkPhoto
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
}
