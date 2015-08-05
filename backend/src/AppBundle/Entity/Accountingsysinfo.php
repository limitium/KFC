<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountingsysinfo
 *
 * @ORM\Table(name="ACCOUNTINGSYSINFO", uniqueConstraints={@ORM\UniqueConstraint(name="XPKACCOUNTINGSYSINFO", columns={"ACCOUNTINGSYSINFOID"})})
 * @ORM\Entity
 */
class Accountingsysinfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTINGSYSINFOID", type="string", length=12, nullable=false)
     */
    private $accountingsysinfoid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTCOMPANY", type="string", length=60, nullable=true)
     */
    private $accountcompany;

    /**
     * @var string
     *
     * @ORM\Column(name="CURRENTACCOUNTINGPERIOD", type="string", length=6, nullable=true)
     */
    private $currentaccountingperiod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LASTEXTRACTDATE", type="datetime", nullable=true)
     */
    private $lastextractdate;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTPASSWORD", type="string", length=32, nullable=true)
     */
    private $transportpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTNAME", type="string", length=64, nullable=true)
     */
    private $transportname;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTSHORTNAME", type="string", length=32, nullable=true)
     */
    private $transportshortname;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTCOMPONENT", type="string", length=32, nullable=true)
     */
    private $transportcomponent;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTDATABASE", type="string", length=32, nullable=true)
     */
    private $transportdatabase;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSPORTUSERNAME", type="string", length=32, nullable=true)
     */
    private $transportusername;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCTDATAFEED", type="integer", nullable=true)
     */
    private $productdatafeed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;


}
