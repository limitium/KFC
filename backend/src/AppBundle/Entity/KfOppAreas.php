<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppAreas
 *
 * @ORM\Table(name="KF_OPP_AREAS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_AREAS_PRIMARY", columns={"KF_OPP_AREASID"})}, indexes={@ORM\Index(name="KF_OPP_AREAS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppAreas
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_AREASID", type="string", length=12, nullable=false)
     */
    private $kfOppAreasid;

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
     * @ORM\Column(name="SPK_AREAID", type="string", length=12, nullable=true)
     */
    private $spkAreaid;



    /**
     * Set kfOppAreasid
     *
     * @param string $kfOppAreasid
     * @return KfOppAreas
     */
    public function setKfOppAreasid($kfOppAreasid)
    {
        $this->kfOppAreasid = $kfOppAreasid;

        return $this;
    }

    /**
     * Get kfOppAreasid
     *
     * @return string 
     */
    public function getKfOppAreasid()
    {
        return $this->kfOppAreasid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppAreas
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
     * @return KfOppAreas
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
     * @return KfOppAreas
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
     * @return KfOppAreas
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
     * @return KfOppAreas
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
     * Set spkAreaid
     *
     * @param string $spkAreaid
     * @return KfOppAreas
     */
    public function setSpkAreaid($spkAreaid)
    {
        $this->spkAreaid = $spkAreaid;

        return $this;
    }

    /**
     * Get spkAreaid
     *
     * @return string 
     */
    public function getSpkAreaid()
    {
        return $this->spkAreaid;
    }
}
