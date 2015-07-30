<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropTechParameters
 *
 * @ORM\Table(name="kf_prop_tech_parameters", uniqueConstraints={@ORM\UniqueConstraint(name="Clustered", columns={"spk_Propertyid"})})
 * @ORM\Entity
 */
class KfPropTechParameters
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_Propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=11, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=2001, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="technical", type="string", length=2001, nullable=true)
     */
    private $technical;


}
