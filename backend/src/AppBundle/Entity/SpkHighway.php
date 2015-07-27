<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkHighway
 *
 */
class SpkHighway
{
    /**
     * @var string
     *
     */
    private $spkHighwayid;

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
    private $highwayRus;

    /**
     * @var string
     *
     */
    private $highwayEng;

    /**
     * @var string
     *
     */
    private $highwayNumber;

    /**
     * @var string
     *
     */
    private $cianNumber;

    /**
     * @var integer
     *
     */
    private $intareaid;

    /**
     * @var string
     *
     */
    private $ssn;



    /**
     * Set spkHighwayid
     *
     * @param string $spkHighwayid
     * @return SpkHighway
     */
    public function setSpkHighwayid($spkHighwayid)
    {
        $this->spkHighwayid = $spkHighwayid;

        return $this;
    }

    /**
     * Get spkHighwayid
     *
     * @return string 
     */
    public function getSpkHighwayid()
    {
        return $this->spkHighwayid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkHighway
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
     * @return SpkHighway
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
     * @return SpkHighway
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
     * @return SpkHighway
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
     * Set highwayRus
     *
     * @param string $highwayRus
     * @return SpkHighway
     */
    public function setHighwayRus($highwayRus)
    {
        $this->highwayRus = $highwayRus;

        return $this;
    }

    /**
     * Get highwayRus
     *
     * @return string 
     */
    public function getHighwayRus()
    {
        return $this->highwayRus;
    }

    /**
     * Set highwayEng
     *
     * @param string $highwayEng
     * @return SpkHighway
     */
    public function setHighwayEng($highwayEng)
    {
        $this->highwayEng = $highwayEng;

        return $this;
    }

    /**
     * Get highwayEng
     *
     * @return string 
     */
    public function getHighwayEng()
    {
        return $this->highwayEng;
    }

    /**
     * Set highwayNumber
     *
     * @param string $highwayNumber
     * @return SpkHighway
     */
    public function setHighwayNumber($highwayNumber)
    {
        $this->highwayNumber = $highwayNumber;

        return $this;
    }

    /**
     * Get highwayNumber
     *
     * @return string 
     */
    public function getHighwayNumber()
    {
        return $this->highwayNumber;
    }

    /**
     * Set cianNumber
     *
     * @param string $cianNumber
     * @return SpkHighway
     */
    public function setCianNumber($cianNumber)
    {
        $this->cianNumber = $cianNumber;

        return $this;
    }

    /**
     * Get cianNumber
     *
     * @return string 
     */
    public function getCianNumber()
    {
        return $this->cianNumber;
    }

    /**
     * Set intareaid
     *
     * @param integer $intareaid
     * @return SpkHighway
     */
    public function setIntareaid($intareaid)
    {
        $this->intareaid = $intareaid;

        return $this;
    }

    /**
     * Get intareaid
     *
     * @return integer 
     */
    public function getIntareaid()
    {
        return $this->intareaid;
    }

    /**
     * Set ssn
     *
     * @param string $ssn
     * @return SpkHighway
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }
}
