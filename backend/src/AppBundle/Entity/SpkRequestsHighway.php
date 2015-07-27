<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsHighway
 *
 */
class SpkRequestsHighway
{
    /**
     * @var string
     *
     */
    private $spkRequestsHighwayid;

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
    private $highwayid;



    /**
     * Set spkRequestsHighwayid
     *
     * @param string $spkRequestsHighwayid
     * @return SpkRequestsHighway
     */
    public function setSpkRequestsHighwayid($spkRequestsHighwayid)
    {
        $this->spkRequestsHighwayid = $spkRequestsHighwayid;

        return $this;
    }

    /**
     * Get spkRequestsHighwayid
     *
     * @return string 
     */
    public function getSpkRequestsHighwayid()
    {
        return $this->spkRequestsHighwayid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkRequestsHighway
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
     * @return SpkRequestsHighway
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
     * @return SpkRequestsHighway
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
     * @return SpkRequestsHighway
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
     * @return SpkRequestsHighway
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
     * @return SpkRequestsHighway
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
