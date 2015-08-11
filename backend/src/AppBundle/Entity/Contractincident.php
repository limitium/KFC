<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractincident
 *
 * @ORM\Table(name="CONTRACTINCIDENT", uniqueConstraints={@ORM\UniqueConstraint(name="PK_CONTRACTINCIDENT", columns={"CONTRACTINCIDENTID"})}, indexes={@ORM\Index(name="XAK1CONTRACTINCIDENT", columns={"CONTRACTID", "TICKETID", "TICKETACTIVITYID"})})
 * @ORM\Entity
 */
class Contractincident
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTINCIDENTID", type="string", length=12, nullable=false)
     */
    private $contractincidentid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETID", type="string", length=12, nullable=false)
     */
    private $ticketid;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKETACTIVITYID", type="string", length=12, nullable=true)
     */
    private $ticketactivityid;

    /**
     * @var float
     *
     * @ORM\Column(name="HOURS", type="float", precision=53, scale=0, nullable=true)
     */
    private $hours;

    /**
     * @var string
     *
     * @ORM\Column(name="DOLLARS", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $dollars;

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
     * Set contractincidentid
     *
     * @param string $contractincidentid
     * @return Contractincident
     */
    public function setContractincidentid($contractincidentid)
    {
        $this->contractincidentid = $contractincidentid;

        return $this;
    }

    /**
     * Get contractincidentid
     *
     * @return string 
     */
    public function getContractincidentid()
    {
        return $this->contractincidentid;
    }

    /**
     * Set contractid
     *
     * @param string $contractid
     * @return Contractincident
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
     * Set ticketid
     *
     * @param string $ticketid
     * @return Contractincident
     */
    public function setTicketid($ticketid)
    {
        $this->ticketid = $ticketid;

        return $this;
    }

    /**
     * Get ticketid
     *
     * @return string 
     */
    public function getTicketid()
    {
        return $this->ticketid;
    }

    /**
     * Set ticketactivityid
     *
     * @param string $ticketactivityid
     * @return Contractincident
     */
    public function setTicketactivityid($ticketactivityid)
    {
        $this->ticketactivityid = $ticketactivityid;

        return $this;
    }

    /**
     * Get ticketactivityid
     *
     * @return string 
     */
    public function getTicketactivityid()
    {
        return $this->ticketactivityid;
    }

    /**
     * Set hours
     *
     * @param float $hours
     * @return Contractincident
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return float 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set dollars
     *
     * @param string $dollars
     * @return Contractincident
     */
    public function setDollars($dollars)
    {
        $this->dollars = $dollars;

        return $this;
    }

    /**
     * Get dollars
     *
     * @return string 
     */
    public function getDollars()
    {
        return $this->dollars;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Contractincident
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
     * @return Contractincident
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
     * @return Contractincident
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
     * @return Contractincident
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
