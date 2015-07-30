<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfExpectedResponse
 *
 * @ORM\Table(name="KF_EXPECTED_RESPONSE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_EXPECTED_RESPONSE_PRIMARY", columns={"KF_EXPECTED_RESPONSEID"})}, indexes={@ORM\Index(name="KF_EXPECTED_RESPONSE_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfExpectedResponse
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_EXPECTED_RESPONSEID", type="string", length=12, nullable=false)
     */
    private $kfExpectedResponseid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

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
     * @ORM\Column(name="MONTHID", type="smallint", nullable=true)
     */
    private $monthid;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTHNAMERUS", type="string", length=32, nullable=true)
     */
    private $monthnamerus;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTHNAMEENG", type="string", length=32, nullable=true)
     */
    private $monthnameeng;

    /**
     * @var integer
     *
     * @ORM\Column(name="EXPECTED_RESPONSE", type="integer", nullable=true)
     */
    private $expectedResponse;


}
