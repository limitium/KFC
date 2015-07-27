<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkParameters
 *
 */
class SpkParameters
{
    /**
     * @var string
     *
     */
    private $spkParametersid;

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
    private $parameterid;

    /**
     * @var string
     *
     */
    private $parameterType;

    /**
     * @var string
     *
     */
    private $isexist;

    /**
     * @var string
     *
     */
    private $isunknown;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $operatorName;



    /**
     * Set spkParametersid
     *
     * @param string $spkParametersid
     * @return SpkParameters
     */
    public function setSpkParametersid($spkParametersid)
    {
        $this->spkParametersid = $spkParametersid;

        return $this;
    }

    /**
     * Get spkParametersid
     *
     * @return string 
     */
    public function getSpkParametersid()
    {
        return $this->spkParametersid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkParameters
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
     * @return SpkParameters
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
     * @return SpkParameters
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
     * @return SpkParameters
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
     * @return SpkParameters
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
     * Set parameterid
     *
     * @param string $parameterid
     * @return SpkParameters
     */
    public function setParameterid($parameterid)
    {
        $this->parameterid = $parameterid;

        return $this;
    }

    /**
     * Get parameterid
     *
     * @return string 
     */
    public function getParameterid()
    {
        return $this->parameterid;
    }

    /**
     * Set parameterType
     *
     * @param string $parameterType
     * @return SpkParameters
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
     * Set isexist
     *
     * @param string $isexist
     * @return SpkParameters
     */
    public function setIsexist($isexist)
    {
        $this->isexist = $isexist;

        return $this;
    }

    /**
     * Get isexist
     *
     * @return string 
     */
    public function getIsexist()
    {
        return $this->isexist;
    }

    /**
     * Set isunknown
     *
     * @param string $isunknown
     * @return SpkParameters
     */
    public function setIsunknown($isunknown)
    {
        $this->isunknown = $isunknown;

        return $this;
    }

    /**
     * Get isunknown
     *
     * @return string 
     */
    public function getIsunknown()
    {
        return $this->isunknown;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkParameters
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set operatorName
     *
     * @param string $operatorName
     * @return SpkParameters
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;

        return $this;
    }

    /**
     * Get operatorName
     *
     * @return string 
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }
}
