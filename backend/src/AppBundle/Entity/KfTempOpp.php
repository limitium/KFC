<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempOpp
 *
 * @ORM\Table(name="KF_TEMP_OPP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TEMP_OPP_PRIMARY", columns={"KF_TEMP_OPPID"})})
 * @ORM\Entity
 */
class KfTempOpp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TEMP_OPPID", type="string", length=12, nullable=false)
     */
    private $kfTempOppid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTID", type="string", length=12, nullable=true)
     */
    private $spkRequestid;

    /**
     * @var string
     *
     * @ORM\Column(name="LONGLISTID", type="string", length=12, nullable=true)
     */
    private $longlistid;



    /**
     * Set kfTempOppid
     *
     * @param string $kfTempOppid
     * @return KfTempOpp
     */
    public function setKfTempOppid($kfTempOppid)
    {
        $this->kfTempOppid = $kfTempOppid;

        return $this;
    }

    /**
     * Get kfTempOppid
     *
     * @return string 
     */
    public function getKfTempOppid()
    {
        return $this->kfTempOppid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfTempOpp
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
     * @return KfTempOpp
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
     * @return KfTempOpp
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
     * @return KfTempOpp
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
     * Set userid
     *
     * @param string $userid
     * @return KfTempOpp
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
     * Set spkRequestid
     *
     * @param string $spkRequestid
     * @return KfTempOpp
     */
    public function setSpkRequestid($spkRequestid)
    {
        $this->spkRequestid = $spkRequestid;

        return $this;
    }

    /**
     * Get spkRequestid
     *
     * @return string 
     */
    public function getSpkRequestid()
    {
        return $this->spkRequestid;
    }

    /**
     * Set longlistid
     *
     * @param string $longlistid
     * @return KfTempOpp
     */
    public function setLonglistid($longlistid)
    {
        $this->longlistid = $longlistid;

        return $this;
    }

    /**
     * Get longlistid
     *
     * @return string 
     */
    public function getLonglistid()
    {
        return $this->longlistid;
    }
}
