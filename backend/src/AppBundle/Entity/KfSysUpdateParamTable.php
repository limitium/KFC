<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSysUpdateParamTable
 *
 * @ORM\Table(name="kf_sys_update_param_table")
 * @ORM\Entity
 */
class KfSysUpdateParamTable
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime", nullable=false)
     */
    private $createdate;


}
