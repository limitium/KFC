<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkRetStoreys
 *
 */
class SpkRetStoreys
{
    /**
     * @var string
     *
     */
    private $spkRetStoreysid;

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
     * @var integer
     *
     */
    private $storeyNumber;

    /**
     * @var float
     *
     */
    private $square;

    /**
     * @var float
     *
     */
    private $ceilingHeight;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $saleMin;

    /**
     * @var string
     *
     */
    private $saleMax;

    /**
     * @var string
     *
     */
    private $leaseMin;

    /**
     * @var string
     *
     */
    private $leaseMax;



    /**
     * Set spkRetStoreysid
     *
     * @param string $spkRetStoreysid
     * @return SpkRetStoreys
     */
    public function setSpkRetStoreysid($spkRetStoreysid)
    {
        $this->spkRetStoreysid = $spkRetStoreysid;

        return $this;
    }

    /**
     * Get spkRetStoreysid
     *
     * @return string 
     */
    public function getSpkRetStoreysid()
    {
        return $this->spkRetStoreysid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkRetStoreys
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
     * @return SpkRetStoreys
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
     * @return SpkRetStoreys
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
     * @return SpkRetStoreys
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
     * @return SpkRetStoreys
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
     * Set storeyNumber
     *
     * @param integer $storeyNumber
     * @return SpkRetStoreys
     */
    public function setStoreyNumber($storeyNumber)
    {
        $this->storeyNumber = $storeyNumber;

        return $this;
    }

    /**
     * Get storeyNumber
     *
     * @return integer 
     */
    public function getStoreyNumber()
    {
        return $this->storeyNumber;
    }

    /**
     * Set square
     *
     * @param float $square
     * @return SpkRetStoreys
     */
    public function setSquare($square)
    {
        $this->square = $square;

        return $this;
    }

    /**
     * Get square
     *
     * @return float 
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * Set ceilingHeight
     *
     * @param float $ceilingHeight
     * @return SpkRetStoreys
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return float 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkRetStoreys
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set saleMin
     *
     * @param string $saleMin
     * @return SpkRetStoreys
     */
    public function setSaleMin($saleMin)
    {
        $this->saleMin = $saleMin;

        return $this;
    }

    /**
     * Get saleMin
     *
     * @return string 
     */
    public function getSaleMin()
    {
        return $this->saleMin;
    }

    /**
     * Set saleMax
     *
     * @param string $saleMax
     * @return SpkRetStoreys
     */
    public function setSaleMax($saleMax)
    {
        $this->saleMax = $saleMax;

        return $this;
    }

    /**
     * Get saleMax
     *
     * @return string 
     */
    public function getSaleMax()
    {
        return $this->saleMax;
    }

    /**
     * Set leaseMin
     *
     * @param string $leaseMin
     * @return SpkRetStoreys
     */
    public function setLeaseMin($leaseMin)
    {
        $this->leaseMin = $leaseMin;

        return $this;
    }

    /**
     * Get leaseMin
     *
     * @return string 
     */
    public function getLeaseMin()
    {
        return $this->leaseMin;
    }

    /**
     * Set leaseMax
     *
     * @param string $leaseMax
     * @return SpkRetStoreys
     */
    public function setLeaseMax($leaseMax)
    {
        $this->leaseMax = $leaseMax;

        return $this;
    }

    /**
     * Get leaseMax
     *
     * @return string 
     */
    public function getLeaseMax()
    {
        return $this->leaseMax;
    }
}
