<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTeleLog
 *
 * @ORM\Table(name="KF_TELE_LOG", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TELE_LOG_PRIMARY", columns={"KF_TELE_LOGID"})}, indexes={@ORM\Index(name="KF_TELE_LOG_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfTeleLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TELE_LOGID", type="string", length=12, nullable=false)
     */
    private $kfTeleLogid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

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
     * @ORM\Column(name="STATUS", type="string", length=128, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="PROJECT", type="string", length=128, nullable=true)
     */
    private $project;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=2048, nullable=true)
     */
    private $notes;


}
