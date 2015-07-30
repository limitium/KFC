<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfActForAccounting
 *
 * @ORM\Table(name="KF_ACT_FOR_ACCOUNTING", uniqueConstraints={@ORM\UniqueConstraint(name="KF_ACT_FOR_ACCOUNTING_PRIMARY", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfActForAccounting
{
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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVORFILENAME", type="string", length=512, nullable=true)
     */
    private $dogovorfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTFILENAME", type="string", length=512, nullable=true)
     */
    private $actfilename;

    /**
     * @var string
     *
     * @ORM\Column(name="DOGOVORATTACHID", type="string", length=12, nullable=true)
     */
    private $dogovorattachid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTATTACHID", type="string", length=12, nullable=true)
     */
    private $actattachid;


}
