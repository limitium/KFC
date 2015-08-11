<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTeleParameters
 *
 * @ORM\Table(name="KF_TELE_PARAMETERS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TELE_PARAMETERS_PRIMARY", columns={"KF_TELE_PARAMETERSID"})})
 * @ORM\Entity
 */
class KfTeleParameters
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_PARAMETERSID", type="string", length=12, nullable=false)
     */
    private $kfTeleParametersid;

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
     * @ORM\Column(name="PARAMETR", type="string", length=256, nullable=true)
     */
    private $parametr;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCE", type="string", length=256, nullable=true)
     */
    private $leadsource;



    /**
     * Set kfTeleParametersid
     *
     * @param string $kfTeleParametersid
     * @return KfTeleParameters
     */
    public function setKfTeleParametersid($kfTeleParametersid)
    {
        $this->kfTeleParametersid = $kfTeleParametersid;

        return $this;
    }

    /**
     * Get kfTeleParametersid
     *
     * @return string 
     */
    public function getKfTeleParametersid()
    {
        return $this->kfTeleParametersid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfTeleParameters
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
     * @return KfTeleParameters
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
     * @return KfTeleParameters
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
     * @return KfTeleParameters
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
     * Set parametr
     *
     * @param string $parametr
     * @return KfTeleParameters
     */
    public function setParametr($parametr)
    {
        $this->parametr = $parametr;

        return $this;
    }

    /**
     * Get parametr
     *
     * @return string 
     */
    public function getParametr()
    {
        return $this->parametr;
    }

    /**
     * Set leadsource
     *
     * @param string $leadsource
     * @return KfTeleParameters
     */
    public function setLeadsource($leadsource)
    {
        $this->leadsource = $leadsource;

        return $this;
    }

    /**
     * Get leadsource
     *
     * @return string 
     */
    public function getLeadsource()
    {
        return $this->leadsource;
    }
}
