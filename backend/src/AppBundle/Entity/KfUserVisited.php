<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfUserVisited
 *
 * @ORM\Table(name="KF_USER_VISITED")
 * @ORM\Entity
 */
class KfUserVisited
{
    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYTYPE", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=false)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=false)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VISITEDDATE", type="datetime", nullable=false)
     */
    private $visiteddate;

    /**
     * @var string
     *
     * @ORM\Column(name="VISITEDDATEchr", type="string", length=10, nullable=false)
     */
    private $visiteddatechr;


}
