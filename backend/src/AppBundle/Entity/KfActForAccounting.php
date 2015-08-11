<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActForAccounting
 *
 * @ORM\Table(name="KF_ACT_FOR_ACCOUNTING", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACT_FOR_ACCOUNTING_PRIMARY", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfActForAccounting
{
    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="DOGOVORFILENAME", type="string", length=512, nullable=true)
     */
    private $dogovorfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTFILENAME", type="string", length=512, nullable=true)
     */
    private $actfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVORATTACHID", type="string", length=12, nullable=true)
     */
    private $dogovorattachid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTATTACHID", type="string", length=12, nullable=true)
     */
    private $actattachid;



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfActForAccounting
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfActForAccounting
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
     * @return KfActForAccounting
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
     * @return KfActForAccounting
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
     * @return KfActForAccounting
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
     * @return KfActForAccounting
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
     * Set dogovorfilename
     *
     * @param string $dogovorfilename
     * @return KfActForAccounting
     */
    public function setDogovorfilename($dogovorfilename)
    {
        $this->dogovorfilename = $dogovorfilename;

        return $this;
    }

    /**
     * Get dogovorfilename
     *
     * @return string 
     */
    public function getDogovorfilename()
    {
        return $this->dogovorfilename;
    }

    /**
     * Set actfilename
     *
     * @param string $actfilename
     * @return KfActForAccounting
     */
    public function setActfilename($actfilename)
    {
        $this->actfilename = $actfilename;

        return $this;
    }

    /**
     * Get actfilename
     *
     * @return string 
     */
    public function getActfilename()
    {
        return $this->actfilename;
    }

    /**
     * Set dogovorattachid
     *
     * @param string $dogovorattachid
     * @return KfActForAccounting
     */
    public function setDogovorattachid($dogovorattachid)
    {
        $this->dogovorattachid = $dogovorattachid;

        return $this;
    }

    /**
     * Get dogovorattachid
     *
     * @return string 
     */
    public function getDogovorattachid()
    {
        return $this->dogovorattachid;
    }

    /**
     * Set actattachid
     *
     * @param string $actattachid
     * @return KfActForAccounting
     */
    public function setActattachid($actattachid)
    {
        $this->actattachid = $actattachid;

        return $this;
    }

    /**
     * Get actattachid
     *
     * @return string 
     */
    public function getActattachid()
    {
        return $this->actattachid;
    }
}
