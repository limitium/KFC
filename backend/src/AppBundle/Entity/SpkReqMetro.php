<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqMetro
 *
 */
class SpkReqMetro
{
    /**
     * @var string
     *
     */
    private $spkReqMetroid;

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
    private $spkMetroid;



    /**
     * Set spkReqMetroid
     *
     * @param string $spkReqMetroid
     * @return SpkReqMetro
     */
    public function setSpkReqMetroid($spkReqMetroid)
    {
        $this->spkReqMetroid = $spkReqMetroid;

        return $this;
    }

    /**
     * Get spkReqMetroid
     *
     * @return string 
     */
    public function getSpkReqMetroid()
    {
        return $this->spkReqMetroid;
    }

    /**
     * Set spkReqRequirementsid
     *
     * @param string $spkReqRequirementsid
     * @return SpkReqMetro
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
     * @return SpkReqMetro
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
     * @return SpkReqMetro
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
     * @return SpkReqMetro
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
     * @return SpkReqMetro
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
     * @return SpkReqMetro
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
