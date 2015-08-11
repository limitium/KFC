<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDeleted
 *
 * @ORM\Table(name="KF_DELETED", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DELETED_PRIMARY", columns={"KF_DELETEDID"})})
 * @ORM\Entity
 */
class KfDeleted
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DELETEDID", type="string", length=12, nullable=false)
     */
    private $kfDeletedid;

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
     * @ORM\Column(name="HOSTNAME", type="string", length=32, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="TABLENAME", type="string", length=64, nullable=true)
     */
    private $tablename;



    /**
     * Set kfDeletedid
     *
     * @param string $kfDeletedid
     * @return KfDeleted
     */
    public function setKfDeletedid($kfDeletedid)
    {
        $this->kfDeletedid = $kfDeletedid;

        return $this;
    }

    /**
     * Get kfDeletedid
     *
     * @return string 
     */
    public function getKfDeletedid()
    {
        return $this->kfDeletedid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfDeleted
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
     * @return KfDeleted
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
     * @return KfDeleted
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
     * @return KfDeleted
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
     * Set hostname
     *
     * @param string $hostname
     * @return KfDeleted
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set entityid
     *
     * @param string $entityid
     * @return KfDeleted
     */
    public function setEntityid($entityid)
    {
        $this->entityid = $entityid;

        return $this;
    }

    /**
     * Get entityid
     *
     * @return string 
     */
    public function getEntityid()
    {
        return $this->entityid;
    }

    /**
     * Set tablename
     *
     * @param string $tablename
     * @return KfDeleted
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }
}
