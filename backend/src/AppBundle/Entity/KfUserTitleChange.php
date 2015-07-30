<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserTitleChange
 *
 * @ORM\Table(name="KF_USER_TITLE_CHANGE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_USER_TITLE_CHANGE_PRIMARY", columns={"KF_USER_TITLE_CHANGEID"})})
 * @ORM\Entity
 */
class KfUserTitleChange
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_USER_TITLE_CHANGEID", type="string", length=12, nullable=false)
     */
    private $kfUserTitleChangeid;

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
