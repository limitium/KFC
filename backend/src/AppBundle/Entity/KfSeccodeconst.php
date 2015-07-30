<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSeccodeconst
 *
 * @ORM\Table(name="KF_seccodeconst")
 * @ORM\Entity
 */
class KfSeccodeconst
{
    /**
     * @var string
     *
     * @ORM\Column(name="seccodeid", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;


}
