<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActServices
 *
 * @ORM\Table(name="KF_ACT_SERVICES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACT_SERVICES_PRIMARY", columns={"KF_ACT_SERVICESID"})}, indexes={@ORM\Index(name="KF_ACT_SERVICES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfActServices
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACT_SERVICESID", type="string", length=12, nullable=false)
     */
    private $kfActServicesid;

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
     * @ORM\Column(name="SERVICE", type="string", length=512, nullable=true)
     */
    private $service;

    /**
     * @var float
     *
     * @ORM\Column(name="SERVICE_AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $serviceAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENCY", type="string", length=32, nullable=true)
     */
    private $currency;



    /**
     * Set kfActServicesid
     *
     * @param string $kfActServicesid
     * @return KfActServices
     */
    public function setKfActServicesid($kfActServicesid)
    {
        $this->kfActServicesid = $kfActServicesid;

        return $this;
    }

    /**
     * Get kfActServicesid
     *
     * @return string 
     */
    public function getKfActServicesid()
    {
        return $this->kfActServicesid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfActServices
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
     * @return KfActServices
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
     * @return KfActServices
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
     * @return KfActServices
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
     * @return KfActServices
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
     * Set service
     *
     * @param string $service
     * @return KfActServices
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set serviceAmount
     *
     * @param float $serviceAmount
     * @return KfActServices
     */
    public function setServiceAmount($serviceAmount)
    {
        $this->serviceAmount = $serviceAmount;

        return $this;
    }

    /**
     * Get serviceAmount
     *
     * @return float 
     */
    public function getServiceAmount()
    {
        return $this->serviceAmount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return KfActServices
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
