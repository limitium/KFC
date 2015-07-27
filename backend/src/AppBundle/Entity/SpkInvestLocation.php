<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestLocation
 *
 */
class SpkInvestLocation
{
    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
    private $rings;

    /**
     * @var string
     *
     */
    private $mainStreets;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestLocation
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkInvestLocation
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
     * @return SpkInvestLocation
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
     * @return SpkInvestLocation
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
     * @return SpkInvestLocation
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
     * Set rings
     *
     * @param string $rings
     * @return SpkInvestLocation
     */
    public function setRings($rings)
    {
        $this->rings = $rings;

        return $this;
    }

    /**
     * Get rings
     *
     * @return string 
     */
    public function getRings()
    {
        return $this->rings;
    }

    /**
     * Set mainStreets
     *
     * @param string $mainStreets
     * @return SpkInvestLocation
     */
    public function setMainStreets($mainStreets)
    {
        $this->mainStreets = $mainStreets;

        return $this;
    }

    /**
     * Get mainStreets
     *
     * @return string 
     */
    public function getMainStreets()
    {
        return $this->mainStreets;
    }
}
