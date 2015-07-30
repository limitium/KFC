<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLogStreets
 *
 * @ORM\Table(name="kf_log_streets")
 * @ORM\Entity
 */
class KfLogStreets
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid_old", type="string", length=12, nullable=true)
     */
    private $spkStreetidOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid_new", type="string", length=12, nullable=true)
     */
    private $spkStreetidNew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dat", type="datetime", nullable=true)
     */
    private $dat;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_old", type="string", length=255, nullable=true)
     */
    private $streetNameRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_new", type="string", length=255, nullable=true)
     */
    private $streetNameRusNew;


}
