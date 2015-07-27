<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetBkCommerc
 *
 */
class SpkRetBkCommerc
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
    private $defaultRate;

    /**
     * @var string
     *
     */
    private $defaultCost;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var integer
     *
     */
    private $defaultDeposit;

    /**
     * @var integer
     *
     */
    private $defaultPrepayment;

    /**
     * @var string
     *
     */
    private $additionalConditions;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var integer
     *
     */
    private $termOfLease;

    /**
     * @var float
     *
     */
    private $kfCommission;

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
    private $finalCost;

    /**
     * @var string
     *
     */
    private $finalRate;

    /**
     * @var string
     *
     */
    private $usdRate;

    /**
     * @var string
     *
     */
    private $eurRate;

    /**
     * @var string
     *
     */
    private $rateCur;

    /**
     * @var string
     *
     */
    private $cuRate;

    /**
     * @var string
     *
     */
    private $finalCostCur;

    /**
     * @var string
     *
     */
    private $industrialCur;

    /**
     * @var string
     *
     */
    private $officeRentalRateCur;

    /**
     * @var string
     *
     */
    private $costCur;

    /**
     * @var string
     *
     */
    private $opexCur;

    /**
     * @var string
     *
     */
    private $finalRateCur;

    /**
     * @var string
     *
     */
    private $costObject;

    /**
     * @var string
     *
     */
    private $vat;

    /**
     * @var string
     *
     */
    private $depositText;

    /**
     * @var string
     *
     */
    private $termText;

    /**
     * @var string
     *
     */
    private $costObjectCur;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetBkCommerc
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
     * @return SpkRetBkCommerc
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
     * @return SpkRetBkCommerc
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
     * @return SpkRetBkCommerc
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
     * @return SpkRetBkCommerc
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
     * Set defaultRate
     *
     * @param string $defaultRate
     * @return SpkRetBkCommerc
     */
    public function setDefaultRate($defaultRate)
    {
        $this->defaultRate = $defaultRate;

        return $this;
    }

    /**
     * Get defaultRate
     *
     * @return string 
     */
    public function getDefaultRate()
    {
        return $this->defaultRate;
    }

    /**
     * Set defaultCost
     *
     * @param string $defaultCost
     * @return SpkRetBkCommerc
     */
    public function setDefaultCost($defaultCost)
    {
        $this->defaultCost = $defaultCost;

        return $this;
    }

    /**
     * Get defaultCost
     *
     * @return string 
     */
    public function getDefaultCost()
    {
        return $this->defaultCost;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkRetBkCommerc
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set defaultDeposit
     *
     * @param integer $defaultDeposit
     * @return SpkRetBkCommerc
     */
    public function setDefaultDeposit($defaultDeposit)
    {
        $this->defaultDeposit = $defaultDeposit;

        return $this;
    }

    /**
     * Get defaultDeposit
     *
     * @return integer 
     */
    public function getDefaultDeposit()
    {
        return $this->defaultDeposit;
    }

    /**
     * Set defaultPrepayment
     *
     * @param integer $defaultPrepayment
     * @return SpkRetBkCommerc
     */
    public function setDefaultPrepayment($defaultPrepayment)
    {
        $this->defaultPrepayment = $defaultPrepayment;

        return $this;
    }

    /**
     * Get defaultPrepayment
     *
     * @return integer 
     */
    public function getDefaultPrepayment()
    {
        return $this->defaultPrepayment;
    }

    /**
     * Set additionalConditions
     *
     * @param string $additionalConditions
     * @return SpkRetBkCommerc
     */
    public function setAdditionalConditions($additionalConditions)
    {
        $this->additionalConditions = $additionalConditions;

        return $this;
    }

    /**
     * Get additionalConditions
     *
     * @return string 
     */
    public function getAdditionalConditions()
    {
        return $this->additionalConditions;
    }

    /**
     * Set indexationConditions
     *
     * @param string $indexationConditions
     * @return SpkRetBkCommerc
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
     * Set termOfLease
     *
     * @param integer $termOfLease
     * @return SpkRetBkCommerc
     */
    public function setTermOfLease($termOfLease)
    {
        $this->termOfLease = $termOfLease;

        return $this;
    }

    /**
     * Get termOfLease
     *
     * @return integer 
     */
    public function getTermOfLease()
    {
        return $this->termOfLease;
    }

    /**
     * Set kfCommission
     *
     * @param float $kfCommission
     * @return SpkRetBkCommerc
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
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkRetBkCommerc
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
     * @return SpkRetBkCommerc
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
     * Set finalCost
     *
     * @param string $finalCost
     * @return SpkRetBkCommerc
     */
    public function setFinalCost($finalCost)
    {
        $this->finalCost = $finalCost;

        return $this;
    }

    /**
     * Get finalCost
     *
     * @return string 
     */
    public function getFinalCost()
    {
        return $this->finalCost;
    }

    /**
     * Set finalRate
     *
     * @param string $finalRate
     * @return SpkRetBkCommerc
     */
    public function setFinalRate($finalRate)
    {
        $this->finalRate = $finalRate;

        return $this;
    }

    /**
     * Get finalRate
     *
     * @return string 
     */
    public function getFinalRate()
    {
        return $this->finalRate;
    }

    /**
     * Set usdRate
     *
     * @param string $usdRate
     * @return SpkRetBkCommerc
     */
    public function setUsdRate($usdRate)
    {
        $this->usdRate = $usdRate;

        return $this;
    }

    /**
     * Get usdRate
     *
     * @return string 
     */
    public function getUsdRate()
    {
        return $this->usdRate;
    }

    /**
     * Set eurRate
     *
     * @param string $eurRate
     * @return SpkRetBkCommerc
     */
    public function setEurRate($eurRate)
    {
        $this->eurRate = $eurRate;

        return $this;
    }

    /**
     * Get eurRate
     *
     * @return string 
     */
    public function getEurRate()
    {
        return $this->eurRate;
    }

    /**
     * Set rateCur
     *
     * @param string $rateCur
     * @return SpkRetBkCommerc
     */
    public function setRateCur($rateCur)
    {
        $this->rateCur = $rateCur;

        return $this;
    }

    /**
     * Get rateCur
     *
     * @return string 
     */
    public function getRateCur()
    {
        return $this->rateCur;
    }

    /**
     * Set cuRate
     *
     * @param string $cuRate
     * @return SpkRetBkCommerc
     */
    public function setCuRate($cuRate)
    {
        $this->cuRate = $cuRate;

        return $this;
    }

    /**
     * Get cuRate
     *
     * @return string 
     */
    public function getCuRate()
    {
        return $this->cuRate;
    }

    /**
     * Set finalCostCur
     *
     * @param string $finalCostCur
     * @return SpkRetBkCommerc
     */
    public function setFinalCostCur($finalCostCur)
    {
        $this->finalCostCur = $finalCostCur;

        return $this;
    }

    /**
     * Get finalCostCur
     *
     * @return string 
     */
    public function getFinalCostCur()
    {
        return $this->finalCostCur;
    }

    /**
     * Set industrialCur
     *
     * @param string $industrialCur
     * @return SpkRetBkCommerc
     */
    public function setIndustrialCur($industrialCur)
    {
        $this->industrialCur = $industrialCur;

        return $this;
    }

    /**
     * Get industrialCur
     *
     * @return string 
     */
    public function getIndustrialCur()
    {
        return $this->industrialCur;
    }

    /**
     * Set officeRentalRateCur
     *
     * @param string $officeRentalRateCur
     * @return SpkRetBkCommerc
     */
    public function setOfficeRentalRateCur($officeRentalRateCur)
    {
        $this->officeRentalRateCur = $officeRentalRateCur;

        return $this;
    }

    /**
     * Get officeRentalRateCur
     *
     * @return string 
     */
    public function getOfficeRentalRateCur()
    {
        return $this->officeRentalRateCur;
    }

    /**
     * Set costCur
     *
     * @param string $costCur
     * @return SpkRetBkCommerc
     */
    public function setCostCur($costCur)
    {
        $this->costCur = $costCur;

        return $this;
    }

    /**
     * Get costCur
     *
     * @return string 
     */
    public function getCostCur()
    {
        return $this->costCur;
    }

    /**
     * Set opexCur
     *
     * @param string $opexCur
     * @return SpkRetBkCommerc
     */
    public function setOpexCur($opexCur)
    {
        $this->opexCur = $opexCur;

        return $this;
    }

    /**
     * Get opexCur
     *
     * @return string 
     */
    public function getOpexCur()
    {
        return $this->opexCur;
    }

    /**
     * Set finalRateCur
     *
     * @param string $finalRateCur
     * @return SpkRetBkCommerc
     */
    public function setFinalRateCur($finalRateCur)
    {
        $this->finalRateCur = $finalRateCur;

        return $this;
    }

    /**
     * Get finalRateCur
     *
     * @return string 
     */
    public function getFinalRateCur()
    {
        return $this->finalRateCur;
    }

    /**
     * Set costObject
     *
     * @param string $costObject
     * @return SpkRetBkCommerc
     */
    public function setCostObject($costObject)
    {
        $this->costObject = $costObject;

        return $this;
    }

    /**
     * Get costObject
     *
     * @return string 
     */
    public function getCostObject()
    {
        return $this->costObject;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return SpkRetBkCommerc
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
     * Set depositText
     *
     * @param string $depositText
     * @return SpkRetBkCommerc
     */
    public function setDepositText($depositText)
    {
        $this->depositText = $depositText;

        return $this;
    }

    /**
     * Get depositText
     *
     * @return string 
     */
    public function getDepositText()
    {
        return $this->depositText;
    }

    /**
     * Set termText
     *
     * @param string $termText
     * @return SpkRetBkCommerc
     */
    public function setTermText($termText)
    {
        $this->termText = $termText;

        return $this;
    }

    /**
     * Get termText
     *
     * @return string 
     */
    public function getTermText()
    {
        return $this->termText;
    }

    /**
     * Set costObjectCur
     *
     * @param string $costObjectCur
     * @return SpkRetBkCommerc
     */
    public function setCostObjectCur($costObjectCur)
    {
        $this->costObjectCur = $costObjectCur;

        return $this;
    }

    /**
     * Get costObjectCur
     *
     * @return string 
     */
    public function getCostObjectCur()
    {
        return $this->costObjectCur;
    }
}
