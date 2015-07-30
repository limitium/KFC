<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfRshIndustrialSlice
 *
 * @ORM\Table(name="kf_rsh_industrial_slice")
 * @ORM\Entity
 */
class KfRshIndustrialSlice
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var float
     *
     * @ORM\Column(name="free_total_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeTotalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_office_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeOfficeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_mezonin_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeMezoninArea;

    /**
     * @var float
     *
     * @ORM\Column(name="free_industrial_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $freeIndustrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="PROC_FREE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $procFreeArea;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_industrial_min", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentIndustrialMin;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_industrial_max", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentIndustrialMax;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_office_min", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentOfficeMin;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_office_max", type="decimal", precision=24, scale=8, nullable=true)
     */
    private $rentOfficeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_RENT_MESONIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $minRentMesonin;

    /**
     * @var string
     *
     * @ORM\Column(name="MAX_RENT_MESONIN", type="decimal", precision=17, scale=4, nullable=true)
     */
    private $maxRentMesonin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $opexMin;

    /**
     * @var string
     *
     * @ORM\Column(name="OPEX_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $opexMax;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMin;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_pallet", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $costPallet;

    /**
     * @var string
     *
     * @ORM\Column(name="lul_min", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $lulMin;

    /**
     * @var string
     *
     * @ORM\Column(name="lul_max", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $lulMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="insdep_min", type="smallint", nullable=true)
     */
    private $insdepMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="insdep_max", type="smallint", nullable=true)
     */
    private $insdepMax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=false)
     */
    private $createdate;


}
