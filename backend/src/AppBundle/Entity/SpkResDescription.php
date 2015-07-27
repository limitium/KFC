<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkResDescription
 *
 */
class SpkResDescription
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
    private $advantageRus;

    /**
     * @var string
     *
     */
    private $advantageEng;

    /**
     * @var string
     *
     */
    private $briefCommentsRus;

    /**
     * @var string
     *
     */
    private $briefCommentsEng;

    /**
     * @var string
     *
     */
    private $siteCommentsRus;

    /**
     * @var string
     *
     */
    private $siteCommentsEng;

    /**
     * @var string
     *
     */
    private $brochure;

    /**
     * @var string
     *
     */
    private $profoto;

    /**
     * @var string
     *
     */
    private $brochCompletion;

    /**
     * @var string
     *
     */
    private $fotoCompletion;

    /**
     * @var string
     *
     */
    private $urgency;

    /**
     * @var string
     *
     */
    private $specialOffer;

    /**
     * @var string
     *
     */
    private $specOfferDescript;

    /**
     * @var string
     *
     */
    private $isComplex;

    /**
     * @var string
     *
     */
    private $useAddress;

    /**
     * @var string
     *
     */
    private $lifestyle;

    /**
     * @var string
     *
     */
    private $banner;

    /**
     * @var string
     *
     */
    private $context;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkResDescription
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
     * @return SpkResDescription
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
     * @return SpkResDescription
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
     * @return SpkResDescription
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
     * @return SpkResDescription
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
     * Set advantageRus
     *
     * @param string $advantageRus
     * @return SpkResDescription
     */
    public function setAdvantageRus($advantageRus)
    {
        $this->advantageRus = $advantageRus;

        return $this;
    }

    /**
     * Get advantageRus
     *
     * @return string 
     */
    public function getAdvantageRus()
    {
        return $this->advantageRus;
    }

    /**
     * Set advantageEng
     *
     * @param string $advantageEng
     * @return SpkResDescription
     */
    public function setAdvantageEng($advantageEng)
    {
        $this->advantageEng = $advantageEng;

        return $this;
    }

    /**
     * Get advantageEng
     *
     * @return string 
     */
    public function getAdvantageEng()
    {
        return $this->advantageEng;
    }

    /**
     * Set briefCommentsRus
     *
     * @param string $briefCommentsRus
     * @return SpkResDescription
     */
    public function setBriefCommentsRus($briefCommentsRus)
    {
        $this->briefCommentsRus = $briefCommentsRus;

        return $this;
    }

    /**
     * Get briefCommentsRus
     *
     * @return string 
     */
    public function getBriefCommentsRus()
    {
        return $this->briefCommentsRus;
    }

    /**
     * Set briefCommentsEng
     *
     * @param string $briefCommentsEng
     * @return SpkResDescription
     */
    public function setBriefCommentsEng($briefCommentsEng)
    {
        $this->briefCommentsEng = $briefCommentsEng;

        return $this;
    }

    /**
     * Get briefCommentsEng
     *
     * @return string 
     */
    public function getBriefCommentsEng()
    {
        return $this->briefCommentsEng;
    }

    /**
     * Set siteCommentsRus
     *
     * @param string $siteCommentsRus
     * @return SpkResDescription
     */
    public function setSiteCommentsRus($siteCommentsRus)
    {
        $this->siteCommentsRus = $siteCommentsRus;

        return $this;
    }

    /**
     * Get siteCommentsRus
     *
     * @return string 
     */
    public function getSiteCommentsRus()
    {
        return $this->siteCommentsRus;
    }

    /**
     * Set siteCommentsEng
     *
     * @param string $siteCommentsEng
     * @return SpkResDescription
     */
    public function setSiteCommentsEng($siteCommentsEng)
    {
        $this->siteCommentsEng = $siteCommentsEng;

        return $this;
    }

    /**
     * Get siteCommentsEng
     *
     * @return string 
     */
    public function getSiteCommentsEng()
    {
        return $this->siteCommentsEng;
    }

    /**
     * Set brochure
     *
     * @param string $brochure
     * @return SpkResDescription
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return string 
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    /**
     * Set profoto
     *
     * @param string $profoto
     * @return SpkResDescription
     */
    public function setProfoto($profoto)
    {
        $this->profoto = $profoto;

        return $this;
    }

    /**
     * Get profoto
     *
     * @return string 
     */
    public function getProfoto()
    {
        return $this->profoto;
    }

    /**
     * Set brochCompletion
     *
     * @param string $brochCompletion
     * @return SpkResDescription
     */
    public function setBrochCompletion($brochCompletion)
    {
        $this->brochCompletion = $brochCompletion;

        return $this;
    }

    /**
     * Get brochCompletion
     *
     * @return string 
     */
    public function getBrochCompletion()
    {
        return $this->brochCompletion;
    }

    /**
     * Set fotoCompletion
     *
     * @param string $fotoCompletion
     * @return SpkResDescription
     */
    public function setFotoCompletion($fotoCompletion)
    {
        $this->fotoCompletion = $fotoCompletion;

        return $this;
    }

    /**
     * Get fotoCompletion
     *
     * @return string 
     */
    public function getFotoCompletion()
    {
        return $this->fotoCompletion;
    }

    /**
     * Set urgency
     *
     * @param string $urgency
     * @return SpkResDescription
     */
    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;

        return $this;
    }

    /**
     * Get urgency
     *
     * @return string 
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Set specialOffer
     *
     * @param string $specialOffer
     * @return SpkResDescription
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
     * Set specOfferDescript
     *
     * @param string $specOfferDescript
     * @return SpkResDescription
     */
    public function setSpecOfferDescript($specOfferDescript)
    {
        $this->specOfferDescript = $specOfferDescript;

        return $this;
    }

    /**
     * Get specOfferDescript
     *
     * @return string 
     */
    public function getSpecOfferDescript()
    {
        return $this->specOfferDescript;
    }

    /**
     * Set isComplex
     *
     * @param string $isComplex
     * @return SpkResDescription
     */
    public function setIsComplex($isComplex)
    {
        $this->isComplex = $isComplex;

        return $this;
    }

    /**
     * Get isComplex
     *
     * @return string 
     */
    public function getIsComplex()
    {
        return $this->isComplex;
    }

    /**
     * Set useAddress
     *
     * @param string $useAddress
     * @return SpkResDescription
     */
    public function setUseAddress($useAddress)
    {
        $this->useAddress = $useAddress;

        return $this;
    }

    /**
     * Get useAddress
     *
     * @return string 
     */
    public function getUseAddress()
    {
        return $this->useAddress;
    }

    /**
     * Set lifestyle
     *
     * @param string $lifestyle
     * @return SpkResDescription
     */
    public function setLifestyle($lifestyle)
    {
        $this->lifestyle = $lifestyle;

        return $this;
    }

    /**
     * Get lifestyle
     *
     * @return string 
     */
    public function getLifestyle()
    {
        return $this->lifestyle;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return SpkResDescription
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return SpkResDescription
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }
}
