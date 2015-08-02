<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOblast
 *
 * @ORM\Table(name="KF_OBLAST", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OBLAST_PRIMARY", columns={"KF_OBLASTID"})}, indexes={@ORM\Index(name="KF_SR_IX_OBLASTID", columns={"KF_OBLASTID", "OBLAST_RUS", "OBLAST_ENG"}), @ORM\Index(name="KF_SR_IX_OBLAST_RUS", columns={"OBLAST_RUS"})})
 * @ORM\Entity
 */
class KfOblast
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OBLASTID", type="string", length=12, nullable=false)
     */
    private $kfOblastid;

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
     * @ORM\Column(name="OBLAST_RUS", type="string", length=512, nullable=true)
     */
    private $oblastRus;

    /**
     * @var string
     *
     * @ORM\Column(name="OBLAST_ENG", type="string", length=512, nullable=true)
     */
    private $oblastEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="intareaid", type="integer", nullable=true)
     */
    private $intareaid;

    /**
     * @return string
     */
    public function getKfOblastid()
    {
        return $this->kfOblastid;
    }

    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @return string
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * @return \DateTime
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * @return string
     */
    public function getOblastRus()
    {
        return $this->oblastRus;
    }

    /**
     * @return string
     */
    public function getOblastEng()
    {
        return $this->oblastEng;
    }

    /**
     * @return int
     */
    public function getIntareaid()
    {
        return $this->intareaid;
    }
}
