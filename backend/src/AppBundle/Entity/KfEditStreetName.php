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



    /**
     * Set spkStreetRus
     *
     * @param string $spkStreetRus
     * @return KfEditStreetName
     */
    public function setSpkStreetRus($spkStreetRus)
    {
        $this->spkStreetRus = $spkStreetRus;

        return $this;
    }

    /**
     * Get spkStreetRus
     *
     * @return string 
     */
    public function getSpkStreetRus()
    {
        return $this->spkStreetRus;
    }

    /**
     * Set spkStreetRusUpd
     *
     * @param string $spkStreetRusUpd
     * @return KfEditStreetName
     */
    public function setSpkStreetRusUpd($spkStreetRusUpd)
    {
        $this->spkStreetRusUpd = $spkStreetRusUpd;

        return $this;
    }

    /**
     * Get spkStreetRusUpd
     *
     * @return string 
     */
    public function getSpkStreetRusUpd()
    {
        return $this->spkStreetRusUpd;
    }

    /**
     * Set stkStreetid
     *
     * @param string $stkStreetid
     * @return KfEditStreetName
     */
    public function setStkStreetid($stkStreetid)
    {
        $this->stkStreetid = $stkStreetid;

        return $this;
    }

    /**
     * Get stkStreetid
     *
     * @return string 
     */
    public function getStkStreetid()
    {
        return $this->stkStreetid;
    }

    /**
     * Set streetTypeRus
     *
     * @param string $streetTypeRus
     * @return KfEditStreetName
     */
    public function setStreetTypeRus($streetTypeRus)
    {
        $this->streetTypeRus = $streetTypeRus;

        return $this;
    }

    /**
     * Get streetTypeRus
     *
     * @return string 
     */
    public function getStreetTypeRus()
    {
        return $this->streetTypeRus;
    }

    /**
     * Set gen
     *
     * @param integer $gen
     * @return KfEditStreetName
     */
    public function setGen($gen)
    {
        $this->gen = $gen;

        return $this;
    }

    /**
     * Get gen
     *
     * @return integer 
     */
    public function getGen()
    {
        return $this->gen;
    }
}
