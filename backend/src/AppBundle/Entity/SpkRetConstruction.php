<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetConstruction
 *
 */
class SpkRetConstruction
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
    private $storeysCount;

    /**
     * @var integer
     *
     */
    private $tradeStoreysCount;

    /**
     * @var string
     *
     */
    private $columnStep;

    /**
     * @var integer
     *
     */
    private $entranceCount;

    /**
     * @var integer
     *
     */
    private $escalatorCount;

    /**
     * @var string
     *
     */
    private $escalatorDescription;

    /**
     * @var integer
     *
     */
    private $travolatorCount;

    /**
     * @var string
     *
     */
    private $travolatorDescription;

    /**
     * @var integer
     *
     */
    private $liftCount;

    /**
     * @var integer
     *
     */
    private $visitorsLiftCount;

    /**
     * @var integer
     *
     */
    private $panoramicLiftCount;

    /**
     * @var string
     *
     */
    private $panoramicLiftDescription;

    /**
     * @var integer
     *
     */
    private $goodsLiftCount;

    /**
     * @var string
     *
     */
    private $goodsLiftDescription;

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
     * @var float
     *
     */
    private $storefront;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetConstruction
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
     * @return SpkRetConstruction
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
     * @return SpkRetConstruction
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
     * @return SpkRetConstruction
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
     * @return SpkRetConstruction
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
     * Set storeysCount
     *
     * @param integer $storeysCount
     * @return SpkRetConstruction
     */
    public function setStoreysCount($storeysCount)
    {
        $this->storeysCount = $storeysCount;

        return $this;
    }

    /**
     * Get storeysCount
     *
     * @return integer 
     */
    public function getStoreysCount()
    {
        return $this->storeysCount;
    }

    /**
     * Set tradeStoreysCount
     *
     * @param integer $tradeStoreysCount
     * @return SpkRetConstruction
     */
    public function setTradeStoreysCount($tradeStoreysCount)
    {
        $this->tradeStoreysCount = $tradeStoreysCount;

        return $this;
    }

    /**
     * Get tradeStoreysCount
     *
     * @return integer 
     */
    public function getTradeStoreysCount()
    {
        return $this->tradeStoreysCount;
    }

    /**
     * Set columnStep
     *
     * @param string $columnStep
     * @return SpkRetConstruction
     */
    public function setColumnStep($columnStep)
    {
        $this->columnStep = $columnStep;

        return $this;
    }

    /**
     * Get columnStep
     *
     * @return string 
     */
    public function getColumnStep()
    {
        return $this->columnStep;
    }

    /**
     * Set entranceCount
     *
     * @param integer $entranceCount
     * @return SpkRetConstruction
     */
    public function setEntranceCount($entranceCount)
    {
        $this->entranceCount = $entranceCount;

        return $this;
    }

    /**
     * Get entranceCount
     *
     * @return integer 
     */
    public function getEntranceCount()
    {
        return $this->entranceCount;
    }

    /**
     * Set escalatorCount
     *
     * @param integer $escalatorCount
     * @return SpkRetConstruction
     */
    public function setEscalatorCount($escalatorCount)
    {
        $this->escalatorCount = $escalatorCount;

        return $this;
    }

    /**
     * Get escalatorCount
     *
     * @return integer 
     */
    public function getEscalatorCount()
    {
        return $this->escalatorCount;
    }

    /**
     * Set escalatorDescription
     *
     * @param string $escalatorDescription
     * @return SpkRetConstruction
     */
    public function setEscalatorDescription($escalatorDescription)
    {
        $this->escalatorDescription = $escalatorDescription;

        return $this;
    }

    /**
     * Get escalatorDescription
     *
     * @return string 
     */
    public function getEscalatorDescription()
    {
        return $this->escalatorDescription;
    }

    /**
     * Set travolatorCount
     *
     * @param integer $travolatorCount
     * @return SpkRetConstruction
     */
    public function setTravolatorCount($travolatorCount)
    {
        $this->travolatorCount = $travolatorCount;

        return $this;
    }

    /**
     * Get travolatorCount
     *
     * @return integer 
     */
    public function getTravolatorCount()
    {
        return $this->travolatorCount;
    }

    /**
     * Set travolatorDescription
     *
     * @param string $travolatorDescription
     * @return SpkRetConstruction
     */
    public function setTravolatorDescription($travolatorDescription)
    {
        $this->travolatorDescription = $travolatorDescription;

        return $this;
    }

    /**
     * Get travolatorDescription
     *
     * @return string 
     */
    public function getTravolatorDescription()
    {
        return $this->travolatorDescription;
    }

    /**
     * Set liftCount
     *
     * @param integer $liftCount
     * @return SpkRetConstruction
     */
    public function setLiftCount($liftCount)
    {
        $this->liftCount = $liftCount;

        return $this;
    }

    /**
     * Get liftCount
     *
     * @return integer 
     */
    public function getLiftCount()
    {
        return $this->liftCount;
    }

    /**
     * Set visitorsLiftCount
     *
     * @param integer $visitorsLiftCount
     * @return SpkRetConstruction
     */
    public function setVisitorsLiftCount($visitorsLiftCount)
    {
        $this->visitorsLiftCount = $visitorsLiftCount;

        return $this;
    }

    /**
     * Get visitorsLiftCount
     *
     * @return integer 
     */
    public function getVisitorsLiftCount()
    {
        return $this->visitorsLiftCount;
    }

    /**
     * Set panoramicLiftCount
     *
     * @param integer $panoramicLiftCount
     * @return SpkRetConstruction
     */
    public function setPanoramicLiftCount($panoramicLiftCount)
    {
        $this->panoramicLiftCount = $panoramicLiftCount;

        return $this;
    }

    /**
     * Get panoramicLiftCount
     *
     * @return integer 
     */
    public function getPanoramicLiftCount()
    {
        return $this->panoramicLiftCount;
    }

    /**
     * Set panoramicLiftDescription
     *
     * @param string $panoramicLiftDescription
     * @return SpkRetConstruction
     */
    public function setPanoramicLiftDescription($panoramicLiftDescription)
    {
        $this->panoramicLiftDescription = $panoramicLiftDescription;

        return $this;
    }

    /**
     * Get panoramicLiftDescription
     *
     * @return string 
     */
    public function getPanoramicLiftDescription()
    {
        return $this->panoramicLiftDescription;
    }

    /**
     * Set goodsLiftCount
     *
     * @param integer $goodsLiftCount
     * @return SpkRetConstruction
     */
    public function setGoodsLiftCount($goodsLiftCount)
    {
        $this->goodsLiftCount = $goodsLiftCount;

        return $this;
    }

    /**
     * Get goodsLiftCount
     *
     * @return integer 
     */
    public function getGoodsLiftCount()
    {
        return $this->goodsLiftCount;
    }

    /**
     * Set goodsLiftDescription
     *
     * @param string $goodsLiftDescription
     * @return SpkRetConstruction
     */
    public function setGoodsLiftDescription($goodsLiftDescription)
    {
        $this->goodsLiftDescription = $goodsLiftDescription;

        return $this;
    }

    /**
     * Get goodsLiftDescription
     *
     * @return string 
     */
    public function getGoodsLiftDescription()
    {
        return $this->goodsLiftDescription;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetConstruction
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
     * @return SpkRetConstruction
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
     * Set storefront
     *
     * @param float $storefront
     * @return SpkRetConstruction
     */
    public function setStorefront($storefront)
    {
        $this->storefront = $storefront;

        return $this;
    }

    /**
     * Get storefront
     *
     * @return float 
     */
    public function getStorefront()
    {
        return $this->storefront;
    }
}
