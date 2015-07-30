<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfStreetsEdited
 *
 * @ORM\Table(name="kf_streets_edited")
 * @ORM\Entity
 */
class KfStreetsEdited
{
    /**
     * @var string
     *
     * @ORM\Column(name="streetid", type="string", length=12, nullable=false)
     */
    private $streetid;

    /**
     * @var string
     *
     * @ORM\Column(name="street_rus_old", type="string", length=255, nullable=true)
     */
    private $streetRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="street_rus_new", type="string", length=255, nullable=true)
     */
    private $streetRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="streetid2", type="string", length=12, nullable=true)
     */
    private $streetid2;

    /**
     * @var string
     *
     * @ORM\Column(name="gisid1", type="string", length=12, nullable=true)
     */
    private $gisid1;

    /**
     * @var string
     *
     * @ORM\Column(name="gisid2", type="string", length=12, nullable=true)
     */
    private $gisid2;

    /**
     * @var string
     *
     * @ORM\Column(name="propertycount1", type="string", length=12, nullable=true)
     */
    private $propertycount1;

    /**
     * @var string
     *
     * @ORM\Column(name="propertycount2", type="string", length=12, nullable=true)
     */
    private $propertycount2;


}
