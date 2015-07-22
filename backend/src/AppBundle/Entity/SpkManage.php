<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkManage
 *
 * @ORM\Table(name="SPK_MANAGE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_MANAGE_PRIMARY", columns={"SPK_MANAGEID"})})
 * @ORM\Entity
 */
class SpkManage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_MANAGEID", type="string", length=12, nullable=false)
     */
    private $spkManageid;

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
     * @var integer
     *
     * @ORM\Column(name="RESIDENTIAL", type="integer", nullable=true)
     */
    private $residential;

    /**
     * @var integer
     *
     * @ORM\Column(name="RETAIL", type="integer", nullable=true)
     */
    private $retail;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFFICE", type="integer", nullable=true)
     */
    private $office;

    /**
     * @var integer
     *
     * @ORM\Column(name="INDUSTRIAL", type="integer", nullable=true)
     */
    private $industrial;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVER_PATH", type="string", length=512, nullable=true)
     */
    private $serverPath;

    /**
     * @var string
     *
     * @ORM\Column(name="WEB_PATH", type="string", length=512, nullable=true)
     */
    private $webPath;


}
