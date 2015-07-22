<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestRing
 *
 * @ORM\Table(name="SPK_INVEST_RING")
 * @ORM\Entity
 */
class SpkInvestRing
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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGID", type="string", length=12, nullable=false)
     */
    private $ringid;


}
