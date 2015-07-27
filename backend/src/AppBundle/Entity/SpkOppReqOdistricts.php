<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppReqOdistricts
 *
 */
class SpkOppReqOdistricts
{
    /**
     * @var string
     *
     */
    private $spkOppReqOdistrictsid;

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
    private $districtid;



    /**
     * Set spkOppReqOdistrictsid
     *
     * @param string $spkOppReqOdistrictsid
     * @return SpkOppReqOdistricts
     */
    public function setSpkOppReqOdistrictsid($spkOppReqOdistrictsid)
    {
        $this->spkOppReqOdistrictsid = $spkOppReqOdistrictsid;

        return $this;
    }

    /**
     * Get spkOppReqOdistrictsid
     *
     * @return string 
     */
    public function getSpkOppReqOdistrictsid()
    {
        return $this->spkOppReqOdistrictsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppReqOdistricts
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
     * @return SpkOppReqOdistricts
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
     * @return SpkOppReqOdistricts
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
     * @return SpkOppReqOdistricts
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
     * @return SpkOppReqOdistricts
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
     * Set districtid
     *
     * @param string $districtid
     * @return SpkOppReqOdistricts
     */
    public function setDistrictid($districtid)
    {
        $this->districtid = $districtid;

        return $this;
    }

    /**
     * Get districtid
     *
     * @return string 
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }
}
