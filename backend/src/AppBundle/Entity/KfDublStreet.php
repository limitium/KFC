<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDublStreet
 *
 * @ORM\Table(name="kf_dubl_street")
 * @ORM\Entity
 */
class KfDublStreet
{
    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus", type="string", length=255, nullable=true)
     */
    private $streetNameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="street_type_rus", type="string", length=255, nullable=true)
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_streetid", type="string", length=12, nullable=true)
     */
    private $spkStreetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gisid", type="integer", nullable=true)
     */
    private $gisid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnt", type="integer", nullable=true)
     */
    private $cnt;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_streetID", type="string", length=12, nullable=true)
     */
    private $parentStreetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="igisid", type="integer", nullable=true)
     */
    private $igisid;

    /**
     * @var integer
     *
     * @ORM\Column(name="icnt", type="integer", nullable=true)
     */
    private $icnt;

    /**
     * @var string
     *
     * @ORM\Column(name="iparentid", type="string", length=12, nullable=true)
     */
    private $iparentid;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_new", type="string", length=255, nullable=true)
     */
    private $streetNameRusNew;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name_rus_old", type="string", length=255, nullable=true)
     */
    private $streetNameRusOld;

    /**
     * @var string
     *
     * @ORM\Column(name="spk_street_rus_normalised", type="string", length=255, nullable=true)
     */
    private $spkStreetRusNormalised;



    /**
     * Set streetNameRus
     *
     * @param string $streetNameRus
     * @return KfDublStreet
     */
    public function setStreetNameRus($streetNameRus)
    {
        $this->streetNameRus = $streetNameRus;

        return $this;
    }

    /**
     * Get streetNameRus
     *
     * @return string 
     */
    public function getStreetNameRus()
    {
        return $this->streetNameRus;
    }

    /**
     * Set streetTypeRus
     *
     * @param string $streetTypeRus
     * @return KfDublStreet
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
     * Set spkStreetid
     *
     * @param string $spkStreetid
     * @return KfDublStreet
     */
    public function setSpkStreetid($spkStreetid)
    {
        $this->spkStreetid = $spkStreetid;

        return $this;
    }

    /**
     * Get spkStreetid
     *
     * @return string 
     */
    public function getSpkStreetid()
    {
        return $this->spkStreetid;
    }

    /**
     * Set gisid
     *
     * @param integer $gisid
     * @return KfDublStreet
     */
    public function setGisid($gisid)
    {
        $this->gisid = $gisid;

        return $this;
    }

    /**
     * Get gisid
     *
     * @return integer 
     */
    public function getGisid()
    {
        return $this->gisid;
    }

    /**
     * Set cnt
     *
     * @param integer $cnt
     * @return KfDublStreet
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
     * Set parentStreetid
     *
     * @param string $parentStreetid
     * @return KfDublStreet
     */
    public function setParentStreetid($parentStreetid)
    {
        $this->parentStreetid = $parentStreetid;

        return $this;
    }

    /**
     * Get parentStreetid
     *
     * @return string 
     */
    public function getParentStreetid()
    {
        return $this->parentStreetid;
    }

    /**
     * Set igisid
     *
     * @param integer $igisid
     * @return KfDublStreet
     */
    public function setIgisid($igisid)
    {
        $this->igisid = $igisid;

        return $this;
    }

    /**
     * Get igisid
     *
     * @return integer 
     */
    public function getIgisid()
    {
        return $this->igisid;
    }

    /**
     * Set icnt
     *
     * @param integer $icnt
     * @return KfDublStreet
     */
    public function setIcnt($icnt)
    {
        $this->icnt = $icnt;

        return $this;
    }

    /**
     * Get icnt
     *
     * @return integer 
     */
    public function getIcnt()
    {
        return $this->icnt;
    }

    /**
     * Set iparentid
     *
     * @param string $iparentid
     * @return KfDublStreet
     */
    public function setIparentid($iparentid)
    {
        $this->iparentid = $iparentid;

        return $this;
    }

    /**
     * Get iparentid
     *
     * @return string 
     */
    public function getIparentid()
    {
        return $this->iparentid;
    }

    /**
     * Set streetNameRusNew
     *
     * @param string $streetNameRusNew
     * @return KfDublStreet
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

    /**
     * Set streetNameRusOld
     *
     * @param string $streetNameRusOld
     * @return KfDublStreet
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
     * Set spkStreetRusNormalised
     *
     * @param string $spkStreetRusNormalised
     * @return KfDublStreet
     */
    public function setSpkStreetRusNormalised($spkStreetRusNormalised)
    {
        $this->spkStreetRusNormalised = $spkStreetRusNormalised;

        return $this;
    }

    /**
     * Get spkStreetRusNormalised
     *
     * @return string 
     */
    public function getSpkStreetRusNormalised()
    {
        return $this->spkStreetRusNormalised;
    }
}
