<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDivisionSalesplan
 *
 * @ORM\Table(name="KF_DIVISION_SALESPLAN", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DIVISION_SALESPLAN_PRIMARY", columns={"KF_DIVISION_SALESPLANID"})})
 * @ORM\Entity
 */
class KfDivisionSalesplan
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DIVISION_SALESPLANID", type="string", length=12, nullable=false)
     */
    private $kfDivisionSalesplanid;

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
     * @var float
     *
     * @ORM\Column(name="AMOUNT", type="float", precision=53, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="YER", type="smallint", nullable=true)
     */
    private $yer;

    /**
     * @var float
     *
     * @ORM\Column(name="PROBABILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $probability;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=64, nullable=true)
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=32, nullable=true)
     */
    private $location;


}
