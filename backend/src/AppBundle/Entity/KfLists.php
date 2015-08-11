<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLists
 *
 * @ORM\Table(name="KF_LISTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_LISTS_PRIMARY", columns={"KF_LISTSID"})})
 * @ORM\Entity
 */
class KfLists
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_LISTSID", type="string", length=12, nullable=false)
     */
    private $kfListsid;

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
     * @ORM\Column(name="LISTID", type="string", length=12, nullable=true)
     */
    private $listid;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVECAMPAIGNID", type="string", length=12, nullable=true)
     */
    private $activecampaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;



    /**
     * Set kfListsid
     *
     * @param string $kfListsid
     * @return KfLists
     */
    public function setKfListsid($kfListsid)
    {
        $this->kfListsid = $kfListsid;

        return $this;
    }

    /**
     * Get kfListsid
     *
     * @return string 
     */
    public function getKfListsid()
    {
        return $this->kfListsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfLists
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
     * @return KfLists
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
     * @return KfLists
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
     * @return KfLists
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
     * Set listid
     *
     * @param string $listid
     * @return KfLists
     */
    public function setListid($listid)
    {
        $this->listid = $listid;

        return $this;
    }

    /**
     * Get listid
     *
     * @return string 
     */
    public function getListid()
    {
        return $this->listid;
    }

    /**
     * Set entityid
     *
     * @param string $entityid
     * @return KfLists
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
     * Set activecampaignid
     *
     * @param string $activecampaignid
     * @return KfLists
     */
    public function setActivecampaignid($activecampaignid)
    {
        $this->activecampaignid = $activecampaignid;

        return $this;
    }

    /**
     * Get activecampaignid
     *
     * @return string 
     */
    public function getActivecampaignid()
    {
        return $this->activecampaignid;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfLists
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
