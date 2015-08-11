<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfServices
 *
 * @ORM\Table(name="KF_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SERVICES_PRIMARY", columns={"KF_SERVICESID"})}, indexes={@ORM\Index(name="KF_SR_IXKF_SERVICESID_incl", columns={"KF_SERVICESID", "SERVICENAME", "SERVICE_ENG"}), @ORM\Index(name="KF_SR_IX_Servicename", columns={"SERVICENAME"})})
 * @ORM\Entity
 */
class KfServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfServicesid;

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
     * @ORM\Column(name="SERVICENAME", type="string", length=256, nullable=true)
     */
    private $servicename;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVICE_ENG", type="string", length=256, nullable=true)
     */
    private $serviceEng;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=128, nullable=true)
     */
    private $department;



    /**
     * Set kfServicesid
     *
     * @param string $kfServicesid
     * @return KfServices
     */
    public function setKfServicesid($kfServicesid)
    {
        $this->kfServicesid = $kfServicesid;

        return $this;
    }

    /**
     * Get kfServicesid
     *
     * @return string 
     */
    public function getKfServicesid()
    {
        return $this->kfServicesid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfServices
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
     * @return KfServices
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
     * @return KfServices
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
     * @return KfServices
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
     * Set servicename
     *
     * @param string $servicename
     * @return KfServices
     */
    public function setServicename($servicename)
    {
        $this->servicename = $servicename;

        return $this;
    }

    /**
     * Get servicename
     *
     * @return string 
     */
    public function getServicename()
    {
        return $this->servicename;
    }

    /**
     * Set serviceEng
     *
     * @param string $serviceEng
     * @return KfServices
     */
    public function setServiceEng($serviceEng)
    {
        $this->serviceEng = $serviceEng;

        return $this;
    }

    /**
     * Get serviceEng
     *
     * @return string 
     */
    public function getServiceEng()
    {
        return $this->serviceEng;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfServices
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
}
