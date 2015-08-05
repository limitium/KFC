<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactextension
 *
 * @ORM\Table(name="CONTACTEXTENSION", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTACTEXTENSION", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class Contactextension
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;


}
