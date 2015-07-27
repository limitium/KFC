<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkReqHighway
 *
 */
class SpkReqHighway
{
    /**
     * @var string
     *
     */
    private $spkReqHighwayid;

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
    private $highwayid;



    /**
     * Set spkReqHighwayid
     *
     * @param string $spkReqHighwayid
     * @return SpkReqHighway
     */
    public function setSpkReqHighwayid($spkReqHighwayid)
    {
        $this->spkReqHighwayid = $spkReqHighwayid;

        return $this;
    }

    /**
     * Get spkReqHighwayid
     *
     * @return string 
     */
    public function getSpkReqHighwayid()
    {
        return $this->spkReqHighwayid;
    }

    /**
     * Set spkReqRequirementsid
     *
     * @param string $spkReqRequirementsid
     * @return SpkReqHighway
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
     * @return SpkReqHighway
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
     * @return SpkReqHighway
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
     * @return SpkReqHighway
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
     * @return SpkReqHighway
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
     * @return SpkReqHighway
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
