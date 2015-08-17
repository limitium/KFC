<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userprofile
 */
class Userprofile
{
    /**
     * @var string
     */
    private $userid;

    /**
     * @var string
     */
    private $assetid;

    /**
     * @var string
     */
    private $assetdesc;

    /**
     * @var \DateTime
     */
    private $hiredate;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $spouse;

    /**
     * @var string
     */
    private $ssn;

    /**
     * @var string
     */
    private $employeenumber;

    /**
     * @var \DateTime
     */
    private $userdate1;

    /**
     * @var \DateTime
     */
    private $userdate2;

    /**
     * @var \DateTime
     */
    private $userdate3;

    /**
     * @var \DateTime
     */
    private $userdate4;

    /**
     * @var \DateTime
     */
    private $userdate5;

    /**
     * @var string
     */
    private $usertext1;

    /**
     * @var string
     */
    private $usertext2;

    /**
     * @var string
     */
    private $usertext3;

    /**
     * @var string
     */
    private $usertext4;

    /**
     * @var string
     */
    private $usertext5;

    /**
     * @var float
     */
    private $usernum1;

    /**
     * @var float
     */
    private $usernum2;

    /**
     * @var float
     */
    private $usernum3;

    /**
     * @var float
     */
    private $usernum4;

    /**
     * @var float
     */
    private $usernum5;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $createuser;


    /**
     * Set userid
     *
     * @param string $userid
     * @return Userprofile
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set assetid
     *
     * @param string $assetid
     * @return Userprofile
     */
    public function setAssetid($assetid)
    {
        $this->assetid = $assetid;

        return $this;
    }

    /**
     * Get assetid
     *
     * @return string 
     */
    public function getAssetid()
    {
        return $this->assetid;
    }

    /**
     * Set assetdesc
     *
     * @param string $assetdesc
     * @return Userprofile
     */
    public function setAssetdesc($assetdesc)
    {
        $this->assetdesc = $assetdesc;

        return $this;
    }

    /**
     * Get assetdesc
     *
     * @return string 
     */
    public function getAssetdesc()
    {
        return $this->assetdesc;
    }

    /**
     * Set hiredate
     *
     * @param \DateTime $hiredate
     * @return Userprofile
     */
    public function setHiredate($hiredate)
    {
        $this->hiredate = $hiredate;

        return $this;
    }

    /**
     * Get hiredate
     *
     * @return \DateTime 
     */
    public function getHiredate()
    {
        return $this->hiredate;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Userprofile
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set spouse
     *
     * @param string $spouse
     * @return Userprofile
     */
    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;

        return $this;
    }

    /**
     * Get spouse
     *
     * @return string 
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * Set ssn
     *
     * @param string $ssn
     * @return Userprofile
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set employeenumber
     *
     * @param string $employeenumber
     * @return Userprofile
     */
    public function setEmployeenumber($employeenumber)
    {
        $this->employeenumber = $employeenumber;

        return $this;
    }

    /**
     * Get employeenumber
     *
     * @return string 
     */
    public function getEmployeenumber()
    {
        return $this->employeenumber;
    }

    /**
     * Set userdate1
     *
     * @param \DateTime $userdate1
     * @return Userprofile
     */
    public function setUserdate1($userdate1)
    {
        $this->userdate1 = $userdate1;

        return $this;
    }

    /**
     * Get userdate1
     *
     * @return \DateTime 
     */
    public function getUserdate1()
    {
        return $this->userdate1;
    }

    /**
     * Set userdate2
     *
     * @param \DateTime $userdate2
     * @return Userprofile
     */
    public function setUserdate2($userdate2)
    {
        $this->userdate2 = $userdate2;

        return $this;
    }

    /**
     * Get userdate2
     *
     * @return \DateTime 
     */
    public function getUserdate2()
    {
        return $this->userdate2;
    }

    /**
     * Set userdate3
     *
     * @param \DateTime $userdate3
     * @return Userprofile
     */
    public function setUserdate3($userdate3)
    {
        $this->userdate3 = $userdate3;

        return $this;
    }

    /**
     * Get userdate3
     *
     * @return \DateTime 
     */
    public function getUserdate3()
    {
        return $this->userdate3;
    }

