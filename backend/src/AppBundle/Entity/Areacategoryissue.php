<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areacategoryissue
 *
 * @ORM\Table(name="AREACATEGORYISSUE", uniqueConstraints={@ORM\UniqueConstraint(name="AREACATEGORYISSUE_PRIMARY", columns={"AREACATEGORYISSUEID"})}, indexes={@ORM\Index(name="AREACATEGORYISSUE_AREA", columns={"AREA"}), @ORM\Index(name="AREACATEGORYISSUE_CATEGORY", columns={"CATEGORY"}), @ORM\Index(name="AREACATEGORYISSUE_ISSUE", columns={"ISSUE"})})
 * @ORM\Entity
 */
class Areacategoryissue
{
    /**
     * @var string
     *
     * @ORM\Column(name="AREACATEGORYISSUEID", type="string", length=12, nullable=false)
     */
    private $areacategoryissueid;

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
     * @ORM\Column(name="AREA", type="string", length=64, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY", type="string", length=64, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="ISSUE", type="string", length=64, nullable=true)
     */
    private $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKET", type="string", length=1, nullable=true)
     */
    private $ticket;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFECT", type="string", length=1, nullable=true)
     */
    private $defect;

    /**
     * @var string
     *
     * @ORM\Column(name="CUSTOMER", type="string", length=1, nullable=true)
     */
    private $customer;



    /**
     * Set areacategoryissueid
     *
     * @param string $areacategoryissueid
     * @return Areacategoryissue
     */
    public function setAreacategoryissueid($areacategoryissueid)
    {
        $this->areacategoryissueid = $areacategoryissueid;

        return $this;
    }

    /**
     * Get areacategoryissueid
     *
     * @return string 
     */
    public function getAreacategoryissueid()
    {
        return $this->areacategoryissueid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Areacategoryissue
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
     * @return Areacategoryissue
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
     * @return Areacategoryissue
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
     * @return Areacategoryissue
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
     * Set area
     *
     * @param string $area
     * @return Areacategoryissue
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Areacategoryissue
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set issue
     *
     * @param string $issue
     * @return Areacategoryissue
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return string 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set ticket
     *
     * @param string $ticket
     * @return Areacategoryissue
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return string 
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set defect
     *
     * @param string $defect
     * @return Areacategoryissue
     */
    public function setDefect($defect)
    {
        $this->defect = $defect;

        return $this;
    }

    /**
     * Get defect
     *
     * @return string 
     */
    public function getDefect()
    {
        return $this->defect;
    }

    /**
     * Set customer
     *
     * @param string $customer
     * @return Areacategoryissue
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return string 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
