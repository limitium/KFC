<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingPlan
 *
 * @ORM\Table(name="KF_MARKETING_PLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_PLAN_PRIMARY", columns={"KF_MARKETING_PLANID"})}, indexes={@ORM\Index(name="KF_MARKETING_PLAN_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfMarketingPlan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PLANID", type="string", length=12, nullable=false)
     */
    private $kfMarketingPlanid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

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
     * @ORM\Column(name="BUDGET_TYPE", type="string", length=64, nullable=true)
     */
    private $budgetType;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH1", type="float", precision=53, scale=0, nullable=true)
     */
    private $month1;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH1YEAR", type="string", length=8, nullable=true)
     */
    private $month1year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH2", type="float", precision=53, scale=0, nullable=true)
     */
    private $month2;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH2YEAR", type="string", length=8, nullable=true)
     */
    private $month2year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH3", type="float", precision=53, scale=0, nullable=true)
     */
    private $month3;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH3YEAR", type="string", length=8, nullable=true)
     */
    private $month3year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH4", type="float", precision=53, scale=0, nullable=true)
     */
    private $month4;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH4YEAR", type="string", length=8, nullable=true)
     */
    private $month4year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH5", type="float", precision=53, scale=0, nullable=true)
     */
    private $month5;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH5YEAR", type="string", length=8, nullable=true)
     */
    private $month5year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH6", type="float", precision=53, scale=0, nullable=true)
     */
    private $month6;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH6YEAR", type="string", length=8, nullable=true)
     */
    private $month6year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH7", type="float", precision=53, scale=0, nullable=true)
     */
    private $month7;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH7YEAR", type="string", length=8, nullable=true)
     */
    private $month7year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH8", type="float", precision=53, scale=0, nullable=true)
     */
    private $month8;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH8YEAR", type="string", length=8, nullable=true)
     */
    private $month8year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH9", type="float", precision=53, scale=0, nullable=true)
     */
    private $month9;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH9YEAR", type="string", length=8, nullable=true)
     */
    private $month9year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH10", type="float", precision=53, scale=0, nullable=true)
     */
    private $month10;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH10YEAR", type="string", length=8, nullable=true)
     */
    private $month10year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH11", type="float", precision=53, scale=0, nullable=true)
     */
    private $month11;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH11YEAR", type="string", length=8, nullable=true)
     */
    private $month11year;

    /**
     * @var float
     *
     * @ORM\Column(name="MONTH12", type="float", precision=53, scale=0, nullable=true)
     */
    private $month12;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTH12YEAR", type="string", length=8, nullable=true)
     */
    private $month12year;



    /**
     * Set kfMarketingPlanid
     *
     * @param string $kfMarketingPlanid
     * @return KfMarketingPlan
     */
    public function setKfMarketingPlanid($kfMarketingPlanid)
    {
        $this->kfMarketingPlanid = $kfMarketingPlanid;

        return $this;
    }

    /**
     * Get kfMarketingPlanid
     *
     * @return string 
     */
    public function getKfMarketingPlanid()
    {
        return $this->kfMarketingPlanid;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     * @return KfMarketingPlan
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return string 
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketingPlan
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
     * @return KfMarketingPlan
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
     * @return KfMarketingPlan
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
     * @return KfMarketingPlan
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
     * Set budgetType
     *
     * @param string $budgetType
     * @return KfMarketingPlan
     */
    public function setBudgetType($budgetType)
    {
        $this->budgetType = $budgetType;

        return $this;
    }

    /**
     * Get budgetType
     *
     * @return string 
     */
    public function getBudgetType()
    {
        return $this->budgetType;
    }

    /**
     * Set month1
     *
     * @param float $month1
     * @return KfMarketingPlan
     */
    public function setMonth1($month1)
    {
        $this->month1 = $month1;

        return $this;
    }

    /**
     * Get month1
     *
     * @return float 
     */
    public function getMonth1()
    {
        return $this->month1;
    }

    /**
     * Set month1year
     *
     * @param string $month1year
     * @return KfMarketingPlan
     */
    public function setMonth1year($month1year)
    {
        $this->month1year = $month1year;

        return $this;
    }

    /**
     * Get month1year
     *
     * @return string 
     */
    public function getMonth1year()
    {
        return $this->month1year;
    }

    /**
     * Set month2
     *
     * @param float $month2
     * @return KfMarketingPlan
     */
    public function setMonth2($month2)
    {
        $this->month2 = $month2;

        return $this;
    }

    /**
     * Get month2
     *
     * @return float 
     */
    public function getMonth2()
    {
        return $this->month2;
    }

    /**
     * Set month2year
     *
     * @param string $month2year
     * @return KfMarketingPlan
     */
    public function setMonth2year($month2year)
    {
        $this->month2year = $month2year;

        return $this;
    }

    /**
     * Get month2year
     *
     * @return string 
     */
    public function getMonth2year()
    {
        return $this->month2year;
    }

    /**
     * Set month3
     *
     * @param float $month3
     * @return KfMarketingPlan
     */
    public function setMonth3($month3)
    {
        $this->month3 = $month3;

        return $this;
    }

    /**
     * Get month3
     *
     * @return float 
     */
    public function getMonth3()
    {
        return $this->month3;
    }

    /**
     * Set month3year
     *
     * @param string $month3year
     * @return KfMarketingPlan
     */
    public function setMonth3year($month3year)
    {
        $this->month3year = $month3year;

        return $this;
    }

    /**
     * Get month3year
     *
     * @return string 
     */
    public function getMonth3year()
    {
        return $this->month3year;
    }

    /**
     * Set month4
     *
     * @param float $month4
     * @return KfMarketingPlan
     */
    public function setMonth4($month4)
    {
        $this->month4 = $month4;

        return $this;
    }

    /**
     * Get month4
     *
     * @return float 
     */
    public function getMonth4()
    {
        return $this->month4;
    }

    /**
     * Set month4year
     *
     * @param string $month4year
     * @return KfMarketingPlan
     */
    public function setMonth4year($month4year)
    {
        $this->month4year = $month4year;

        return $this;
    }

    /**
     * Get month4year
     *
     * @return string 
     */
    public function getMonth4year()
    {
        return $this->month4year;
    }

    /**
     * Set month5
     *
     * @param float $month5
     * @return KfMarketingPlan
     */
    public function setMonth5($month5)
    {
        $this->month5 = $month5;

        return $this;
    }

    /**
     * Get month5
     *
     * @return float 
     */
    public function getMonth5()
    {
        return $this->month5;
    }

    /**
     * Set month5year
     *
     * @param string $month5year
     * @return KfMarketingPlan
     */
    public function setMonth5year($month5year)
    {
        $this->month5year = $month5year;

        return $this;
    }

    /**
     * Get month5year
     *
     * @return string 
     */
    public function getMonth5year()
    {
        return $this->month5year;
    }

    /**
     * Set month6
     *
     * @param float $month6
     * @return KfMarketingPlan
     */
    public function setMonth6($month6)
    {
        $this->month6 = $month6;

        return $this;
    }

    /**
     * Get month6
     *
     * @return float 
     */
    public function getMonth6()
    {
        return $this->month6;
    }

    /**
     * Set month6year
     *
     * @param string $month6year
     * @return KfMarketingPlan
     */
    public function setMonth6year($month6year)
    {
        $this->month6year = $month6year;

        return $this;
    }

    /**
     * Get month6year
     *
     * @return string 
     */
    public function getMonth6year()
    {
        return $this->month6year;
    }

    /**
     * Set month7
     *
     * @param float $month7
     * @return KfMarketingPlan
     */
    public function setMonth7($month7)
    {
        $this->month7 = $month7;

        return $this;
    }

    /**
     * Get month7
     *
     * @return float 
     */
    public function getMonth7()
    {
        return $this->month7;
    }

    /**
     * Set month7year
     *
     * @param string $month7year
     * @return KfMarketingPlan
     */
    public function setMonth7year($month7year)
    {
        $this->month7year = $month7year;

        return $this;
    }

    /**
     * Get month7year
     *
     * @return string 
     */
    public function getMonth7year()
    {
        return $this->month7year;
    }

    /**
     * Set month8
     *
     * @param float $month8
     * @return KfMarketingPlan
     */
    public function setMonth8($month8)
    {
        $this->month8 = $month8;

        return $this;
    }

    /**
     * Get month8
     *
     * @return float 
     */
    public function getMonth8()
    {
        return $this->month8;
    }

    /**
     * Set month8year
     *
     * @param string $month8year
     * @return KfMarketingPlan
     */
    public function setMonth8year($month8year)
    {
        $this->month8year = $month8year;

        return $this;
    }

    /**
     * Get month8year
     *
     * @return string 
     */
    public function getMonth8year()
    {
        return $this->month8year;
    }

    /**
     * Set month9
     *
     * @param float $month9
     * @return KfMarketingPlan
     */
    public function setMonth9($month9)
    {
        $this->month9 = $month9;

        return $this;
    }

    /**
     * Get month9
     *
     * @return float 
     */
    public function getMonth9()
    {
        return $this->month9;
    }

    /**
     * Set month9year
     *
     * @param string $month9year
     * @return KfMarketingPlan
     */
    public function setMonth9year($month9year)
    {
        $this->month9year = $month9year;

        return $this;
    }

    /**
     * Get month9year
     *
     * @return string 
     */
    public function getMonth9year()
    {
        return $this->month9year;
    }

    /**
     * Set month10
     *
     * @param float $month10
     * @return KfMarketingPlan
     */
    public function setMonth10($month10)
    {
        $this->month10 = $month10;

        return $this;
    }

    /**
     * Get month10
     *
     * @return float 
     */
    public function getMonth10()
    {
        return $this->month10;
    }

    /**
     * Set month10year
     *
     * @param string $month10year
     * @return KfMarketingPlan
     */
    public function setMonth10year($month10year)
    {
        $this->month10year = $month10year;

        return $this;
    }

    /**
     * Get month10year
     *
     * @return string 
     */
    public function getMonth10year()
    {
        return $this->month10year;
    }

    /**
     * Set month11
     *
     * @param float $month11
     * @return KfMarketingPlan
     */
    public function setMonth11($month11)
    {
        $this->month11 = $month11;

        return $this;
    }

    /**
     * Get month11
     *
     * @return float 
     */
    public function getMonth11()
    {
        return $this->month11;
    }

    /**
     * Set month11year
     *
     * @param string $month11year
     * @return KfMarketingPlan
     */
    public function setMonth11year($month11year)
    {
        $this->month11year = $month11year;

        return $this;
    }

    /**
     * Get month11year
     *
     * @return string 
     */
    public function getMonth11year()
    {
        return $this->month11year;
    }

    /**
     * Set month12
     *
     * @param float $month12
     * @return KfMarketingPlan
     */
    public function setMonth12($month12)
    {
        $this->month12 = $month12;

        return $this;
    }

    /**
     * Get month12
     *
     * @return float 
     */
    public function getMonth12()
    {
        return $this->month12;
    }

    /**
     * Set month12year
     *
     * @param string $month12year
     * @return KfMarketingPlan
     */
    public function setMonth12year($month12year)
    {
        $this->month12year = $month12year;

        return $this;
    }

    /**
     * Get month12year
     *
     * @return string 
     */
    public function getMonth12year()
    {
        return $this->month12year;
    }
}
