<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempTableClosedWonOpportunity
 *
 * @ORM\Table(name="kf_temp_table_closed_won_opportunity")
 * @ORM\Entity
 */
class KfTempTableClosedWonOpportunity
{
    /**
     * @var string
     *
     * @ORM\Column(name="opportunityid", type="string", length=12, nullable=false)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=64, nullable=true)
     */
    private $status;


}
