<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDogovor
 *
 * @ORM\Table(name="SPK_DOGOVOR", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_DOGOVOR_PRIMARY", columns={"SPK_DOGOVORID"})}, indexes={@ORM\Index(name="SPK_DOGOVOR_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkDogovor
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_DOGOVORID", type="string", length=12, nullable=false)
     */
    private $spkDogovorid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="DOG_NUMBER", type="string", length=32, nullable=true)
     */
    private $dogNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SIGN_DATE", type="datetime", nullable=true)
     */
    private $signDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CLOSED_DATE", type="datetime", nullable=true)
     */
    private $closedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="DOG_TYPE", type="string", length=128, nullable=true)
     */
    private $dogType;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTE", type="string", length=1024, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="VALIDITY_DAYS", type="string", length=64, nullable=true)
     */
    private $validityDays;

    /**
     * @var string
     *
     * @ORM\Column(name="PROLONGATION", type="string", length=128, nullable=true)
     */
    private $prolongation;

    /**
     * @var string
     *
     * @ORM\Column(name="PAST_PAYMENTS", type="string", length=128, nullable=true)
     */
    private $pastPayments;

    /**
     * @var string
     *
     * @ORM\Column(name="SIGNATORY", type="string", length=12, nullable=true)
     */
    private $signatory;

    /**
     * @var float
     *
     * @ORM\Column(name="SUCCESS_FEE", type="float", precision=53, scale=0, nullable=true)
     */
    private $successFee;


}
