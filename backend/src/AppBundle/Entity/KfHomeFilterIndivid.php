<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHomeFilterIndivid
 *
 * @ORM\Table(name="KF_HOME_FILTER_INDIVID", uniqueConstraints={@ORM\UniqueConstraint(name="KF_HOME_FILTER_INDIVID_PRIMARY", columns={"KF_HOME_FILTER_INDIVIDID"})}, indexes={@ORM\Index(name="KF_SR_IX_USERID", columns={"USERID"})})
 * @ORM\Entity
 */
class KfHomeFilterIndivid
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HOME_FILTER_INDIVIDID", type="string", length=12, nullable=false)
     */
    private $kfHomeFilterIndividid;

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
     * @ORM\Column(name="KF_HOME_FILTERID", type="string", length=12, nullable=true)
     */
    private $kfHomeFilterid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;


}
