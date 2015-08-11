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



    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfTempTableClosedWonOpportunity
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return KfTempTableClosedWonOpportunity
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
