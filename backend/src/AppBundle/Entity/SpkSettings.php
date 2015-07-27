<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkSettings
 *
 */
class SpkSettings
{
    /**
     * @var string
     *
     */
    private $spkSettingsid;

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
    private $spkProperty;

    /**
     * @var string
     *
     */
    private $spkValue;



    /**
     * Set spkSettingsid
     *
     * @param string $spkSettingsid
     * @return SpkSettings
     */
    public function setSpkSettingsid($spkSettingsid)
    {
        $this->spkSettingsid = $spkSettingsid;

        return $this;
    }

    /**
     * Get spkSettingsid
     *
     * @return string 
     */
    public function getSpkSettingsid()
    {
        return $this->spkSettingsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkSettings
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
     * @return SpkSettings
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
     * @return SpkSettings
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
     * @return SpkSettings
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
     * Set spkProperty
     *
     * @param string $spkProperty
     * @return SpkSettings
     */
    public function setSpkProperty($spkProperty)
    {
        $this->spkProperty = $spkProperty;

        return $this;
    }

    /**
     * Get spkProperty
     *
     * @return string 
     */
    public function getSpkProperty()
    {
        return $this->spkProperty;
    }

    /**
     * Set spkValue
     *
     * @param string $spkValue
     * @return SpkSettings
     */
    public function setSpkValue($spkValue)
    {
        $this->spkValue = $spkValue;

        return $this;
    }

    /**
     * Get spkValue
     *
     * @return string 
     */
    public function getSpkValue()
    {
        return $this->spkValue;
    }
}
