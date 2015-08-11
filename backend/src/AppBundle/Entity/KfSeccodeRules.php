<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSeccodeRules
 *
 * @ORM\Table(name="kf_seccode_rules")
 * @ORM\Entity
 */
class KfSeccodeRules
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
     * @ORM\Column(name="eventtype", type="string", length=64, nullable=true)
     */
    private $eventtype;

    /**
     * @var string
     *
     * @ORM\Column(name="UniqueDepartment", type="string", length=64, nullable=true)
     */
    private $uniquedepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="EntityDepartment", type="string", length=64, nullable=true)
     */
    private $entitydepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="EntityType", type="string", length=64, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="seccodedescr", type="string", length=64, nullable=true)
     */
    private $seccodedescr;



    /**
     * Set id
     *
     * @param integer $id
     * @return KfSeccodeRules
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
     * Set eventtype
     *
     * @param string $eventtype
     * @return KfSeccodeRules
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
     * Set uniquedepartment
     *
     * @param string $uniquedepartment
     * @return KfSeccodeRules
     */
    public function setUniquedepartment($uniquedepartment)
    {
        $this->uniquedepartment = $uniquedepartment;

        return $this;
    }

    /**
     * Get uniquedepartment
     *
     * @return string 
     */
    public function getUniquedepartment()
    {
        return $this->uniquedepartment;
    }

    /**
     * Set entitydepartment
     *
     * @param string $entitydepartment
     * @return KfSeccodeRules
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
     * Set entitytype
     *
     * @param string $entitytype
     * @return KfSeccodeRules
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
     * Set seccodedescr
     *
     * @param string $seccodedescr
     * @return KfSeccodeRules
     */
    public function setSeccodedescr($seccodedescr)
    {
        $this->seccodedescr = $seccodedescr;

        return $this;
    }

    /**
     * Get seccodedescr
     *
     * @return string 
     */
    public function getSeccodedescr()
    {
        return $this->seccodedescr;
    }
}
