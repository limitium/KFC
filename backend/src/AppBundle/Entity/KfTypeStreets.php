<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTypeStreets
 *
 * @ORM\Table(name="kf_type_streets")
 * @ORM\Entity
 */
class KfTypeStreets
{
    /**
     * @var string
     *
     * @ORM\Column(name="street_type_rus", type="string", length=255, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender", type="smallint", nullable=true)
     */
    private $gender;


}
