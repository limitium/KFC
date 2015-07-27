<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOffDescription
 *
 */
class SpkOffDescription
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
    private $listingRus;

    /**
     * @var string
     *
     */
    private $listingEng;

    /**
     * @var string
     *
     */
    private $siteTarget;

    /**
     * @var integer
     *
     */
    private $ordLease;

    /**
     * @var integer
     *
     */
    private $ordSale;

    /**
     * @var string
     *
     */
    private $commTermsSite;

    /**
     * @var string
     *
     */
    private $longBrief;

    /**
     * @var string
     *
     */
    private $specialOffer;

    /**
     * @var string
     *
     */
    private $specialOfferDescriptionRus;

    /**
     * @var string
     *
     */
    private $specialOfferDescriptionEng;

    /**
     * @var string
     *
     */
    private $specialOfferSale;

    /**
     * @var string
     *
     */
    private $specialOfferDescSaleRus;

    /**
     * @var string
     *
     */
    private $specialOfferDescSaleEng;

    /**
     * @var string
     *
     */
    private $infrastructureSite;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * @return SpkOffDescription
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
     * Set listingRus
     *
     * @param string $listingRus
     * @return SpkOffDescription
     */
    public function setListingRus($listingRus)
    {
        $this->listingRus = $listingRus;

        return $this;
    }

    /**
     * Get listingRus
     *
     * @return string 
     */
    public function getListingRus()
    {
        return $this->listingRus;
    }

    /**
     * Set listingEng
     *
     * @param string $listingEng
     * @return SpkOffDescription
     */
    public function setListingEng($listingEng)
    {
        $this->listingEng = $listingEng;

        return $this;
    }

    /**
     * Get listingEng
     *
     * @return string 
     */
    public function getListingEng()
    {
        return $this->listingEng;
    }

    /**
     * Set siteTarget
     *
     * @param string $siteTarget
     * @return SpkOffDescription
     */
    public function setSiteTarget($siteTarget)
    {
        $this->siteTarget = $siteTarget;

        return $this;
    }

    /**
     * Get siteTarget
     *
     * @return string 
     */
    public function getSiteTarget()
    {
        return $this->siteTarget;
    }

    /**
     * Set ordLease
     *
     * @param integer $ordLease
     * @return SpkOffDescription
     */
    public function setOrdLease($ordLease)
    {
        $this->ordLease = $ordLease;

        return $this;
    }

    /**
     * Get ordLease
     *
     * @return integer 
     */
    public function getOrdLease()
    {
        return $this->ordLease;
    }

    /**
     * Set ordSale
     *
     * @param integer $ordSale
     * @return SpkOffDescription
     */
    public function setOrdSale($ordSale)
    {
        $this->ordSale = $ordSale;

        return $this;
    }

    /**
     * Get ordSale
     *
     * @return integer 
     */
    public function getOrdSale()
    {
        return $this->ordSale;
    }

    /**
     * Set commTermsSite
     *
     * @param string $commTermsSite
     * @return SpkOffDescription
     */
    public function setCommTermsSite($commTermsSite)
    {
        $this->commTermsSite = $commTermsSite;

        return $this;
    }

    /**
     * Get commTermsSite
     *
     * @return string 
     */
    public function getCommTermsSite()
    {
        return $this->commTermsSite;
    }

    /**
     * Set longBrief
     *
     * @param string $longBrief
     * @return SpkOffDescription
     */
    public function setLongBrief($longBrief)
    {
        $this->longBrief = $longBrief;

        return $this;
    }

    /**
     * Get longBrief
     *
     * @return string 
     */
    public function getLongBrief()
    {
        return $this->longBrief;
    }

    /**
     * Set specialOffer
     *
     * @param string $specialOffer
     * @return SpkOffDescription
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
     * Set specialOfferDescriptionRus
     *
     * @param string $specialOfferDescriptionRus
     * @return SpkOffDescription
     */
    public function setSpecialOfferDescriptionRus($specialOfferDescriptionRus)
    {
        $this->specialOfferDescriptionRus = $specialOfferDescriptionRus;

        return $this;
    }

    /**
     * Get specialOfferDescriptionRus
     *
     * @return string 
     */
    public function getSpecialOfferDescriptionRus()
    {
        return $this->specialOfferDescriptionRus;
    }

    /**
     * Set specialOfferDescriptionEng
     *
     * @param string $specialOfferDescriptionEng
     * @return SpkOffDescription
     */
    public function setSpecialOfferDescriptionEng($specialOfferDescriptionEng)
    {
        $this->specialOfferDescriptionEng = $specialOfferDescriptionEng;

        return $this;
    }

    /**
     * Get specialOfferDescriptionEng
     *
     * @return string 
     */
    public function getSpecialOfferDescriptionEng()
    {
        return $this->specialOfferDescriptionEng;
    }

    /**
     * Set specialOfferSale
     *
     * @param string $specialOfferSale
     * @return SpkOffDescription
     */
    public function setSpecialOfferSale($specialOfferSale)
    {
        $this->specialOfferSale = $specialOfferSale;

        return $this;
    }

    /**
     * Get specialOfferSale
     *
     * @return string 
     */
    public function getSpecialOfferSale()
    {
        return $this->specialOfferSale;
    }

    /**
     * Set specialOfferDescSaleRus
     *
     * @param string $specialOfferDescSaleRus
     * @return SpkOffDescription
     */
    public function setSpecialOfferDescSaleRus($specialOfferDescSaleRus)
    {
        $this->specialOfferDescSaleRus = $specialOfferDescSaleRus;

        return $this;
    }

    /**
     * Get specialOfferDescSaleRus
     *
     * @return string 
     */
    public function getSpecialOfferDescSaleRus()
    {
        return $this->specialOfferDescSaleRus;
    }

    /**
     * Set specialOfferDescSaleEng
     *
     * @param string $specialOfferDescSaleEng
     * @return SpkOffDescription
     */
    public function setSpecialOfferDescSaleEng($specialOfferDescSaleEng)
    {
        $this->specialOfferDescSaleEng = $specialOfferDescSaleEng;

        return $this;
    }

    /**
     * Get specialOfferDescSaleEng
     *
     * @return string 
     */
    public function getSpecialOfferDescSaleEng()
    {
        return $this->specialOfferDescSaleEng;
    }

    /**
     * Set infrastructureSite
     *
     * @param string $infrastructureSite
     * @return SpkOffDescription
     */
    public function setInfrastructureSite($infrastructureSite)
    {
        $this->infrastructureSite = $infrastructureSite;

        return $this;
    }

    /**
     * Get infrastructureSite
     *
     * @return string 
     */
    public function getInfrastructureSite()
    {
        return $this->infrastructureSite;
    }
}
