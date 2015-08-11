<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfConnectorRemove
 *
 * @ORM\Table(name="kf_connector_remove")
 * @ORM\Entity
 */
class KfConnectorRemove
{
    /**
     * @var integer
     *
     * @ORM\Column(name="KF_CONNECTORID", type="bigint", nullable=false)
     */
    private $kfConnectorid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=20, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IS_HANDLE", type="smallint", nullable=false)
     */
    private $isHandle;



    /**
     * Set kfConnectorid
     *
     * @param integer $kfConnectorid
     * @return KfConnectorRemove
     */
    public function setKfConnectorid($kfConnectorid)
    {
        $this->kfConnectorid = $kfConnectorid;

        return $this;
    }

    /**
     * Get kfConnectorid
     *
     * @return integer 
     */
    public function getKfConnectorid()
    {
        return $this->kfConnectorid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfConnectorRemove
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfConnectorRemove
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
     * Set isHandle
     *
     * @param integer $isHandle
     * @return KfConnectorRemove
     */
    public function setIsHandle($isHandle)
    {
        $this->isHandle = $isHandle;

        return $this;
    }

    /**
     * Get isHandle
     *
     * @return integer 
     */
    public function getIsHandle()
    {
        return $this->isHandle;
    }
}
