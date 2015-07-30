<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfManagmenttoaccount
 *
 * @ORM\Table(name="KF_MANAGMENTTOACCOUNT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MANAGMENTTOACCOUNT_PRIMARY", columns={"KF_MANAGMENTTOACCOUNTID"})}, indexes={@ORM\Index(name="KF_MANAGMENTTOACCOUNT_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class KfManagmenttoaccount
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MANAGMENTTOACCOUNTID", type="string", length=12, nullable=false)
     */
    private $kfManagmenttoaccountid;

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
     * @ORM\Column(name="BROKERID", type="string", length=12, nullable=true)
     */
    private $brokerid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTNAME", type="string", length=128, nullable=true)
     */
    private $accountname;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKERNAME", type="string", length=128, nullable=true)
     */
    private $brokername;


}
