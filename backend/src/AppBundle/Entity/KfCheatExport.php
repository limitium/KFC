<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCheatExport
 *
 * @ORM\Table(name="KF_CHEAT_EXPORT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CHEAT_EXPORT_PRIMARY", columns={"KF_CHEAT_EXPORTID"})})
 * @ORM\Entity
 */
class KfCheatExport
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CHEAT_EXPORTID", type="string", length=12, nullable=false)
     */
    private $kfCheatExportid;

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
     * @ORM\Column(name="KF_GROUP", type="string", length=12, nullable=true)
     */
    private $kfGroup;



    /**
     * Set kfCheatExportid
     *
     * @param string $kfCheatExportid
     * @return KfCheatExport
     */
    public function setKfCheatExportid($kfCheatExportid)
    {
        $this->kfCheatExportid = $kfCheatExportid;

        return $this;
    }

    /**
     * Get kfCheatExportid
     *
     * @return string 
     */
    public function getKfCheatExportid()
    {
        return $this->kfCheatExportid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfCheatExport
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
     * @return KfCheatExport
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
     * @return KfCheatExport
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
     * @return KfCheatExport
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
     * Set kfGroup
     *
     * @param string $kfGroup
     * @return KfCheatExport
     */
    public function setKfGroup($kfGroup)
    {
        $this->kfGroup = $kfGroup;

        return $this;
    }

    /**
     * Get kfGroup
     *
     * @return string 
     */
    public function getKfGroup()
    {
        return $this->kfGroup;
    }
}
