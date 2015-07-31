<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfConnector2711
 *
 * @ORM\Table(name="KF_CONNECTOR_2711")
 * @ORM\Entity
 */
class KfConnector2711
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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
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

    /**
     * @var integer
     *
     * @ORM\Column(name="OP_CODE", type="smallint", nullable=false)
     */
    private $opCode;


}