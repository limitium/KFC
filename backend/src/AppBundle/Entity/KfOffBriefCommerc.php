<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefCommerc
 *
 * @ORM\Table(name="KF_OFF_BRIEF_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_BRIEF_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_7_14_21", columns={"SPK_PROPERTYID", "CURRENCY", "OPERATIONAL_COST", "OPERATIONAL_COST_MAX"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_K6_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_31_32", columns={"SPK_PROPERTYID", "SECCODEID", "CURRENCY", "RENTAL_RATE_MIN", "RENTAL_RATE_MAX", "SALE_PRICE_MIN", "SALE_PRICE_MAX", "SALE_PER_SQM_MIN", "SALE_PER_SQM_MAX", "OPERATIONAL_COST", "OTHER_COST", "UTILITY_COST", "FIT_OUT", "PARKING_UNDERGROUND_COST", "PARKING_GROUND_COST", "PARKING_ROOF_COST", "OPERATIONAL_COST_MAX", "FIT_OUT_MAX", "CRENTAL_RATE", "CSALE_PRICE", "CSALE_PRICE_SQM", "COPERATIONAL_COST", "CFIT_OUT", "CUTILITY", "CROOF_PARKING", "CGROUND_PARKING", "CUNDER_PARKING", "COTHER"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K6_K1_7_8_9_10_11_12_13_14_15_16_17_18_19_20_21_22_23_24_25_26_27_28_29_30_31_32", columns={"SECCODEID", "SPK_PROPERTYID", "CURRENCY", "RENTAL_RATE_MIN", "RENTAL_RATE_MAX", "SALE_PRICE_MIN", "SALE_PRICE_MAX", "SALE_PER_SQM_MIN", "SALE_PER_SQM_MAX", "OPERATIONAL_COST", "OTHER_COST", "UTILITY_COST", "FIT_OUT", "PARKING_UNDERGROUND_COST", "PARKING_GROUND_COST", "PARKING_ROOF_COST", "OPERATIONAL_COST_MAX", "FIT_OUT_MAX", "CRENTAL_RATE", "CSALE_PRICE", "CSALE_PRICE_SQM", "COPERATIONAL_COST", "CFIT_OUT", "CUTILITY", "CROOF_PARKING", "CGROUND_PARKING", "CUNDER_PARKING", "COTHER"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_c_5_2125966650__K6", columns={"SECCODEID"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_c_5_2125966650__K1_K6", columns={"SPK_PROPERTYID", "SECCODEID"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_8", columns={"SPK_PROPERTYID", "RENTAL_RATE_MIN"}), @ORM\Index(name="_dta_index_KF_OFF_BRIEF_COMMERC_5_2125966650__K1_7_8_14_21", columns={"SPK_PROPERTYID", "CURRENCY", "RENTAL_RATE_MIN", "OPERATIONAL_COST", "OPERATIONAL_COST_MAX"})})
 * @ORM\Entity
 */
class KfOffBriefCommerc
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_RATE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalRateMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_RATE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentalRateMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PRICE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePriceMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PRICE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePriceMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PER_SQM_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePerSqmMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_PER_SQM_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $salePerSqmMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $otherCost;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $utilityCost;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $fitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_UNDERGROUND_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingUndergroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_GROUND_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingGroundCost;

    /**
     * @var string
     *
     * @ORM\Column(name="PARKING_ROOF_COST", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $parkingRoofCost;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="FIT_OUT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $fitOutMax;

    /**
     * @var string
     *
     * @ORM\Column(name="CRENTAL_RATE", type="string", length=32, nullable=true)
     */
    private $crentalRate;

    /**
     * @var string
     *
     * @ORM\Column(name="CSALE_PRICE", type="string", length=32, nullable=true)
     */
    private $csalePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="CSALE_PRICE_SQM", type="string", length=32, nullable=true)
     */
    private $csalePriceSqm;

    /**
     * @var string
     *
     * @ORM\Column(name="COPERATIONAL_COST", type="string", length=32, nullable=true)
     */
    private $coperationalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="CFIT_OUT", type="string", length=32, nullable=true)
     */
    private $cfitOut;

    /**
     * @var string
     *
     * @ORM\Column(name="CUTILITY", type="string", length=32, nullable=true)
     */
    private $cutility;

    /**
     * @var string
     *
     * @ORM\Column(name="CROOF_PARKING", type="string", length=32, nullable=true)
     */
    private $croofParking;

    /**
     * @var string
     *
     * @ORM\Column(name="CGROUND_PARKING", type="string", length=32, nullable=true)
     */
    private $cgroundParking;

    /**
     * @var string
     *
     * @ORM\Column(name="CUNDER_PARKING", type="string", length=32, nullable=true)
     */
    private $cunderParking;

    /**
     * @var string
     *
     * @ORM\Column(name="COTHER", type="string", length=32, nullable=true)
     */
    private $cother;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffBriefCommerc
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
     * @return KfOffBriefCommerc
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
     * @return KfOffBriefCommerc
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
     * @return KfOffBriefCommerc
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
     * @return KfOffBriefCommerc
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfOffBriefCommerc
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return KfOffBriefCommerc
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set rentalRateMin
     *
     * @param string $rentalRateMin
     * @return KfOffBriefCommerc
     */
    public function setRentalRateMin($rentalRateMin)
    {
        $this->rentalRateMin = $rentalRateMin;

        return $this;
    }

    /**
     * Get rentalRateMin
     *
     * @return string 
     */
    public function getRentalRateMin()
    {
        return $this->rentalRateMin;
    }

    /**
     * Set rentalRateMax
     *
     * @param string $rentalRateMax
     * @return KfOffBriefCommerc
     */
    public function setRentalRateMax($rentalRateMax)
    {
        $this->rentalRateMax = $rentalRateMax;

        return $this;
    }

    /**
     * Get rentalRateMax
     *
     * @return string 
     */
    public function getRentalRateMax()
    {
        return $this->rentalRateMax;
    }

    /**
     * Set salePriceMin
     *
     * @param string $salePriceMin
     * @return KfOffBriefCommerc
     */
    public function setSalePriceMin($salePriceMin)
    {
        $this->salePriceMin = $salePriceMin;

        return $this;
    }

    /**
     * Get salePriceMin
     *
     * @return string 
     */
    public function getSalePriceMin()
    {
        return $this->salePriceMin;
    }

    /**
     * Set salePriceMax
     *
     * @param string $salePriceMax
     * @return KfOffBriefCommerc
     */
    public function setSalePriceMax($salePriceMax)
    {
        $this->salePriceMax = $salePriceMax;

        return $this;
    }

    /**
     * Get salePriceMax
     *
     * @return string 
     */
    public function getSalePriceMax()
    {
        return $this->salePriceMax;
    }

    /**
     * Set salePerSqmMin
     *
     * @param string $salePerSqmMin
     * @return KfOffBriefCommerc
     */
    public function setSalePerSqmMin($salePerSqmMin)
    {
        $this->salePerSqmMin = $salePerSqmMin;

        return $this;
    }

    /**
     * Get salePerSqmMin
     *
     * @return string 
     */
    public function getSalePerSqmMin()
    {
        return $this->salePerSqmMin;
    }

    /**
     * Set salePerSqmMax
     *
     * @param string $salePerSqmMax
     * @return KfOffBriefCommerc
     */
    public function setSalePerSqmMax($salePerSqmMax)
    {
        $this->salePerSqmMax = $salePerSqmMax;

        return $this;
    }

    /**
     * Get salePerSqmMax
     *
     * @return string 
     */
    public function getSalePerSqmMax()
    {
        return $this->salePerSqmMax;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return KfOffBriefCommerc
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
     * Set otherCost
     *
     * @param string $otherCost
     * @return KfOffBriefCommerc
     */
    public function setOtherCost($otherCost)
    {
        $this->otherCost = $otherCost;

        return $this;
    }

    /**
     * Get otherCost
     *
     * @return string 
     */
    public function getOtherCost()
    {
        return $this->otherCost;
    }

    /**
     * Set utilityCost
     *
     * @param string $utilityCost
     * @return KfOffBriefCommerc
     */
    public function setUtilityCost($utilityCost)
    {
        $this->utilityCost = $utilityCost;

        return $this;
    }

    /**
     * Get utilityCost
     *
     * @return string 
     */
    public function getUtilityCost()
    {
        return $this->utilityCost;
    }

    /**
     * Set fitOut
     *
     * @param string $fitOut
     * @return KfOffBriefCommerc
     */
    public function setFitOut($fitOut)
    {
        $this->fitOut = $fitOut;

        return $this;
    }

    /**
     * Get fitOut
     *
     * @return string 
     */
    public function getFitOut()
    {
        return $this->fitOut;
    }

    /**
     * Set parkingUndergroundCost
     *
     * @param string $parkingUndergroundCost
     * @return KfOffBriefCommerc
     */
    public function setParkingUndergroundCost($parkingUndergroundCost)
    {
        $this->parkingUndergroundCost = $parkingUndergroundCost;

        return $this;
    }

    /**
     * Get parkingUndergroundCost
     *
     * @return string 
     */
    public function getParkingUndergroundCost()
    {
        return $this->parkingUndergroundCost;
    }

    /**
     * Set parkingGroundCost
     *
     * @param string $parkingGroundCost
     * @return KfOffBriefCommerc
     */
    public function setParkingGroundCost($parkingGroundCost)
    {
        $this->parkingGroundCost = $parkingGroundCost;

        return $this;
    }

    /**
     * Get parkingGroundCost
     *
     * @return string 
     */
    public function getParkingGroundCost()
    {
        return $this->parkingGroundCost;
    }

    /**
     * Set parkingRoofCost
     *
     * @param string $parkingRoofCost
     * @return KfOffBriefCommerc
     */
    public function setParkingRoofCost($parkingRoofCost)
    {
        $this->parkingRoofCost = $parkingRoofCost;

        return $this;
    }

    /**
     * Get parkingRoofCost
     *
     * @return string 
     */
    public function getParkingRoofCost()
    {
        return $this->parkingRoofCost;
    }

    /**
     * Set operationalCostMax
     *
     * @param string $operationalCostMax
     * @return KfOffBriefCommerc
     */
    public function setOperationalCostMax($operationalCostMax)
    {
        $this->operationalCostMax = $operationalCostMax;

        return $this;
    }

    /**
     * Get operationalCostMax
     *
     * @return string 
     */
    public function getOperationalCostMax()
    {
        return $this->operationalCostMax;
    }

    /**
     * Set fitOutMax
     *
     * @param string $fitOutMax
     * @return KfOffBriefCommerc
     */
    public function setFitOutMax($fitOutMax)
    {
        $this->fitOutMax = $fitOutMax;

        return $this;
    }

    /**
     * Get fitOutMax
     *
     * @return string 
     */
    public function getFitOutMax()
    {
        return $this->fitOutMax;
    }

    /**
     * Set crentalRate
     *
     * @param string $crentalRate
     * @return KfOffBriefCommerc
     */
    public function setCrentalRate($crentalRate)
    {
        $this->crentalRate = $crentalRate;

        return $this;
    }

    /**
     * Get crentalRate
     *
     * @return string 
     */
    public function getCrentalRate()
    {
        return $this->crentalRate;
    }

    /**
     * Set csalePrice
     *
     * @param string $csalePrice
     * @return KfOffBriefCommerc
     */
    public function setCsalePrice($csalePrice)
    {
        $this->csalePrice = $csalePrice;

        return $this;
    }

    /**
     * Get csalePrice
     *
     * @return string 
     */
    public function getCsalePrice()
    {
        return $this->csalePrice;
    }

    /**
     * Set csalePriceSqm
     *
     * @param string $csalePriceSqm
     * @return KfOffBriefCommerc
     */
    public function setCsalePriceSqm($csalePriceSqm)
    {
        $this->csalePriceSqm = $csalePriceSqm;

        return $this;
    }

    /**
     * Get csalePriceSqm
     *
     * @return string 
     */
    public function getCsalePriceSqm()
    {
        return $this->csalePriceSqm;
    }

    /**
     * Set coperationalCost
     *
     * @param string $coperationalCost
     * @return KfOffBriefCommerc
     */
    public function setCoperationalCost($coperationalCost)
    {
        $this->coperationalCost = $coperationalCost;

        return $this;
    }

    /**
     * Get coperationalCost
     *
     * @return string 
     */
    public function getCoperationalCost()
    {
        return $this->coperationalCost;
    }

    /**
     * Set cfitOut
     *
     * @param string $cfitOut
     * @return KfOffBriefCommerc
     */
    public function setCfitOut($cfitOut)
    {
        $this->cfitOut = $cfitOut;

        return $this;
    }

    /**
     * Get cfitOut
     *
     * @return string 
     */
    public function getCfitOut()
    {
        return $this->cfitOut;
    }

    /**
     * Set cutility
     *
     * @param string $cutility
     * @return KfOffBriefCommerc
     */
    public function setCutility($cutility)
    {
        $this->cutility = $cutility;

        return $this;
    }

    /**
     * Get cutility
     *
     * @return string 
     */
    public function getCutility()
    {
        return $this->cutility;
    }

    /**
     * Set croofParking
     *
     * @param string $croofParking
     * @return KfOffBriefCommerc
     */
    public function setCroofParking($croofParking)
    {
        $this->croofParking = $croofParking;

        return $this;
    }

    /**
     * Get croofParking
     *
     * @return string 
     */
    public function getCroofParking()
    {
        return $this->croofParking;
    }

    /**
     * Set cgroundParking
     *
     * @param string $cgroundParking
     * @return KfOffBriefCommerc
     */
    public function setCgroundParking($cgroundParking)
    {
        $this->cgroundParking = $cgroundParking;

        return $this;
    }

    /**
     * Get cgroundParking
     *
     * @return string 
     */
    public function getCgroundParking()
    {
        return $this->cgroundParking;
    }

    /**
     * Set cunderParking
     *
     * @param string $cunderParking
     * @return KfOffBriefCommerc
     */
    public function setCunderParking($cunderParking)
    {
        $this->cunderParking = $cunderParking;

        return $this;
    }

    /**
     * Get cunderParking
     *
     * @return string 
     */
    public function getCunderParking()
    {
        return $this->cunderParking;
    }

    /**
     * Set cother
     *
     * @param string $cother
     * @return KfOffBriefCommerc
     */
    public function setCother($cother)
    {
        $this->cother = $cother;

        return $this;
    }

    /**
     * Get cother
     *
     * @return string 
     */
    public function getCother()
    {
        return $this->cother;
    }
}
