<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptionContacts20121126
 *
 * @ORM\Table(name="kf_subscription_contacts_20121126")
 * @ORM\Entity
 */
class KfSubscriptionContacts20121126
{
    /**
     * @var string
     *
     * @ORM\Column(name="SUBSCRIPTIONID", type="string", length=12, nullable=false)
     */
    private $subscriptionid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;



    /**
     * Set subscriptionid
     *
     * @param string $subscriptionid
     * @return KfSubscriptionContacts20121126
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
     * Set contactid
     *
     * @param string $contactid
     * @return KfSubscriptionContacts20121126
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }
}
