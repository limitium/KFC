<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserVisited
 *
 * @ORM\Table(name="KF_USER_VISITED")
 * @ORM\Entity
 */
class KfUserVisited
{
    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYTYPE", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=false)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VISITEDDATE", type="datetime", nullable=false)
     */
    private $visiteddate;

    /**
     * @var string
     *
     * @ORM\Column(name="VISITEDDATEchr", type="string", length=10, nullable=false)
     */
    private $visiteddatechr;



    /**
     * Set entitytype
     *
     * @param string $entitytype
     * @return KfUserVisited
     */
    public function setEntitytype($entitytype)
    {
        $this->entitytype = $entitytype;

        return $this;
    }

    /**
     * Get entitytype
     *
     * @return string 
     */
    public function getEntitytype()
    {
        return $this->entitytype;
    }

    /**
     * Set entityid
     *
     * @param string $entityid
     * @return KfUserVisited
     */
    public function setEntityid($entityid)
    {
        $this->entityid = $entityid;

        return $this;
    }

    /**
     * Get entityid
     *
     * @return string 
     */
    public function getEntityid()
    {
        return $this->entityid;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfUserVisited
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
     * Set visiteddate
     *
     * @param \DateTime $visiteddate
     * @return KfUserVisited
     */
    public function setVisiteddate($visiteddate)
    {
        $this->visiteddate = $visiteddate;

        return $this;
    }

    /**
     * Get visiteddate
     *
     * @return \DateTime 
     */
    public function getVisiteddate()
    {
        return $this->visiteddate;
    }

    /**
     * Set visiteddatechr
     *
     * @param string $visiteddatechr
     * @return KfUserVisited
     */
    public function setVisiteddatechr($visiteddatechr)
    {
        $this->visiteddatechr = $visiteddatechr;

        return $this;
    }

    /**
     * Get visiteddatechr
     *
     * @return string 
     */
    public function getVisiteddatechr()
    {
        return $this->visiteddatechr;
    }
}
