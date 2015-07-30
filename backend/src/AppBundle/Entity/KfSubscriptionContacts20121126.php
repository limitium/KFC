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


}
