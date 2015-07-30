<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccountManagers
 *
 * @ORM\Table(name="KF_ACCOUNT_MANAGERS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACCOUNT_MANAGERS_PRIMARY", columns={"KF_ACCOUNT_MANAGERSID"})}, indexes={@ORM\Index(name="KF_ACCOUNT_MANAGERS_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfAccountManagers
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_ACCOUNT_MANAGERSID", type="string", length=12, nullable=false)
     */
    private $kfAccountManagersid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;


}
