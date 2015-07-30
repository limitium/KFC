<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempResidContact
 *
 * @ORM\Table(name="KF_TEMP_RESID_CONTACT")
 * @ORM\Entity
 */
class KfTempResidContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="near_activity", type="datetime", nullable=true)
     */
    private $nearActivity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_history", type="datetime", nullable=true)
     */
    private $lastHistory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cont_createdate", type="datetime", nullable=true)
     */
    private $contCreatedate;

    /**
     * @var string
     *
     * @ORM\Column(name="resi_status", type="string", length=32, nullable=false)
     */
    private $resiStatus;


}
