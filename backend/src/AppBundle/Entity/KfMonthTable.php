<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMonthTable
 *
 * @ORM\Table(name="KF_MONTH_TABLE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MONTH_TABLE_PRIMARY", columns={"KF_MONTH_TABLEID"})})
 * @ORM\Entity
 */
class KfMonthTable
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MONTH_TABLEID", type="string", length=12, nullable=false)
     */
    private $kfMonthTableid;

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
     * @ORM\Column(name="MON_ID", type="string", length=12, nullable=true)
     */
    private $monId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MON_NAME", type="smallint", nullable=true)
     */
    private $monName;


}
