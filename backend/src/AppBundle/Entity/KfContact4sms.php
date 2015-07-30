<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContact4sms
 *
 * @ORM\Table(name="kf_contact_4sms")
 * @ORM\Entity
 */
class KfContact4sms
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileprefix", type="string", length=32, nullable=true)
     */
    private $mobileprefix;


}
