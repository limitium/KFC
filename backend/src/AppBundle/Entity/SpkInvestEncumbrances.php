<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestEncumbrances
 *
 * @ORM\Table(name="SPK_INVEST_ENCUMBRANCES")
 * @ORM\Entity
 */
class SpkInvestEncumbrances
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
     * @ORM\Column(name="ENCUMBRANCEID", type="string", length=12, nullable=false)
     */
    private $encumbranceid;


}
