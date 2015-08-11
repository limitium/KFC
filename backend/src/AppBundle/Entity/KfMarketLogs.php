<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketLogs
 *
 * @ORM\Table(name="KF_MARKET_LOGS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKET_LOGS_PRIMARY", columns={"KF_MARKET_LOGSID"})})
 * @ORM\Entity
 */
class KfMarketLogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKET_LOGSID", type="string", length=12, nullable=false)
     */
    private $kfMarketLogsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="CHANGED_FIELD", type="string", length=64, nullable=true)
     */
    private $changedField;

    /**
     * @var string
     *
     * @ORM\Column(name="OLD_VALUE", type="string", length=64, nullable=true)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_VALUE", type="string", length=64, nullable=true)
     */
    private $newValue;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=128, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITY", type="string", length=32, nullable=true)
     */
    private $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;



    /**
     * Set kfMarketLogsid
     *
     * @param string $kfMarketLogsid
     * @return KfMarketLogs
     */
    public function setKfMarketLogsid($kfMarketLogsid)
    {
        $this->kfMarketLogsid = $kfMarketLogsid;

        return $this;
    }

    /**
     * Get kfMarketLogsid
     *
     * @return string 
     */
    public function getKfMarketLogsid()
    {
        return $this->kfMarketLogsid;
    }

    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return KfMarketLogs
     */
    public function setKfMarketingProjectsid($kfMarketingProjectsid)
    {
        $this->kfMarketingProjectsid = $kfMarketingProjectsid;

        return $this;
    }

    /**
     * Get kfMarketingProjectsid
     *
     * @return string 
     */
    public function getKfMarketingProjectsid()
    {
        return $this->kfMarketingProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketLogs
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
     * @return KfMarketLogs
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
     * @return KfMarketLogs
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
     * @return KfMarketLogs
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
     * Set changedField
     *
     * @param string $changedField
     * @return KfMarketLogs
     */
    public function setChangedField($changedField)
    {
        $this->changedField = $changedField;

        return $this;
    }

    /**
     * Get changedField
     *
     * @return string 
     */
    public function getChangedField()
    {
        return $this->changedField;
    }

    /**
     * Set oldValue
     *
     * @param string $oldValue
     * @return KfMarketLogs
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get oldValue
     *
     * @return string 
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     * @return KfMarketLogs
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string 
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return KfMarketLogs
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

    /**
     * Set entity
     *
     * @param string $entity
     * @return KfMarketLogs
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return string 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set entityid
     *
     * @param string $entityid
     * @return KfMarketLogs
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
}
