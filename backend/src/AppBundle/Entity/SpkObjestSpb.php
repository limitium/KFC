<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkObjestSpb
 *
 * @ORM\Table(name="SPK_Objest_SPb")
 * @ORM\Entity
 */
class SpkObjestSpb
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=1000, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="property_type", type="string", length=10, nullable=true)
     */
    private $propertyType;

    /**
     * @var string
     *
     * @ORM\Column(name="Prop_type", type="string", length=10, nullable=true)
     */
    private $propType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=300, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=10, nullable=true)
     */
    private $spkAddressid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_OBJECT", type="string", length=10, nullable=true)
     */
    private $kfObject;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=32, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="name_rus", type="string", length=200, nullable=true)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="name_eng", type="string", length=200, nullable=true)
     */
    private $nameEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_area", type="integer", nullable=true)
     */
    private $totalArea;

    /**
     * @var float
     *
     * @ORM\Column(name="land_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="lease_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseArea;

    /**
     * @var float
     *
     * @ORM\Column(name="sale_area", type="float", precision=53, scale=0, nullable=true)
     */
    private $saleArea;

    /**
     * @var float
     *
     * @ORM\Column(name="lease_min", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseMin;

    /**
     * @var float
     *
     * @ORM\Column(name="lease_max", type="float", precision=53, scale=0, nullable=true)
     */
    private $leaseMax;

    /**
     * @var float
     *
     * @ORM\Column(name="sale_min", type="float", precision=53, scale=0, nullable=true)
     */
    private $saleMin;

    /**
     * @var float
     *
     * @ORM\Column(name="sale_max", type="float", precision=53, scale=0, nullable=true)
     */
    private $saleMax;

    /**
     * @var string
     *
     * @ORM\Column(name="consultant", type="string", length=64, nullable=true)
     */
    private $consultant;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTMANAGERID", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY_RUS", type="string", length=64, nullable=true)
     */
    private $cityRus;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=10, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;


}
