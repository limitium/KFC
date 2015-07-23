<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestMagistral
 *
 * @ORM\Table(name="SPK_INVEST_MAGISTRAL")
 * @ORM\Entity
 */
class SpkInvestMagistral
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
     * @ORM\Column(name="MAGISTRALID", type="string", length=12, nullable=false)
     */
    private $magistralid;


}
