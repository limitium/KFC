<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNotification
 *
 * @ORM\Table(name="kf_notification")
 * @ORM\Entity
 */
class KfNotification
{
    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=200, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="typeto", type="string", length=50, nullable=false)
     */
    private $typeto;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=50, nullable=false)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=50, nullable=true)
     */
    private $ssn;



    /**
     * Set userid
     *
     * @param string $userid
     * @return KfNotification
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
     * Set role
     *
     * @param string $role
     * @return KfNotification
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set typeto
     *
     * @param string $typeto
     * @return KfNotification
     */
    public function setTypeto($typeto)
    {
        $this->typeto = $typeto;

        return $this;
    }

    /**
     * Get typeto
     *
     * @return string 
     */
    public function getTypeto()
    {
        return $this->typeto;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfNotification
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfNotification
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
     * Set ssn
     *
     * @param string $ssn
     * @return KfNotification
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }
}
