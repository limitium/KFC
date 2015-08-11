<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="ASSOCIATION", uniqueConstraints={@ORM\UniqueConstraint(name="XPKASSOCIATION", columns={"ASSOCIATIONID"})}, indexes={@ORM\Index(name="XIE1ASSOCIATION", columns={"FROMID"}), @ORM\Index(name="XIE2ASSOCIATION", columns={"TOID"})})
 * @ORM\Entity
 */
class Association
{
    /**
     * @var string
     *
     * @ORM\Column(name="ASSOCIATIONID", type="string", length=12, nullable=false)
     */
    private $associationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNTASSOCIATION", type="integer", nullable=true)
     */
    private $accountassociation;

    /**
     * @var string
     *
     * @ORM\Column(name="FROMID", type="string", length=12, nullable=false)
     */
    private $fromid;

    /**
     * @var string
     *
     * @ORM\Column(name="TOID", type="string", length=12, nullable=false)
     */
    private $toid;

    /**
     * @var string
     *
     * @ORM\Column(name="FORWARDRELATION", type="string", length=64, nullable=true)
     */
    private $forwardrelation;

    /**
     * @var string
     *
     * @ORM\Column(name="BACKRELATION", type="string", length=64, nullable=true)
     */
    private $backrelation;

    /**
     * @var string
     *
     * @ORM\Column(name="FORWARDNOTES", type="string", length=128, nullable=true)
     */
    private $forwardnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="BACKNOTES", type="string", length=128, nullable=true)
     */
    private $backnotes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;



    /**
     * Set associationid
     *
     * @param string $associationid
     * @return Association
     */
    public function setAssociationid($associationid)
    {
        $this->associationid = $associationid;

        return $this;
    }

    /**
     * Get associationid
     *
     * @return string 
     */
    public function getAssociationid()
    {
        return $this->associationid;
    }

    /**
     * Set accountassociation
     *
     * @param integer $accountassociation
     * @return Association
     */
    public function setAccountassociation($accountassociation)
    {
        $this->accountassociation = $accountassociation;

        return $this;
    }

    /**
     * Get accountassociation
     *
     * @return integer 
     */
    public function getAccountassociation()
    {
        return $this->accountassociation;
    }

    /**
     * Set fromid
     *
     * @param string $fromid
     * @return Association
     */
    public function setFromid($fromid)
    {
        $this->fromid = $fromid;

        return $this;
    }

    /**
     * Get fromid
     *
     * @return string 
     */
    public function getFromid()
    {
        return $this->fromid;
    }

    /**
     * Set toid
     *
     * @param string $toid
     * @return Association
     */
    public function setToid($toid)
    {
        $this->toid = $toid;

        return $this;
    }

    /**
     * Get toid
     *
     * @return string 
     */
    public function getToid()
    {
        return $this->toid;
    }

    /**
     * Set forwardrelation
     *
     * @param string $forwardrelation
     * @return Association
     */
    public function setForwardrelation($forwardrelation)
    {
        $this->forwardrelation = $forwardrelation;

        return $this;
    }

    /**
     * Get forwardrelation
     *
     * @return string 
     */
    public function getForwardrelation()
    {
        return $this->forwardrelation;
    }

    /**
     * Set backrelation
     *
     * @param string $backrelation
     * @return Association
     */
    public function setBackrelation($backrelation)
    {
        $this->backrelation = $backrelation;

        return $this;
    }

    /**
     * Get backrelation
     *
     * @return string 
     */
    public function getBackrelation()
    {
        return $this->backrelation;
    }

    /**
     * Set forwardnotes
     *
     * @param string $forwardnotes
     * @return Association
     */
    public function setForwardnotes($forwardnotes)
    {
        $this->forwardnotes = $forwardnotes;

        return $this;
    }

    /**
     * Get forwardnotes
     *
     * @return string 
     */
    public function getForwardnotes()
    {
        return $this->forwardnotes;
    }

    /**
     * Set backnotes
     *
     * @param string $backnotes
     * @return Association
     */
    public function setBacknotes($backnotes)
    {
        $this->backnotes = $backnotes;

        return $this;
    }

    /**
     * Get backnotes
     *
     * @return string 
     */
    public function getBacknotes()
    {
        return $this->backnotes;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Association
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
     * @return Association
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Association
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
     * @return Association
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
}
