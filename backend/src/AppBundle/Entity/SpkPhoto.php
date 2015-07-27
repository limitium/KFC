<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkPhoto
 *
 */
class SpkPhoto
{
    /**
     * @var string
     *
     */
    private $spkPhotoid;

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
    private $description;

    /**
     * @var string
     *
     */
    private $photoType;

    /**
     * @var integer
     *
     */
    private $photoOrder;

    /**
     * @var string
     *
     */
    private $brief;

    /**
     * @var string
     *
     */
    private $filename;

    /**
     * @var integer
     *
     */
    private $siteOrder;

    /**
     * @var integer
     *
     */
    private $briefOrder;



    /**
     * Set spkPhotoid
     *
     * @param string $spkPhotoid
     * @return SpkPhoto
     */
    public function setSpkPhotoid($spkPhotoid)
    {
        $this->spkPhotoid = $spkPhotoid;

        return $this;
    }

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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkPhoto
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
     * @return SpkPhoto
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return SpkPhoto
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
}
