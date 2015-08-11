<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMetroLog
 *
 * @ORM\Table(name="kf_metro_log")
 * @ORM\Entity
 */
class KfMetroLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid_old", type="string", length=12, nullable=true)
     */
    private $spkMetroidOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid_new", type="string", length=12, nullable=true)
     */
    private $spkMetroidNew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dat", type="datetime", nullable=true)
     */
    private $dat;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_ADDRESSID", type="string", length=12, nullable=true)
     */
    private $spkAddressid;



    /**
     * Set spkMetroidOld
     *
     * @param string $spkMetroidOld
     * @return KfMetroLog
     */
    public function setSpkMetroidOld($spkMetroidOld)
    {
        $this->spkMetroidOld = $spkMetroidOld;

        return $this;
    }

    /**
     * Get spkMetroidOld
     *
     * @return string 
     */
    public function getSpkMetroidOld()
    {
        return $this->spkMetroidOld;
    }

    /**
     * Set spkMetroidNew
     *
     * @param string $spkMetroidNew
     * @return KfMetroLog
     */
    public function setSpkMetroidNew($spkMetroidNew)
    {
        $this->spkMetroidNew = $spkMetroidNew;

        return $this;
    }

    /**
     * Get spkMetroidNew
     *
     * @return string 
     */
    public function getSpkMetroidNew()
    {
        return $this->spkMetroidNew;
    }

    /**
     * Set dat
     *
     * @param \DateTime $dat
     * @return KfMetroLog
     */
    public function setDat($dat)
    {
        $this->dat = $dat;

        return $this;
    }

    /**
     * Get dat
     *
     * @return \DateTime 
     */
    public function getDat()
    {
        return $this->dat;
    }

    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return KfMetroLog
     */
    public function setSpkAddressid($spkAddressid)
    {
        $this->spkAddressid = $spkAddressid;

        return $this;
    }

    /**
     * Get spkAddressid
     *
     * @return string 
     */
    public function getSpkAddressid()
    {
        return $this->spkAddressid;
    }
}
