<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestSegments
 *
 * @ORM\Table(name="SPK_INVEST_SEGMENTS")
 * @ORM\Entity
 */
class SpkInvestSegments
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
     * @ORM\Column(name="SEGMENTID", type="string", length=12, nullable=false)
     */
    private $segmentid;


}
