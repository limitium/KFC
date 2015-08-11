<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptionsSalutation
 *
 * @ORM\Table(name="KF_SUBSCRIPTIONS_SALUTATION")
 * @ORM\Entity
 */
class KfSubscriptionsSalutation
{
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
     * @ORM\Column(name="SUBSCRIPTIONID", type="string", length=12, nullable=false)
     */
    private $subscriptionid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_REQUESTSID", type="string", length=12, nullable=true)
     */
    private $spkRequestsid;



    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfSubscriptionsSalutation
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
     * @return KfSubscriptionsSalutation
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
     * Set subscriptionid
     *
     * @param string $subscriptionid
     * @return KfSubscriptionsSalutation
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
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return KfSubscriptionsSalutation
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }
}
