<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppDistricts
 *
 * @ORM\Table(name="KF_OPP_DISTRICTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_DISTRICTS_PRIMARY", columns={"KF_OPP_DISTRICTSID"})}, indexes={@ORM\Index(name="KF_OPP_DISTRICTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppDistricts
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_DISTRICTSID", type="string", length=12, nullable=false)
     */
    private $kfOppDistrictsid;

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
     * @ORM\Column(name="SPK_DISTRICTID", type="string", length=12, nullable=true)
     */
    private $spkDistrictid;



    /**
     * Set kfOppDistrictsid
     *
     * @param string $kfOppDistrictsid
     * @return KfOppDistricts
     */
    public function setKfOppDistrictsid($kfOppDistrictsid)
    {
        $this->kfOppDistrictsid = $kfOppDistrictsid;

        return $this;
    }

    /**
     * Get kfOppDistrictsid
     *
     * @return string 
     */
    public function getKfOppDistrictsid()
    {
        return $this->kfOppDistrictsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppDistricts
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
     * @return KfOppDistricts
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
     * @return KfOppDistricts
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
     * @return KfOppDistricts
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
     * @return KfOppDistricts
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
     * Set spkDistrictid
     *
     * @param string $spkDistrictid
     * @return KfOppDistricts
     */
    public function setSpkDistrictid($spkDistrictid)
    {
        $this->spkDistrictid = $spkDistrictid;

        return $this;
    }

    /**
     * Get spkDistrictid
     *
     * @return string 
     */
    public function getSpkDistrictid()
    {
        return $this->spkDistrictid;
    }
}
