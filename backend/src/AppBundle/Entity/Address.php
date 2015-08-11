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



    /**
     * Set addressid
     *
     * @param string $addressid
     * @return Address
     */
    public function setAddressid($addressid)
    {
        $this->addressid = $addressid;

        return $this;
    }

    /**
     * Get addressid
     *
     * @return string 
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * Set entityid
     *
     * @param string $entityid
     * @return Address
     */
    public function setEntityid($entityid)
    {
        $this->entityid = $entityid;

        return $this;
    }

    /**
     * Get entityid
     *
     * @return string 
     */
    public function getEntityid()
    {
        return $this->entityid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Address
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Address
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Address
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return Address
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set isprimary
     *
     * @param integer $isprimary
     * @return Address
     */
    public function setIsprimary($isprimary)
    {
        $this->isprimary = $isprimary;

        return $this;
    }

    /**
     * Get isprimary
     *
     * @return integer 
     */
    public function getIsprimary()
    {
        return $this->isprimary;
    }

    /**
     * Set ismailing
     *
     * @param integer $ismailing
     * @return Address
     */
    public function setIsmailing($ismailing)
    {
        $this->ismailing = $ismailing;

        return $this;
    }

    /**
     * Get ismailing
     *
     * @return integer 
     */
    public function getIsmailing()
    {
        return $this->ismailing;
    }

    /**
     * Set salutation
     *
     * @param string $salutation
     * @return Address
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return string 
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Address
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Address
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Address
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Address
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set routing
     *
     * @param string $routing
     * @return Address
     */
    public function setRouting($routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Get routing
     *
     * @return string 
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Set address3
     *
     * @param string $address3
     * @return Address
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get address3
     *
     * @return string 
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set address4
     *
     * @param string $address4
     * @return Address
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;

        return $this;
    }

    /**
     * Get address4
     *
     * @return string 
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return Address
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
}
