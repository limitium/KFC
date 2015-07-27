<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqObjHigh
 *
 */
class SpkOppReqObjHigh
{
    /**
     * @var string
     *
     */
    private $spkOppReqObjHighid;

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
    private $highwayid;



    /**
     * Set spkOppReqObjHighid
     *
     * @param string $spkOppReqObjHighid
     * @return SpkOppReqObjHigh
     */
    public function setSpkOppReqObjHighid($spkOppReqObjHighid)
    {
        $this->spkOppReqObjHighid = $spkOppReqObjHighid;

        return $this;
    }

    /**
     * Get spkOppReqObjHighid
     *
     * @return string 
     */
    public function getSpkOppReqObjHighid()
    {
        return $this->spkOppReqObjHighid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppReqObjHigh
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
     * @return SpkOppReqObjHigh
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
     * @return SpkOppReqObjHigh
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
     * @return SpkOppReqObjHigh
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
     * @return SpkOppReqObjHigh
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
     * Set highwayid
     *
     * @param string $highwayid
     * @return SpkOppReqObjHigh
     */
    public function setHighwayid($highwayid)
    {
        $this->highwayid = $highwayid;

        return $this;
    }

    /**
     * Get highwayid
     *
     * @return string 
     */
    public function getHighwayid()
    {
        return $this->highwayid;
    }
}
