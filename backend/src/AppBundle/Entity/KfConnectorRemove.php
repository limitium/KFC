<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfConnectorRemove
 *
 * @ORM\Table(name="kf_connector_remove")
 * @ORM\Entity
 */
class KfConnectorRemove
{
    /**
     * @var integer
     *
     * @ORM\Column(name="KF_CONNECTORID", type="bigint", nullable=false)
     */
    private $kfConnectorid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=20, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IS_HANDLE", type="smallint", nullable=false)
     */
    private $isHandle;


}
