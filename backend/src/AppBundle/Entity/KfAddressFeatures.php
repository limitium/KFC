<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAddressFeatures
 *
 * @ORM\Table(name="KF_ADDRESS_FEATURES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ADDRESS_FEATURES_PRIMARY", columns={"ADDRESSID"})})
 * @ORM\Entity
 */
class KfAddressFeatures
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
     * @ORM\Column(name="ADDRESS_FEATURES", type="string", length=1024, nullable=true)
     */
    private $addressFeatures;



    /**
     * Set addressid
     *
     * @param string $addressid
     * @return KfAddressFeatures
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfAddressFeatures
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfAddressFeatures
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfAddressFeatures
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
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfAddressFeatures
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
     * Set addressFeatures
     *
     * @param string $addressFeatures
     * @return KfAddressFeatures
     */
    public function setAddressFeatures($addressFeatures)
    {
        $this->addressFeatures = $addressFeatures;

        return $this;
    }

    /**
     * Get addressFeatures
     *
     * @return string 
     */
    public function getAddressFeatures()
    {
        return $this->addressFeatures;
    }
}
