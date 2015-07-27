<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParametersManage
 *
 */
class SpkParametersManage
{
    /**
     * @var string
     *
     */
    private $spkParametersManageid;

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
    private $parameterType;

    /**
     * @var string
     *
     */
    private $parameterNameRus;

    /**
     * @var string
     *
     */
    private $parameterNameEng;

    /**
     * @var string
     *
     */
    private $residential;

    /**
     * @var string
     *
     */
    private $country;

    /**
     * @var string
     *
     */
    private $retail;

    /**
     * @var string
     *
     */
    private $office;

    /**
     * @var string
     *
     */
    private $industrial;

    /**
     * @var string
     *
     */
    private $parameterGroup;



    /**
     * Set spkParametersManageid
     *
     * @param string $spkParametersManageid
     * @return SpkParametersManage
     */
    public function setSpkParametersManageid($spkParametersManageid)
    {
        $this->spkParametersManageid = $spkParametersManageid;

        return $this;
    }

    /**
     * Get spkParametersManageid
     *
     * @return string 
     */
    public function getSpkParametersManageid()
    {
        return $this->spkParametersManageid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkParametersManage
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
     * @return SpkParametersManage
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
     * @return SpkParametersManage
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
     * @return SpkParametersManage
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
     * Set parameterType
     *
     * @param string $parameterType
     * @return SpkParametersManage
     */
    public function setParameterType($parameterType)
    {
        $this->parameterType = $parameterType;

        return $this;
    }

    /**
     * Get parameterType
     *
     * @return string 
     */
    public function getParameterType()
    {
        return $this->parameterType;
    }

    /**
     * Set parameterNameRus
     *
     * @param string $parameterNameRus
     * @return SpkParametersManage
     */
    public function setParameterNameRus($parameterNameRus)
    {
        $this->parameterNameRus = $parameterNameRus;

        return $this;
    }

    /**
     * Get parameterNameRus
     *
     * @return string 
     */
    public function getParameterNameRus()
    {
        return $this->parameterNameRus;
    }

    /**
     * Set parameterNameEng
     *
     * @param string $parameterNameEng
     * @return SpkParametersManage
     */
    public function setParameterNameEng($parameterNameEng)
    {
        $this->parameterNameEng = $parameterNameEng;

        return $this;
    }

    /**
     * Get parameterNameEng
     *
     * @return string 
     */
    public function getParameterNameEng()
    {
        return $this->parameterNameEng;
    }

    /**
     * Set residential
     *
     * @param string $residential
     * @return SpkParametersManage
     */
    public function setResidential($residential)
    {
        $this->residential = $residential;

        return $this;
    }

    /**
     * Get residential
     *
     * @return string 
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return SpkParametersManage
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set retail
     *
     * @param string $retail
     * @return SpkParametersManage
     */
    public function setRetail($retail)
    {
        $this->retail = $retail;

        return $this;
    }

    /**
     * Get retail
     *
     * @return string 
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * Set office
     *
     * @param string $office
     * @return SpkParametersManage
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return string 
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set industrial
     *
     * @param string $industrial
     * @return SpkParametersManage
     */
    public function setIndustrial($industrial)
    {
        $this->industrial = $industrial;

        return $this;
    }

    /**
     * Get industrial
     *
     * @return string 
     */
    public function getIndustrial()
    {
        return $this->industrial;
    }

    /**
     * Set parameterGroup
     *
     * @param string $parameterGroup
     * @return SpkParametersManage
     */
    public function setParameterGroup($parameterGroup)
    {
        $this->parameterGroup = $parameterGroup;

        return $this;
    }

    /**
     * Get parameterGroup
     *
     * @return string 
     */
    public function getParameterGroup()
    {
        return $this->parameterGroup;
    }
}