    /**
     * Set userdate4
     *
     * @param \DateTime $userdate4
     * @return Userprofile
     */
    public function setUserdate4($userdate4)
    {
        $this->userdate4 = $userdate4;

        return $this;
    }

    /**
     * Get userdate4
     *
     * @return \DateTime 
     */
    public function getUserdate4()
    {
        return $this->userdate4;
    }

    /**
     * Set userdate5
     *
     * @param \DateTime $userdate5
     * @return Userprofile
     */
    public function setUserdate5($userdate5)
    {
        $this->userdate5 = $userdate5;

        return $this;
    }

    /**
     * Get userdate5
     *
     * @return \DateTime 
     */
    public function getUserdate5()
    {
        return $this->userdate5;
    }

    /**
     * Set usertext1
     *
     * @param string $usertext1
     * @return Userprofile
     */
    public function setUsertext1($usertext1)
    {
        $this->usertext1 = $usertext1;

        return $this;
    }

    /**
     * Get usertext1
     *
     * @return string 
     */
    public function getUsertext1()
    {
        return $this->usertext1;
    }

    /**
     * Set usertext2
     *
     * @param string $usertext2
     * @return Userprofile
     */
    public function setUsertext2($usertext2)
    {
        $this->usertext2 = $usertext2;

        return $this;
    }

    /**
     * Get usertext2
     *
     * @return string 
     */
    public function getUsertext2()
    {
        return $this->usertext2;
    }

    /**
     * Set usertext3
     *
     * @param string $usertext3
     * @return Userprofile
     */
    public function setUsertext3($usertext3)
    {
        $this->usertext3 = $usertext3;

        return $this;
    }

    /**
     * Get usertext3
     *
     * @return string 
     */
    public function getUsertext3()
    {
        return $this->usertext3;
    }

    /**
     * Set usertext4
     *
     * @param string $usertext4
     * @return Userprofile
     */
    public function setUsertext4($usertext4)
    {
        $this->usertext4 = $usertext4;

        return $this;
    }

    /**
     * Get usertext4
     *
     * @return string 
     */
    public function getUsertext4()
    {
        return $this->usertext4;
    }

    /**
     * Set usertext5
     *
     * @param string $usertext5
     * @return Userprofile
     */
    public function setUsertext5($usertext5)
    {
        $this->usertext5 = $usertext5;

        return $this;
    }

    /**
     * Get usertext5
     *
     * @return string 
     */
    public function getUsertext5()
    {
        return $this->usertext5;
    }

    /**
     * Set usernum1
     *
     * @param float $usernum1
     * @return Userprofile
     */
    public function setUsernum1($usernum1)
    {
        $this->usernum1 = $usernum1;

        return $this;
    }

    /**
     * Get usernum1
     *
     * @return float 
     */
    public function getUsernum1()
    {
        return $this->usernum1;
    }

    /**
     * Set usernum2
     *
     * @param float $usernum2
     * @return Userprofile
     */
    public function setUsernum2($usernum2)
    {
        $this->usernum2 = $usernum2;

        return $this;
    }

    /**
     * Get usernum2
     *
     * @return float 
     */
    public function getUsernum2()
    {
        return $this->usernum2;
    }

    /**
     * Set usernum3
     *
     * @param float $usernum3
     * @return Userprofile
     */
    public function setUsernum3($usernum3)
    {
        $this->usernum3 = $usernum3;

        return $this;
    }

    /**
     * Get usernum3
     *
     * @return float 
     */
    public function getUsernum3()
    {
        return $this->usernum3;
    }

    /**
     * Set usernum4
     *
     * @param float $usernum4
     * @return Userprofile
     */
    public function setUsernum4($usernum4)
    {
        $this->usernum4 = $usernum4;

        return $this;
    }

    /**
     * Get usernum4
     *
     * @return float 
     */
    public function getUsernum4()
    {
        return $this->usernum4;
    }

    /**
     * Set usernum5
     *
     * @param float $usernum5
     * @return Userprofile
     */
    public function setUsernum5($usernum5)
    {
        $this->usernum5 = $usernum5;

        return $this;
    }

    /**
     * Get usernum5
     *
     * @return float 
     */
    public function getUsernum5()
    {
        return $this->usernum5;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Userprofile
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Userprofile
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Userprofile
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Userprofile
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
     * Set createuser
     *
     * @param string $createuser
     * @return Userprofile
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
}
