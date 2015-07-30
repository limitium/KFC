<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfClickFormStat
 *
 * @ORM\Table(name="KF_CLICK_FORM_STAT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CLICK_FORM_STAT_PRIMARY", columns={"KF_CLICK_FORM_STATID"})})
 * @ORM\Entity
 */
class KfClickFormStat
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLICK_FORM_STATID", type="string", length=12, nullable=false)
     */
    private $kfClickFormStatid;

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
     * @ORM\Column(name="FORM_NAME", type="string", length=256, nullable=true)
     */
    private $formName;


}
