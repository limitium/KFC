<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCheatExport
 *
 * @ORM\Table(name="KF_CHEAT_EXPORT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CHEAT_EXPORT_PRIMARY", columns={"KF_CHEAT_EXPORTID"})})
 * @ORM\Entity
 */
class KfCheatExport
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CHEAT_EXPORTID", type="string", length=12, nullable=false)
     */
    private $kfCheatExportid;

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
     * @ORM\Column(name="KF_GROUP", type="string", length=12, nullable=true)
     */
    private $kfGroup;


}
