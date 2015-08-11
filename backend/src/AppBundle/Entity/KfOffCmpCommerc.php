<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffCmpCommerc
 *
 * @ORM\Table(name="KF_OFF_CMP_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_CMP_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfOffCmpCommerc
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
     * @ORM\Column(name="OPERATING_EXPENSES_TYPE", type="string", length=64, nullable=true)
     */
    private $operatingExpensesType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS", type="string", length=64, nullable=true)
     */
    private $commercialTerms;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=64, nullable=true)
     */
    private $vat;

    /**
     * @var float
     *
     * @ORM\Column(name="UTILITY_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $utilityCost;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_TYPE", type="string", length=64, nullable=true)
     */
    private $utilityType;

    /**
     * @var float
     *
     * @ORM\Column(name="FIT_OUT_COMPENSATION", type="float", precision=53, scale=0, nullable=true)
     */
    private $fitOutCompensation;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="text", length=16, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="text", length=16, nullable=true)
     */
    private $commentsEng;

    /**
     * @var float
     *
     * @ORM\Column(name="SALE_PRICE", type="float", precision=53, scale=0, nullable=true)
     */
    private $salePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_CURRENCY", type="string", length=32, nullable=true)
     */
    private $saleCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="YIELD", type="float", precision=53, scale=0, nullable=true)
     */
    private $yield;

    /**
     * @var string
     *
     * @ORM\Column(name="OPP_STRUCTURE", type="string", length=128, nullable=true)
     */
    private $oppStructure;

    /**
     * @var string
     *
     * @ORM\Column(name="CERTIFICATE_OWNERSHIP", type="string", length=128, nullable=true)
     */
    private $certificateOwnership;

    /**
     * @var string
     *
     * @ORM\Column(name="OWNERSHIP_TYPE", type="string", length=128, nullable=true)
     */
    private $ownershipType;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_RUS", type="string", length=128, nullable=true)
     */
    private $rentalStatusRus;

    /**
     * @var string
     *
     * @ORM\Column(name="RENTAL_STATUS_ENG", type="string", length=128, nullable=true)
     */
    private $rentalStatusEng;

    /**
     * @var float
     *
     * @ORM\Column(name="RENTAL_RATE_AVG", type="float", precision=53, scale=0, nullable=true)
     */
    private $rentalRateAvg;

    /**
     * @var string
     *
     * @ORM\Column(name="RRA_CUR", type="string", length=32, nullable=true)
     */
    private $rraCur;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIAL_TERMS_SALE", type="string", length=256, nullable=true)
     */
    private $commercialTermsSale;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * Set operatingExpensesType
     *
     * @param string $operatingExpensesType
     * @return KfOffCmpCommerc
     */
    public function setOperatingExpensesType($operatingExpensesType)
    {
        $this->operatingExpensesType = $operatingExpensesType;

        return $this;
    }

    /**
     * Get operatingExpensesType
     *
     * @return string 
     */
    public function getOperatingExpensesType()
    {
        return $this->operatingExpensesType;
    }

    /**
     * Set commercialTerms
     *
     * @param string $commercialTerms
     * @return KfOffCmpCommerc
     */
    public function setCommercialTerms($commercialTerms)
    {
        $this->commercialTerms = $commercialTerms;

        return $this;
    }

    /**
     * Get commercialTerms
     *
     * @return string 
     */
    public function getCommercialTerms()
    {
        return $this->commercialTerms;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return KfOffCmpCommerc
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
     * Set utilityCost
     *
     * @param float $utilityCost
     * @return KfOffCmpCommerc
     */
    public function setUtilityCost($utilityCost)
    {
        $this->utilityCost = $utilityCost;

        return $this;
    }

    /**
     * Get utilityCost
     *
     * @return float 
     */
    public function getUtilityCost()
    {
        return $this->utilityCost;
    }

    /**
     * Set utilityType
     *
     * @param string $utilityType
     * @return KfOffCmpCommerc
     */
    public function setUtilityType($utilityType)
    {
        $this->utilityType = $utilityType;

        return $this;
    }

    /**
     * Get utilityType
     *
     * @return string 
     */
    public function getUtilityType()
    {
        return $this->utilityType;
    }

    /**
     * Set fitOutCompensation
     *
     * @param float $fitOutCompensation
     * @return KfOffCmpCommerc
     */
    public function setFitOutCompensation($fitOutCompensation)
    {
        $this->fitOutCompensation = $fitOutCompensation;

        return $this;
    }

    /**
     * Get fitOutCompensation
     *
     * @return float 
     */
    public function getFitOutCompensation()
    {
        return $this->fitOutCompensation;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return KfOffCmpCommerc
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
     * @return KfOffCmpCommerc
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
     * Set salePrice
     *
     * @param float $salePrice
     * @return KfOffCmpCommerc
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return float 
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set saleCurrency
     *
     * @param string $saleCurrency
     * @return KfOffCmpCommerc
     */
    public function setSaleCurrency($saleCurrency)
    {
        $this->saleCurrency = $saleCurrency;

        return $this;
    }

    /**
     * Get saleCurrency
     *
     * @return string 
     */
    public function getSaleCurrency()
    {
        return $this->saleCurrency;
    }

    /**
     * Set yield
     *
     * @param float $yield
     * @return KfOffCmpCommerc
     */
    public function setYield($yield)
    {
        $this->yield = $yield;

        return $this;
    }

    /**
     * Get yield
     *
     * @return float 
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * Set oppStructure
     *
     * @param string $oppStructure
     * @return KfOffCmpCommerc
     */
    public function setOppStructure($oppStructure)
    {
        $this->oppStructure = $oppStructure;

        return $this;
    }

    /**
     * Get oppStructure
     *
     * @return string 
     */
    public function getOppStructure()
    {
        return $this->oppStructure;
    }

    /**
     * Set certificateOwnership
     *
     * @param string $certificateOwnership
     * @return KfOffCmpCommerc
     */
    public function setCertificateOwnership($certificateOwnership)
    {
        $this->certificateOwnership = $certificateOwnership;

        return $this;
    }

    /**
     * Get certificateOwnership
     *
     * @return string 
     */
    public function getCertificateOwnership()
    {
        return $this->certificateOwnership;
    }

    /**
     * Set ownershipType
     *
     * @param string $ownershipType
     * @return KfOffCmpCommerc
     */
    public function setOwnershipType($ownershipType)
    {
        $this->ownershipType = $ownershipType;

        return $this;
    }

    /**
     * Get ownershipType
     *
     * @return string 
     */
    public function getOwnershipType()
    {
        return $this->ownershipType;
    }

    /**
     * Set rentalStatusRus
     *
     * @param string $rentalStatusRus
     * @return KfOffCmpCommerc
     */
    public function setRentalStatusRus($rentalStatusRus)
    {
        $this->rentalStatusRus = $rentalStatusRus;

        return $this;
    }

    /**
     * Get rentalStatusRus
     *
     * @return string 
     */
    public function getRentalStatusRus()
    {
        return $this->rentalStatusRus;
    }

    /**
     * Set rentalStatusEng
     *
     * @param string $rentalStatusEng
     * @return KfOffCmpCommerc
     */
    public function setRentalStatusEng($rentalStatusEng)
    {
        $this->rentalStatusEng = $rentalStatusEng;

        return $this;
    }

    /**
     * Get rentalStatusEng
     *
     * @return string 
     */
    public function getRentalStatusEng()
    {
        return $this->rentalStatusEng;
    }

    /**
     * Set rentalRateAvg
     *
     * @param float $rentalRateAvg
     * @return KfOffCmpCommerc
     */
    public function setRentalRateAvg($rentalRateAvg)
    {
        $this->rentalRateAvg = $rentalRateAvg;

        return $this;
    }

    /**
     * Get rentalRateAvg
     *
     * @return float 
     */
    public function getRentalRateAvg()
    {
        return $this->rentalRateAvg;
    }

    /**
     * Set rraCur
     *
     * @param string $rraCur
     * @return KfOffCmpCommerc
     */
    public function setRraCur($rraCur)
    {
        $this->rraCur = $rraCur;

        return $this;
    }

    /**
     * Get rraCur
     *
     * @return string 
     */
    public function getRraCur()
    {
        return $this->rraCur;
    }

    /**
     * Set commercialTermsSale
     *
     * @param string $commercialTermsSale
     * @return KfOffCmpCommerc
     */
    public function setCommercialTermsSale($commercialTermsSale)
    {
        $this->commercialTermsSale = $commercialTermsSale;

        return $this;
    }

    /**
     * Get commercialTermsSale
     *
     * @return string 
     */
    public function getCommercialTermsSale()
    {
        return $this->commercialTermsSale;
    }
}
