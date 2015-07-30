<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStatusOffice
 *
 * @ORM\Table(name="KF_STATUS_OFFICE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_STATUS_OFFICE_PRIMARY", columns={"KF_STATUS_OFFICEID"})})
 * @ORM\Entity
 */
class KfStatusOffice
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_STATUS_OFFICEID", type="string", length=12, nullable=false)
     */
    private $kfStatusOfficeid;

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
     * @ORM\Column(name="DIVISION", type="string", length=32, nullable=true)
     */
    private $division;


}
