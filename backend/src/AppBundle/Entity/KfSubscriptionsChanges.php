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


}
