<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDublDistrict
 *
 * @ORM\Table(name="kf_DUBL_District")
 * @ORM\Entity
 */
class KfDublDistrict
{
    /**
     * @var string
     *
     * @ORM\Column(name="district_rus", type="string", length=255, nullable=true)
     */
    private $districtRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_districtid", type="string", length=12, nullable=true)
     */
    private $spkDistrictid;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_parent_districtid", type="string", length=12, nullable=true)
     */
    private $spkParentDistrictid;



    /**
     * Set districtRus
     *
     * @param string $districtRus
     * @return KfDublDistrict
     */
    public function setDistrictRus($districtRus)
    {
        $this->districtRus = $districtRus;

        return $this;
    }

    /**
     * Get districtRus
     *
     * @return string 
     */
    public function getDistrictRus()
    {
        return $this->districtRus;
    }

    /**
     * Set spkDistrictid
     *
     * @param string $spkDistrictid
     * @return KfDublDistrict
     */
    public function setSpkDistrictid($spkDistrictid)
    {
        $this->spkDistrictid = $spkDistrictid;

        return $this;
    }

    /**
     * Get spkDistrictid
     *
     * @return string 
     */
    public function getSpkDistrictid()
    {
        return $this->spkDistrictid;
    }

    /**
     * Set spkParentDistrictid
     *
     * @param string $spkParentDistrictid
     * @return KfDublDistrict
     */
    public function setSpkParentDistrictid($spkParentDistrictid)
    {
        $this->spkParentDistrictid = $spkParentDistrictid;

        return $this;
    }

    /**
     * Get spkParentDistrictid
     *
     * @return string 
     */
    public function getSpkParentDistrictid()
    {
        return $this->spkParentDistrictid;
    }
}
