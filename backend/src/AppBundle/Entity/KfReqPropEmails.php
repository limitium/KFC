<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReqPropEmails
 *
 * @ORM\Table(name="KF_REQ_PROP_EMAILS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_REQ_PROP_EMAILS_PRIMARY", columns={"KF_REQ_PROP_EMAILSID"})}, indexes={@ORM\Index(name="KF_REQ_PROP_EMAILS_SPK_PROPERT", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfReqPropEmails
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_REQ_PROP_EMAILSID", type="string", length=12, nullable=false)
     */
    private $kfReqPropEmailsid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPETO", type="string", length=12, nullable=true)
     */
    private $typeto;


}
