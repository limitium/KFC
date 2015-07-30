<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempContactEmails3
 *
 * @ORM\Table(name="kf_temp_contact_emails3")
 * @ORM\Entity
 */
class KfTempContactEmails3
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;


}
