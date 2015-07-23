<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAccessManage
 *
 * @ORM\Table(name="SPK_ACCESS_MANAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_ACCESS_MANAGE_PRIMARY", columns={"SPK_ACCESS_MANAGEID"})}, indexes={@ORM\Index(name="SPK_ACCESS_MANAGE_USERID", columns={"USERID"})})
 * @ORM\Entity
 */
class SpkAccessManage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ACCESS_MANAGEID", type="string", length=12, nullable=false)
     */
    private $spkAccessManageid;

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
     * @ORM\Column(name="ACCESS_TYPE", type="string", length=16, nullable=true)
     */
    private $accessType;


}
