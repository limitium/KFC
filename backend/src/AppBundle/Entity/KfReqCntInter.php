<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReqCntInter
 *
 * @ORM\Table(name="KF_REQ_CNT_INTER", uniqueConstraints={@ORM\UniqueConstraint(name="KF_REQ_CNT_INTER_PRIMARY", columns={"KF_REQ_CNT_INTERID"})})
 * @ORM\Entity
 */
class KfReqCntInter
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_REQ_CNT_INTERID", type="string", length=12, nullable=false)
     */
    private $kfReqCntInterid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORD", type="smallint", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="LABL", type="string", length=128, nullable=true)
     */
    private $labl;



    /**
     * Set kfReqCntInterid
     *
     * @param string $kfReqCntInterid
     * @return KfReqCntInter
     */
    public function setKfReqCntInterid($kfReqCntInterid)
    {
        $this->kfReqCntInterid = $kfReqCntInterid;

        return $this;
    }

    /**
     * Get kfReqCntInterid
     *
     * @return string 
     */
    public function getKfReqCntInterid()
    {
        return $this->kfReqCntInterid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfReqCntInter
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
     * @return KfReqCntInter
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
     * @return KfReqCntInter
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
     * @return KfReqCntInter
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfReqCntInter
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return KfReqCntInter
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set labl
     *
     * @param string $labl
     * @return KfReqCntInter
     */
    public function setLabl($labl)
    {
        $this->labl = $labl;

        return $this;
    }

    /**
     * Get labl
     *
     * @return string 
     */
    public function getLabl()
    {
        return $this->labl;
    }
}
