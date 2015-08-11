<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptionsChanges
 *
 * @ORM\Table(name="KF_SUBSCRIPTIONS_CHANGES")
 * @ORM\Entity
 */
class KfSubscriptionsChanges
{
    /**
     * @var string
     *
     * @ORM\Column(name="SUBSCRIPTIONID", type="string", length=12, nullable=false)
     */
    private $subscriptionid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=false)
     */
    private $createuser;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=false)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=255, nullable=true)
     */
    private $notes;



    /**
     * Set subscriptionid
     *
     * @param string $subscriptionid
     * @return KfSubscriptionsChanges
     */
    public function setSubscriptionid($subscriptionid)
    {
        $this->subscriptionid = $subscriptionid;

        return $this;
    }

    /**
     * Get subscriptionid
     *
     * @return string 
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfSubscriptionsChanges
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfSubscriptionsChanges
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
     * Set entityid
     *
     * @param string $entityid
     * @return KfSubscriptionsChanges
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
     * Set notes
     *
     * @param string $notes
     * @return KfSubscriptionsChanges
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
