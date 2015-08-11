<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountdetail
 *
 * @ORM\Table(name="ACCOUNTDETAIL", uniqueConstraints={@ORM\UniqueConstraint(name="ACCOUNTDETAIL_PRIMARY", columns={"ACCOUNTID"})}, indexes={@ORM\Index(name="KF_SR_IX_ACCOUNTRUS", columns={"ACCOUNTID", "ACCOUNTRUS"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K6_K23_K25", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_1", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_c_7_886294217__K6_K23_K25", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1", columns={"ACCOUNTRUS", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6", columns={"ACCOUNTRUS"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K29_K30", columns={"BRAND", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K29_K30_K1", columns={"BRAND", "FULLNAME", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K29_K30", columns={"ACCOUNTID", "BRAND", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_30", columns={"ACCOUNTID", "FULLNAME"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_23", columns={"ACCOUNTID", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K23_K1", columns={"MAINPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K23", columns={"MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_K27_K1", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K23_K25_K27", columns={"ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_K6_K23_K25_K27", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K1_6_25", columns={"ACCOUNTID", "ACCOUNTRUS", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_25", columns={"ACCOUNTRUS", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1_25", columns={"ACCOUNTRUS", "ACCOUNTID", "FAXPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_7_886294217__K6_K1_23_25_27", columns={"ACCOUNTRUS", "ACCOUNTID", "MAINPREFIX", "FAXPREFIX", "TOLLPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_9_886294217__K6_1_23", columns={"ACCOUNTRUS", "ACCOUNTID", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_9_886294217__K1_K6_23", columns={"ACCOUNTID", "ACCOUNTRUS", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K1_6_29", columns={"ACCOUNTID", "ACCOUNTRUS", "BRAND"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K6_K23_1", columns={"ACCOUNTRUS", "MAINPREFIX", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_c_5_886294217__K6_K23", columns={"ACCOUNTRUS", "MAINPREFIX"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K35_K1", columns={"ACC_NATIONALLITY", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K1_35", columns={"ACCOUNTID", "ACC_NATIONALLITY"}), @ORM\Index(name="_dta_index_ACCOUNTDETAIL_5_886294217__K35", columns={"ACC_NATIONALLITY"})})
 * @ORM\Entity
 */
class Accountdetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="ACCOUNTRUS", type="string", length=256, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCCOMMENT", type="string", length=2048, nullable=true)
     */
    private $acccomment;

    /**
     * @var string
     *
     * @ORM\Column(name="WEAKNESSES", type="string", length=128, nullable=true)
     */
    private $weaknesses;

    /**
     * @var string
     *
     * @ORM\Column(name="STRENGTHS", type="string", length=128, nullable=true)
     */
    private $strengths;

    /**
     * @var string
     *
     * @ORM\Column(name="STRATEGY", type="string", length=128, nullable=true)
     */
    private $strategy;

    /**
     * @var integer
     *
     * @ORM\Column(name="RATING", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTS", type="string", length=64, nullable=true)
     */
    private $products;

    /**
     * @var string
     *
     * @ORM\Column(name="INDUSTRIALMANAGERID", type="string", length=32, nullable=true)
     */
    private $industrialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESIDENTIALMANAGERID", type="string", length=32, nullable=true)
     */
    private $residentialmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRYHOUSEMANAGERID", type="string", length=32, nullable=true)
     */
    private $countryhousemanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="RETAILMANAGERID", type="string", length=32, nullable=true)
     */
    private $retailmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="OFFICESMANAGERID", type="string", length=32, nullable=true)
     */
    private $officesmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSESSMENTMANAGERID", type="string", length=32, nullable=true)
     */
    private $assessmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="INVESTMENTMANAGERID", type="string", length=32, nullable=true)
     */
    private $investmentmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSULTINGMANAGERID", type="string", length=32, nullable=true)
     */
    private $consultingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETRESEACHMANAGERID", type="string", length=32, nullable=true)
     */
    private $marketreseachmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MARKETINGMANAGERID", type="string", length=32, nullable=true)
     */
    private $marketingmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINPREFIX", type="string", length=32, nullable=true)
     */
    private $mainprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINSUFIX", type="string", length=32, nullable=true)
     */
    private $mainsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXPREFIX", type="string", length=32, nullable=true)
     */
    private $faxprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="FAXSUFIX", type="string", length=32, nullable=true)
     */
    private $faxsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="TOLLPREFIX", type="string", length=32, nullable=true)
     */
    private $tollprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="TOLLSUFIX", type="string", length=32, nullable=true)
     */
    private $tollsufix;

    /**
     * @var string
     *
     * @ORM\Column(name="BRAND", type="string", length=128, nullable=true)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="FULLNAME", type="string", length=256, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="ISRUSSIAN", type="string", length=1, nullable=true)
     */
    private $isrussian;

    /**
     * @var integer
     *
     * @ORM\Column(name="IND", type="integer", nullable=true)
     */
    private $ind;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMBER_OF_STORES", type="integer", nullable=true)
     */
    private $numberOfStores;

    /**
     * @var string
     *
     * @ORM\Column(name="REFFERED", type="string", length=64, nullable=true)
     */
    private $reffered;

    /**
     * @var string
     *
     * @ORM\Column(name="ACC_NATIONALLITY", type="string", length=128, nullable=true)
     */
    private $accNationallity;

    /**
     * @var string
     *
     * @ORM\Column(name="OTHER_OFFICE", type="string", length=32, nullable=true)
     */
    private $otherOffice;



    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Accountdetail
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
     * Set createuser
     *
     * @param string $createuser
     * @return Accountdetail
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
     * @return Accountdetail
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
     * @return Accountdetail
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
     * @return Accountdetail
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
     * Set accountrus
     *
     * @param string $accountrus
     * @return Accountdetail
     */
    public function setAccountrus($accountrus)
    {
        $this->accountrus = $accountrus;

        return $this;
    }

    /**
     * Get accountrus
     *
     * @return string 
     */
    public function getAccountrus()
    {
        return $this->accountrus;
    }

    /**
     * Set acccomment
     *
     * @param string $acccomment
     * @return Accountdetail
     */
    public function setAcccomment($acccomment)
    {
        $this->acccomment = $acccomment;

        return $this;
    }

    /**
     * Get acccomment
     *
     * @return string 
     */
    public function getAcccomment()
    {
        return $this->acccomment;
    }

    /**
     * Set weaknesses
     *
     * @param string $weaknesses
     * @return Accountdetail
     */
    public function setWeaknesses($weaknesses)
    {
        $this->weaknesses = $weaknesses;

        return $this;
    }

    /**
     * Get weaknesses
     *
     * @return string 
     */
    public function getWeaknesses()
    {
        return $this->weaknesses;
    }

    /**
     * Set strengths
     *
     * @param string $strengths
     * @return Accountdetail
     */
    public function setStrengths($strengths)
    {
        $this->strengths = $strengths;

        return $this;
    }

    /**
     * Get strengths
     *
     * @return string 
     */
    public function getStrengths()
    {
        return $this->strengths;
    }

    /**
     * Set strategy
     *
     * @param string $strategy
     * @return Accountdetail
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * Get strategy
     *
     * @return string 
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Accountdetail
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set products
     *
     * @param string $products
     * @return Accountdetail
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return string 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set industrialmanagerid
     *
     * @param string $industrialmanagerid
     * @return Accountdetail
     */
    public function setIndustrialmanagerid($industrialmanagerid)
    {
        $this->industrialmanagerid = $industrialmanagerid;

        return $this;
    }

    /**
     * Get industrialmanagerid
     *
     * @return string 
     */
    public function getIndustrialmanagerid()
    {
        return $this->industrialmanagerid;
    }

    /**
     * Set residentialmanagerid
     *
     * @param string $residentialmanagerid
     * @return Accountdetail
     */
    public function setResidentialmanagerid($residentialmanagerid)
    {
        $this->residentialmanagerid = $residentialmanagerid;

        return $this;
    }

    /**
     * Get residentialmanagerid
     *
     * @return string 
     */
    public function getResidentialmanagerid()
    {
        return $this->residentialmanagerid;
    }

    /**
     * Set countryhousemanagerid
     *
     * @param string $countryhousemanagerid
     * @return Accountdetail
     */
    public function setCountryhousemanagerid($countryhousemanagerid)
    {
        $this->countryhousemanagerid = $countryhousemanagerid;

        return $this;
    }

    /**
     * Get countryhousemanagerid
     *
     * @return string 
     */
    public function getCountryhousemanagerid()
    {
        return $this->countryhousemanagerid;
    }

    /**
     * Set retailmanagerid
     *
     * @param string $retailmanagerid
     * @return Accountdetail
     */
    public function setRetailmanagerid($retailmanagerid)
    {
        $this->retailmanagerid = $retailmanagerid;

        return $this;
    }

    /**
     * Get retailmanagerid
     *
     * @return string 
     */
    public function getRetailmanagerid()
    {
        return $this->retailmanagerid;
    }

    /**
     * Set officesmanagerid
     *
     * @param string $officesmanagerid
     * @return Accountdetail
     */
    public function setOfficesmanagerid($officesmanagerid)
    {
        $this->officesmanagerid = $officesmanagerid;

        return $this;
    }

    /**
     * Get officesmanagerid
     *
     * @return string 
     */
    public function getOfficesmanagerid()
    {
        return $this->officesmanagerid;
    }

    /**
     * Set assessmentmanagerid
     *
     * @param string $assessmentmanagerid
     * @return Accountdetail
     */
    public function setAssessmentmanagerid($assessmentmanagerid)
    {
        $this->assessmentmanagerid = $assessmentmanagerid;

        return $this;
    }

    /**
     * Get assessmentmanagerid
     *
     * @return string 
     */
    public function getAssessmentmanagerid()
    {
        return $this->assessmentmanagerid;
    }

    /**
     * Set investmentmanagerid
     *
     * @param string $investmentmanagerid
     * @return Accountdetail
     */
    public function setInvestmentmanagerid($investmentmanagerid)
    {
        $this->investmentmanagerid = $investmentmanagerid;

        return $this;
    }

    /**
     * Get investmentmanagerid
     *
     * @return string 
     */
    public function getInvestmentmanagerid()
    {
        return $this->investmentmanagerid;
    }

    /**
     * Set consultingmanagerid
     *
     * @param string $consultingmanagerid
     * @return Accountdetail
     */
    public function setConsultingmanagerid($consultingmanagerid)
    {
        $this->consultingmanagerid = $consultingmanagerid;

        return $this;
    }

    /**
     * Get consultingmanagerid
     *
     * @return string 
     */
    public function getConsultingmanagerid()
    {
        return $this->consultingmanagerid;
    }

    /**
     * Set marketreseachmanagerid
     *
     * @param string $marketreseachmanagerid
     * @return Accountdetail
     */
    public function setMarketreseachmanagerid($marketreseachmanagerid)
    {
        $this->marketreseachmanagerid = $marketreseachmanagerid;

        return $this;
    }

    /**
     * Get marketreseachmanagerid
     *
     * @return string 
     */
    public function getMarketreseachmanagerid()
    {
        return $this->marketreseachmanagerid;
    }

    /**
     * Set marketingmanagerid
     *
     * @param string $marketingmanagerid
     * @return Accountdetail
     */
    public function setMarketingmanagerid($marketingmanagerid)
    {
        $this->marketingmanagerid = $marketingmanagerid;

        return $this;
    }

    /**
     * Get marketingmanagerid
     *
     * @return string 
     */
    public function getMarketingmanagerid()
    {
        return $this->marketingmanagerid;
    }

    /**
     * Set mainprefix
     *
     * @param string $mainprefix
     * @return Accountdetail
     */
    public function setMainprefix($mainprefix)
    {
        $this->mainprefix = $mainprefix;

        return $this;
    }

    /**
     * Get mainprefix
     *
     * @return string 
     */
    public function getMainprefix()
    {
        return $this->mainprefix;
    }

    /**
     * Set mainsufix
     *
     * @param string $mainsufix
     * @return Accountdetail
     */
    public function setMainsufix($mainsufix)
    {
        $this->mainsufix = $mainsufix;

        return $this;
    }

    /**
     * Get mainsufix
     *
     * @return string 
     */
    public function getMainsufix()
    {
        return $this->mainsufix;
    }

    /**
     * Set faxprefix
     *
     * @param string $faxprefix
     * @return Accountdetail
     */
    public function setFaxprefix($faxprefix)
    {
        $this->faxprefix = $faxprefix;

        return $this;
    }

    /**
     * Get faxprefix
     *
     * @return string 
     */
    public function getFaxprefix()
    {
        return $this->faxprefix;
    }

    /**
     * Set faxsufix
     *
     * @param string $faxsufix
     * @return Accountdetail
     */
    public function setFaxsufix($faxsufix)
    {
        $this->faxsufix = $faxsufix;

        return $this;
    }

    /**
     * Get faxsufix
     *
     * @return string 
     */
    public function getFaxsufix()
    {
        return $this->faxsufix;
    }

    /**
     * Set tollprefix
     *
     * @param string $tollprefix
     * @return Accountdetail
     */
    public function setTollprefix($tollprefix)
    {
        $this->tollprefix = $tollprefix;

        return $this;
    }

    /**
     * Get tollprefix
     *
     * @return string 
     */
    public function getTollprefix()
    {
        return $this->tollprefix;
    }

    /**
     * Set tollsufix
     *
     * @param string $tollsufix
     * @return Accountdetail
     */
    public function setTollsufix($tollsufix)
    {
        $this->tollsufix = $tollsufix;

        return $this;
    }

    /**
     * Get tollsufix
     *
     * @return string 
     */
    public function getTollsufix()
    {
        return $this->tollsufix;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Accountdetail
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return Accountdetail
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set isrussian
     *
     * @param string $isrussian
     * @return Accountdetail
     */
    public function setIsrussian($isrussian)
    {
        $this->isrussian = $isrussian;

        return $this;
    }

    /**
     * Get isrussian
     *
     * @return string 
     */
    public function getIsrussian()
    {
        return $this->isrussian;
    }

    /**
     * Set ind
     *
     * @param integer $ind
     * @return Accountdetail
     */
    public function setInd($ind)
    {
        $this->ind = $ind;

        return $this;
    }

    /**
     * Get ind
     *
     * @return integer 
     */
    public function getInd()
    {
        return $this->ind;
    }

    /**
     * Set numberOfStores
     *
     * @param integer $numberOfStores
     * @return Accountdetail
     */
    public function setNumberOfStores($numberOfStores)
    {
        $this->numberOfStores = $numberOfStores;

        return $this;
    }

    /**
     * Get numberOfStores
     *
     * @return integer 
     */
    public function getNumberOfStores()
    {
        return $this->numberOfStores;
    }

    /**
     * Set reffered
     *
     * @param string $reffered
     * @return Accountdetail
     */
    public function setReffered($reffered)
    {
        $this->reffered = $reffered;

        return $this;
    }

    /**
     * Get reffered
     *
     * @return string 
     */
    public function getReffered()
    {
        return $this->reffered;
    }

    /**
     * Set accNationallity
     *
     * @param string $accNationallity
     * @return Accountdetail
     */
    public function setAccNationallity($accNationallity)
    {
        $this->accNationallity = $accNationallity;

        return $this;
    }

    /**
     * Get accNationallity
     *
     * @return string 
     */
    public function getAccNationallity()
    {
        return $this->accNationallity;
    }

    /**
     * Set otherOffice
     *
     * @param string $otherOffice
     * @return Accountdetail
     */
    public function setOtherOffice($otherOffice)
    {
        $this->otherOffice = $otherOffice;

        return $this;
    }

    /**
     * Get otherOffice
     *
     * @return string 
     */
    public function getOtherOffice()
    {
        return $this->otherOffice;
    }
}
