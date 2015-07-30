<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactObjSrch
 *
 * @ORM\Table(name="KF_CONTACT_OBJ_SRCH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CONTACT_OBJ_SRCH_PRIMARY", columns={"KF_CONTACT_OBJ_SRCHID"})}, indexes={@ORM\Index(name="KF_CONTACT_OBJ_SRCH_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class KfContactObjSrch
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CONTACT_OBJ_SRCHID", type="string", length=12, nullable=false)
     */
    private $kfContactObjSrchid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SHOW_DATE", type="datetime", nullable=true)
     */
    private $showDate;

    /**
     * @var string
     *
     * @ORM\Column(name="INTERESTED", type="string", length=1, nullable=true)
     */
    private $interested;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEGALAUDITDATE", type="datetime", nullable=true)
     */
    private $legalauditdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CHOSEN_ONE", type="string", length=1, nullable=true)
     */
    private $chosenOne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CHOSEN_DATE", type="datetime", nullable=true)
     */
    private $chosenDate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=true)
     */
    private $opportunityid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TECHAUDITDATE", type="datetime", nullable=true)
     */
    private $techauditdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OFFERTA_DATE", type="datetime", nullable=true)
     */
    private $offertaDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEASE_START_DATE", type="datetime", nullable=true)
     */
    private $leaseStartDate;


}
