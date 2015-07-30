<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketLogs
 *
 * @ORM\Table(name="KF_MARKET_LOGS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKET_LOGS_PRIMARY", columns={"KF_MARKET_LOGSID"})})
 * @ORM\Entity
 */
class KfMarketLogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKET_LOGSID", type="string", length=12, nullable=false)
     */
    private $kfMarketLogsid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="CHANGED_FIELD", type="string", length=64, nullable=true)
     */
    private $changedField;

    /**
     * @var string
     *
     * @ORM\Column(name="OLD_VALUE", type="string", length=64, nullable=true)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="NEW_VALUE", type="string", length=64, nullable=true)
     */
    private $newValue;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=128, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITY", type="string", length=32, nullable=true)
     */
    private $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;


}
