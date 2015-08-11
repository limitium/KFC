<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffCmpTech
 *
 * @ORM\Table(name="KF_OFF_CMP_TECH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_CMP_TECH_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfOffCmpTech
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="RINGS", type="string", length=128, nullable=true)
     */
    private $rings;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLASS", type="string", length=32, nullable=true)
     */
    private $kfClass;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_DISTRICT", type="string", length=64, nullable=true)
     */
    private $kfDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_TYPE", type="string", length=128, nullable=true)
     */
    private $complexType;

    /**
     * @var float
     *
     * @ORM\Column(name="LAND_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $landArea;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFICE_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $officeArea;

    /**
     * @var float
     *
     * @ORM\Column(name="INDUSTRIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $industrialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="RETAIL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $retailArea;

    /**
     * @var float
     *
     * @ORM\Column(name="RESIDENTIAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $residentialArea;

    /**
     * @var float
     *
     * @ORM\Column(name="HOTEL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $hotelArea;

    /**
     * @var float
     *
     * @ORM\Column(name="MIN_BLOCK_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $minBlockArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETION_QUATER", type="smallint", nullable=true)
     */
    private $completionQuater;

    /**
     * @var integer
     *
     * @ORM\Column(name="COMPLETION_YEAR", type="smallint", nullable=true)
     */
    private $completionYear;

    /**
     * @var float
     *
     * @ORM\Column(name="STEP_ACCESSIBILITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $stepAccessibility;

    /**
     * @var float
     *
     * @ORM\Column(name="TOTAL_AREA", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalArea;

    /**
     * @var string
     *
     * @ORM\Column(name="MREF_CLASS", type="string", length=32, nullable=true)
     */
    private $mrefClass;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfOffCmpTech
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfOffCmpTech
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
     * @return KfOffCmpTech
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
     * @return KfOffCmpTech
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
     * @return KfOffCmpTech
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfOffCmpTech
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set rings
     *
     * @param string $rings
     * @return KfOffCmpTech
     */
    public function setRings($rings)
    {
        $this->rings = $rings;

        return $this;
    }

    /**
     * Get rings
     *
     * @return string 
     */
    public function getRings()
    {
        return $this->rings;
    }

    /**
     * Set kfClass
     *
     * @param string $kfClass
     * @return KfOffCmpTech
     */
    public function setKfClass($kfClass)
    {
        $this->kfClass = $kfClass;

        return $this;
    }

    /**
     * Get kfClass
     *
     * @return string 
     */
    public function getKfClass()
    {
        return $this->kfClass;
    }

    /**
     * Set kfDistrict
     *
     * @param string $kfDistrict
     * @return KfOffCmpTech
     */
    public function setKfDistrict($kfDistrict)
    {
        $this->kfDistrict = $kfDistrict;

        return $this;
    }

    /**
     * Get kfDistrict
     *
     * @return string 
     */
    public function getKfDistrict()
    {
        return $this->kfDistrict;
    }

    /**
     * Set complexType
     *
     * @param string $complexType
     * @return KfOffCmpTech
     */
    public function setComplexType($complexType)
    {
        $this->complexType = $complexType;

        return $this;
    }

    /**
     * Get complexType
     *
     * @return string 
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return KfOffCmpTech
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;

        return $this;
    }

    /**
     * Get landArea
     *
     * @return float 
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * Set officeArea
     *
     * @param float $officeArea
     * @return KfOffCmpTech
     */
    public function setOfficeArea($officeArea)
    {
        $this->officeArea = $officeArea;

        return $this;
    }

    /**
     * Get officeArea
     *
     * @return float 
     */
    public function getOfficeArea()
    {
        return $this->officeArea;
    }

    /**
     * Set industrialArea
     *
     * @param float $industrialArea
     * @return KfOffCmpTech
     */
    public function setIndustrialArea($industrialArea)
    {
        $this->industrialArea = $industrialArea;

        return $this;
    }

    /**
     * Get industrialArea
     *
     * @return float 
     */
    public function getIndustrialArea()
    {
        return $this->industrialArea;
    }

    /**
     * Set retailArea
     *
     * @param float $retailArea
     * @return KfOffCmpTech
     */
    public function setRetailArea($retailArea)
    {
        $this->retailArea = $retailArea;

        return $this;
    }

    /**
     * Get retailArea
     *
     * @return float 
     */
    public function getRetailArea()
    {
        return $this->retailArea;
    }

    /**
     * Set residentialArea
     *
     * @param float $residentialArea
     * @return KfOffCmpTech
     */
    public function setResidentialArea($residentialArea)
    {
        $this->residentialArea = $residentialArea;

        return $this;
    }

    /**
     * Get residentialArea
     *
     * @return float 
     */
    public function getResidentialArea()
    {
        return $this->residentialArea;
    }

    /**
     * Set hotelArea
     *
     * @param float $hotelArea
     * @return KfOffCmpTech
     */
    public function setHotelArea($hotelArea)
    {
        $this->hotelArea = $hotelArea;

        return $this;
    }

    /**
     * Get hotelArea
     *
     * @return float 
     */
    public function getHotelArea()
    {
        return $this->hotelArea;
    }

    /**
     * Set minBlockArea
     *
     * @param float $minBlockArea
     * @return KfOffCmpTech
     */
    public function setMinBlockArea($minBlockArea)
    {
        $this->minBlockArea = $minBlockArea;

        return $this;
    }

    /**
     * Get minBlockArea
     *
     * @return float 
     */
    public function getMinBlockArea()
    {
        return $this->minBlockArea;
    }

    /**
     * Set completionQuater
     *
     * @param integer $completionQuater
     * @return KfOffCmpTech
     */
    public function setCompletionQuater($completionQuater)
    {
        $this->completionQuater = $completionQuater;

        return $this;
    }

    /**
     * Get completionQuater
     *
     * @return integer 
     */
    public function getCompletionQuater()
    {
        return $this->completionQuater;
    }

    /**
     * Set completionYear
     *
     * @param integer $completionYear
     * @return KfOffCmpTech
     */
    public function setCompletionYear($completionYear)
    {
        $this->completionYear = $completionYear;

        return $this;
    }

    /**
     * Get completionYear
     *
     * @return integer 
     */
    public function getCompletionYear()
    {
        return $this->completionYear;
    }

    /**
     * Set stepAccessibility
     *
     * @param float $stepAccessibility
     * @return KfOffCmpTech
     */
    public function setStepAccessibility($stepAccessibility)
    {
        $this->stepAccessibility = $stepAccessibility;

        return $this;
    }

    /**
     * Get stepAccessibility
     *
     * @return float 
     */
    public function getStepAccessibility()
    {
        return $this->stepAccessibility;
    }

    /**
     * Set totalArea
     *
     * @param float $totalArea
     * @return KfOffCmpTech
     */
    public function setTotalArea($totalArea)
    {
        $this->totalArea = $totalArea;

        return $this;
    }

    /**
     * Get totalArea
     *
     * @return float 
     */
    public function getTotalArea()
    {
        return $this->totalArea;
    }

    /**
     * Set mrefClass
     *
     * @param string $mrefClass
     * @return KfOffCmpTech
     */
    public function setMrefClass($mrefClass)
    {
        $this->mrefClass = $mrefClass;

        return $this;
    }

    /**
     * Get mrefClass
     *
     * @return string 
     */
    public function getMrefClass()
    {
        return $this->mrefClass;
    }
}
