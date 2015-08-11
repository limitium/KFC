<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfConnector
 *
 * @ORM\Table(name="KF_CONNECTOR")
 * @ORM\Entity
 */
class KfConnector
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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="OP_CODE", type="smallint", nullable=false)
     */
    private $opCode;



    /**
     * Set kfConnectorid
     *
     * @param integer $kfConnectorid
     * @return KfConnector
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
     * @return KfConnector
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
     * @return KfConnector
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
     * @return KfConnector
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

    /**
     * Set opCode
     *
     * @param integer $opCode
     * @return KfConnector
     */
    public function setOpCode($opCode)
    {
        $this->opCode = $opCode;

        return $this;
    }

    /**
     * Get opCode
     *
     * @return integer 
     */
    public function getOpCode()
    {
        return $this->opCode;
    }
}
