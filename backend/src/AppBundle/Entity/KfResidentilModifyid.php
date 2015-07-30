<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResidentilModifyid
 *
 * @ORM\Table(name="KF_RESIDENTIL_MODIFYID", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RESIDENTIL_MODIFYID_PRIMARY", columns={"KF_RESIDENTIL_MODIFYIDID"})})
 * @ORM\Entity
 */
class KfResidentilModifyid
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RESIDENTIL_MODIFYIDID", type="string", length=12, nullable=false)
     */
    private $kfResidentilModifyidid;

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
     * @ORM\Column(name="OLDID", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="NEWID", type="integer", nullable=true)
     */
    private $newid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PHOTOID", type="string", length=12, nullable=true)
     */
    private $spkPhotoid;


}
