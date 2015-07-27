<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetScCommerc
 *
 */
class SpkRetScCommerc
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
    private $scTarget;

    /**
     * @var string
     *
     */
    private $investmentVolume;

    /**
     * @var string
     *
     */
    private $goodsTurnover;

    /**
     * @var string
     *
     */
    private $buildingCost;

    /**
     * @var string
     *
     */
    private $buildingCostPerSqm;

    /**
     * @var integer
     *
     */
    private $leaserCount;

    /**
     * @var integer
     *
     */
    private $leaserAnchorCount;

    /**
     * @var float
     *
     */
    private $blockAreaMin;

    /**
     * @var float
     *
     */
    private $blockAreaMax;

    /**
     * @var float
     *
     */
    private $termOfLeaseMin;

    /**
     * @var float
     *
     */
    private $termOfLeaseAvg;

    /**
     * @var float
     *
     */
    private $termOfLeaseMax;

    /**
     * @var string
     *
     */
    private $leaseCostMin;

    /**
     * @var string
     *
     */
    private $leaseCostMax;

    /**
     * @var string
     *
     */
    private $leaseCostAvg;

    /**
     * @var string
     *
     */
    private $saleCostMin;

    /**
     * @var string
     *
     */
    private $saleCostMax;

    /**
     * @var string
     *
     */
    private $municipalCost;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $advertismentExpenses;

    /**
     * @var string
     *
     */
    private $decoration;

    /**
     * @var string
     *
     */
    private $insuranceDeposit;

    /**
     * @var string
     *
     */
    private $prepay;

    /**
     * @var string
     *
     */
    private $payOrder;

    /**
     * @var string
     *
     */
    private $contractConditions;

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
    private $kfCommission;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var float
     *
     */
    private $valu;

    /**
     * @var string
     *
     */
    private $cur;

    /**
     * @var string
     *
     */
    private $typ;

    /**
     * @var string
     *
     */
    private $listing;

    /**
     * @var float
     *
     */
    private $usdRate;

    /**
     * @var float
     *
     */
    private $eurRate;

    /**
     * @var float
     *
     */
    private $cuRate;

    /**
     * @var string
     *
     */
    private $buildingCostCur;

    /**
     * @var string
     *
     */
    private $buildingCostSqmCur;

    /**
     * @var string
     *
     */
    private $rentCur;

    /**
     * @var string
     *
     */
    private $saleCostCur;

    /**
     * @var string
     *
     */
    private $municipalCostCur;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetScCommerc
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
     * @return SpkRetScCommerc
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
     * @return SpkRetScCommerc
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
     * @return SpkRetScCommerc
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
     * @return SpkRetScCommerc
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
     * Set scTarget
     *
     * @param string $scTarget
     * @return SpkRetScCommerc
     */
    public function setScTarget($scTarget)
    {
        $this->scTarget = $scTarget;

        return $this;
    }

    /**
     * Get scTarget
     *
     * @return string 
     */
    public function getScTarget()
    {
        return $this->scTarget;
    }

    /**
     * Set investmentVolume
     *
     * @param string $investmentVolume
     * @return SpkRetScCommerc
     */
    public function setInvestmentVolume($investmentVolume)
    {
        $this->investmentVolume = $investmentVolume;

        return $this;
    }

    /**
     * Get investmentVolume
     *
     * @return string 
     */
    public function getInvestmentVolume()
    {
        return $this->investmentVolume;
    }

    /**
     * Set goodsTurnover
     *
     * @param string $goodsTurnover
     * @return SpkRetScCommerc
     */
    public function setGoodsTurnover($goodsTurnover)
    {
        $this->goodsTurnover = $goodsTurnover;

        return $this;
    }

    /**
     * Get goodsTurnover
     *
     * @return string 
     */
    public function getGoodsTurnover()
    {
        return $this->goodsTurnover;
    }

    /**
     * Set buildingCost
     *
     * @param string $buildingCost
     * @return SpkRetScCommerc
     */
    public function setBuildingCost($buildingCost)
    {
        $this->buildingCost = $buildingCost;

        return $this;
    }

    /**
     * Get buildingCost
     *
     * @return string 
     */
    public function getBuildingCost()
    {
        return $this->buildingCost;
    }

    /**
     * Set buildingCostPerSqm
     *
     * @param string $buildingCostPerSqm
     * @return SpkRetScCommerc
     */
    public function setBuildingCostPerSqm($buildingCostPerSqm)
    {
        $this->buildingCostPerSqm = $buildingCostPerSqm;

        return $this;
    }

    /**
     * Get buildingCostPerSqm
     *
     * @return string 
     */
    public function getBuildingCostPerSqm()
    {
        return $this->buildingCostPerSqm;
    }

    /**
     * Set leaserCount
     *
     * @param integer $leaserCount
     * @return SpkRetScCommerc
     */
    public function setLeaserCount($leaserCount)
    {
        $this->leaserCount = $leaserCount;

        return $this;
    }

    /**
     * Get leaserCount
     *
     * @return integer 
     */
    public function getLeaserCount()
    {
        return $this->leaserCount;
    }

    /**
     * Set leaserAnchorCount
     *
     * @param integer $leaserAnchorCount
     * @return SpkRetScCommerc
     */
    public function setLeaserAnchorCount($leaserAnchorCount)
    {
        $this->leaserAnchorCount = $leaserAnchorCount;

        return $this;
    }

    /**
     * Get leaserAnchorCount
     *
     * @return integer 
     */
    public function getLeaserAnchorCount()
    {
        return $this->leaserAnchorCount;
    }

    /**
     * Set blockAreaMin
     *
     * @param float $blockAreaMin
     * @return SpkRetScCommerc
     */
    public function setBlockAreaMin($blockAreaMin)
    {
        $this->blockAreaMin = $blockAreaMin;

        return $this;
    }

    /**
     * Get blockAreaMin
     *
     * @return float 
     */
    public function getBlockAreaMin()
    {
        return $this->blockAreaMin;
    }

    /**
     * Set blockAreaMax
     *
     * @param float $blockAreaMax
     * @return SpkRetScCommerc
     */
    public function setBlockAreaMax($blockAreaMax)
    {
        $this->blockAreaMax = $blockAreaMax;

        return $this;
    }

    /**
     * Get blockAreaMax
     *
     * @return float 
     */
    public function getBlockAreaMax()
    {
        return $this->blockAreaMax;
    }

    /**
     * Set termOfLeaseMin
     *
     * @param float $termOfLeaseMin
     * @return SpkRetScCommerc
     */
    public function setTermOfLeaseMin($termOfLeaseMin)
    {
        $this->termOfLeaseMin = $termOfLeaseMin;

        return $this;
    }

    /**
     * Get termOfLeaseMin
     *
     * @return float 
     */
    public function getTermOfLeaseMin()
    {
        return $this->termOfLeaseMin;
    }

    /**
     * Set termOfLeaseAvg
     *
     * @param float $termOfLeaseAvg
     * @return SpkRetScCommerc
     */
    public function setTermOfLeaseAvg($termOfLeaseAvg)
    {
        $this->termOfLeaseAvg = $termOfLeaseAvg;

        return $this;
    }

    /**
     * Get termOfLeaseAvg
     *
     * @return float 
     */
    public function getTermOfLeaseAvg()
    {
        return $this->termOfLeaseAvg;
    }

    /**
     * Set termOfLeaseMax
     *
     * @param float $termOfLeaseMax
     * @return SpkRetScCommerc
     */
    public function setTermOfLeaseMax($termOfLeaseMax)
    {
        $this->termOfLeaseMax = $termOfLeaseMax;

        return $this;
    }

    /**
     * Get termOfLeaseMax
     *
     * @return float 
     */
    public function getTermOfLeaseMax()
    {
        return $this->termOfLeaseMax;
    }

    /**
     * Set leaseCostMin
     *
     * @param string $leaseCostMin
     * @return SpkRetScCommerc
     */
    public function setLeaseCostMin($leaseCostMin)
    {
        $this->leaseCostMin = $leaseCostMin;

        return $this;
    }

    /**
     * Get leaseCostMin
     *
     * @return string 
     */
    public function getLeaseCostMin()
    {
        return $this->leaseCostMin;
    }

    /**
     * Set leaseCostMax
     *
     * @param string $leaseCostMax
     * @return SpkRetScCommerc
     */
    public function setLeaseCostMax($leaseCostMax)
    {
        $this->leaseCostMax = $leaseCostMax;

        return $this;
    }

    /**
     * Get leaseCostMax
     *
     * @return string 
     */
    public function getLeaseCostMax()
    {
        return $this->leaseCostMax;
    }

    /**
     * Set leaseCostAvg
     *
     * @param string $leaseCostAvg
     * @return SpkRetScCommerc
     */
    public function setLeaseCostAvg($leaseCostAvg)
    {
        $this->leaseCostAvg = $leaseCostAvg;

        return $this;
    }

    /**
     * Get leaseCostAvg
     *
     * @return string 
     */
    public function getLeaseCostAvg()
    {
        return $this->leaseCostAvg;
    }

    /**
     * Set saleCostMin
     *
     * @param string $saleCostMin
     * @return SpkRetScCommerc
     */
    public function setSaleCostMin($saleCostMin)
    {
        $this->saleCostMin = $saleCostMin;

        return $this;
    }

    /**
     * Get saleCostMin
     *
     * @return string 
     */
    public function getSaleCostMin()
    {
        return $this->saleCostMin;
    }

    /**
     * Set saleCostMax
     *
     * @param string $saleCostMax
     * @return SpkRetScCommerc
     */
    public function setSaleCostMax($saleCostMax)
    {
        $this->saleCostMax = $saleCostMax;

        return $this;
    }

    /**
     * Get saleCostMax
     *
     * @return string 
     */
    public function getSaleCostMax()
    {
        return $this->saleCostMax;
    }

    /**
     * Set municipalCost
     *
     * @param string $municipalCost
     * @return SpkRetScCommerc
     */
    public function setMunicipalCost($municipalCost)
    {
        $this->municipalCost = $municipalCost;

        return $this;
    }

    /**
     * Get municipalCost
     *
     * @return string 
     */
    public function getMunicipalCost()
    {
        return $this->municipalCost;
    }

    /**
     * Set indexationConditions
     *
     * @param string $indexationConditions
     * @return SpkRetScCommerc
     */
    public function setIndexationConditions($indexationConditions)
    {
        $this->indexationConditions = $indexationConditions;

        return $this;
    }

    /**
     * Get indexationConditions
     *
     * @return string 
     */
    public function getIndexationConditions()
    {
        return $this->indexationConditions;
    }

    /**
     * Set advertismentExpenses
     *
     * @param string $advertismentExpenses
     * @return SpkRetScCommerc
     */
    public function setAdvertismentExpenses($advertismentExpenses)
    {
        $this->advertismentExpenses = $advertismentExpenses;

        return $this;
    }

    /**
     * Get advertismentExpenses
     *
     * @return string 
     */
    public function getAdvertismentExpenses()
    {
        return $this->advertismentExpenses;
    }

    /**
     * Set decoration
     *
     * @param string $decoration
     * @return SpkRetScCommerc
     */
    public function setDecoration($decoration)
    {
        $this->decoration = $decoration;

        return $this;
    }

    /**
     * Get decoration
     *
     * @return string 
     */
    public function getDecoration()
    {
        return $this->decoration;
    }

    /**
     * Set insuranceDeposit
     *
     * @param string $insuranceDeposit
     * @return SpkRetScCommerc
     */
    public function setInsuranceDeposit($insuranceDeposit)
    {
        $this->insuranceDeposit = $insuranceDeposit;

        return $this;
    }

    /**
     * Get insuranceDeposit
     *
     * @return string 
     */
    public function getInsuranceDeposit()
    {
        return $this->insuranceDeposit;
    }

    /**
     * Set prepay
     *
     * @param string $prepay
     * @return SpkRetScCommerc
     */
    public function setPrepay($prepay)
    {
        $this->prepay = $prepay;

        return $this;
    }

    /**
     * Get prepay
     *
     * @return string 
     */
    public function getPrepay()
    {
        return $this->prepay;
    }

    /**
     * Set payOrder
     *
     * @param string $payOrder
     * @return SpkRetScCommerc
     */
    public function setPayOrder($payOrder)
    {
        $this->payOrder = $payOrder;

        return $this;
    }

    /**
     * Get payOrder
     *
     * @return string 
     */
    public function getPayOrder()
    {
        return $this->payOrder;
    }

    /**
     * Set contractConditions
     *
     * @param string $contractConditions
     * @return SpkRetScCommerc
     */
    public function setContractConditions($contractConditions)
    {
        $this->contractConditions = $contractConditions;

        return $this;
    }

    /**
     * Get contractConditions
     *
     * @return string 
     */
    public function getContractConditions()
    {
        return $this->contractConditions;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetScCommerc
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
     * @return SpkRetScCommerc
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
     * Set kfCommission
     *
     * @param float $kfCommission
     * @return SpkRetScCommerc
     */
    public function setKfCommission($kfCommission)
    {
        $this->kfCommission = $kfCommission;

        return $this;
    }

    /**
     * Get kfCommission
     *
     * @return float 
     */
    public function getKfCommission()
    {
        return $this->kfCommission;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return SpkRetScCommerc
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set valu
     *
     * @param float $valu
     * @return SpkRetScCommerc
     */
    public function setValu($valu)
    {
        $this->valu = $valu;

        return $this;
    }

    /**
     * Get valu
     *
     * @return float 
     */
    public function getValu()
    {
        return $this->valu;
    }

    /**
     * Set cur
     *
     * @param string $cur
     * @return SpkRetScCommerc
     */
    public function setCur($cur)
    {
        $this->cur = $cur;

        return $this;
    }

    /**
     * Get cur
     *
     * @return string 
     */
    public function getCur()
    {
        return $this->cur;
    }

    /**
     * Set typ
     *
     * @param string $typ
     * @return SpkRetScCommerc
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string 
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set listing
     *
     * @param string $listing
     * @return SpkRetScCommerc
     */
    public function setListing($listing)
    {
        $this->listing = $listing;

        return $this;
    }

    /**
     * Get listing
     *
     * @return string 
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * Set usdRate
     *
     * @param float $usdRate
     * @return SpkRetScCommerc
     */
    public function setUsdRate($usdRate)
    {
        $this->usdRate = $usdRate;

        return $this;
    }

    /**
     * Get usdRate
     *
     * @return float 
     */
    public function getUsdRate()
    {
        return $this->usdRate;
    }

    /**
     * Set eurRate
     *
     * @param float $eurRate
     * @return SpkRetScCommerc
     */
    public function setEurRate($eurRate)
    {
        $this->eurRate = $eurRate;

        return $this;
    }

    /**
     * Get eurRate
     *
     * @return float 
     */
    public function getEurRate()
    {
        return $this->eurRate;
    }

    /**
     * Set cuRate
     *
     * @param float $cuRate
     * @return SpkRetScCommerc
     */
    public function setCuRate($cuRate)
    {
        $this->cuRate = $cuRate;

        return $this;
    }

    /**
     * Get cuRate
     *
     * @return float 
     */
    public function getCuRate()
    {
        return $this->cuRate;
    }

    /**
     * Set buildingCostCur
     *
     * @param string $buildingCostCur
     * @return SpkRetScCommerc
     */
    public function setBuildingCostCur($buildingCostCur)
    {
        $this->buildingCostCur = $buildingCostCur;

        return $this;
    }

    /**
     * Get buildingCostCur
     *
     * @return string 
     */
    public function getBuildingCostCur()
    {
        return $this->buildingCostCur;
    }

    /**
     * Set buildingCostSqmCur
     *
     * @param string $buildingCostSqmCur
     * @return SpkRetScCommerc
     */
    public function setBuildingCostSqmCur($buildingCostSqmCur)
    {
        $this->buildingCostSqmCur = $buildingCostSqmCur;

        return $this;
    }

    /**
     * Get buildingCostSqmCur
     *
     * @return string 
     */
    public function getBuildingCostSqmCur()
    {
        return $this->buildingCostSqmCur;
    }

    /**
     * Set rentCur
     *
     * @param string $rentCur
     * @return SpkRetScCommerc
     */
    public function setRentCur($rentCur)
    {
        $this->rentCur = $rentCur;

        return $this;
    }

    /**
     * Get rentCur
     *
     * @return string 
     */
    public function getRentCur()
    {
        return $this->rentCur;
    }

    /**
     * Set saleCostCur
     *
     * @param string $saleCostCur
     * @return SpkRetScCommerc
     */
    public function setSaleCostCur($saleCostCur)
    {
        $this->saleCostCur = $saleCostCur;

        return $this;
    }

    /**
     * Get saleCostCur
     *
     * @return string 
     */
    public function getSaleCostCur()
    {
        return $this->saleCostCur;
    }

    /**
     * Set municipalCostCur
     *
     * @param string $municipalCostCur
     * @return SpkRetScCommerc
     */
    public function setMunicipalCostCur($municipalCostCur)
    {
        $this->municipalCostCur = $municipalCostCur;

        return $this;
    }

    /**
     * Get municipalCostCur
     *
     * @return string 
     */
    public function getMunicipalCostCur()
    {
        return $this->municipalCostCur;
    }
}
