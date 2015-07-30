<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfEditStreetName
 *
 * @ORM\Table(name="kf_edit_street_name")
 * @ORM\Entity
 */
class KfEditStreetName
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_rus", type="string", length=255, nullable=true)
     */
    private $spkStreetRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_rus_upd", type="string", length=255, nullable=true)
     */
    private $spkStreetRusUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="stk_streetid", type="string", length=12, nullable=true)
     */
    private $stkStreetid;

    /**
     * @var string
     *
     * @ORM\Column(name="street_type_rus", type="string", length=255, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var integer
     *
     * @ORM\Column(name="gen", type="smallint", nullable=true)
     */
    private $gen;


}
