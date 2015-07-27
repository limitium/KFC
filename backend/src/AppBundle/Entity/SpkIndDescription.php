<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndDescription
 *
 */
class SpkIndDescription
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
    private $briefRus;

    /**
     * @var string
     *
     */
    private $briefEng;

    /**
     * @var string
     *
     */
    private $siteRus;

    /**
     * @var string
     *
     */
    private $siteEng;

    /**
     * @var string
     *
     */
    private $anchorRus;

    /**
     * @var string
     *
     */
    private $anchorEng;

    /**
     * @var string
     *
     */
    private $tpl;

    /**
     * @var string
     *
     */
    private $buildToSuit;

    /**
     * @var string
     *
     */
    private $siteNameRus;

    /**
     * @var string
     *
     */
    private $siteNameEng;

    /**
     * @var integer
     *
     */
    private $ord;

    /**
     * @var string
     *
     */
    private $specialOffer;

    /**
     * @var string
     *
     */
    private $specialOfferDescRus;

    /**
     * @var string
     *
     */
    private $specialOfferDescEng;

    /**
     * @var string
     *
     */
    private $briefNameRus;

    /**
     * @var string
     *
     */
    private $briefNameEng;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkIndDescription
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
     * @return SpkIndDescription
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
     * @return SpkIndDescription
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
     * @return SpkIndDescription
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
     * @return SpkIndDescription
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
     * Set briefRus
     *
     * @param string $briefRus
     * @return SpkIndDescription
     */
    public function setBriefRus($briefRus)
    {
        $this->briefRus = $briefRus;

        return $this;
    }

    /**
     * Get briefRus
     *
     * @return string 
     */
    public function getBriefRus()
    {
        return $this->briefRus;
    }

    /**
     * Set briefEng
     *
     * @param string $briefEng
     * @return SpkIndDescription
     */
    public function setBriefEng($briefEng)
    {
        $this->briefEng = $briefEng;

        return $this;
    }

    /**
     * Get briefEng
     *
     * @return string 
     */
    public function getBriefEng()
    {
        return $this->briefEng;
    }

    /**
     * Set siteRus
     *
     * @param string $siteRus
     * @return SpkIndDescription
     */
    public function setSiteRus($siteRus)
    {
        $this->siteRus = $siteRus;

        return $this;
    }

    /**
     * Get siteRus
     *
     * @return string 
     */
    public function getSiteRus()
    {
        return $this->siteRus;
    }

    /**
     * Set siteEng
     *
     * @param string $siteEng
     * @return SpkIndDescription
     */
    public function setSiteEng($siteEng)
    {
        $this->siteEng = $siteEng;

        return $this;
    }

    /**
     * Get siteEng
     *
     * @return string 
     */
    public function getSiteEng()
    {
        return $this->siteEng;
    }

    /**
     * Set anchorRus
     *
     * @param string $anchorRus
     * @return SpkIndDescription
     */
    public function setAnchorRus($anchorRus)
    {
        $this->anchorRus = $anchorRus;

        return $this;
    }

    /**
     * Get anchorRus
     *
     * @return string 
     */
    public function getAnchorRus()
    {
        return $this->anchorRus;
    }

    /**
     * Set anchorEng
     *
     * @param string $anchorEng
     * @return SpkIndDescription
     */
    public function setAnchorEng($anchorEng)
    {
        $this->anchorEng = $anchorEng;

        return $this;
    }

    /**
     * Get anchorEng
     *
     * @return string 
     */
    public function getAnchorEng()
    {
        return $this->anchorEng;
    }

    /**
     * Set tpl
     *
     * @param string $tpl
     * @return SpkIndDescription
     */
    public function setTpl($tpl)
    {
        $this->tpl = $tpl;

        return $this;
    }

    /**
     * Get tpl
     *
     * @return string 
     */
    public function getTpl()
    {
        return $this->tpl;
    }

    /**
     * Set buildToSuit
     *
     * @param string $buildToSuit
     * @return SpkIndDescription
     */
    public function setBuildToSuit($buildToSuit)
    {
        $this->buildToSuit = $buildToSuit;

        return $this;
    }

    /**
     * Get buildToSuit
     *
     * @return string 
     */
    public function getBuildToSuit()
    {
        return $this->buildToSuit;
    }

    /**
     * Set siteNameRus
     *
     * @param string $siteNameRus
     * @return SpkIndDescription
     */
    public function setSiteNameRus($siteNameRus)
    {
        $this->siteNameRus = $siteNameRus;

        return $this;
    }

    /**
     * Get siteNameRus
     *
     * @return string 
     */
    public function getSiteNameRus()
    {
        return $this->siteNameRus;
    }

    /**
     * Set siteNameEng
     *
     * @param string $siteNameEng
     * @return SpkIndDescription
     */
    public function setSiteNameEng($siteNameEng)
    {
        $this->siteNameEng = $siteNameEng;

        return $this;
    }

    /**
     * Get siteNameEng
     *
     * @return string 
     */
    public function getSiteNameEng()
    {
        return $this->siteNameEng;
    }

    /**
     * Set ord
     *
     * @param integer $ord
     * @return SpkIndDescription
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set specialOffer
     *
     * @param string $specialOffer
     * @return SpkIndDescription
     */
    public function setSpecialOffer($specialOffer)
    {
        $this->specialOffer = $specialOffer;

        return $this;
    }

    /**
     * Get specialOffer
     *
     * @return string 
     */
    public function getSpecialOffer()
    {
        return $this->specialOffer;
    }

    /**
     * Set specialOfferDescRus
     *
     * @param string $specialOfferDescRus
     * @return SpkIndDescription
     */
    public function setSpecialOfferDescRus($specialOfferDescRus)
    {
        $this->specialOfferDescRus = $specialOfferDescRus;

        return $this;
    }

    /**
     * Get specialOfferDescRus
     *
     * @return string 
     */
    public function getSpecialOfferDescRus()
    {
        return $this->specialOfferDescRus;
    }

    /**
     * Set specialOfferDescEng
     *
     * @param string $specialOfferDescEng
     * @return SpkIndDescription
     */
    public function setSpecialOfferDescEng($specialOfferDescEng)
    {
        $this->specialOfferDescEng = $specialOfferDescEng;

        return $this;
    }

    /**
     * Get specialOfferDescEng
     *
     * @return string 
     */
    public function getSpecialOfferDescEng()
    {
        return $this->specialOfferDescEng;
    }

    /**
     * Set briefNameRus
     *
     * @param string $briefNameRus
     * @return SpkIndDescription
     */
    public function setBriefNameRus($briefNameRus)
    {
        $this->briefNameRus = $briefNameRus;

        return $this;
    }

    /**
     * Get briefNameRus
     *
     * @return string 
     */
    public function getBriefNameRus()
    {
        return $this->briefNameRus;
    }

    /**
     * Set briefNameEng
     *
     * @param string $briefNameEng
     * @return SpkIndDescription
     */
    public function setBriefNameEng($briefNameEng)
    {
        $this->briefNameEng = $briefNameEng;

        return $this;
    }

    /**
     * Get briefNameEng
     *
     * @return string 
     */
    public function getBriefNameEng()
    {
        return $this->briefNameEng;
    }
}
