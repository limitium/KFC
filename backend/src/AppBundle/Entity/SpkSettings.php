<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkSettings
 *
 * @ORM\Table(name="SPK_SETTINGS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_SETTINGS_PRIMARY", columns={"SPK_SETTINGSID"})})
 * @ORM\Entity
 */
class SpkSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_SETTINGSID", type="string", length=12, nullable=false)
     */
    private $spkSettingsid;

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
     * @ORM\Column(name="SPK_PROPERTY", type="string", length=32, nullable=true)
     */
    private $spkProperty;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_VALUE", type="string", length=32, nullable=true)
     */
    private $spkValue;


}
