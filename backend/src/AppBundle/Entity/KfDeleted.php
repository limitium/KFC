<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDeleted
 *
 * @ORM\Table(name="KF_DELETED", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DELETED_PRIMARY", columns={"KF_DELETEDID"})})
 * @ORM\Entity
 */
class KfDeleted
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DELETEDID", type="string", length=12, nullable=false)
     */
    private $kfDeletedid;

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
     * @ORM\Column(name="HOSTNAME", type="string", length=32, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="TABLENAME", type="string", length=64, nullable=true)
     */
    private $tablename;


}
