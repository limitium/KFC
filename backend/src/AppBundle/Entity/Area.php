<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="AREA", uniqueConstraints={@ORM\UniqueConstraint(name="AREA_PRIMARY", columns={"AREAID"})})
 * @ORM\Entity
 */
class Area
{
    /**
     * @var string
     *
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=false)
     */
    private $areaid;

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
     * @ORM\Column(name="AREANAME", type="string", length=64, nullable=true)
     */
    private $areaname;

    /**
     * @var string
     *
     * @ORM\Column(name="AREANAMERUS", type="string", length=64, nullable=true)
     */
    private $areanamerus;


}
