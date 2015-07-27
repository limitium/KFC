<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkDistrict
 *
 */
class SpkDistrict
{
    /**
     * @var string
     *
     */
    private $spkDistrictid;

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
    private $districtRus;

    /**
     * @var string
     *
     */
    private $districtEng;

    /**
     * @var string
     *
     */
    private $spkCityid;

    /**
     * @var string
     *
     */
    private $shortDistrictRus;

    /**
     * @var integer
     *
     */
    private $intareaid;



    /**
     * Set spkDistrictid
     *
     * @param string $spkDistrictid
     * @return SpkDistrict
     */
    public function setSpkDistrictid($spkDistrictid)
    {
        $this->spkDistrictid = $spkDistrictid;

        return $this;
    }

    /**
     * Get spkDistrictid
     *
     * @return string 
     */
    public function getSpkDistrictid()
    {
        return $this->spkDistrictid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkDistrict
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
     * @return SpkDistrict
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
     * @return SpkDistrict
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
     * @return SpkDistrict
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
     * Set districtRus
     *
     * @param string $districtRus
     * @return SpkDistrict
     */
    public function setDistrictRus($districtRus)
    {
        $this->districtRus = $districtRus;

        return $this;
    }

    /**
     * Get districtRus
     *
     * @return string 
     */
    public function getDistrictRus()
    {
        return $this->districtRus;
    }

    /**
     * Set districtEng
     *
     * @param string $districtEng
     * @return SpkDistrict
     */
    public function setDistrictEng($districtEng)
    {
        $this->districtEng = $districtEng;

        return $this;
    }

    /**
     * Get districtEng
     *
     * @return string 
     */
    public function getDistrictEng()
    {
        return $this->districtEng;
    }

    /**
     * Set spkCityid
     *
     * @param string $spkCityid
     * @return SpkDistrict
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
     * Set shortDistrictRus
     *
     * @param string $shortDistrictRus
     * @return SpkDistrict
     */
    public function setShortDistrictRus($shortDistrictRus)
    {
        $this->shortDistrictRus = $shortDistrictRus;

        return $this;
    }

    /**
     * Get shortDistrictRus
     *
     * @return string 
     */
    public function getShortDistrictRus()
    {
        return $this->shortDistrictRus;
    }

    /**
     * Set intareaid
     *
     * @param integer $intareaid
     * @return SpkDistrict
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
