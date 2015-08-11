<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="CONTRACT", uniqueConstraints={@ORM\UniqueConstraint(name="PK_CONTRACT", columns={"CONTRACTID"}), @ORM\UniqueConstraint(name="XAK1CONTRACT", columns={"ACCOUNTID", "CONTRACTID"})})
 * @ORM\Entity
 */
class Contract
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICECODE", type="string", length=12, nullable=true)
     */
    private $servicecode;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPECODE", type="string", length=12, nullable=true)
     */
    private $typecode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PURCHASEDATE", type="datetime", nullable=true)
     */
    private $purchasedate;

    /**
     * @var float
     *
     * @ORM\Column(name="PERIOD", type="float", precision=53, scale=0, nullable=true)
     */
    private $period;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDINGDATE", type="datetime", nullable=true)
     */
    private $endingdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTLEFT", type="string", length=32, nullable=true)
     */
    private $contractleft;

    /**
     * @var string
     *
     * @ORM\Column(name="BLANKET", type="string", length=1, nullable=true)
     */
    private $blanket;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTCALL", type="string", length=1, nullable=true)
     */
    private $firstcall;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRSTTICKET", type="string", length=1, nullable=true)
     */
    private $firstticket;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRACEPERIOD", type="integer", nullable=true)
     */
    private $graceperiod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FIRSTDATE", type="datetime", nullable=true)
     */
    private $firstdate;

    /**
     * @var string
     *
     * @ORM\Column(name="AMOUNT", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD1", type="string", length=80, nullable=true)
     */
    private $userfield1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD2", type="string", length=80, nullable=true)
     */
    private $userfield2;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD3", type="string", length=80, nullable=true)
     */
    private $userfield3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

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
     * @var float
     *
     * @ORM\Column(name="REMAINING", type="float", precision=53, scale=0, nullable=true)
     */
    private $remaining;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="LISTPRICE", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $listprice;

    /**
     * @var string
     *
     * @ORM\Column(name="PONUMBER", type="string", length=64, nullable=true)
     */
    private $ponumber;

    /**
     * @var float
     *
     * @ORM\Column(name="DISCOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="ISACTIVE", type="string", length=1, nullable=true)
     */
    private $isactive;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCENO", type="string", length=128, nullable=true)
     */
    private $referenceno;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;



    /**
     * Set contractid
     *
     * @param string $contractid
     * @return Contract
     */
    public function setContractid($contractid)
    {
        $this->contractid = $contractid;

        return $this;
    }

    /**
     * Get contractid
     *
     * @return string 
     */
    public function getContractid()
    {
        return $this->contractid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Contract
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
     * Set servicecode
     *
     * @param string $servicecode
     * @return Contract
     */
    public function setServicecode($servicecode)
    {
        $this->servicecode = $servicecode;

        return $this;
    }

    /**
     * Get servicecode
     *
     * @return string 
     */
    public function getServicecode()
    {
        return $this->servicecode;
    }

    /**
     * Set typecode
     *
     * @param string $typecode
     * @return Contract
     */
    public function setTypecode($typecode)
    {
        $this->typecode = $typecode;

        return $this;
    }

    /**
     * Get typecode
     *
     * @return string 
     */
    public function getTypecode()
    {
        return $this->typecode;
    }

    /**
     * Set purchasedate
     *
     * @param \DateTime $purchasedate
     * @return Contract
     */
    public function setPurchasedate($purchasedate)
    {
        $this->purchasedate = $purchasedate;

        return $this;
    }

    /**
     * Get purchasedate
     *
     * @return \DateTime 
     */
    public function getPurchasedate()
    {
        return $this->purchasedate;
    }

    /**
     * Set period
     *
     * @param float $period
     * @return Contract
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return float 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Contract
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set endingdate
     *
     * @param \DateTime $endingdate
     * @return Contract
     */
    public function setEndingdate($endingdate)
    {
        $this->endingdate = $endingdate;

        return $this;
    }

    /**
     * Get endingdate
     *
     * @return \DateTime 
     */
    public function getEndingdate()
    {
        return $this->endingdate;
    }

    /**
     * Set contractleft
     *
     * @param string $contractleft
     * @return Contract
     */
    public function setContractleft($contractleft)
    {
        $this->contractleft = $contractleft;

        return $this;
    }

    /**
     * Get contractleft
     *
     * @return string 
     */
    public function getContractleft()
    {
        return $this->contractleft;
    }

    /**
     * Set blanket
     *
     * @param string $blanket
     * @return Contract
     */
    public function setBlanket($blanket)
    {
        $this->blanket = $blanket;

        return $this;
    }

    /**
     * Get blanket
     *
     * @return string 
     */
    public function getBlanket()
    {
        return $this->blanket;
    }

    /**
     * Set firstcall
     *
     * @param string $firstcall
     * @return Contract
     */
    public function setFirstcall($firstcall)
    {
        $this->firstcall = $firstcall;

        return $this;
    }

    /**
     * Get firstcall
     *
     * @return string 
     */
    public function getFirstcall()
    {
        return $this->firstcall;
    }

    /**
     * Set firstticket
     *
     * @param string $firstticket
     * @return Contract
     */
    public function setFirstticket($firstticket)
    {
        $this->firstticket = $firstticket;

        return $this;
    }

    /**
     * Get firstticket
     *
     * @return string 
     */
    public function getFirstticket()
    {
        return $this->firstticket;
    }

    /**
     * Set graceperiod
     *
     * @param integer $graceperiod
     * @return Contract
     */
    public function setGraceperiod($graceperiod)
    {
        $this->graceperiod = $graceperiod;

        return $this;
    }

    /**
     * Get graceperiod
     *
     * @return integer 
     */
    public function getGraceperiod()
    {
        return $this->graceperiod;
    }

    /**
     * Set firstdate
     *
     * @param \DateTime $firstdate
     * @return Contract
     */
    public function setFirstdate($firstdate)
    {
        $this->firstdate = $firstdate;

        return $this;
    }

    /**
     * Get firstdate
     *
     * @return \DateTime 
     */
    public function getFirstdate()
    {
        return $this->firstdate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Contract
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Contract
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
     * Set notes
     *
     * @param string $notes
     * @return Contract
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
     * Set userfield1
     *
     * @param string $userfield1
     * @return Contract
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Contract
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
     * Set userfield2
     *
     * @param string $userfield2
     * @return Contract
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Contract
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
     * Set userfield3
     *
     * @param string $userfield3
     * @return Contract
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Contract
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
     * Set userfield4
     *
     * @param string $userfield4
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * Set remaining
     *
     * @param float $remaining
     * @return Contract
     */
    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;

        return $this;
    }

    /**
     * Get remaining
     *
     * @return float 
     */
    public function getRemaining()
    {
        return $this->remaining;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return Contract
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
     * Set listprice
     *
     * @param string $listprice
     * @return Contract
     */
    public function setListprice($listprice)
    {
        $this->listprice = $listprice;

        return $this;
    }

    /**
     * Get listprice
     *
     * @return string 
     */
    public function getListprice()
    {
        return $this->listprice;
    }

    /**
     * Set ponumber
     *
     * @param string $ponumber
     * @return Contract
     */
    public function setPonumber($ponumber)
    {
        $this->ponumber = $ponumber;

        return $this;
    }

    /**
     * Get ponumber
     *
     * @return string 
     */
    public function getPonumber()
    {
        return $this->ponumber;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return Contract
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set isactive
     *
     * @param string $isactive
     * @return Contract
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return string 
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set referenceno
     *
     * @param string $referenceno
     * @return Contract
     */
    public function setReferenceno($referenceno)
    {
        $this->referenceno = $referenceno;

        return $this;
    }

    /**
     * Get referenceno
     *
     * @return string 
     */
    public function getReferenceno()
    {
        return $this->referenceno;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return Contract
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
}
