<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSrTemp20140820
 *
 * @ORM\Table(name="KF_SR_TEMP_20140820")
 * @ORM\Entity
 */
class KfSrTemp20140820
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="seccodeid", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="oldmanagerid", type="string", length=8, nullable=false)
     */
    private $oldmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=11, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=13, nullable=false)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="newmanagerid", type="string", length=12, nullable=false)
     */
    private $newmanagerid;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfSrTemp20140820
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfSrTemp20140820
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
     * Set oldmanagerid
     *
     * @param string $oldmanagerid
     * @return KfSrTemp20140820
     */
    public function setOldmanagerid($oldmanagerid)
    {
        $this->oldmanagerid = $oldmanagerid;

        return $this;
    }

    /**
     * Get oldmanagerid
     *
     * @return string 
     */
    public function getOldmanagerid()
    {
        return $this->oldmanagerid;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfSrTemp20140820
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set segment
     *
     * @param string $segment
     * @return KfSrTemp20140820
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string 
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set newmanagerid
     *
     * @param string $newmanagerid
     * @return KfSrTemp20140820
     */
    public function setNewmanagerid($newmanagerid)
    {
        $this->newmanagerid = $newmanagerid;

        return $this;
    }

    /**
     * Get newmanagerid
     *
     * @return string 
     */
    public function getNewmanagerid()
    {
        return $this->newmanagerid;
    }
}
