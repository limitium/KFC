<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetBkTech
 *
 */
class SpkRetBkTech
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
    private $storeyNumber;

    /**
     * @var float
     *
     */
    private $totalArea;

    /**
     * @var string
     *
     */
    private $vacant;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var string
     *
     */
    private $marketName;

    /**
     * @var string
     *
     */
    private $profileid;

    /**
     * @var string
     *
     */
    private $subprofileid;

    /**
     * @var string
     *
     */
    private $anchor;

    /**
     * @var string
     *
     */
    private $entertainment;

    /**
     * @var string
     *
     */
    private $brands;

    /**
     * @var float
     *
     */
    private $industrialArea;

    /**
     * @var string
     *
     */
    private $industrialCost;

    /**
     * @var string
     *
     */
    private $industrialOutside;

    /**
     * @var float
     *
     */
    private $officeArea;

    /**
     * @var string
     *
     */
    private $officeCost;

    /**
     * @var string
     *
     */
    private $officeOutside;

    /**
     * @var string
     *
     */
    private $electricity;

    /**
     * @var string
     *
     */
    private $water;

    /**
     * @var string
     *
     */
    private $gaz;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;

    /**
     * @var string
     *
     */
    private $areaid;

    /**
     * @var integer
     *
     */
    private $kfOrder;

    /**
     * @var string
     *
     */
    private $additionalNeeds;

    /**
     * @var string
     *
     */
    private $shopName;

    /**
     * @var integer
     *
     */
    private $storeyMax;

    /**
     * @var string
     *
     */
    private $fitout;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetBkTech
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
     * @return SpkRetBkTech
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
     * @return SpkRetBkTech
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
     * @return SpkRetBkTech
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
     * @return SpkRetBkTech
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
     * Set storeyNumber
     *
     * @param integer $storeyNumber
     * @return SpkRetBkTech
     */
    public function setStoreyNumber($storeyNumber)
    {
        $this->storeyNumber = $storeyNumber;

        return $this;
    }

    /**
     * Get storeyNumber
     *
     * @return integer 
     */
    public function getStoreyNumber()
    {
        return $this->storeyNumber;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return SpkRetBkTech
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set vacant
     *
     * @param string $vacant
     * @return SpkRetBkTech
     */
    public function setVacant($vacant)
    {
        $this->vacant = $vacant;

        return $this;
    }

    /**
     * Get vacant
     *
     * @return string 
     */
    public function getVacant()
    {
        return $this->vacant;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkRetBkTech
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
     * Set marketName
     *
     * @param string $marketName
     * @return SpkRetBkTech
     */
    public function setMarketName($marketName)
    {
        $this->marketName = $marketName;

        return $this;
    }

    /**
     * Get marketName
     *
     * @return string 
     */
    public function getMarketName()
    {
        return $this->marketName;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return SpkRetBkTech
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return SpkRetBkTech
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }

    /**
     * Set anchor
     *
     * @param string $anchor
     * @return SpkRetBkTech
     */
    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;

        return $this;
    }

    /**
     * Get anchor
     *
     * @return string 
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * Set entertainment
     *
     * @param string $entertainment
     * @return SpkRetBkTech
     */
    public function setEntertainment($entertainment)
    {
        $this->entertainment = $entertainment;

        return $this;
    }

    /**
     * Get entertainment
     *
     * @return string 
     */
    public function getEntertainment()
    {
        return $this->entertainment;
    }

    /**
     * Set brands
     *
     * @param string $brands
     * @return SpkRetBkTech
     */
    public function setBrands($brands)
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * Get brands
     *
     * @return string 
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return SpkRetBkTech
     */
    public function setIndustrialArea($industrialArea)
    {
        $this->industrialArea = $industrialArea;

        return $this;
    }

    /**
     * Get industrialArea
     *
     * @return float 
     */
    public function getIndustrialArea()
    {
        return $this->industrialArea;
    }

    /**
     * Set industrialCost
     *
     * @param string $industrialCost
     * @return SpkRetBkTech
     */
    public function setIndustrialCost($industrialCost)
    {
        $this->industrialCost = $industrialCost;

        return $this;
    }

    /**
     * Get industrialCost
     *
     * @return string 
     */
    public function getIndustrialCost()
    {
        return $this->industrialCost;
    }

    /**
     * Set industrialOutside
     *
     * @param string $industrialOutside
     * @return SpkRetBkTech
     */
    public function setIndustrialOutside($industrialOutside)
    {
        $this->industrialOutside = $industrialOutside;

        return $this;
    }

    /**
     * Get industrialOutside
     *
     * @return string 
     */
    public function getIndustrialOutside()
    {
        return $this->industrialOutside;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return SpkRetBkTech
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    /**
     * Get officeArea
     *
     * @return float 
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Set officeCost
     *
     * @param string $officeCost
     * @return SpkRetBkTech
     */
    public function setOfficeCost($officeCost)
    {
        $this->officeCost = $officeCost;

        return $this;
    }

    /**
     * Get officeCost
     *
     * @return string 
     */
    public function getOfficeCost()
    {
        return $this->officeCost;
    }

    /**
     * Set officeOutside
     *
     * @param string $officeOutside
     * @return SpkRetBkTech
     */
    public function setOfficeOutside($officeOutside)
    {
        $this->officeOutside = $officeOutside;

        return $this;
    }

    /**
     * Get officeOutside
     *
     * @return string 
     */
    public function getOfficeOutside()
    {
        return $this->officeOutside;
    }

    /**
     * Set electricity
     *
     * @param string $electricity
     * @return SpkRetBkTech
     */
    public function setElectricity($electricity)
    {
        $this->electricity = $electricity;

        return $this;
    }

    /**
     * Get electricity
     *
     * @return string 
     */
    public function getElectricity()
    {
        return $this->electricity;
    }

    /**
     * Set water
     *
     * @param string $water
     * @return SpkRetBkTech
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return string 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set gaz
     *
     * @param string $gaz
     * @return SpkRetBkTech
     */
    public function setGaz($gaz)
    {
        $this->gaz = $gaz;

        return $this;
    }

    /**
     * Get gaz
     *
     * @return string 
     */
    public function getGaz()
    {
        return $this->gaz;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetBkTech
     */
    public function setCommentsRus($commentsRus)
    {
        $this->commentsRus = $commentsRus;

        return $this;
    }

    /**
     * Get commentsRus
     *
     * @return string 
     */
    public function getCommentsRus()
    {
        return $this->commentsRus;
    }

    /**
     * Set commentsEng
     *
     * @param string $commentsEng
     * @return SpkRetBkTech
     */
    public function setCommentsEng($commentsEng)
    {
        $this->commentsEng = $commentsEng;

        return $this;
    }

    /**
     * Get commentsEng
     *
     * @return string 
     */
    public function getCommentsEng()
    {
        return $this->commentsEng;
    }

    /**
     * Set areaid
     *
     * @param string $areaid
     * @return SpkRetBkTech
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set kfOrder
     *
     * @param integer $kfOrder
     * @return SpkRetBkTech
     */
    public function setKfOrder($kfOrder)
    {
        $this->kfOrder = $kfOrder;

        return $this;
    }

    /**
     * Get kfOrder
     *
     * @return integer 
     */
    public function getKfOrder()
    {
        return $this->kfOrder;
    }

    /**
     * Set additionalNeeds
     *
     * @param string $additionalNeeds
     * @return SpkRetBkTech
     */
    public function setAdditionalNeeds($additionalNeeds)
    {
        $this->additionalNeeds = $additionalNeeds;

        return $this;
    }

    /**
     * Get additionalNeeds
     *
     * @return string 
     */
    public function getAdditionalNeeds()
    {
        return $this->additionalNeeds;
    }

    /**
     * Set shopName
     *
     * @param string $shopName
     * @return SpkRetBkTech
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;

        return $this;
    }

    /**
     * Get shopName
     *
     * @return string 
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Set storeyMax
     *
     * @param integer $storeyMax
     * @return SpkRetBkTech
     */
    public function setStoreyMax($storeyMax)
    {
        $this->storeyMax = $storeyMax;

        return $this;
    }

    /**
     * Get storeyMax
     *
     * @return integer 
     */
    public function getStoreyMax()
    {
        return $this->storeyMax;
    }

    /**
     * Set fitout
     *
     * @param string $fitout
     * @return SpkRetBkTech
     */
    public function setFitout($fitout)
    {
        $this->fitout = $fitout;

        return $this;
    }

    /**
     * Get fitout
     *
     * @return string 
     */
    public function getFitout()
    {
        return $this->fitout;
    }
}
