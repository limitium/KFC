<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffGrDump
 *
 * @ORM\Table(name="kf_off_gr_dump")
 * @ORM\Entity
 */
class KfOffGrDump
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="manager", type="string", length=1000, nullable=true)
     */
    private $manager;


}
