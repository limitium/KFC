<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempContactEmails
 *
 * @ORM\Table(name="KF_TEMP_CONTACT_EMAILS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_TEMP_CONTACT_EMAILS_PRIMARY", columns={"KF_TEMP_CONTACT_EMAILSID"})})
 * @ORM\Entity
 */
class KfTempContactEmails
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_TEMP_CONTACT_EMAILSID", type="string", length=12, nullable=false)
     */
    private $kfTempContactEmailsid;

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

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=128, nullable=true)
     */
    private $email;


}
