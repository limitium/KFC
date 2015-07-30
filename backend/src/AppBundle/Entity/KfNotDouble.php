<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNotDouble
 *
 * @ORM\Table(name="kf_not_double")
 * @ORM\Entity
 */
class KfNotDouble
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_1", type="string", length=12, nullable=true)
     */
    private $id1;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_2", type="string", length=12, nullable=true)
     */
    private $id2;


}
