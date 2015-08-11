<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreaProfile
 *
 * @ORM\Table(name="AREA_PROFILE", uniqueConstraints={@ORM\UniqueConstraint(name="AREA_PROFILE_PRIMARY", columns={"AREA_PROFILEID"})}, indexes={@ORM\Index(name="AREA_PROFILE_AREAID", columns={"AREAID"})})
 * @ORM\Entity
 */
class AreaProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="AREA_PROFILEID", type="string", length=12, nullable=false)
     */
    private $areaProfileid;

    /**
     * @var string
     *
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=false)
     */
    private $areaid;

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
     * @ORM\Column(name="PROFILENAME", type="string", length=64, nullable=true)
     */
    private $profilename;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILENAMERUS", type="string", length=64, nullable=true)
     */
    private $profilenamerus;



    /**
     * Set areaProfileid
     *
     * @param string $areaProfileid
     * @return AreaProfile
     */
    public function setAreaProfileid($areaProfileid)
    {
        $this->areaProfileid = $areaProfileid;

        return $this;
    }

    /**
     * Get areaProfileid
     *
     * @return string 
     */
    public function getAreaProfileid()
    {
        return $this->areaProfileid;
    }

    /**
     * Set areaid
     *
     * @param string $areaid
     * @return AreaProfile
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return string 
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return AreaProfile
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
     * @return AreaProfile
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
     * @return AreaProfile
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
     * @return AreaProfile
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
     * Set profilename
     *
     * @param string $profilename
     * @return AreaProfile
     */
    public function setProfilename($profilename)
    {
        $this->profilename = $profilename;

        return $this;
    }

    /**
     * Get profilename
     *
     * @return string 
     */
    public function getProfilename()
    {
        return $this->profilename;
    }

    /**
     * Set profilenamerus
     *
     * @param string $profilenamerus
     * @return AreaProfile
     */
    public function setProfilenamerus($profilenamerus)
    {
        $this->profilenamerus = $profilenamerus;

        return $this;
    }

    /**
     * Get profilenamerus
     *
     * @return string 
     */
    public function getProfilenamerus()
    {
        return $this->profilenamerus;
    }
}
