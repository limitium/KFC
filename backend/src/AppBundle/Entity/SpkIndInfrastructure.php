<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkIndInfrastructure
 *
 * @ORM\Table(name="SPK_IND_INFRASTRUCTURE", uniqueConstraints={@ORM\UniqueConstraint(name="SPK_IND_INFRASTRUCTURE_PRIMARY", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class SpkIndInfrastructure
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PHONE_LINES", type="smallint", nullable=true)
     */
    private $phoneLines;

    /**
     * @var float
     *
     * @ORM\Column(name="ELECTRICITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $electricity;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRUCK_PLACES", type="smallint", nullable=true)
     */
    private $truckPlaces;

    /**
     * @var integer
     *
     * @ORM\Column(name="CAR_PLACES", type="smallint", nullable=true)
     */
    private $carPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_RUS", type="string", length=512, nullable=true)
     */
    private $commentsRus;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS_ENG", type="string", length=512, nullable=true)
     */
    private $commentsEng;

    /**
     * @var float
     *
     * @ORM\Column(name="CAR_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $carCost;

    /**
     * @var float
     *
     * @ORM\Column(name="TRUCK_COST", type="float", precision=53, scale=0, nullable=true)
     */
    private $truckCost;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_HEATING", type="string", length=1, nullable=true)
     */
    private $isHeating;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_RAILWAY", type="string", length=1, nullable=true)
     */
    private $isRailway;

    /**
     * @var string
     *
     * @ORM\Column(name="IS_LOCALRAILWAY", type="string", length=1, nullable=true)
     */
    private $isLocalrailway;


}
