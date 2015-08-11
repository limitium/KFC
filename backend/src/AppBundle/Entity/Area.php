<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="AREA", uniqueConstraints={@ORM\UniqueConstraint(name="AREA_PRIMARY", columns={"AREAID"})})
 * @ORM\Entity
 */
class Area
{
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
     * @ORM\Column(name="AREANAME", type="string", length=64, nullable=true)
     */
    private $areaname;

    /**
     * @var string
     *
     * @ORM\Column(name="AREANAMERUS", type="string", length=64, nullable=true)
     */
    private $areanamerus;



    /**
     * Set areaid
     *
     * @param string $areaid
     * @return Area
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
     * @return Area
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
     * @return Area
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
     * @return Area
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
     * @return Area
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
     * Set areaname
     *
     * @param string $areaname
     * @return Area
     */
    public function setAreaname($areaname)
    {
        $this->areaname = $areaname;

        return $this;
    }

    /**
     * Get areaname
     *
     * @return string 
     */
    public function getAreaname()
    {
        return $this->areaname;
    }

    /**
     * Set areanamerus
     *
     * @param string $areanamerus
     * @return Area
     */
    public function setAreanamerus($areanamerus)
    {
        $this->areanamerus = $areanamerus;

        return $this;
    }

    /**
     * Get areanamerus
     *
     * @return string 
     */
    public function getAreanamerus()
    {
        return $this->areanamerus;
    }
}
