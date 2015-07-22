<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAccountProfile
 *
 * @ORM\Table(name="SPK_ACCOUNT_PROFILE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_ACCOUNT_PROFILE_PRIMARY", columns={"SPK_ACCOUNT_PROFILEID"})}, indexes={@ORM\Index(name="SPK_ACCOUNT_PROFILE_ACCOUNTID", columns={"ACCOUNTID"})})
 * @ORM\Entity
 */
class SpkAccountProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ACCOUNT_PROFILEID", type="string", length=12, nullable=false)
     */
    private $spkAccountProfileid;

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
     * @ORM\Column(name="AREAID", type="string", length=32, nullable=true)
     */
    private $areaid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=32, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=32, nullable=true)
     */
    private $subprofileid;


}
