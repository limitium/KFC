<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractitem
 *
 * @ORM\Table(name="CONTRACTITEM", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTRACTITEM", columns={"CONTRACTITEMID"})}, indexes={@ORM\Index(name="XAK1CONTRACTITEM", columns={"CONTRACTID", "ACCOUNTPRODUCTID"})})
 * @ORM\Entity
 */
class Contractitem
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTITEMID", type="string", length=12, nullable=false)
     */
    private $contractitemid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRACTID", type="string", length=12, nullable=false)
     */
    private $contractid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTPRODUCTID", type="string", length=12, nullable=true)
     */
    private $accountproductid;

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


}
