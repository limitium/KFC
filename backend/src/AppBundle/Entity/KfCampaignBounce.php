<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCampaignBounce
 *
 * @ORM\Table(name="KF_CAMPAIGN_BOUNCE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CAMPAIGN_BOUNCE_PRIMARY", columns={"KF_CAMPAIGN_BOUNCEID"})}, indexes={@ORM\Index(name="KF_CAMPAIGN_BOUNCE_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfCampaignBounce
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CAMPAIGN_BOUNCEID", type="string", length=12, nullable=false)
     */
    private $kfCampaignBounceid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;


}
