<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCntDescription
 *
 */
class SpkCntDescription
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
    private $houseRus;

    /**
     * @var string
     *
     */
    private $houseEng;

    /**
     * @var string
     *
     */
    private $landRus;

    /**
     * @var string
     *
     */
    private $landEng;

    /**
     * @var string
     *
     */
    private $settlementRus;

    /**
     * @var string
     *
     */
    private $settlementEng;

    /**
     * @var string
     *
     */
    private $advRus;

    /**
     * @var string
     *
     */
    private $advEng;

    /**
     * @var string
     *
     */
    private $planningRus;

    /**
     * @var string
     *
     */
    private $planningEng;

    /**
     * @var string
     *
     */
    private $additionalRus;

    /**
     * @var string
     *
     */
    private $additionalEng;

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
    private $novelty;

    /**
     * @var string
     *
     */
    private $specialOfferDescriptionRus;

    /**
     * @var string
     *
     */
    private $specialOfferDescriptionEng;

    /**
     * @var string
     *
     */
    private $costnotpublish;

    /**
     * @var string
     *
     */
    private $attachWithSettlement;

    /**
     * @var string
     *
     */
    private $weeklyoffer;

    /**
     * @var string
     *
     */
    private $water;

    /**
     * @var string
     *
     */
    private $golf;

    /**
     * @var string
     *
     */
    private $ski;

    /**
     * @var string
     *
     */
    private $equest;

    /**
     * @var string
     *
     */
    private $dontShowLease;

    /**
     * @var float
     *
     */
    private $oldPrice;

    /**
     * @var string
     *
     */
    private $siteStyle;

    /**
     * @var string
     *
     */
    private $isKeyProperty;

    /**
     * @var string
     *
     */
    private $plotType;

    /**
     * @var string
     *
     */
    private $infrastructureType;

    /**
     * @var string
     *
     */
    private $oldSale;

    /**
     * @var string
     *
     */
    private $newSale;

    /**
     * @var string
     *
     */
    private $styleType;

    /**
     * @var string
     *
     */
    private $forest;

    /**
     * @var string
     *
     */
    private $apartment;

    /**
     * @var string
     *
     */
    private $context;

    /**
     * @var string
     *
     */
    private $brochure;

    /**
     * @var string
     *
     */
    private $banner;

    /**
     * @var string
     *
     */
    private $bannermanagerid;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * Set houseRus
     *
     * @param string $houseRus
     * @return SpkCntDescription
     */
    public function setHouseRus($houseRus)
    {
        $this->houseRus = $houseRus;

        return $this;
    }

    /**
     * Get houseRus
     *
     * @return string 
     */
    public function getHouseRus()
    {
        return $this->houseRus;
    }

    /**
     * Set houseEng
     *
     * @param string $houseEng
     * @return SpkCntDescription
     */
    public function setHouseEng($houseEng)
    {
        $this->houseEng = $houseEng;

        return $this;
    }

    /**
     * Get houseEng
     *
     * @return string 
     */
    public function getHouseEng()
    {
        return $this->houseEng;
    }

    /**
     * Set landRus
     *
     * @param string $landRus
     * @return SpkCntDescription
     */
    public function setLandRus($landRus)
    {
        $this->landRus = $landRus;

        return $this;
    }

    /**
     * Get landRus
     *
     * @return string 
     */
    public function getLandRus()
    {
        return $this->landRus;
    }

    /**
     * Set landEng
     *
     * @param string $landEng
     * @return SpkCntDescription
     */
    public function setLandEng($landEng)
    {
        $this->landEng = $landEng;

        return $this;
    }

    /**
     * Get landEng
     *
     * @return string 
     */
    public function getLandEng()
    {
        return $this->landEng;
    }

    /**
     * Set settlementRus
     *
     * @param string $settlementRus
     * @return SpkCntDescription
     */
    public function setSettlementRus($settlementRus)
    {
        $this->settlementRus = $settlementRus;

        return $this;
    }

    /**
     * Get settlementRus
     *
     * @return string 
     */
    public function getSettlementRus()
    {
        return $this->settlementRus;
    }

    /**
     * Set settlementEng
     *
     * @param string $settlementEng
     * @return SpkCntDescription
     */
    public function setSettlementEng($settlementEng)
    {
        $this->settlementEng = $settlementEng;

        return $this;
    }

    /**
     * Get settlementEng
     *
     * @return string 
     */
    public function getSettlementEng()
    {
        return $this->settlementEng;
    }

    /**
     * Set advRus
     *
     * @param string $advRus
     * @return SpkCntDescription
     */
    public function setAdvRus($advRus)
    {
        $this->advRus = $advRus;

        return $this;
    }

    /**
     * Get advRus
     *
     * @return string 
     */
    public function getAdvRus()
    {
        return $this->advRus;
    }

    /**
     * Set advEng
     *
     * @param string $advEng
     * @return SpkCntDescription
     */
    public function setAdvEng($advEng)
    {
        $this->advEng = $advEng;

        return $this;
    }

    /**
     * Get advEng
     *
     * @return string 
     */
    public function getAdvEng()
    {
        return $this->advEng;
    }

    /**
     * Set planningRus
     *
     * @param string $planningRus
     * @return SpkCntDescription
     */
    public function setPlanningRus($planningRus)
    {
        $this->planningRus = $planningRus;

        return $this;
    }

    /**
     * Get planningRus
     *
     * @return string 
     */
    public function getPlanningRus()
    {
        return $this->planningRus;
    }

    /**
     * Set planningEng
     *
     * @param string $planningEng
     * @return SpkCntDescription
     */
    public function setPlanningEng($planningEng)
    {
        $this->planningEng = $planningEng;

        return $this;
    }

    /**
     * Get planningEng
     *
     * @return string 
     */
    public function getPlanningEng()
    {
        return $this->planningEng;
    }

    /**
     * Set additionalRus
     *
     * @param string $additionalRus
     * @return SpkCntDescription
     */
    public function setAdditionalRus($additionalRus)
    {
        $this->additionalRus = $additionalRus;

        return $this;
    }

    /**
     * Get additionalRus
     *
     * @return string 
     */
    public function getAdditionalRus()
    {
        return $this->additionalRus;
    }

    /**
     * Set additionalEng
     *
     * @param string $additionalEng
     * @return SpkCntDescription
     */
    public function setAdditionalEng($additionalEng)
    {
        $this->additionalEng = $additionalEng;

        return $this;
    }

    /**
     * Get additionalEng
     *
     * @return string 
     */
    public function getAdditionalEng()
    {
        return $this->additionalEng;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return SpkCntDescription
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
     * @return SpkCntDescription
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
     * Set novelty
     *
     * @param string $novelty
     * @return SpkCntDescription
     */
    public function setNovelty($novelty)
    {
        $this->novelty = $novelty;

        return $this;
    }

    /**
     * Get novelty
     *
     * @return string 
     */
    public function getNovelty()
    {
        return $this->novelty;
    }

    /**
     * Set specialOfferDescriptionRus
     *
     * @param string $specialOfferDescriptionRus
     * @return SpkCntDescription
     */
    public function setSpecialOfferDescriptionRus($specialOfferDescriptionRus)
    {
        $this->specialOfferDescriptionRus = $specialOfferDescriptionRus;

        return $this;
    }

    /**
     * Get specialOfferDescriptionRus
     *
     * @return string 
     */
    public function getSpecialOfferDescriptionRus()
    {
        return $this->specialOfferDescriptionRus;
    }

    /**
     * Set specialOfferDescriptionEng
     *
     * @param string $specialOfferDescriptionEng
     * @return SpkCntDescription
     */
    public function setSpecialOfferDescriptionEng($specialOfferDescriptionEng)
    {
        $this->specialOfferDescriptionEng = $specialOfferDescriptionEng;

        return $this;
    }

    /**
     * Get specialOfferDescriptionEng
     *
     * @return string 
     */
    public function getSpecialOfferDescriptionEng()
    {
        return $this->specialOfferDescriptionEng;
    }

    /**
     * Set costnotpublish
     *
     * @param string $costnotpublish
     * @return SpkCntDescription
     */
    public function setCostnotpublish($costnotpublish)
    {
        $this->costnotpublish = $costnotpublish;

        return $this;
    }

    /**
     * Get costnotpublish
     *
     * @return string 
     */
    public function getCostnotpublish()
    {
        return $this->costnotpublish;
    }

    /**
     * Set attachWithSettlement
     *
     * @param string $attachWithSettlement
     * @return SpkCntDescription
     */
    public function setAttachWithSettlement($attachWithSettlement)
    {
        $this->attachWithSettlement = $attachWithSettlement;

        return $this;
    }

    /**
     * Get attachWithSettlement
     *
     * @return string 
     */
    public function getAttachWithSettlement()
    {
        return $this->attachWithSettlement;
    }

    /**
     * Set weeklyoffer
     *
     * @param string $weeklyoffer
     * @return SpkCntDescription
     */
    public function setWeeklyoffer($weeklyoffer)
    {
        $this->weeklyoffer = $weeklyoffer;

        return $this;
    }

    /**
     * Get weeklyoffer
     *
     * @return string 
     */
    public function getWeeklyoffer()
    {
        return $this->weeklyoffer;
    }

    /**
     * Set water
     *
     * @param string $water
     * @return SpkCntDescription
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
     * Set golf
     *
     * @param string $golf
     * @return SpkCntDescription
     */
    public function setGolf($golf)
    {
        $this->golf = $golf;

        return $this;
    }

    /**
     * Get golf
     *
     * @return string 
     */
    public function getGolf()
    {
        return $this->golf;
    }

    /**
     * Set ski
     *
     * @param string $ski
     * @return SpkCntDescription
     */
    public function setSki($ski)
    {
        $this->ski = $ski;

        return $this;
    }

    /**
     * Get ski
     *
     * @return string 
     */
    public function getSki()
    {
        return $this->ski;
    }

    /**
     * Set equest
     *
     * @param string $equest
     * @return SpkCntDescription
     */
    public function setEquest($equest)
    {
        $this->equest = $equest;

        return $this;
    }

    /**
     * Get equest
     *
     * @return string 
     */
    public function getEquest()
    {
        return $this->equest;
    }

    /**
     * Set dontShowLease
     *
     * @param string $dontShowLease
     * @return SpkCntDescription
     */
    public function setDontShowLease($dontShowLease)
    {
        $this->dontShowLease = $dontShowLease;

        return $this;
    }

    /**
     * Get dontShowLease
     *
     * @return string 
     */
    public function getDontShowLease()
    {
        return $this->dontShowLease;
    }

    /**
     * Set oldPrice
     *
     * @param float $oldPrice
     * @return SpkCntDescription
     */
    public function setOldPrice($oldPrice)
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    /**
     * Get oldPrice
     *
     * @return float 
     */
    public function getOldPrice()
    {
        return $this->oldPrice;
    }

    /**
     * Set siteStyle
     *
     * @param string $siteStyle
     * @return SpkCntDescription
     */
    public function setSiteStyle($siteStyle)
    {
        $this->siteStyle = $siteStyle;

        return $this;
    }

    /**
     * Get siteStyle
     *
     * @return string 
     */
    public function getSiteStyle()
    {
        return $this->siteStyle;
    }

    /**
     * Set isKeyProperty
     *
     * @param string $isKeyProperty
     * @return SpkCntDescription
     */
    public function setIsKeyProperty($isKeyProperty)
    {
        $this->isKeyProperty = $isKeyProperty;

        return $this;
    }

    /**
     * Get isKeyProperty
     *
     * @return string 
     */
    public function getIsKeyProperty()
    {
        return $this->isKeyProperty;
    }

    /**
     * Set plotType
     *
     * @param string $plotType
     * @return SpkCntDescription
     */
    public function setPlotType($plotType)
    {
        $this->plotType = $plotType;

        return $this;
    }

    /**
     * Get plotType
     *
     * @return string 
     */
    public function getPlotType()
    {
        return $this->plotType;
    }

    /**
     * Set infrastructureType
     *
     * @param string $infrastructureType
     * @return SpkCntDescription
     */
    public function setInfrastructureType($infrastructureType)
    {
        $this->infrastructureType = $infrastructureType;

        return $this;
    }

    /**
     * Get infrastructureType
     *
     * @return string 
     */
    public function getInfrastructureType()
    {
        return $this->infrastructureType;
    }

    /**
     * Set oldSale
     *
     * @param string $oldSale
     * @return SpkCntDescription
     */
    public function setOldSale($oldSale)
    {
        $this->oldSale = $oldSale;

        return $this;
    }

    /**
     * Get oldSale
     *
     * @return string 
     */
    public function getOldSale()
    {
        return $this->oldSale;
    }

    /**
     * Set newSale
     *
     * @param string $newSale
     * @return SpkCntDescription
     */
    public function setNewSale($newSale)
    {
        $this->newSale = $newSale;

        return $this;
    }

    /**
     * Get newSale
     *
     * @return string 
     */
    public function getNewSale()
    {
        return $this->newSale;
    }

    /**
     * Set styleType
     *
     * @param string $styleType
     * @return SpkCntDescription
     */
    public function setStyleType($styleType)
    {
        $this->styleType = $styleType;

        return $this;
    }

    /**
     * Get styleType
     *
     * @return string 
     */
    public function getStyleType()
    {
        return $this->styleType;
    }

    /**
     * Set forest
     *
     * @param string $forest
     * @return SpkCntDescription
     */
    public function setForest($forest)
    {
        $this->forest = $forest;

        return $this;
    }

    /**
     * Get forest
     *
     * @return string 
     */
    public function getForest()
    {
        return $this->forest;
    }

    /**
     * Set apartment
     *
     * @param string $apartment
     * @return SpkCntDescription
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * Get apartment
     *
     * @return string 
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return SpkCntDescription
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set brochure
     *
     * @param string $brochure
     * @return SpkCntDescription
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return string 
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return SpkCntDescription
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set bannermanagerid
     *
     * @param string $bannermanagerid
     * @return SpkCntDescription
     */
    public function setBannermanagerid($bannermanagerid)
    {
        $this->bannermanagerid = $bannermanagerid;

        return $this;
    }

    /**
     * Get bannermanagerid
     *
     * @return string 
     */
    public function getBannermanagerid()
    {
        return $this->bannermanagerid;
    }
}
