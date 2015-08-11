<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRetSrTech
 *
 * @ORM\Table(name="KF_RET_SR_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RET_SR_TECH_PRIMARY", columns={"KF_RET_SR_TECHID"})}, indexes={@ORM\Index(name="KF_RET_SR_TECH_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfRetSrTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RET_SR_TECHID", type="string", length=12, nullable=false)
     */
    private $kfRetSrTechid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="STOREY", type="string", length=64, nullable=true)
     */
    private $storey;

    /**
     * @var float
     *
     * @ORM\Column(name="AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=1024, nullable=true)
     */
    private $comments;



    /**
     * Set kfRetSrTechid
     *
     * @param string $kfRetSrTechid
     * @return KfRetSrTech
     */
    public function setKfRetSrTechid($kfRetSrTechid)
    {
        $this->kfRetSrTechid = $kfRetSrTechid;

        return $this;
    }

    /**
     * Get kfRetSrTechid
     *
     * @return string 
     */
    public function getKfRetSrTechid()
    {
        return $this->kfRetSrTechid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfRetSrTech
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfRetSrTech
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
     * @return KfRetSrTech
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
     * @return KfRetSrTech
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
     * @return KfRetSrTech
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
     * Set storey
     *
     * @param string $storey
     * @return KfRetSrTech
     */
    public function setStorey($storey)
    {
        $this->storey = $storey;

        return $this;
    }

    /**
     * Get storey
     *
     * @return string 
     */
    public function getStorey()
    {
        return $this->storey;
    }

    /**
     * Set area
     *
     * @param float $area
     * @return KfRetSrTech
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set ceilingHeight
     *
     * @param float $ceilingHeight
     * @return KfRetSrTech
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return float 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return KfRetSrTech
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
