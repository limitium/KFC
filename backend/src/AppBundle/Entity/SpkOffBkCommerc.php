<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffBkCommerc
 *
 */
class SpkOffBkCommerc
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
    private $baseRent;

    /**
     * @var string
     *
     */
    private $indexationConditions;

    /**
     * @var string
     *
     */
    private $operationalCost;

    /**
     * @var string
     *
     */
    private $other;

    /**
     * @var string
     *
     */
    private $costPerSqmMin;

    /**
     * @var string
     *
     */
    private $costPerSqmMax;

    /**
     * @var string
     *
     */
    private $costMin;

    /**
     * @var string
     *
     */
    private $costMax;

    /**
     * @var string
     *
     */
    private $commentsRus;

    /**
     * @var string
     *
     */
    private $commentsEng;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffBkCommerc
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
     * @return SpkOffBkCommerc
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
     * @return SpkOffBkCommerc
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
     * @return SpkOffBkCommerc
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
     * @return SpkOffBkCommerc
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
     * Set baseRent
     *
     * @param string $baseRent
     * @return SpkOffBkCommerc
     */
    public function setBaseRent($baseRent)
    {
        $this->baseRent = $baseRent;

        return $this;
    }

    /**
     * Get baseRent
     *
     * @return string 
     */
    public function getBaseRent()
    {
        return $this->baseRent;
    }

    /**
     * Set indexationConditions
     *
     * @param string $indexationConditions
     * @return SpkOffBkCommerc
     */
    public function setIndexationConditions($indexationConditions)
    {
        $this->indexationConditions = $indexationConditions;

        return $this;
    }

    /**
     * Get indexationConditions
     *
     * @return string 
     */
    public function getIndexationConditions()
    {
        return $this->indexationConditions;
    }

    /**
     * Set operationalCost
     *
     * @param string $operationalCost
     * @return SpkOffBkCommerc
     */
    public function setOperationalCost($operationalCost)
    {
        $this->operationalCost = $operationalCost;

        return $this;
    }

    /**
     * Get operationalCost
     *
     * @return string 
     */
    public function getOperationalCost()
    {
        return $this->operationalCost;
    }

    /**
     * Set other
     *
     * @param string $other
     * @return SpkOffBkCommerc
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set costPerSqmMin
     *
     * @param string $costPerSqmMin
     * @return SpkOffBkCommerc
     */
    public function setCostPerSqmMin($costPerSqmMin)
    {
        $this->costPerSqmMin = $costPerSqmMin;

        return $this;
    }

    /**
     * Get costPerSqmMin
     *
     * @return string 
     */
    public function getCostPerSqmMin()
    {
        return $this->costPerSqmMin;
    }

    /**
     * Set costPerSqmMax
     *
     * @param string $costPerSqmMax
     * @return SpkOffBkCommerc
     */
    public function setCostPerSqmMax($costPerSqmMax)
    {
        $this->costPerSqmMax = $costPerSqmMax;

        return $this;
    }

    /**
     * Get costPerSqmMax
     *
     * @return string 
     */
    public function getCostPerSqmMax()
    {
        return $this->costPerSqmMax;
    }

    /**
     * Set costMin
     *
     * @param string $costMin
     * @return SpkOffBkCommerc
     */
    public function setCostMin($costMin)
    {
        $this->costMin = $costMin;

        return $this;
    }

    /**
     * Get costMin
     *
     * @return string 
     */
    public function getCostMin()
    {
        return $this->costMin;
    }

    /**
     * Set costMax
     *
     * @param string $costMax
     * @return SpkOffBkCommerc
     */
    public function setCostMax($costMax)
    {
        $this->costMax = $costMax;

        return $this;
    }

    /**
     * Get costMax
     *
     * @return string 
     */
    public function getCostMax()
    {
        return $this->costMax;
    }

    /**
     * Set commentsRus
     *
     * @param string $commentsRus
     * @return SpkOffBkCommerc
     */
    public function setCommentsRus($commentsRus)
    {
        $this->commentsRus = $commentsRus;

        return $this;
    }

    /**
     * Get commentsRus
     *
     * @return string 
     */
    public function getCommentsRus()
    {
        return $this->commentsRus;
    }

    /**
     * Set commentsEng
     *
     * @param string $commentsEng
     * @return SpkOffBkCommerc
     */
    public function setCommentsEng($commentsEng)
    {
        $this->commentsEng = $commentsEng;

        return $this;
    }

    /**
     * Get commentsEng
     *
     * @return string 
     */
    public function getCommentsEng()
    {
        return $this->commentsEng;
    }
}
