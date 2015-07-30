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


}
