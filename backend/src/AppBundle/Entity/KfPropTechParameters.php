<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropTechParameters
 *
 * @ORM\Table(name="kf_prop_tech_parameters", uniqueConstraints={@ORM\UniqueConstraint(name="Clustered", columns={"spk_Propertyid"})})
 * @ORM\Entity
 */
class KfPropTechParameters
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_Propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=11, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=2001, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="technical", type="string", length=2001, nullable=true)
     */
    private $technical;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfPropTechParameters
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return KfPropTechParameters
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return KfPropTechParameters
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string 
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Set technical
     *
     * @param string $technical
     * @return KfPropTechParameters
     */
    public function setTechnical($technical)
    {
        $this->technical = $technical;

        return $this;
    }

    /**
     * Get technical
     *
     * @return string 
     */
    public function getTechnical()
    {
        return $this->technical;
    }
}
