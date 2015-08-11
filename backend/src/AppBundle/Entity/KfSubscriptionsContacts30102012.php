<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptionsContacts30102012
 *
 * @ORM\Table(name="KF_SUBSCRIPTIONS_CONTACTS_30102012")
 * @ORM\Entity
 */
class KfSubscriptionsContacts30102012
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
     * @return KfSubscriptionsContacts30102012
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
     * @return KfSubscriptionsContacts30102012
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
