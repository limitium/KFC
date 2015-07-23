<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppSalesdiagram
 *
 * @ORM\Table(name="SPK_OPP_SALESDIAGRAM", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_OPP_SALESDIAGRAM_PRIMARY", columns={"SPK_OPP_SALESDIAGRAMID"})}, indexes={@ORM\Index(name="SPK_OPP_SALESDIAGRAM_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class SpkOppSalesdiagram
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_OPP_SALESDIAGRAMID", type="string", length=12, nullable=false)
     */
    private $spkOppSalesdiagramid;

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
     * @ORM\Column(name="STAGE", type="string", length=32, nullable=true)
     */
    private $stage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PERIOD", type="datetime", nullable=true)
     */
    private $period;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE", type="float", precision=53, scale=0, nullable=true)
     */
    private $square;

    /**
     * @var integer
     *
     * @ORM\Column(name="SECTIONS", type="integer", nullable=true)
     */
    private $sections;

    /**
     * @var float
     *
     * @ORM\Column(name="SQUARE_BTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $squareBts;

    /**
     * @var integer
     *
     * @ORM\Column(name="SECTIONS_BTS", type="smallint", nullable=true)
     */
    private $sectionsBts;


}
