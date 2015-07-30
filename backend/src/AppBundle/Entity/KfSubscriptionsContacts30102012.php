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


}
