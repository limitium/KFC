<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqObjects
 *
 */
class SpkReqObjects
{
    /**
     * @var string
     *
     */
    private $spkReqObjectsid;

    /**
     * @var string
     *
     */
    private $spkReqRequirementsid;

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
     * Set spkReqObjectsid
     *
     * @param string $spkReqObjectsid
     * @return SpkReqObjects
     */
    public function setSpkReqObjectsid($spkReqObjectsid)
    {
        $this->spkReqObjectsid = $spkReqObjectsid;

        return $this;
    }

    /**
     * Get spkReqObjectsid
     *
     * @return string 
     */
    public function getSpkReqObjectsid()
    {
        return $this->spkReqObjectsid;
    }

    /**
     * Set spkReqRequirementsid
     *
     * @param string $spkReqRequirementsid
     * @return SpkReqObjects
     */
    public function setSpkReqRequirementsid($spkReqRequirementsid)
    {
        $this->spkReqRequirementsid = $spkReqRequirementsid;

        return $this;
    }

    /**
     * Get spkReqRequirementsid
     *
     * @return string 
     */
    public function getSpkReqRequirementsid()
    {
        return $this->spkReqRequirementsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkReqObjects
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
     * @return SpkReqObjects
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
     * @return SpkReqObjects
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
     * @return SpkReqObjects
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
     * @return SpkReqObjects
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
