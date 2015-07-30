<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNotification
 *
 * @ORM\Table(name="kf_notification")
 * @ORM\Entity
 */
class KfNotification
{
    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=200, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="typeto", type="string", length=50, nullable=false)
     */
    private $typeto;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=50, nullable=false)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=50, nullable=true)
     */
    private $ssn;


}
