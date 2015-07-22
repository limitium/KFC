<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetSpecialists
 *
 * @ORM\Table(name="SPK_RET_SPECIALISTS", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_RET_SPECIALISTS_PRIMARY", columns={"SPK_RET_SPECIALISTSID"})}, indexes={@ORM\Index(name="SPK_RET_SPECIALISTS_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkRetSpecialists
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_RET_SPECIALISTSID", type="string", length=12, nullable=false)
     */
    private $spkRetSpecialistsid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;


}
