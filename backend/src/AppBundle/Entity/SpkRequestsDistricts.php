<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsDistricts
 *
 */
class SpkRequestsDistricts
{
    /**
     * @var string
     *
     */
    private $spkRequestsDistrictsid;

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
    private $spkDistrictid;



    /**
     * Set spkRequestsDistrictsid
     *
     * @param string $spkRequestsDistrictsid
     * @return SpkRequestsDistricts
     */
    public function setSpkRequestsDistrictsid($spkRequestsDistrictsid)
    {
        $this->spkRequestsDistrictsid = $spkRequestsDistrictsid;

        return $this;
    }

    /**
     * Get spkRequestsDistrictsid
     *
     * @return string 
     */
    public function getSpkRequestsDistrictsid()
    {
        return $this->spkRequestsDistrictsid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkRequestsDistricts
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
     * @return SpkRequestsDistricts
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
     * @return SpkRequestsDistricts
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
     * @return SpkRequestsDistricts
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
     * @return SpkRequestsDistricts
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
     * Set spkDistrictid
     *
     * @param string $spkDistrictid
     * @return SpkRequestsDistricts
     */
    public function setSpkDistrictid($spkDistrictid)
    {
        $this->spkDistrictid = $spkDistrictid;

        return $this;
    }

    /**
     * Get spkDistrictid
     *
     * @return string 
     */
    public function getSpkDistrictid()
    {
        return $this->spkDistrictid;
    }
}
