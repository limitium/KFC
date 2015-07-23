<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAddressMetro
 *
 * @ORM\Table(name="SPK_ADDRESS_METRO", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_ADDRESS_METRO_PRIMARY", columns={"SPK_ADDRESS_METROID"})}, indexes={@ORM\Index(name="SPK_ADDRESS_METRO_SPK_ADDRESSID", columns={"SPK_ADDRESSID"}), @ORM\Index(name="_dta_index_SPK_ADDRESS_METRO_7_1952726009__K7", columns={"SPK_METROID"}), @ORM\Index(name="_dta_index_SPK_ADDRESS_METRO_7_1952726009__K2_7", columns={"SPK_ADDRESSID", "SPK_METROID"}), @ORM\Index(name="_dta_index_SPK_ADDRESS_METRO_7_1952726009__K7_K2", columns={"SPK_METROID", "SPK_ADDRESSID"})})
 * @ORM\Entity
 */
class SpkAddressMetro
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESS_METROID", type="string", length=12, nullable=false)
     */
    private $spkAddressMetroid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=false)
     */
    private $spkAddressid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_METROID", type="string", length=12, nullable=true)
     */
    private $spkMetroid;


}
