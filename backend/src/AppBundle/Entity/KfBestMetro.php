<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestMetro
 *
 * @ORM\Table(name="kf_best_METRO")
 * @ORM\Entity
 */
class KfBestMetro
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
     * @ORM\Column(name="METROID", type="string", length=12, nullable=true)
     */
    private $metroid;


}
