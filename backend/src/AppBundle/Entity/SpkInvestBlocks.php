<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkInvestBlocks
 *
 */
class SpkInvestBlocks
{
    /**
     * @var string
     *
     */
    private $spkInvestBlocksid;

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
    private $floor;

    /**
     * @var float
     *
     */
    private $availableSq;

    /**
     * @var string
     *
     */
    private $costSqm;

    /**
     * @var string
     *
     */
    private $costSqmCurrency;



    /**
     * Set spkInvestBlocksid
     *
     * @param string $spkInvestBlocksid
     * @return SpkInvestBlocks
     */
    public function setSpkInvestBlocksid($spkInvestBlocksid)
    {
        $this->spkInvestBlocksid = $spkInvestBlocksid;

        return $this;
    }

    /**
     * Get spkInvestBlocksid
     *
     * @return string 
     */
    public function getSpkInvestBlocksid()
    {
        return $this->spkInvestBlocksid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkInvestBlocks
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
     * @return SpkInvestBlocks
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
     * @return SpkInvestBlocks
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
     * @return SpkInvestBlocks
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
     * @return SpkInvestBlocks
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
     * Set floor
     *
     * @param string $floor
     * @return SpkInvestBlocks
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set availableSq
     *
     * @param float $availableSq
     * @return SpkInvestBlocks
     */
    public function setAvailableSq($availableSq)
    {
        $this->availableSq = $availableSq;

        return $this;
    }

    /**
     * Get availableSq
     *
     * @return float 
     */
    public function getAvailableSq()
    {
        return $this->availableSq;
    }

    /**
     * Set costSqm
     *
     * @param string $costSqm
     * @return SpkInvestBlocks
     */
    public function setCostSqm($costSqm)
    {
        $this->costSqm = $costSqm;

        return $this;
    }

    /**
     * Get costSqm
     *
     * @return string 
     */
    public function getCostSqm()
    {
        return $this->costSqm;
    }

    /**
     * Set costSqmCurrency
     *
     * @param string $costSqmCurrency
     * @return SpkInvestBlocks
     */
    public function setCostSqmCurrency($costSqmCurrency)
    {
        $this->costSqmCurrency = $costSqmCurrency;

        return $this;
    }

    /**
     * Get costSqmCurrency
     *
     * @return string 
     */
    public function getCostSqmCurrency()
    {
        return $this->costSqmCurrency;
    }
}
