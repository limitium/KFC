<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfProjectServices
 *
 * @ORM\Table(name="KF_PROJECT_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROJECT_SERVICES_PRIMARY", columns={"KF_PROJECT_SERVICESID"})}, indexes={@ORM\Index(name="KF_PROJECT_SERVICES_KF_PROJECTSID", columns={"KF_PROJECTSID"})})
 * @ORM\Entity
 */
class KfProjectServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECT_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfProjectServicesid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfProjectsid;

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
     * @ORM\Column(name="SERVICEID", type="string", length=12, nullable=true)
     */
    private $serviceid;



    /**
     * Set kfProjectServicesid
     *
     * @param string $kfProjectServicesid
     * @return KfProjectServices
     */
    public function setKfProjectServicesid($kfProjectServicesid)
    {
        $this->kfProjectServicesid = $kfProjectServicesid;

        return $this;
    }

    /**
     * Get kfProjectServicesid
     *
     * @return string 
     */
    public function getKfProjectServicesid()
    {
        return $this->kfProjectServicesid;
    }

    /**
     * Set kfProjectsid
     *
     * @param string $kfProjectsid
     * @return KfProjectServices
     */
    public function setKfProjectsid($kfProjectsid)
    {
        $this->kfProjectsid = $kfProjectsid;

        return $this;
    }

    /**
     * Get kfProjectsid
     *
     * @return string 
     */
    public function getKfProjectsid()
    {
        return $this->kfProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfProjectServices
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
     * @return KfProjectServices
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
     * @return KfProjectServices
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
     * @return KfProjectServices
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
     * Set serviceid
     *
     * @param string $serviceid
     * @return KfProjectServices
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return string 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}
