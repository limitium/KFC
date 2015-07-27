<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsObjects
 *
 */
class SpkRequestsObjects
{
    /**
     * @var string
     *
     */
    private $spkRequestsObjectsid;

    /**
     * @var string
     *
     */
    private $spkRequestsid;

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
    private $objectid;



    /**
     * Set spkRequestsObjectsid
     *
     * @param string $spkRequestsObjectsid
     * @return SpkRequestsObjects
     */
    public function setSpkRequestsObjectsid($spkRequestsObjectsid)
    {
        $this->spkRequestsObjectsid = $spkRequestsObjectsid;

        return $this;
    }

    /**
     * Get spkRequestsObjectsid
     *
     * @return string 
     */
    public function getSpkRequestsObjectsid()
    {
        return $this->spkRequestsObjectsid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkRequestsObjects
     */
    public function setSpkRequestsid($spkRequestsid)
    {
        $this->spkRequestsid = $spkRequestsid;

        return $this;
    }

    /**
     * Get spkRequestsid
     *
     * @return string 
     */
    public function getSpkRequestsid()
    {
        return $this->spkRequestsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkRequestsObjects
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
     * @return SpkRequestsObjects
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
     * @return SpkRequestsObjects
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
     * @return SpkRequestsObjects
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
     * Set objectid
     *
     * @param string $objectid
     * @return SpkRequestsObjects
     */
    public function setObjectid($objectid)
    {
        $this->objectid = $objectid;

        return $this;
    }

    /**
     * Get objectid
     *
     * @return string 
     */
    public function getObjectid()
    {
        return $this->objectid;
    }
}
