<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountproduct
 *
 * @ORM\Table(name="ACCOUNTPRODUCT", uniqueConstraints={@ORM\UniqueConstraint(name="XPKACCOUNTPRODUCT", columns={"ACCOUNTPRODUCTID"})}, indexes={@ORM\Index(name="XAK1ACCOUNTPRODUCT", columns={"ACCOUNTID", "PRODUCTID"})})
 * @ORM\Entity
 */
class Accountproduct
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTID", type="string", length=12, nullable=false)
     */
    private $accountproductid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTID", type="string", length=12, nullable=true)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTPARENTID", type="string", length=12, nullable=true)
     */
    private $accountproductparentid;

    /**
     * @var string
     *
     * @ORM\Column(name="SERIALNUMBER", type="string", length=80, nullable=true)
     */
    private $serialnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD1", type="string", length=80, nullable=true)
     */
    private $userfield1;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD2", type="string", length=80, nullable=true)
     */
    private $userfield2;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD3", type="string", length=80, nullable=true)
     */
    private $userfield3;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD4", type="string", length=80, nullable=true)
     */
    private $userfield4;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD5", type="string", length=80, nullable=true)
     */
    private $userfield5;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD6", type="string", length=80, nullable=true)
     */
    private $userfield6;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD7", type="string", length=80, nullable=true)
     */
    private $userfield7;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD8", type="string", length=80, nullable=true)
     */
    private $userfield8;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD9", type="string", length=80, nullable=true)
     */
    private $userfield9;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD10", type="string", length=80, nullable=true)
     */
    private $userfield10;

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
     * @var integer
     *
     * @ORM\Column(name="RETURNED", type="integer", nullable=true)
     */
    private $returned;

    /**
     * @var integer
     *
     * @ORM\Column(name="EVALUATION", type="integer", nullable=true)
     */
    private $evaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPPRODUCTID", type="string", length=12, nullable=true)
     */
    private $oppproductid;

    /**
     * @var float
     *
     * @ORM\Column(name="QUANTITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="SALESORDERID", type="string", length=12, nullable=true)
     */
    private $salesorderid;

    /**
     * @var string
     *
     * @ORM\Column(name="PRDDESCRIPTION", type="text", length=16, nullable=true)
     */
    private $prddescription;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTNAME", type="string", length=64, nullable=true)
     */
    private $productname;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUALID", type="string", length=64, nullable=true)
     */
    private $actualid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETCODE", type="string", length=32, nullable=true)
     */
    private $assetcode;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=64, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="ENVIRONMENT", type="string", length=64, nullable=true)
     */
    private $environment;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETSYSTEM", type="string", length=64, nullable=true)
     */
    private $assetsystem;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETVERSION", type="string", length=64, nullable=true)
     */
    private $assetversion;



    /**
     * Set accountproductid
     *
     * @param string $accountproductid
     * @return Accountproduct
     */
    public function setAccountproductid($accountproductid)
    {
        $this->accountproductid = $accountproductid;

        return $this;
    }

    /**
     * Get accountproductid
     *
     * @return string 
     */
    public function getAccountproductid()
    {
        return $this->accountproductid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Accountproduct
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
     * Set productid
     *
     * @param string $productid
     * @return Accountproduct
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return string 
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set accountproductparentid
     *
     * @param string $accountproductparentid
     * @return Accountproduct
     */
    public function setAccountproductparentid($accountproductparentid)
    {
        $this->accountproductparentid = $accountproductparentid;

        return $this;
    }

    /**
     * Get accountproductparentid
     *
     * @return string 
     */
    public function getAccountproductparentid()
    {
        return $this->accountproductparentid;
    }

    /**
     * Set serialnumber
     *
     * @param string $serialnumber
     * @return Accountproduct
     */
    public function setSerialnumber($serialnumber)
    {
        $this->serialnumber = $serialnumber;

        return $this;
    }

    /**
     * Get serialnumber
     *
     * @return string 
     */
    public function getSerialnumber()
    {
        return $this->serialnumber;
    }

    /**
     * Set userfield1
     *
     * @param string $userfield1
     * @return Accountproduct
     */
    public function setUserfield1($userfield1)
    {
        $this->userfield1 = $userfield1;

        return $this;
    }

    /**
     * Get userfield1
     *
     * @return string 
     */
    public function getUserfield1()
    {
        return $this->userfield1;
    }

    /**
     * Set userfield2
     *
     * @param string $userfield2
     * @return Accountproduct
     */
    public function setUserfield2($userfield2)
    {
        $this->userfield2 = $userfield2;

        return $this;
    }

    /**
     * Get userfield2
     *
     * @return string 
     */
    public function getUserfield2()
    {
        return $this->userfield2;
    }

    /**
     * Set userfield3
     *
     * @param string $userfield3
     * @return Accountproduct
     */
    public function setUserfield3($userfield3)
    {
        $this->userfield3 = $userfield3;

        return $this;
    }

    /**
     * Get userfield3
     *
     * @return string 
     */
    public function getUserfield3()
    {
        return $this->userfield3;
    }

    /**
     * Set userfield4
     *
     * @param string $userfield4
     * @return Accountproduct
     */
    public function setUserfield4($userfield4)
    {
        $this->userfield4 = $userfield4;

        return $this;
    }

    /**
     * Get userfield4
     *
     * @return string 
     */
    public function getUserfield4()
    {
        return $this->userfield4;
    }

    /**
     * Set userfield5
     *
     * @param string $userfield5
     * @return Accountproduct
     */
    public function setUserfield5($userfield5)
    {
        $this->userfield5 = $userfield5;

        return $this;
    }

    /**
     * Get userfield5
     *
     * @return string 
     */
    public function getUserfield5()
    {
        return $this->userfield5;
    }

    /**
     * Set userfield6
     *
     * @param string $userfield6
     * @return Accountproduct
     */
    public function setUserfield6($userfield6)
    {
        $this->userfield6 = $userfield6;

        return $this;
    }

    /**
     * Get userfield6
     *
     * @return string 
     */
    public function getUserfield6()
    {
        return $this->userfield6;
    }

    /**
     * Set userfield7
     *
     * @param string $userfield7
     * @return Accountproduct
     */
    public function setUserfield7($userfield7)
    {
        $this->userfield7 = $userfield7;

        return $this;
    }

    /**
     * Get userfield7
     *
     * @return string 
     */
    public function getUserfield7()
    {
        return $this->userfield7;
    }

    /**
     * Set userfield8
     *
     * @param string $userfield8
     * @return Accountproduct
     */
    public function setUserfield8($userfield8)
    {
        $this->userfield8 = $userfield8;

        return $this;
    }

    /**
     * Get userfield8
     *
     * @return string 
     */
    public function getUserfield8()
    {
        return $this->userfield8;
    }

    /**
     * Set userfield9
     *
     * @param string $userfield9
     * @return Accountproduct
     */
    public function setUserfield9($userfield9)
    {
        $this->userfield9 = $userfield9;

        return $this;
    }

    /**
     * Get userfield9
     *
     * @return string 
     */
    public function getUserfield9()
    {
        return $this->userfield9;
    }

    /**
     * Set userfield10
     *
     * @param string $userfield10
     * @return Accountproduct
     */
    public function setUserfield10($userfield10)
    {
        $this->userfield10 = $userfield10;

        return $this;
    }

    /**
     * Get userfield10
     *
     * @return string 
     */
    public function getUserfield10()
    {
        return $this->userfield10;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Accountproduct
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
     * @return Accountproduct
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
     * @return Accountproduct
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
     * @return Accountproduct
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
     * Set returned
     *
     * @param integer $returned
     * @return Accountproduct
     */
    public function setReturned($returned)
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * Get returned
     *
     * @return integer 
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * Set evaluation
     *
     * @param integer $evaluation
     * @return Accountproduct
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return integer 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return Accountproduct
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set oppproductid
     *
     * @param string $oppproductid
     * @return Accountproduct
     */
    public function setOppproductid($oppproductid)
    {
        $this->oppproductid = $oppproductid;

        return $this;
    }

    /**
     * Get oppproductid
     *
     * @return string 
     */
    public function getOppproductid()
    {
        return $this->oppproductid;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Accountproduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set salesorderid
     *
     * @param string $salesorderid
     * @return Accountproduct
     */
    public function setSalesorderid($salesorderid)
    {
        $this->salesorderid = $salesorderid;

        return $this;
    }

    /**
     * Get salesorderid
     *
     * @return string 
     */
    public function getSalesorderid()
    {
        return $this->salesorderid;
    }

    /**
     * Set prddescription
     *
     * @param string $prddescription
     * @return Accountproduct
     */
    public function setPrddescription($prddescription)
    {
        $this->prddescription = $prddescription;

        return $this;
    }

    /**
     * Get prddescription
     *
     * @return string 
     */
    public function getPrddescription()
    {
        return $this->prddescription;
    }

    /**
     * Set productname
     *
     * @param string $productname
     * @return Accountproduct
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set actualid
     *
     * @param string $actualid
     * @return Accountproduct
     */
    public function setActualid($actualid)
    {
        $this->actualid = $actualid;

        return $this;
    }

    /**
     * Get actualid
     *
     * @return string 
     */
    public function getActualid()
    {
        return $this->actualid;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Accountproduct
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return Accountproduct
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set assetcode
     *
     * @param string $assetcode
     * @return Accountproduct
     */
    public function setAssetcode($assetcode)
    {
        $this->assetcode = $assetcode;

        return $this;
    }

    /**
     * Get assetcode
     *
     * @return string 
     */
    public function getAssetcode()
    {
        return $this->assetcode;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Accountproduct
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set environment
     *
     * @param string $environment
     * @return Accountproduct
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return string 
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set assetsystem
     *
     * @param string $assetsystem
     * @return Accountproduct
     */
    public function setAssetsystem($assetsystem)
    {
        $this->assetsystem = $assetsystem;

        return $this;
    }

    /**
     * Get assetsystem
     *
     * @return string 
     */
    public function getAssetsystem()
    {
        return $this->assetsystem;
    }

    /**
     * Set assetversion
     *
     * @param string $assetversion
     * @return Accountproduct
     */
    public function setAssetversion($assetversion)
    {
        $this->assetversion = $assetversion;

        return $this;
    }

    /**
     * Get assetversion
     *
     * @return string 
     */
    public function getAssetversion()
    {
        return $this->assetversion;
    }
}
