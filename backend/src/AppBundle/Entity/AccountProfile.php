<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountProfile
 *
 * @ORM\Table(name="ACCOUNT_PROFILE", uniqueConstraints={@ORM\UniqueConstraint(name="ACCOUNT_PROFILE_PRIMARY", columns={"ACCOUNT_PROFILEID"})}, indexes={@ORM\Index(name="ACCOUNT_PROFILE_ACCOUNTID", columns={"ACCOUNTID", "AREAID", "PROFILEID", "SUBPROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K9", columns={"SUBPROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K8", columns={"PROFILEID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K7", columns={"AREAID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K9_K7_K8_K2", columns={"SUBPROFILEID", "AREAID", "PROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K8_K7_K9_K2", columns={"PROFILEID", "AREAID", "SUBPROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_7_903674267__K7_K8_K9_K2", columns={"AREAID", "PROFILEID", "SUBPROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_9_903674267__K8_K2", columns={"PROFILEID", "ACCOUNTID"}), @ORM\Index(name="_dta_index_ACCOUNT_PROFILE_9_903674267__K2_8", columns={"ACCOUNTID", "PROFILEID"})})
 * @ORM\Entity
 */
class AccountProfile
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT_PROFILEID", type="string", length=12, nullable=false)
     */
    private $accountProfileid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=false)
     */
    private $accountid;

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
     * @ORM\Column(name="AREAID", type="string", length=32, nullable=true)
     */
    private $areaid;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFILEID", type="string", length=32, nullable=true)
     */
    private $profileid;

    /**
     * @var string
     *
     * @ORM\Column(name="SUBPROFILEID", type="string", length=32, nullable=true)
     */
    private $subprofileid;


}
