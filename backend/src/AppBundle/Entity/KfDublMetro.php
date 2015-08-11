<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDublMetro
 *
 * @ORM\Table(name="kf_dubl_metro")
 * @ORM\Entity
 */
class KfDublMetro
{
    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus", type="string", length=255, nullable=true)
     */
    private $metroRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_metroid", type="string", length=12, nullable=true)
     */
    private $spkMetroid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnt", type="integer", nullable=true)
     */
    private $cnt;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_metroID", type="string", length=12, nullable=true)
     */
    private $parentMetroid;

    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus_new", type="string", length=255, nullable=true)
     */
    private $metroRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="metro_rus_old", type="string", length=255, nullable=true)
     */
    private $metroRusOld;



    /**
     * Set metroRus
     *
     * @param string $metroRus
     * @return KfDublMetro
     */
    public function setMetroRus($metroRus)
    {
        $this->metroRus = $metroRus;

        return $this;
    }

    /**
     * Get metroRus
     *
     * @return string 
     */
    public function getMetroRus()
    {
        return $this->metroRus;
    }

    /**
     * Set spkMetroid
     *
     * @param string $spkMetroid
     * @return KfDublMetro
     */
    public function setSpkMetroid($spkMetroid)
    {
        $this->spkMetroid = $spkMetroid;

        return $this;
    }

    /**
     * Get spkMetroid
     *
     * @return string 
     */
    public function getSpkMetroid()
    {
        return $this->spkMetroid;
    }

    /**
     * Set cnt
     *
     * @param integer $cnt
     * @return KfDublMetro
     */
    public function setCnt($cnt)
    {
        $this->cnt = $cnt;

        return $this;
    }

    /**
     * Get cnt
     *
     * @return integer 
     */
    public function getCnt()
    {
        return $this->cnt;
    }

    /**
     * Set parentMetroid
     *
     * @param string $parentMetroid
     * @return KfDublMetro
     */
    public function setParentMetroid($parentMetroid)
    {
        $this->parentMetroid = $parentMetroid;

        return $this;
    }

    /**
     * Get parentMetroid
     *
     * @return string 
     */
    public function getParentMetroid()
    {
        return $this->parentMetroid;
    }

    /**
     * Set metroRusNew
     *
     * @param string $metroRusNew
     * @return KfDublMetro
     */
    public function setMetroRusNew($metroRusNew)
    {
        $this->metroRusNew = $metroRusNew;

        return $this;
    }

    /**
     * Get metroRusNew
     *
     * @return string 
     */
    public function getMetroRusNew()
    {
        return $this->metroRusNew;
    }

    /**
     * Set metroRusOld
     *
     * @param string $metroRusOld
     * @return KfDublMetro
     */
    public function setMetroRusOld($metroRusOld)
    {
        $this->metroRusOld = $metroRusOld;

        return $this;
    }

    /**
     * Get metroRusOld
     *
     * @return string 
     */
    public function getMetroRusOld()
    {
        return $this->metroRusOld;
    }
}
