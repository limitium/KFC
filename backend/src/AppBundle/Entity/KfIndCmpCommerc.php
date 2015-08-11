<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfIndCmpCommerc
 *
 * @ORM\Table(name="KF_IND_CMP_COMMERC", uniqueConstraints={@ORM\UniqueConstraint(name="KF_IND_CMP_COMMERC_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_5_1304391716__K6_K1_17_18_19_20", columns={"SECCODEID", "SPK_PROPERTYID", "RENT_MIN", "RENT_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_5_1304391716__K1_K6_17_18_19_20", columns={"SPK_PROPERTYID", "SECCODEID", "RENT_MIN", "RENT_MAX", "COST_MIN", "COST_MAX"}), @ORM\Index(name="_dta_index_KF_IND_CMP_COMMERC_c_5_1304391716__K6", columns={"SECCODEID"})})
 * @ORM\Entity
 */
class KfIndCmpCommerc
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
     * @ORM\Column(name="RENT_STORAGE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorageMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_STORAGE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentStorageMax;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_OFFICE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentOfficeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MESONIN_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseMesoninMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_MESONIN_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseMesoninMax;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="SALE_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $municipalCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $municipalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentMin;

    /**
     * @var string
     *
     * @ORM\Column(name="RENT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $rentMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costMax;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $operationalCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $insuranceDepositMin;

    /**
     * @var string
     *
     * @ORM\Column(name="INSURANCE_DEPOSIT_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $insuranceDepositMax;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PALLET_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costPalletMin;

    /**
     * @var string
     *
     * @ORM\Column(name="COST_PALLET_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $costPalletMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $loadUnloadCostMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LOAD_UNLOAD_COST_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $loadUnloadCostMax;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_CONTRACT", type="string", length=32, nullable=true)
     */
    private $leaseContract;

    /**
     * @var string
     *
     * @ORM\Column(name="RATE_INDEXATION", type="string", length=1, nullable=true)
     */
    private $rateIndexation;

    /**
     * @var string
     *
     * @ORM\Column(name="INF_ON_DEMAND", type="string", length=1, nullable=true)
     */
    private $infOnDemand;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT_RUS", type="text", length=16, nullable=true)
     */
    private $commentRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENT_ENG", type="text", length=16, nullable=true)
     */
    private $commentEng;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="LEASE_INDUSTRIAL_MAX", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $leaseIndustrialMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MINLEASETERM", type="string", length=32, nullable=true)
     */
    private $minleaseterm;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONAL_EXP_TYPE", type="string", length=128, nullable=true)
     */
    private $operationalExpType;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_TYPE", type="string", length=128, nullable=true)
     */
    private $vatType;

    /**
     * @var string
     *
     * @ORM\Column(name="UTILITY_TYPE", type="string", length=128, nullable=true)
     */
    private $utilityType;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMERCIA_TERMS", type="string", length=32, nullable=true)
     */
    private $commerciaTerms;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfIndCmpCommerc
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
     * @return KfIndCmpCommerc
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
     * @return KfIndCmpCommerc
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
     * @return KfIndCmpCommerc
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
     * @return KfIndCmpCommerc
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
     * @return KfIndCmpCommerc
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
     * Set rentStorageMin
     *
     * @param string $rentStorageMin
     * @return KfIndCmpCommerc
     */
    public function setRentStorageMin($rentStorageMin)
    {
        $this->rentStorageMin = $rentStorageMin;

        return $this;
    }

    /**
     * Get rentStorageMin
     *
     * @return string 
     */
    public function getRentStorageMin()
    {
        return $this->rentStorageMin;
    }

    /**
     * Set rentStorageMax
     *
     * @param string $rentStorageMax
     * @return KfIndCmpCommerc
     */
    public function setRentStorageMax($rentStorageMax)
    {
        $this->rentStorageMax = $rentStorageMax;

        return $this;
    }

    /**
     * Get rentStorageMax
     *
     * @return string 
     */
    public function getRentStorageMax()
    {
        return $this->rentStorageMax;
    }

    /**
     * Set rentOffice
     *
     * @param string $rentOffice
     * @return KfIndCmpCommerc
     */
    public function setRentOffice($rentOffice)
    {
        $this->rentOffice = $rentOffice;

        return $this;
    }

    /**
     * Get rentOffice
     *
     * @return string 
     */
    public function getRentOffice()
    {
        return $this->rentOffice;
    }

    /**
     * Set rentOfficeMax
     *
     * @param string $rentOfficeMax
     * @return KfIndCmpCommerc
     */
    public function setRentOfficeMax($rentOfficeMax)
    {
        $this->rentOfficeMax = $rentOfficeMax;

        return $this;
    }

    /**
     * Get rentOfficeMax
     *
     * @return string 
     */
    public function getRentOfficeMax()
    {
        return $this->rentOfficeMax;
    }

    /**
     * Set leaseMesoninMin
     *
     * @param string $leaseMesoninMin
     * @return KfIndCmpCommerc
     */
    public function setLeaseMesoninMin($leaseMesoninMin)
    {
        $this->leaseMesoninMin = $leaseMesoninMin;

        return $this;
    }

    /**
     * Get leaseMesoninMin
     *
     * @return string 
     */
    public function getLeaseMesoninMin()
    {
        return $this->leaseMesoninMin;
    }

    /**
     * Set leaseMesoninMax
     *
     * @param string $leaseMesoninMax
     * @return KfIndCmpCommerc
     */
    public function setLeaseMesoninMax($leaseMesoninMax)
    {
        $this->leaseMesoninMax = $leaseMesoninMax;

        return $this;
    }

    /**
     * Get leaseMesoninMax
     *
     * @return string 
     */
    public function getLeaseMesoninMax()
    {
        return $this->leaseMesoninMax;
    }

    /**
     * Set saleMin
     *
     * @param string $saleMin
     * @return KfIndCmpCommerc
     */
    public function setSaleMin($saleMin)
    {
        $this->saleMin = $saleMin;

        return $this;
    }

    /**
     * Get saleMin
     *
     * @return string 
     */
    public function getSaleMin()
    {
        return $this->saleMin;
    }

    /**
     * Set saleMax
     *
     * @param string $saleMax
     * @return KfIndCmpCommerc
     */
    public function setSaleMax($saleMax)
    {
        $this->saleMax = $saleMax;

        return $this;
    }

    /**
     * Get saleMax
     *
     * @return string 
     */
    public function getSaleMax()
    {
        return $this->saleMax;
    }

    /**
     * Set municipalCostMin
     *
     * @param string $municipalCostMin
     * @return KfIndCmpCommerc
     */
    public function setMunicipalCostMin($municipalCostMin)
    {
        $this->municipalCostMin = $municipalCostMin;

        return $this;
    }

    /**
     * Get municipalCostMin
     *
     * @return string 
     */
    public function getMunicipalCostMin()
    {
        return $this->municipalCostMin;
    }

    /**
     * Set municipalCostMax
     *
     * @param string $municipalCostMax
     * @return KfIndCmpCommerc
     */
    public function setMunicipalCostMax($municipalCostMax)
    {
        $this->municipalCostMax = $municipalCostMax;

        return $this;
    }

    /**
     * Get municipalCostMax
     *
     * @return string 
     */
    public function getMunicipalCostMax()
    {
        return $this->municipalCostMax;
    }

    /**
     * Set rentMin
     *
     * @param string $rentMin
     * @return KfIndCmpCommerc
     */
    public function setRentMin($rentMin)
    {
        $this->rentMin = $rentMin;

        return $this;
    }

    /**
     * Get rentMin
     *
     * @return string 
     */
    public function getRentMin()
    {
        return $this->rentMin;
    }

    /**
     * Set rentMax
     *
     * @param string $rentMax
     * @return KfIndCmpCommerc
     */
    public function setRentMax($rentMax)
    {
        $this->rentMax = $rentMax;

        return $this;
    }

    /**
     * Get rentMax
     *
     * @return string 
     */
    public function getRentMax()
    {
        return $this->rentMax;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return KfIndCmpCommerc
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return KfIndCmpCommerc
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set operationalCostMin
     *
     * @param string $operationalCostMin
     * @return KfIndCmpCommerc
     */
    public function setOperationalCostMin($operationalCostMin)
    {
        $this->operationalCostMin = $operationalCostMin;

        return $this;
    }

    /**
     * Get operationalCostMin
     *
     * @return string 
     */
    public function getOperationalCostMin()
    {
        return $this->operationalCostMin;
    }

    /**
     * Set operationalCostMax
     *
     * @param string $operationalCostMax
     * @return KfIndCmpCommerc
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
     * Set insuranceDepositMin
     *
     * @param string $insuranceDepositMin
     * @return KfIndCmpCommerc
     */
    public function setInsuranceDepositMin($insuranceDepositMin)
    {
        $this->insuranceDepositMin = $insuranceDepositMin;

        return $this;
    }

    /**
     * Get insuranceDepositMin
     *
     * @return string 
     */
    public function getInsuranceDepositMin()
    {
        return $this->insuranceDepositMin;
    }

    /**
     * Set insuranceDepositMax
     *
     * @param string $insuranceDepositMax
     * @return KfIndCmpCommerc
     */
    public function setInsuranceDepositMax($insuranceDepositMax)
    {
        $this->insuranceDepositMax = $insuranceDepositMax;

        return $this;
    }

    /**
     * Get insuranceDepositMax
     *
     * @return string 
     */
    public function getInsuranceDepositMax()
    {
        return $this->insuranceDepositMax;
    }

    /**
     * Set costPalletMin
     *
     * @param string $costPalletMin
     * @return KfIndCmpCommerc
     */
    public function setCostPalletMin($costPalletMin)
    {
        $this->costPalletMin = $costPalletMin;

        return $this;
    }

    /**
     * Get costPalletMin
     *
     * @return string 
     */
    public function getCostPalletMin()
    {
        return $this->costPalletMin;
    }

    /**
     * Set costPalletMax
     *
     * @param string $costPalletMax
     * @return KfIndCmpCommerc
     */
    public function setCostPalletMax($costPalletMax)
    {
        $this->costPalletMax = $costPalletMax;

        return $this;
    }

    /**
     * Get costPalletMax
     *
     * @return string 
     */
    public function getCostPalletMax()
    {
        return $this->costPalletMax;
    }

    /**
     * Set loadUnloadCostMin
     *
     * @param string $loadUnloadCostMin
     * @return KfIndCmpCommerc
     */
    public function setLoadUnloadCostMin($loadUnloadCostMin)
    {
        $this->loadUnloadCostMin = $loadUnloadCostMin;

        return $this;
    }

    /**
     * Get loadUnloadCostMin
     *
     * @return string 
     */
    public function getLoadUnloadCostMin()
    {
        return $this->loadUnloadCostMin;
    }

    /**
     * Set loadUnloadCostMax
     *
     * @param string $loadUnloadCostMax
     * @return KfIndCmpCommerc
     */
    public function setLoadUnloadCostMax($loadUnloadCostMax)
    {
        $this->loadUnloadCostMax = $loadUnloadCostMax;

        return $this;
    }

    /**
     * Get loadUnloadCostMax
     *
     * @return string 
     */
    public function getLoadUnloadCostMax()
    {
        return $this->loadUnloadCostMax;
    }

    /**
     * Set leaseContract
     *
     * @param string $leaseContract
     * @return KfIndCmpCommerc
     */
    public function setLeaseContract($leaseContract)
    {
        $this->leaseContract = $leaseContract;

        return $this;
    }

    /**
     * Get leaseContract
     *
     * @return string 
     */
    public function getLeaseContract()
    {
        return $this->leaseContract;
    }

    /**
     * Set rateIndexation
     *
     * @param string $rateIndexation
     * @return KfIndCmpCommerc
     */
    public function setRateIndexation($rateIndexation)
    {
        $this->rateIndexation = $rateIndexation;

        return $this;
    }

    /**
     * Get rateIndexation
     *
     * @return string 
     */
    public function getRateIndexation()
    {
        return $this->rateIndexation;
    }

    /**
     * Set infOnDemand
     *
     * @param string $infOnDemand
     * @return KfIndCmpCommerc
     */
    public function setInfOnDemand($infOnDemand)
    {
        $this->infOnDemand = $infOnDemand;

        return $this;
    }

    /**
     * Get infOnDemand
     *
     * @return string 
     */
    public function getInfOnDemand()
    {
        return $this->infOnDemand;
    }

    /**
     * Set commentRus
     *
     * @param string $commentRus
     * @return KfIndCmpCommerc
     */
    public function setCommentRus($commentRus)
    {
        $this->commentRus = $commentRus;

        return $this;
    }

    /**
     * Get commentRus
     *
     * @return string 
     */
    public function getCommentRus()
    {
        return $this->commentRus;
    }

    /**
     * Set commentEng
     *
     * @param string $commentEng
     * @return KfIndCmpCommerc
     */
    public function setCommentEng($commentEng)
    {
        $this->commentEng = $commentEng;

        return $this;
    }

    /**
     * Get commentEng
     *
     * @return string 
     */
    public function getCommentEng()
    {
        return $this->commentEng;
    }

    /**
     * Set leaseIndustrialMin
     *
     * @param string $leaseIndustrialMin
     * @return KfIndCmpCommerc
     */
    public function setLeaseIndustrialMin($leaseIndustrialMin)
    {
        $this->leaseIndustrialMin = $leaseIndustrialMin;

        return $this;
    }

    /**
     * Get leaseIndustrialMin
     *
     * @return string 
     */
    public function getLeaseIndustrialMin()
    {
        return $this->leaseIndustrialMin;
    }

    /**
     * Set leaseIndustrialMax
     *
     * @param string $leaseIndustrialMax
     * @return KfIndCmpCommerc
     */
    public function setLeaseIndustrialMax($leaseIndustrialMax)
    {
        $this->leaseIndustrialMax = $leaseIndustrialMax;

        return $this;
    }

    /**
     * Get leaseIndustrialMax
     *
     * @return string 
     */
    public function getLeaseIndustrialMax()
    {
        return $this->leaseIndustrialMax;
    }

    /**
     * Set minleaseterm
     *
     * @param string $minleaseterm
     * @return KfIndCmpCommerc
     */
    public function setMinleaseterm($minleaseterm)
    {
        $this->minleaseterm = $minleaseterm;

        return $this;
    }

    /**
     * Get minleaseterm
     *
     * @return string 
     */
    public function getMinleaseterm()
    {
        return $this->minleaseterm;
    }

    /**
     * Set operationalExpType
     *
     * @param string $operationalExpType
     * @return KfIndCmpCommerc
     */
    public function setOperationalExpType($operationalExpType)
    {
        $this->operationalExpType = $operationalExpType;

        return $this;
    }

    /**
     * Get operationalExpType
     *
     * @return string 
     */
    public function getOperationalExpType()
    {
        return $this->operationalExpType;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return KfIndCmpCommerc
     */
    public function setVatType($vatType)
    {
        $this->vatType = $vatType;

        return $this;
    }

    /**
     * Get vatType
     *
     * @return string 
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Set utilityType
     *
     * @param string $utilityType
     * @return KfIndCmpCommerc
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
     * Set commerciaTerms
     *
     * @param string $commerciaTerms
     * @return KfIndCmpCommerc
     */
    public function setCommerciaTerms($commerciaTerms)
    {
        $this->commerciaTerms = $commerciaTerms;

        return $this;
    }

    /**
     * Get commerciaTerms
     *
     * @return string 
     */
    public function getCommerciaTerms()
    {
        return $this->commerciaTerms;
    }
}
