<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestStreet
 *
 * @ORM\Table(name="KF_BEST_STREET")
 * @ORM\Entity
 */
class KfBestStreet
{
    /**
     * @var string
     *
     * @ORM\Column(name="BESTID", type="string", length=12, nullable=true)
     */
    private $bestid;

    /**
     * @var string
     *
     * @ORM\Column(name="STREETID", type="string", length=12, nullable=true)
     */
    private $streetid;


}
