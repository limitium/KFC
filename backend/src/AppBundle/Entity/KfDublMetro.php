<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDublMetro
 *
 * @ORM\Table(name="kf_dubl_metro")
 * @ORM\Entity
 */
class KfDublMetro
{
    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus", type="string", length=255, nullable=true)
     */
    private $metroRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid", type="string", length=12, nullable=true)
     */
    private $spkMetroid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnt", type="integer", nullable=true)
     */
    private $cnt;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_metroID", type="string", length=12, nullable=true)
     */
    private $parentMetroid;

    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus_new", type="string", length=255, nullable=true)
     */
    private $metroRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus_old", type="string", length=255, nullable=true)
     */
    private $metroRusOld;


}
