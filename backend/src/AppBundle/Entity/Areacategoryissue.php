<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Areacategoryissue
 *
 * @ORM\Table(name="AREACATEGORYISSUE", uniqueConstraints={@ORM\UniqueConstraint(name="AREACATEGORYISSUE_PRIMARY", columns={"AREACATEGORYISSUEID"})}, indexes={@ORM\Index(name="AREACATEGORYISSUE_AREA", columns={"AREA"}), @ORM\Index(name="AREACATEGORYISSUE_CATEGORY", columns={"CATEGORY"}), @ORM\Index(name="AREACATEGORYISSUE_ISSUE", columns={"ISSUE"})})
 * @ORM\Entity
 */
class Areacategoryissue
{
    /**
     * @var string
     *
     * @ORM\Column(name="AREACATEGORYISSUEID", type="string", length=12, nullable=false)
     */
    private $areacategoryissueid;

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
     * @ORM\Column(name="AREA", type="string", length=64, nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORY", type="string", length=64, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="ISSUE", type="string", length=64, nullable=true)
     */
    private $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="TICKET", type="string", length=1, nullable=true)
     */
    private $ticket;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFECT", type="string", length=1, nullable=true)
     */
    private $defect;

    /**
     * @var string
     *
     * @ORM\Column(name="CUSTOMER", type="string", length=1, nullable=true)
     */
    private $customer;


}
