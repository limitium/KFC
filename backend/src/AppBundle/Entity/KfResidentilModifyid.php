<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResidentilModifyid
 *
 * @ORM\Table(name="KF_RESIDENTIL_MODIFYID", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RESIDENTIL_MODIFYID_PRIMARY", columns={"KF_RESIDENTIL_MODIFYIDID"})})
 * @ORM\Entity
 */
class KfResidentilModifyid
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RESIDENTIL_MODIFYIDID", type="string", length=12, nullable=false)
     */
    private $kfResidentilModifyidid;

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
     * @var integer
     *
     * @ORM\Column(name="OLDID", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="NEWID", type="integer", nullable=true)
     */
    private $newid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PHOTOID", type="string", length=12, nullable=true)
     */
    private $spkPhotoid;



    /**
     * Set kfResidentilModifyidid
     *
     * @param string $kfResidentilModifyidid
     * @return KfResidentilModifyid
     */
    public function setKfResidentilModifyidid($kfResidentilModifyidid)
    {
        $this->kfResidentilModifyidid = $kfResidentilModifyidid;

        return $this;
    }

    /**
     * Get kfResidentilModifyidid
     *
     * @return string 
     */
    public function getKfResidentilModifyidid()
    {
        return $this->kfResidentilModifyidid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfResidentilModifyid
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
     * @return KfResidentilModifyid
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
     * @return KfResidentilModifyid
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
     * @return KfResidentilModifyid
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
     * Set oldid
     *
     * @param integer $oldid
     * @return KfResidentilModifyid
     */
    public function setOldid($oldid)
    {
        $this->oldid = $oldid;

        return $this;
    }

    /**
     * Get oldid
     *
     * @return integer 
     */
    public function getOldid()
    {
        return $this->oldid;
    }

    /**
     * Set newid
     *
     * @param integer $newid
     * @return KfResidentilModifyid
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Get newid
     *
     * @return integer 
     */
    public function getNewid()
    {
        return $this->newid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfResidentilModifyid
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
     * Set spkPhotoid
     *
     * @param string $spkPhotoid
     * @return KfResidentilModifyid
     */
    public function setSpkPhotoid($spkPhotoid)
    {
        $this->spkPhotoid = $spkPhotoid;

        return $this;
    }

    /**
     * Get spkPhotoid
     *
     * @return string 
     */
    public function getSpkPhotoid()
    {
        return $this->spkPhotoid;
    }
}
