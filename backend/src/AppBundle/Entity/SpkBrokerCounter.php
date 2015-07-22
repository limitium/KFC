<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkBrokerCounter
 *
 * @ORM\Table(name="SPK_BROKER_COUNTER", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_BROKER_COUNTER_PRIMARY", columns={"SPK_BROKER_COUNTERID"})}, indexes={@ORM\Index(name="SPK_BROKER_COUNTER_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkBrokerCounter
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_BROKER_COUNTERID", type="string", length=12, nullable=false)
     */
    private $spkBrokerCounterid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="COUNTER", type="integer", nullable=true)
     */
    private $counter;


}
