<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropertyVisited
 *
 * @ORM\Table(name="KF_PROPERTY_VISITED", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROPERTY_VISITED_PRIMARY", columns={"KF_PROPERTY_VISITEDID"})})
 * @ORM\Entity
 */
class KfPropertyVisited
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROPERTY_VISITEDID", type="string", length=12, nullable=false)
     */
    private $kfPropertyVisitedid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="VISITED", type="string", length=1, nullable=true)
     */
    private $visited;


}
