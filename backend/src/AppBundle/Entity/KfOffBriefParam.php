<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefParam
 *
 * @ORM\Table(name="KF_OFF_BRIEF_PARAM", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OFF_BRIEF_PARAM_PRIMARY", columns={"SPK_PROPERTYID"})}, indexes={@ORM\Index(name="_dta_index_KF_OFF_BRIEF_PARAM_5_690817523__K1_7", columns={"SPK_PROPERTYID", "COMPLEX_NAME"})})
 * @ORM\Entity
 */
class KfOffBriefParam
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
     * @var string
     *
     * @ORM\Column(name="BRIEF_PARAM", type="string", length=1024, nullable=true)
     */
    private $briefParam;

    /**
     * @var string
     *
     * @ORM\Column(name="COMPLEX_NAME", type="string", length=256, nullable=true)
     */
    private $complexName;


}
