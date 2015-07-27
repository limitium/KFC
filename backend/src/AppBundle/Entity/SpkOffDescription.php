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


}
