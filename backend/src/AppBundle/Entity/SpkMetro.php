<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkMetro
 *
 */
class SpkMetro
{
    /**
     * @var string
     *
     */
    private $spkMetroid;

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
    private $metroRus;

    /**
     * @var string
     *
     */
    private $metroEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $cianNumber;



    /**
     * Set spkMetroid
     *
     * @param string $spkMetroid
     * @return SpkMetro
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
     * Set createuser
     *
     * @param string $createuser
     * @return SpkMetro
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
     * @return SpkMetro
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
     * @return SpkMetro
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
     * @return SpkMetro
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
     * Set metroRus
     *
     * @param string $metroRus
     * @return SpkMetro
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
     * Set metroEng
     *
     * @param string $metroEng
     * @return SpkMetro
     */
    public function setMetroEng($metroEng)
    {
        $this->metroEng = $metroEng;

        return $this;
    }

    /**
     * Get metroEng
     *
     * @return string 
     */
    public function getMetroEng()
    {
        return $this->metroEng;
    }

    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkMetro
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
     * Set cianNumber
     *
     * @param string $cianNumber
     * @return SpkMetro
     */
    public function setCianNumber($cianNumber)
    {
        $this->cianNumber = $cianNumber;

        return $this;
    }

    /**
     * Get cianNumber
     *
     * @return string 
     */
    public function getCianNumber()
    {
        return $this->cianNumber;
    }
}
