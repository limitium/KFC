<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountProfile
 *
 * @ORM\Table(name="ACCOUNT_PROFILE", uniqueConstraints={@ORM\UniqueConstraint(name="ACCOUNT_PROFILE_PRIMARY", columns={"ACCOUNT_PROFILEID"})}, indexes={@ORM\Index(name="ACCOUNT_PROFILE_ACCOUNTID", columns={"ACCOUNTID", "AREAID", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K9", columns={"SUBPROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K8", columns={"PROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K7", columns={"AREAID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K9_K7_K8_K2", columns={"SUBPROFILEID", "AREAID", "PROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K8_K7_K9_K2", columns={"PROFILEID", "AREAID", "SUBPROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K7_K8_K9_K2", columns={"AREAID", "PROFILEID", "SUBPROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_9_903674267__K8_K2", columns={"PROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_9_903674267__K2_8", columns={"ACCOUNTID", "PROFILEID"})})
 * @ORM\Entity
 */
class AccountProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_PROFILEID", type="string", length=12, nullable=false)
     */
    private $accountProfileid;

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
     * @ORM\Column(name="AREAID", type="string", length=32, nullable=true)
     */
    private $areaid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=32, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=32, nullable=true)
     */
    private $subprofileid;



    /**
     * Set accountProfileid
     *
     * @param string $accountProfileid
     * @return AccountProfile
     */
    public function setAccountProfileid($accountProfileid)
    {
        $this->accountProfileid = $accountProfileid;

        return $this;
    }

    /**
     * Get accountProfileid
     *
     * @return string 
     */
    public function getAccountProfileid()
    {
        return $this->accountProfileid;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return AccountProfile
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
     * @return AccountProfile
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
     * @return AccountProfile
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
     * @return AccountProfile
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
     * @return AccountProfile
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
     * Set areaid
     *
     * @param string $areaid
     * @return AccountProfile
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set profileid
     *
     * @param string $profileid
     * @return AccountProfile
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }

    /**
     * Get profileid
     *
     * @return string 
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set subprofileid
     *
     * @param string $subprofileid
     * @return AccountProfile
     */
    public function setSubprofileid($subprofileid)
    {
        $this->subprofileid = $subprofileid;

        return $this;
    }

    /**
     * Get subprofileid
     *
     * @return string 
     */
    public function getSubprofileid()
    {
        return $this->subprofileid;
    }
}
