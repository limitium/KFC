<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="ADDRESS", uniqueConstraints={@ORM\UniqueConstraint(name="XPKADDRESS", columns={"ADDRESSID"})}, indexes={@ORM\Index(name="XIE6ADDRESS", columns={"ENTITYID"}), @ORM\Index(name="_dta_index_ADDRESS_5_377104434__K1_5_6_7_8_9_11", columns={"ADDRESSID", "ADDRESS1", "ADDRESS2", "CITY", "STATE", "POSTALCODE", "COUNTRY"}), @ORM\Index(name="_dta_index_ADDRESS_5_377104434__K1_K7_K20", columns={"ADDRESSID", "CITY", "ADDRESS3"})})
 * @ORM\Entity
 */
class Address
{
    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESSID", type="string", length=12, nullable=false)
     */
    private $addressid;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=false)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=64, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=64, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS1", type="string", length=64, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS2", type="string", length=64, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="CITY", type="string", length=32, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="STATE", type="string", length=32, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTALCODE", type="string", length=24, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTY", type="string", length=32, nullable=true)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="COUNTRY", type="string", length=32, nullable=true)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISPRIMARY", type="integer", nullable=true)
     */
    private $isprimary;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISMAILING", type="integer", nullable=true)
     */
    private $ismailing;

    /**
     * @var string
     *
     * @ORM\Column(name="SALUTATION", type="string", length=64, nullable=true)
     */
    private $salutation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTING", type="string", length=64, nullable=true)
     */
    private $routing;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS3", type="string", length=256, nullable=true)
     */
    private $address3;

    /**
     * @var string
     *
     * @ORM\Column(name="ADDRESS4", type="string", length=64, nullable=true)
     */
    private $address4;

    /**
     * @var string
     *
     * @ORM\Column(name="TIMEZONE", type="string", length=64, nullable=true)
     */
    private $timezone;


}
