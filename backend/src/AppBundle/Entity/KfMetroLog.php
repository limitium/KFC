<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMetroLog
 *
 * @ORM\Table(name="kf_metro_log")
 * @ORM\Entity
 */
class KfMetroLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid_old", type="string", length=12, nullable=true)
     */
    private $spkMetroidOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid_new", type="string", length=12, nullable=true)
     */
    private $spkMetroidNew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dat", type="datetime", nullable=true)
     */
    private $dat;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=true)
     */
    private $spkAddressid;


}
