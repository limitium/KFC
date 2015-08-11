<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptions
 *
 * @ORM\Table(name="KF_SUBSCRIPTIONS", uniqueConstraints={@ORM\UniqueConstraint(name="PK_KF_SUBSCRIPTIONS", columns={"SUBSCRIPTIONID"})})
 * @ORM\Entity
 */
class KfSubscriptions
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
     * @ORM\Column(name="SUBSCRIPTION", type="string", length=128, nullable=true)
     */
    private $subscription;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=128, nullable=true)
     */
    private $department;



    /**
     * Set subscriptionid
     *
     * @param string $subscriptionid
     * @return KfSubscriptions
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
     * Set subscription
     *
     * @param string $subscription
     * @return KfSubscriptions
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return string 
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfSubscriptions
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
