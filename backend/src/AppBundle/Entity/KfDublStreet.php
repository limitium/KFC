<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDublStreet
 *
 * @ORM\Table(name="kf_dubl_street")
 * @ORM\Entity
 */
class KfDublStreet
{
    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus", type="string", length=255, nullable=true)
     */
    private $streetNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="street_type_rus", type="string", length=255, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid", type="string", length=12, nullable=true)
     */
    private $spkStreetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gisid", type="integer", nullable=true)
     */
    private $gisid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnt", type="integer", nullable=true)
     */
    private $cnt;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_streetID", type="string", length=12, nullable=true)
     */
    private $parentStreetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="igisid", type="integer", nullable=true)
     */
    private $igisid;

    /**
     * @var integer
     *
     * @ORM\Column(name="icnt", type="integer", nullable=true)
     */
    private $icnt;

    /**
     * @var string
     *
     * @ORM\Column(name="iparentid", type="string", length=12, nullable=true)
     */
    private $iparentid;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_new", type="string", length=255, nullable=true)
     */
    private $streetNameRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_old", type="string", length=255, nullable=true)
     */
    private $streetNameRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_rus_normalised", type="string", length=255, nullable=true)
     */
    private $spkStreetRusNormalised;


}
