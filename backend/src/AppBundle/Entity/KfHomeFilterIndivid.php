<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHomeFilterIndivid
 *
 * @ORM\Table(name="KF_HOME_FILTER_INDIVID", uniqueConstraints={@ORM\UniqueConstraint(name="KF_HOME_FILTER_INDIVID_PRIMARY", columns={"KF_HOME_FILTER_INDIVIDID"})}, indexes={@ORM\Index(name="KF_SR_IX_USERID", columns={"USERID"})})
 * @ORM\Entity
 */
class KfHomeFilterIndivid
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HOME_FILTER_INDIVIDID", type="string", length=12, nullable=false)
     */
    private $kfHomeFilterIndividid;

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
     * @ORM\Column(name="KF_HOME_FILTERID", type="string", length=12, nullable=true)
     */
    private $kfHomeFilterid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;



    /**
     * Set kfHomeFilterIndividid
     *
     * @param string $kfHomeFilterIndividid
     * @return KfHomeFilterIndivid
     */
    public function setKfHomeFilterIndividid($kfHomeFilterIndividid)
    {
        $this->kfHomeFilterIndividid = $kfHomeFilterIndividid;

        return $this;
    }

    /**
     * Get kfHomeFilterIndividid
     *
     * @return string 
     */
    public function getKfHomeFilterIndividid()
    {
        return $this->kfHomeFilterIndividid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfHomeFilterIndivid
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
     * @return KfHomeFilterIndivid
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
     * @return KfHomeFilterIndivid
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
     * @return KfHomeFilterIndivid
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
     * Set kfHomeFilterid
     *
     * @param string $kfHomeFilterid
     * @return KfHomeFilterIndivid
     */
    public function setKfHomeFilterid($kfHomeFilterid)
    {
        $this->kfHomeFilterid = $kfHomeFilterid;

        return $this;
    }

    /**
     * Get kfHomeFilterid
     *
     * @return string 
     */
    public function getKfHomeFilterid()
    {
        return $this->kfHomeFilterid;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return KfHomeFilterIndivid
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
}
