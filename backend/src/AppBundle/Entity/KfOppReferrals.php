<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppReferrals
 *
 * @ORM\Table(name="KF_OPP_REFERRALS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_REFERRALS_PRIMARY", columns={"KF_OPP_REFERRALSID"})}, indexes={@ORM\Index(name="KF_OPP_REFERRALS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppReferrals
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_REFERRALSID", type="string", length=12, nullable=false)
     */
    private $kfOppReferralsid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="REF_MANAGERID", type="string", length=12, nullable=true)
     */
    private $refManagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="REF_DATE", type="datetime", nullable=true)
     */
    private $refDate;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=64, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=8000, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="REGION", type="string", length=512, nullable=true)
     */
    private $region;


}
