<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSeccodeRules
 *
 * @ORM\Table(name="kf_seccode_rules")
 * @ORM\Entity
 */
class KfSeccodeRules
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="eventtype", type="string", length=64, nullable=true)
     */
    private $eventtype;

    /**
     * @var string
     *
     * @ORM\Column(name="UniqueDepartment", type="string", length=64, nullable=true)
     */
    private $uniquedepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="EntityDepartment", type="string", length=64, nullable=true)
     */
    private $entitydepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="EntityType", type="string", length=64, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="seccodedescr", type="string", length=64, nullable=true)
     */
    private $seccodedescr;


}
