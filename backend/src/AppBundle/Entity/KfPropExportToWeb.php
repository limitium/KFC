<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropExportToWeb
 *
 * @ORM\Table(name="KF_PROP_EXPORT_TO_WEB")
 * @ORM\Entity
 */
class KfPropExportToWeb
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPORTDATE", type="datetime", nullable=false)
     */
    private $exportdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SENDDATE", type="datetime", nullable=true)
     */
    private $senddate;


}
