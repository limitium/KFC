<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHelp
 *
 * @ORM\Table(name="KF_HELP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_HELP_PRIMARY", columns={"KF_HELPID"})})
 * @ORM\Entity
 */
class KfHelp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HELPID", type="string", length=12, nullable=false)
     */
    private $kfHelpid;

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
     * @ORM\Column(name="NOTES", type="string", length=512, nullable=true)
     */
    private $notes;


}
