<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactForSend
 *
 * @ORM\Table(name="KF_CONTACT_FOR_SEND", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CONTACT_FOR_SEND_PRIMARY", columns={"KF_CONTACT_FOR_SENDID"})})
 * @ORM\Entity
 */
class KfContactForSend
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CONTACT_FOR_SENDID", type="string", length=12, nullable=false)
     */
    private $kfContactForSendid;

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
