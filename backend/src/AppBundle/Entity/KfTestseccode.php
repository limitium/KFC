<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTestseccode
 *
 * @ORM\Table(name="KF_testseccode")
 * @ORM\Entity
 */
class KfTestseccode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SQLVB", type="string", length=1, nullable=true)
     */
    private $sqlvb;

    /**
     * @var string
     *
     * @ORM\Column(name="entitytype", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="entityid", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="eventtype", type="string", length=50, nullable=true)
     */
    private $eventtype;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="entitydepartment", type="string", length=50, nullable=true)
     */
    private $entitydepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=12, nullable=true)
     */
    private $result;



    /**
     * Set id
     *
     * @param integer $id
     * @return KfTestseccode
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sqlvb
     *
     * @param string $sqlvb
     * @return KfTestseccode
     */
    public function setSqlvb($sqlvb)
    {
        $this->sqlvb = $sqlvb;

        return $this;
    }

    /**
     * Get sqlvb
     *
     * @return string 
     */
    public function getSqlvb()
    {
        return $this->sqlvb;
    }

    /**
     * Set entitytype
     *
     * @param string $entitytype
     * @return KfTestseccode
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
     * @return KfTestseccode
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
     * Set eventtype
     *
     * @param string $eventtype
     * @return KfTestseccode
     */
    public function setEventtype($eventtype)
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    /**
     * Get eventtype
     *
     * @return string 
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfTestseccode
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
     * Set entitydepartment
     *
     * @param string $entitydepartment
     * @return KfTestseccode
     */
    public function setEntitydepartment($entitydepartment)
    {
        $this->entitydepartment = $entitydepartment;

        return $this;
    }

    /**
     * Get entitydepartment
     *
     * @return string 
     */
    public function getEntitydepartment()
    {
        return $this->entitydepartment;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return KfTestseccode
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
