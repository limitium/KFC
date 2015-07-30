<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTitlePaloChg
 *
 * @ORM\Table(name="KF_USER_TITLE_PALO_CHG", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TITLE_PALO_CHG_PRIMARY", columns={"KF_USER_TITLE_PALO_CHGID"})})
 * @ORM\Entity
 */
class KfUserTitlePaloChg
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TITLE_PALO_CHGID", type="string", length=12, nullable=false)
     */
    private $kfUserTitlePaloChgid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=200, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=200, nullable=true)
     */
    private $division;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CHANGE_DATE", type="datetime", nullable=true)
     */
    private $changeDate;


}
