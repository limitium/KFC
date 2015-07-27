<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRequestsMetro
 *
 */
class SpkRequestsMetro
{
    /**
     * @var string
     *
     */
    private $spkRequestsMetroid;

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
    private $spkMetroid;



    /**
     * Set spkRequestsMetroid
     *
     * @param string $spkRequestsMetroid
     * @return SpkRequestsMetro
     */
    public function setSpkRequestsMetroid($spkRequestsMetroid)
    {
        $this->spkRequestsMetroid = $spkRequestsMetroid;

        return $this;
    }

    /**
     * Get spkRequestsMetroid
     *
     * @return string 
     */
    public function getSpkRequestsMetroid()
    {
        return $this->spkRequestsMetroid;
    }

    /**
     * Set spkRequestsid
     *
     * @param string $spkRequestsid
     * @return SpkRequestsMetro
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
     * @return SpkRequestsMetro
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
     * @return SpkRequestsMetro
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
     * @return SpkRequestsMetro
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
     * @return SpkRequestsMetro
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
     * Set spkMetroid
     *
     * @param string $spkMetroid
     * @return SpkRequestsMetro
     */
    public function setSpkMetroid($spkMetroid)
    {
        $this->spkMetroid = $spkMetroid;

        return $this;
    }

    /**
     * Get spkMetroid
     *
     * @return string 
     */
    public function getSpkMetroid()
    {
        return $this->spkMetroid;
    }
}
