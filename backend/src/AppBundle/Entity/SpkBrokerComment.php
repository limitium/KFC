<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkBrokerComment
 *
 * @ORM\Table(name="SPK_BROKER_COMMENT", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_BROKER_COMMENT_PRIMARY", columns={"SPK_BROKER_COMMENTID"})}, indexes={@ORM\Index(name="SPK_BROKER_COMMENT_SPK_ALL_LONGLISTID", columns={"SPK_ALL_LONGLISTID"})})
 * @ORM\Entity
 */
class SpkBrokerComment
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_BROKER_COMMENTID", type="string", length=12, nullable=false)
     */
    private $spkBrokerCommentid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ALL_LONGLISTID", type="string", length=12, nullable=false)
     */
    private $spkAllLonglistid;

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
     * @ORM\Column(name="COMMENTAR", type="string", length=300, nullable=true)
     */
    private $commentar;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;


}
