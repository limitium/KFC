<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppObjects
 *
 */
class SpkOppObjects
{
    /**
     * @var string
     *
     */
    private $spkOppObjectsid;

    /**
     * @var string
     *
     */
    private $opportunityid;

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
     * @var string
     *
     */
    private $inReport;

    /**
     * @var string
     *
     */
    private $inList;



    /**
     * Set spkOppObjectsid
     *
     * @param string $spkOppObjectsid
     * @return SpkOppObjects
     */
    public function setSpkOppObjectsid($spkOppObjectsid)
    {
        $this->spkOppObjectsid = $spkOppObjectsid;

        return $this;
    }

    /**
     * Get spkOppObjectsid
     *
     * @return string 
     */
    public function getSpkOppObjectsid()
    {
        return $this->spkOppObjectsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppObjects
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppObjects
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
     * @return SpkOppObjects
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
     * @return SpkOppObjects
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
     * @return SpkOppObjects
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
     * @return SpkOppObjects
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

    /**
     * Set inReport
     *
     * @param string $inReport
     * @return SpkOppObjects
     */
    public function setInReport($inReport)
    {
        $this->inReport = $inReport;

        return $this;
    }

    /**
     * Get inReport
     *
     * @return string 
     */
    public function getInReport()
    {
        return $this->inReport;
    }

    /**
     * Set inList
     *
     * @param string $inList
     * @return SpkOppObjects
     */
    public function setInList($inList)
    {
        $this->inList = $inList;

        return $this;
    }

    /**
     * Get inList
     *
     * @return string 
     */
    public function getInList()
    {
        return $this->inList;
    }
}
