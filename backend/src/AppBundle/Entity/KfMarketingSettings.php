<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingSettings
 *
 * @ORM\Table(name="KF_MARKETING_SETTINGS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_SETTINGS_PRIMARY", columns={"KF_MARKETING_SETTINGSID"})})
 * @ORM\Entity
 */
class KfMarketingSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_SETTINGSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingSettingsid;

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
     * @ORM\Column(name="BUDGETID", type="string", length=12, nullable=true)
     */
    private $budgetid;


}
