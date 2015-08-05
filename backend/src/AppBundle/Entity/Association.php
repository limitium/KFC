<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="ASSOCIATION", uniqueConstraints={@ORM\UniqueConstraint(name="XPKASSOCIATION", columns={"ASSOCIATIONID"})}, indexes={@ORM\Index(name="XIE1ASSOCIATION", columns={"FROMID"}), @ORM\Index(name="XIE2ASSOCIATION", columns={"TOID"})})
 * @ORM\Entity
 */
class Association
{
    /**
     * @var string
     *
     * @ORM\Column(name="ASSOCIATIONID", type="string", length=12, nullable=false)
     */
    private $associationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACCOUNTASSOCIATION", type="integer", nullable=true)
     */
    private $accountassociation;

    /**
     * @var string
     *
     * @ORM\Column(name="FROMID", type="string", length=12, nullable=false)
     */
    private $fromid;

    /**
     * @var string
     *
     * @ORM\Column(name="TOID", type="string", length=12, nullable=false)
     */
    private $toid;

    /**
     * @var string
     *
     * @ORM\Column(name="FORWARDRELATION", type="string", length=64, nullable=true)
     */
    private $forwardrelation;

    /**
     * @var string
     *
     * @ORM\Column(name="BACKRELATION", type="string", length=64, nullable=true)
     */
    private $backrelation;

    /**
     * @var string
     *
     * @ORM\Column(name="FORWARDNOTES", type="string", length=128, nullable=true)
     */
    private $forwardnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="BACKNOTES", type="string", length=128, nullable=true)
     */
    private $backnotes;

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


}
