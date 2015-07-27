<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkStreet
 *
 */
class SpkStreet
{
    /**
     * @var string
     *
     */
    private $spkStreetid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $streetNameRus;

    /**
     * @var string
     *
     */
    private $streetNameEng;

    /**
     * @var string
     *
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     */
    private $streetTypeEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $districtid;



    /**
     * Set spkStreetid
     *
     * @param string $spkStreetid
     * @return SpkStreet
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkStreet
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
     * @return SpkStreet
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
     * @return SpkStreet
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
     * @return SpkStreet
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
     * Set streetNameRus
     *
     * @param string $streetNameRus
     * @return SpkStreet
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
     * Set streetNameEng
     *
     * @param string $streetNameEng
     * @return SpkStreet
     */
    public function setStreetNameEng($streetNameEng)
    {
        $this->streetNameEng = $streetNameEng;

        return $this;
    }

    /**
     * Get streetNameEng
     *
     * @return string 
     */
    public function getStreetNameEng()
    {
        return $this->streetNameEng;
    }

    /**
     * Set streetTypeRus
     *
     * @param string $streetTypeRus
     * @return SpkStreet
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
     * Set streetTypeEng
     *
     * @param string $streetTypeEng
     * @return SpkStreet
     */
    public function setStreetTypeEng($streetTypeEng)
    {
        $this->streetTypeEng = $streetTypeEng;

        return $this;
    }

    /**
     * Get streetTypeEng
     *
     * @return string 
     */
    public function getStreetTypeEng()
    {
        return $this->streetTypeEng;
    }

    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkStreet
     */
    public function setSpkCityid($spkCityid)
    {
        $this->spkCityid = $spkCityid;

        return $this;
    }

    /**
     * Get spkCityid
     *
     * @return string 
     */
    public function getSpkCityid()
    {
        return $this->spkCityid;
    }

    /**
     * Set districtid
     *
     * @param string $districtid
     * @return SpkStreet
     */
    public function setDistrictid($districtid)
    {
        $this->districtid = $districtid;

        return $this;
    }

    /**
     * Get districtid
     *
     * @return string 
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }
}
