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


}
