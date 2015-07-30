<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSubscriptionsContacts
 *
 * @ORM\Table(name="KF_SUBSCRIPTIONS_CONTACTS")
 * @ORM\Entity
 */
class KfSubscriptionsContacts
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


}
