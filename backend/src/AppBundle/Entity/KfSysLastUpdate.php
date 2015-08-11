<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSysLastUpdate
 *
 * @ORM\Table(name="kf_sys_last_update")
 * @ORM\Entity
 */
class KfSysLastUpdate
{
    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYTYPE", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=50, nullable=true)
     */
    private $status;



    /**
     * Set entityid
     *
     * @param string $entityid
     * @return KfSysLastUpdate
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
     * Set entitytype
     *
     * @param string $entitytype
     * @return KfSysLastUpdate
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
     * Set status
     *
     * @param string $status
     * @return KfSysLastUpdate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
