<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLogStreets
 *
 * @ORM\Table(name="kf_log_streets")
 * @ORM\Entity
 */
class KfLogStreets
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid_old", type="string", length=12, nullable=true)
     */
    private $spkStreetidOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid_new", type="string", length=12, nullable=true)
     */
    private $spkStreetidNew;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Dat", type="datetime", nullable=true)
     */
    private $dat;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_old", type="string", length=255, nullable=true)
     */
    private $streetNameRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_new", type="string", length=255, nullable=true)
     */
    private $streetNameRusNew;



    /**
     * Set spkStreetidOld
     *
     * @param string $spkStreetidOld
     * @return KfLogStreets
     */
    public function setSpkStreetidOld($spkStreetidOld)
    {
        $this->spkStreetidOld = $spkStreetidOld;

        return $this;
    }

    /**
     * Get spkStreetidOld
     *
     * @return string 
     */
    public function getSpkStreetidOld()
    {
        return $this->spkStreetidOld;
    }

    /**
     * Set spkStreetidNew
     *
     * @param string $spkStreetidNew
     * @return KfLogStreets
     */
    public function setSpkStreetidNew($spkStreetidNew)
    {
        $this->spkStreetidNew = $spkStreetidNew;

        return $this;
    }

    /**
     * Get spkStreetidNew
     *
     * @return string 
     */
    public function getSpkStreetidNew()
    {
        return $this->spkStreetidNew;
    }

    /**
     * Set dat
     *
     * @param \DateTime $dat
     * @return KfLogStreets
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
     * Set streetNameRusOld
     *
     * @param string $streetNameRusOld
     * @return KfLogStreets
     */
    public function setStreetNameRusOld($streetNameRusOld)
    {
        $this->streetNameRusOld = $streetNameRusOld;

        return $this;
    }

    /**
     * Get streetNameRusOld
     *
     * @return string 
     */
    public function getStreetNameRusOld()
    {
        return $this->streetNameRusOld;
    }

    /**
     * Set streetNameRusNew
     *
     * @param string $streetNameRusNew
     * @return KfLogStreets
     */
    public function setStreetNameRusNew($streetNameRusNew)
    {
        $this->streetNameRusNew = $streetNameRusNew;

        return $this;
    }

    /**
     * Get streetNameRusNew
     *
     * @return string 
     */
    public function getStreetNameRusNew()
    {
        return $this->streetNameRusNew;
    }
}
