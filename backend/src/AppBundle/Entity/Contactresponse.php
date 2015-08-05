<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactresponse
 *
 * @ORM\Table(name="CONTACTRESPONSE", uniqueConstraints={@ORM\UniqueConstraint(name="CONTACTRESPONSE_PRIMARY", columns={"CONTACTRESPONSEID"})}, indexes={@ORM\Index(name="CONTACTRESPONSE_CAMPAIGNID", columns={"CAMPAIGNID"}), @ORM\Index(name="CONTACTRESPONSE_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class Contactresponse
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTRESPONSEID", type="string", length=12, nullable=false)
     */
    private $contactresponseid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="RESPONSEDATE", type="datetime", nullable=true)
     */
    private $responsedate;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPONSEMETHOD", type="string", length=32, nullable=true)
     */
    private $responsemethod;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=true)
     */
    private $campaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNCONTACTID", type="string", length=12, nullable=true)
     */
    private $campaigncontactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RESPONDED", type="integer", nullable=true)
     */
    private $responded;


}
