<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStreetPart
 *
 * @ORM\Table(name="KF_Street_Part")
 * @ORM\Entity
 */
class KfStreetPart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_part", type="string", length=50, nullable=true)
     */
    private $spkStreetPart;


}
