<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkArea
 *
 */
class SpkArea
{
    /**
     * @var string
     *
     */
    private $spkAreaid;

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
    private $areaRus;

    /**
     * @var string
     *
     */
    private $areaEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var integer
     *
     */
    private $resOrd;

    /**
     * @var integer
     *
     */
    private $intareaid;



    /**
     * Set spkAreaid
     *
     * @param string $spkAreaid
     * @return SpkArea
     */
    public function setSpkAreaid($spkAreaid)
    {
        $this->spkAreaid = $spkAreaid;

        return $this;
    }

    /**
     * Get spkAreaid
     *
     * @return string 
     */
    public function getSpkAreaid()
    {
        return $this->spkAreaid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkArea
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
     * @return SpkArea
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
     * @return SpkArea
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
     * @return SpkArea
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
     * Set areaRus
     *
     * @param string $areaRus
     * @return SpkArea
     */
    public function setAreaRus($areaRus)
    {
        $this->areaRus = $areaRus;

        return $this;
    }

    /**
     * Get areaRus
     *
     * @return string 
     */
    public function getAreaRus()
    {
        return $this->areaRus;
    }

    /**
     * Set areaEng
     *
     * @param string $areaEng
     * @return SpkArea
     */
    public function setAreaEng($areaEng)
    {
        $this->areaEng = $areaEng;

        return $this;
    }

    /**
     * Get areaEng
     *
     * @return string 
     */
    public function getAreaEng()
    {
        return $this->areaEng;
    }

    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkArea
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
     * Set resOrd
     *
     * @param integer $resOrd
     * @return SpkArea
     */
    public function setResOrd($resOrd)
    {
        $this->resOrd = $resOrd;

        return $this;
    }

    /**
     * Get resOrd
     *
     * @return integer 
     */
    public function getResOrd()
    {
        return $this->resOrd;
    }

    /**
     * Set intareaid
     *
     * @param integer $intareaid
     * @return SpkArea
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
