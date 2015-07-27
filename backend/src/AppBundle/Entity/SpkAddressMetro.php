<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkAddressMetro
 *
 */
class SpkAddressMetro
{
    /**
     * @var string
     *
     */
    private $spkAddressMetroid;

    /**
     * @var string
     *
     */
    private $spkAddressid;

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
     * Set spkAddressMetroid
     *
     * @param string $spkAddressMetroid
     * @return SpkAddressMetro
     */
    public function setSpkAddressMetroid($spkAddressMetroid)
    {
        $this->spkAddressMetroid = $spkAddressMetroid;

        return $this;
    }

    /**
     * Get spkAddressMetroid
     *
     * @return string 
     */
    public function getSpkAddressMetroid()
    {
        return $this->spkAddressMetroid;
    }

    /**
     * Set spkAddressid
     *
     * @param string $spkAddressid
     * @return SpkAddressMetro
     */
    public function setSpkAddressid($spkAddressid)
    {
        $this->spkAddressid = $spkAddressid;

        return $this;
    }

    /**
     * Get spkAddressid
     *
     * @return string 
     */
    public function getSpkAddressid()
    {
        return $this->spkAddressid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkAddressMetro
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
     * @return SpkAddressMetro
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
     * @return SpkAddressMetro
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
     * @return SpkAddressMetro
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
     * @return SpkAddressMetro
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
