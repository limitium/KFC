<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetEntertainment
 *
 */
class SpkRetEntertainment
{
    /**
     * @var string
     *
     */
    private $spkRetEntertainmentid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
    private $entertainmentType;

    /**
     * @var string
     *
     */
    private $parameterName;

    /**
     * @var string
     *
     */
    private $parameterValue;

    /**
     * @var string
     *
     */
    private $accountid;

    /**
     * @var integer
     *
     */
    private $entOrder;



    /**
     * Set spkRetEntertainmentid
     *
     * @param string $spkRetEntertainmentid
     * @return SpkRetEntertainment
     */
    public function setSpkRetEntertainmentid($spkRetEntertainmentid)
    {
        $this->spkRetEntertainmentid = $spkRetEntertainmentid;

        return $this;
    }

    /**
     * Get spkRetEntertainmentid
     *
     * @return string 
     */
    public function getSpkRetEntertainmentid()
    {
        return $this->spkRetEntertainmentid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetEntertainment
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
     * @return SpkRetEntertainment
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
     * @return SpkRetEntertainment
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
     * @return SpkRetEntertainment
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
     * @return SpkRetEntertainment
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
     * Set entertainmentType
     *
     * @param string $entertainmentType
     * @return SpkRetEntertainment
     */
    public function setEntertainmentType($entertainmentType)
    {
        $this->entertainmentType = $entertainmentType;

        return $this;
    }

    /**
     * Get entertainmentType
     *
     * @return string 
     */
    public function getEntertainmentType()
    {
        return $this->entertainmentType;
    }

    /**
     * Set parameterName
     *
     * @param string $parameterName
     * @return SpkRetEntertainment
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;

        return $this;
    }

    /**
     * Get parameterName
     *
     * @return string 
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * Set parameterValue
     *
     * @param string $parameterValue
     * @return SpkRetEntertainment
     */
    public function setParameterValue($parameterValue)
    {
        $this->parameterValue = $parameterValue;

        return $this;
    }

    /**
     * Get parameterValue
     *
     * @return string 
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     * @return SpkRetEntertainment
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set entOrder
     *
     * @param integer $entOrder
     * @return SpkRetEntertainment
     */
    public function setEntOrder($entOrder)
    {
        $this->entOrder = $entOrder;

        return $this;
    }

    /**
     * Get entOrder
     *
     * @return integer 
     */
    public function getEntOrder()
    {
        return $this->entOrder;
    }
}
