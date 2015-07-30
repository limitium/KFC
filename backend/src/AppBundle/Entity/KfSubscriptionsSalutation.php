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


}
