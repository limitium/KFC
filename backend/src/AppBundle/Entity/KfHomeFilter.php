<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHomeFilter
 *
 * @ORM\Table(name="KF_HOME_FILTER")
 * @ORM\Entity
 */
class KfHomeFilter
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HOME_FILTERID", type="string", length=12, nullable=false)
     */
    private $kfHomeFilterid;

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
     * @ORM\Column(name="FILTER_TYPE", type="string", length=32, nullable=true)
     */
    private $filterType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCESS_TYPE", type="string", length=32, nullable=true)
     */
    private $accessType;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUP_NAME", type="string", length=128, nullable=true)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="SQLTEXT", type="text", length=16, nullable=true)
     */
    private $sqltext;

    /**
     * @var string
     *
     * @ORM\Column(name="PS", type="string", length=32, nullable=true)
     */
    private $ps;



    /**
     * Set kfHomeFilterid
     *
     * @param string $kfHomeFilterid
     * @return KfHomeFilter
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfHomeFilter
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
     * @return KfHomeFilter
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
     * @return KfHomeFilter
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
     * @return KfHomeFilter
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
     * Set filterType
     *
     * @param string $filterType
     * @return KfHomeFilter
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Get filterType
     *
     * @return string 
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Set accessType
     *
     * @param string $accessType
     * @return KfHomeFilter
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;

        return $this;
    }

    /**
     * Get accessType
     *
     * @return string 
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return KfHomeFilter
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set sqltext
     *
     * @param string $sqltext
     * @return KfHomeFilter
     */
    public function setSqltext($sqltext)
    {
        $this->sqltext = $sqltext;

        return $this;
    }

    /**
     * Get sqltext
     *
     * @return string 
     */
    public function getSqltext()
    {
        return $this->sqltext;
    }

    /**
     * Set ps
     *
     * @param string $ps
     * @return KfHomeFilter
     */
    public function setPs($ps)
    {
        $this->ps = $ps;

        return $this;
    }

    /**
     * Get ps
     *
     * @return string 
     */
    public function getPs()
    {
        return $this->ps;
    }
}
