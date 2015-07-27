<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetDescription
 *
 */
class SpkRetDescription
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
    private $briefRus;

    /**
     * @var string
     *
     */
    private $briefEng;

    /**
     * @var string
     *
     */
    private $siteRus;

    /**
     * @var string
     *
     */
    private $siteEng;

    /**
     * @var string
     *
     */
    private $anchorRus;

    /**
     * @var string
     *
     */
    private $anchorEng;

    /**
     * @var integer
     *
     */
    private $ord;

    /**
     * @var string
     *
     */
    private $specialOffer;

    /**
     * @var string
     *
     */
    private $hideNumber;

    /**
     * @var string
     *
     */
    private $hideTarea;

    /**
     * @var string
     *
     */
    private $direction;

    /**
     * @var string
     *
     */
    private $specialDescriptionRus;

    /**
     * @var string
     *
     */
    private $specialDescriptionEng;

    /**
     * @var string
     *
     */
    private $locationDescription;

    /**
     * @var string
     *
     */
    private $areaDescription;

    /**
     * @var string
     *
     */
    private $entranceDescription;

    /**
     * @var string
     *
     */
    private $tenant;

    /**
     * @var string
     *
     */
    private $shopWindow;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetDescription
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
     * @return SpkRetDescription
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
     * @return SpkRetDescription
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
     * @return SpkRetDescription
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
     * @return SpkRetDescription
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
     * Set briefRus
     *
     * @param string $briefRus
     * @return SpkRetDescription
     */
    public function setBriefRus($briefRus)
    {
        $this->briefRus = $briefRus;

        return $this;
    }

    /**
     * Get briefRus
     *
     * @return string 
     */
    public function getBriefRus()
    {
        return $this->briefRus;
    }

    /**
     * Set briefEng
     *
     * @param string $briefEng
     * @return SpkRetDescription
     */
    public function setBriefEng($briefEng)
    {
        $this->briefEng = $briefEng;

        return $this;
    }

    /**
     * Get briefEng
     *
     * @return string 
     */
    public function getBriefEng()
    {
        return $this->briefEng;
    }

    /**
     * Set siteRus
     *
     * @param string $siteRus
     * @return SpkRetDescription
     */
    public function setSiteRus($siteRus)
    {
        $this->siteRus = $siteRus;

        return $this;
    }

    /**
     * Get siteRus
     *
     * @return string 
     */
    public function getSiteRus()
    {
        return $this->siteRus;
    }

    /**
     * Set siteEng
     *
     * @param string $siteEng
     * @return SpkRetDescription
     */
    public function setSiteEng($siteEng)
    {
        $this->siteEng = $siteEng;

        return $this;
    }

    /**
     * Get siteEng
     *
     * @return string 
     */
    public function getSiteEng()
    {
        return $this->siteEng;
    }

    /**
     * Set anchorRus
     *
     * @param string $anchorRus
     * @return SpkRetDescription
     */
    public function setAnchorRus($anchorRus)
    {
        $this->anchorRus = $anchorRus;

        return $this;
    }

    /**
     * Get anchorRus
     *
     * @return string 
     */
    public function getAnchorRus()
    {
        return $this->anchorRus;
    }

    /**
     * Set anchorEng
     *
     * @param string $anchorEng
     * @return SpkRetDescription
     */
    public function setAnchorEng($anchorEng)
    {
        $this->anchorEng = $anchorEng;

        return $this;
    }

    /**
     * Get anchorEng
     *
     * @return string 
     */
    public function getAnchorEng()
    {
        return $this->anchorEng;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return SpkRetDescription
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set specialOffer
     *
     * @param string $specialOffer
     * @return SpkRetDescription
     */
    public function setSpecialOffer($specialOffer)
    {
        $this->specialOffer = $specialOffer;

        return $this;
    }

    /**
     * Get specialOffer
     *
     * @return string 
     */
    public function getSpecialOffer()
    {
        return $this->specialOffer;
    }

    /**
     * Set hideNumber
     *
     * @param string $hideNumber
     * @return SpkRetDescription
     */
    public function setHideNumber($hideNumber)
    {
        $this->hideNumber = $hideNumber;

        return $this;
    }

    /**
     * Get hideNumber
     *
     * @return string 
     */
    public function getHideNumber()
    {
        return $this->hideNumber;
    }

    /**
     * Set hideTarea
     *
     * @param string $hideTarea
     * @return SpkRetDescription
     */
    public function setHideTarea($hideTarea)
    {
        $this->hideTarea = $hideTarea;

        return $this;
    }

    /**
     * Get hideTarea
     *
     * @return string 
     */
    public function getHideTarea()
    {
        return $this->hideTarea;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return SpkRetDescription
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set specialDescriptionRus
     *
     * @param string $specialDescriptionRus
     * @return SpkRetDescription
     */
    public function setSpecialDescriptionRus($specialDescriptionRus)
    {
        $this->specialDescriptionRus = $specialDescriptionRus;

        return $this;
    }

    /**
     * Get specialDescriptionRus
     *
     * @return string 
     */
    public function getSpecialDescriptionRus()
    {
        return $this->specialDescriptionRus;
    }

    /**
     * Set specialDescriptionEng
     *
     * @param string $specialDescriptionEng
     * @return SpkRetDescription
     */
    public function setSpecialDescriptionEng($specialDescriptionEng)
    {
        $this->specialDescriptionEng = $specialDescriptionEng;

        return $this;
    }

    /**
     * Get specialDescriptionEng
     *
     * @return string 
     */
    public function getSpecialDescriptionEng()
    {
        return $this->specialDescriptionEng;
    }

    /**
     * Set locationDescription
     *
     * @param string $locationDescription
     * @return SpkRetDescription
     */
    public function setLocationDescription($locationDescription)
    {
        $this->locationDescription = $locationDescription;

        return $this;
    }

    /**
     * Get locationDescription
     *
     * @return string 
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * Set areaDescription
     *
     * @param string $areaDescription
     * @return SpkRetDescription
     */
    public function setAreaDescription($areaDescription)
    {
        $this->areaDescription = $areaDescription;

        return $this;
    }

    /**
     * Get areaDescription
     *
     * @return string 
     */
    public function getAreaDescription()
    {
        return $this->areaDescription;
    }

    /**
     * Set entranceDescription
     *
     * @param string $entranceDescription
     * @return SpkRetDescription
     */
    public function setEntranceDescription($entranceDescription)
    {
        $this->entranceDescription = $entranceDescription;

        return $this;
    }

    /**
     * Get entranceDescription
     *
     * @return string 
     */
    public function getEntranceDescription()
    {
        return $this->entranceDescription;
    }

    /**
     * Set tenant
     *
     * @param string $tenant
     * @return SpkRetDescription
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;

        return $this;
    }

    /**
     * Get tenant
     *
     * @return string 
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * Set shopWindow
     *
     * @param string $shopWindow
     * @return SpkRetDescription
     */
    public function setShopWindow($shopWindow)
    {
        $this->shopWindow = $shopWindow;

        return $this;
    }

    /**
     * Get shopWindow
     *
     * @return string 
     */
    public function getShopWindow()
    {
        return $this->shopWindow;
    }
}
