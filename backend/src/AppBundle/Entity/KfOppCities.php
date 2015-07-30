<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppCities
 *
 * @ORM\Table(name="KF_OPP_CITIES", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_CITIES_PRIMARY", columns={"KF_OPP_CITIESID"})}, indexes={@ORM\Index(name="KF_OPP_CITIES_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppCities
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_CITIESID", type="string", length=12, nullable=false)
     */
    private $kfOppCitiesid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @var string
     *
     * @ORM\Column(name="SPK_CITYID", type="string", length=12, nullable=true)
     */
    private $spkCityid;


}
