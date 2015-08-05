<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountsummary
 *
 * @ORM\Table(name="ACCOUNTSUMMARY", uniqueConstraints={@ORM\UniqueConstraint(name="XPKACCOUNTSUMMARY", columns={"ACCOUNTID"})}, indexes={@ORM\Index(name="XIE1ACCOUNTSUMMARY", columns={"ACCOUNT"}), @ORM\Index(name="XIE2ACCOUNTSUMMARY", columns={"SECCODEID"}), @ORM\Index(name="ACCOUNTSUMMARY_PARENTID", columns={"PARENTID"})})
 * @ORM\Entity
 */
class Accountsummary
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=false)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTID", type="string", length=12, nullable=true)
     */
    private $parentid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;


}
