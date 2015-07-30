<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSysLastUpdate
 *
 * @ORM\Table(name="kf_sys_last_update")
 * @ORM\Entity
 */
class KfSysLastUpdate
{
    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYTYPE", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=50, nullable=true)
     */
    private $status;


}
