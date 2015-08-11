<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfServicetmp
 *
 * @ORM\Table(name="KF_SERVICETMP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SERVICETMP_PRIMARY", columns={"KF_SERVICETMPID"})})
 * @ORM\Entity
 */
class KfServicetmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SERVICETMPID", type="string", length=12, nullable=false)
     */
    private $kfServicetmpid;

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
     * @ORM\Column(name="KF_SERVICEID", type="string", length=12, nullable=true)
     */
    private $kfServiceid;



    /**
     * Set kfServicetmpid
     *
     * @param string $kfServicetmpid
     * @return KfServicetmp
     */
    public function setKfServicetmpid($kfServicetmpid)
    {
        $this->kfServicetmpid = $kfServicetmpid;

        return $this;
    }

    /**
     * Get kfServicetmpid
     *
     * @return string 
     */
    public function getKfServicetmpid()
    {
        return $this->kfServicetmpid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfServicetmp
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
     * @return KfServicetmp
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
     * @return KfServicetmp
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
     * @return KfServicetmp
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
     * Set kfServiceid
     *
     * @param string $kfServiceid
     * @return KfServicetmp
     */
    public function setKfServiceid($kfServiceid)
    {
        $this->kfServiceid = $kfServiceid;

        return $this;
    }

    /**
     * Get kfServiceid
     *
     * @return string 
     */
    public function getKfServiceid()
    {
        return $this->kfServiceid;
    }
}
