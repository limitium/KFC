<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRetSrTech
 *
 * @ORM\Table(name="KF_RET_SR_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_RET_SR_TECH_PRIMARY", columns={"KF_RET_SR_TECHID"})}, indexes={@ORM\Index(name="KF_RET_SR_TECH_SPK_PROPERTYID", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfRetSrTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_RET_SR_TECHID", type="string", length=12, nullable=false)
     */
    private $kfRetSrTechid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

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
     * @ORM\Column(name="STOREY", type="string", length=64, nullable=true)
     */
    private $storey;

    /**
     * @var float
     *
     * @ORM\Column(name="AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var float
     *
     * @ORM\Column(name="CEILING_HEIGHT", type="float", precision=53, scale=0, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=1024, nullable=true)
     */
    private $comments;


}
