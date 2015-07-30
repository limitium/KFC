<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfBestArea
 *
 * @ORM\Table(name="kf_best_area")
 * @ORM\Entity
 */
class KfBestArea
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
     * @ORM\Column(name="AREAID", type="string", length=12, nullable=true)
     */
    private $areaid;


}
