<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCity
 *
 */
class SpkCity
{
    /**
     * @var string
     *
     */
    private $spkCityid;

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
    private $cityRus;

    /**
     * @var string
     *
     */
    private $cityEng;

    /**
     * @var integer
     *
     */
    private $cityLang;

    /**
     * @var integer
     *
     */
    private $cityRegion;

    /**
     * @var integer
     *
     */
    private $intareaid;



    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkCity
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkCity
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
     * @return SpkCity
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
     * @return SpkCity
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
     * @return SpkCity
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
     * Set cityRus
     *
     * @param string $cityRus
     * @return SpkCity
     */
    public function setCityRus($cityRus)
    {
        $this->cityRus = $cityRus;

        return $this;
    }

    /**
     * Get cityRus
     *
     * @return string 
     */
    public function getCityRus()
    {
        return $this->cityRus;
    }

    /**
     * Set cityEng
     *
     * @param string $cityEng
     * @return SpkCity
     */
    public function setCityEng($cityEng)
    {
        $this->cityEng = $cityEng;

        return $this;
    }

    /**
     * Get cityEng
     *
     * @return string 
     */
    public function getCityEng()
    {
        return $this->cityEng;
    }

    /**
     * Set cityLang
     *
     * @param integer $cityLang
     * @return SpkCity
     */
    public function setCityLang($cityLang)
    {
        $this->cityLang = $cityLang;

        return $this;
    }

    /**
     * Get cityLang
     *
     * @return integer 
     */
    public function getCityLang()
    {
        return $this->cityLang;
    }

    /**
     * Set cityRegion
     *
     * @param integer $cityRegion
     * @return SpkCity
     */
    public function setCityRegion($cityRegion)
    {
        $this->cityRegion = $cityRegion;

        return $this;
    }

    /**
     * Get cityRegion
     *
     * @return integer 
     */
    public function getCityRegion()
    {
        return $this->cityRegion;
    }

    /**
     * Set intareaid
     *
     * @param integer $intareaid
     * @return SpkCity
     */
    public function setIntareaid($intareaid)
    {
        $this->intareaid = $intareaid;

        return $this;
    }

    /**
     * Get intareaid
     *
     * @return integer 
     */
    public function getIntareaid()
    {
        return $this->intareaid;
    }
}
