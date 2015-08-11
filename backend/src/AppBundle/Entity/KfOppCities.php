<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppCities
 *
 * @ORM\Table(name="KF_OPP_CITIES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_CITIES_PRIMARY", columns={"KF_OPP_CITIESID"})}, indexes={@ORM\Index(name="KF_OPP_CITIES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppCities
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_CITIESID", type="string", length=12, nullable=false)
     */
    private $kfOppCitiesid;

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
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;



    /**
     * Set kfOppCitiesid
     *
     * @param string $kfOppCitiesid
     * @return KfOppCities
     */
    public function setKfOppCitiesid($kfOppCitiesid)
    {
        $this->kfOppCitiesid = $kfOppCitiesid;

        return $this;
    }

    /**
     * Get kfOppCitiesid
     *
     * @return string 
     */
    public function getKfOppCitiesid()
    {
        return $this->kfOppCitiesid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppCities
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
     * @return KfOppCities
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
     * @return KfOppCities
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
     * @return KfOppCities
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
     * @return KfOppCities
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
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return KfOppCities
     */
    public function setSpkCityid($spkCityid)
    {
        $this->spkCityid = $spkCityid;

        return $this;
    }

    /**
     * Get spkCityid
     *
     * @return string 
     */
    public function getSpkCityid()
    {
        return $this->spkCityid;
    }
}
