<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountproduct
 *
 * @ORM\Table(name="ACCOUNTPRODUCT", uniqueConstraints={@ORM\UniqueConstraint(name="XPKACCOUNTPRODUCT", columns={"ACCOUNTPRODUCTID"})}, indexes={@ORM\Index(name="XAK1ACCOUNTPRODUCT", columns={"ACCOUNTID", "PRODUCTID"})})
 * @ORM\Entity
 */
class Accountproduct
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTID", type="string", length=12, nullable=false)
     */
    private $accountproductid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTID", type="string", length=12, nullable=true)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTPARENTID", type="string", length=12, nullable=true)
     */
    private $accountproductparentid;

    /**
     * @var string
     *
     * @ORM\Column(name="SERIALNUMBER", type="string", length=80, nullable=true)
     */
    private $serialnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD1", type="string", length=80, nullable=true)
     */
    private $userfield1;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD2", type="string", length=80, nullable=true)
     */
    private $userfield2;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD3", type="string", length=80, nullable=true)
     */
    private $userfield3;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD4", type="string", length=80, nullable=true)
     */
    private $userfield4;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD5", type="string", length=80, nullable=true)
     */
    private $userfield5;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD6", type="string", length=80, nullable=true)
     */
    private $userfield6;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD7", type="string", length=80, nullable=true)
     */
    private $userfield7;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD8", type="string", length=80, nullable=true)
     */
    private $userfield8;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD9", type="string", length=80, nullable=true)
     */
    private $userfield9;

    /**
     * @var string
     *
     * @ORM\Column(name="USERFIELD10", type="string", length=80, nullable=true)
     */
    private $userfield10;

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
     * @ORM\Column(name="RETURNED", type="integer", nullable=true)
     */
    private $returned;

    /**
     * @var integer
     *
     * @ORM\Column(name="EVALUATION", type="integer", nullable=true)
     */
    private $evaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPPRODUCTID", type="string", length=12, nullable=true)
     */
    private $oppproductid;

    /**
     * @var float
     *
     * @ORM\Column(name="QUANTITY", type="float", precision=53, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="SALESORDERID", type="string", length=12, nullable=true)
     */
    private $salesorderid;

    /**
     * @var string
     *
     * @ORM\Column(name="PRDDESCRIPTION", type="text", length=16, nullable=true)
     */
    private $prddescription;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCTNAME", type="string", length=64, nullable=true)
     */
    private $productname;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTUALID", type="string", length=64, nullable=true)
     */
    private $actualid;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="text", length=16, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETCODE", type="string", length=32, nullable=true)
     */
    private $assetcode;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="string", length=64, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="ENVIRONMENT", type="string", length=64, nullable=true)
     */
    private $environment;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETSYSTEM", type="string", length=64, nullable=true)
     */
    private $assetsystem;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSETVERSION", type="string", length=64, nullable=true)
     */
    private $assetversion;


}
