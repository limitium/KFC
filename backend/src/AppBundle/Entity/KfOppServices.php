<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppServices
 *
 * @ORM\Table(name="KF_OPP_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_SERVICES_PRIMARY", columns={"KF_OPP_SERVICESID"})}, indexes={@ORM\Index(name="KF_OPP_SERVICES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfOppServicesid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * Set kfOppServicesid
     *
     * @param string $kfOppServicesid
     * @return KfOppServices
     */
    public function setKfOppServicesid($kfOppServicesid)
    {
        $this->kfOppServicesid = $kfOppServicesid;

        return $this;
    }

    /**
     * Get kfOppServicesid
     *
     * @return string 
     */
    public function getKfOppServicesid()
    {
        return $this->kfOppServicesid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppServices
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfOppServices
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
     * @return KfOppServices
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
     * @return KfOppServices
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
     * @return KfOppServices
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
     * @return KfOppServices
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
