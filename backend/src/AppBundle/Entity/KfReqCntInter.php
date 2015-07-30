<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReqCntInter
 *
 * @ORM\Table(name="KF_REQ_CNT_INTER", uniqueConstraints={@ORM\UniqueConstraint(name="KF_REQ_CNT_INTER_PRIMARY", columns={"KF_REQ_CNT_INTERID"})})
 * @ORM\Entity
 */
class KfReqCntInter
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_REQ_CNT_INTERID", type="string", length=12, nullable=false)
     */
    private $kfReqCntInterid;

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
     * @var integer
     *
     * @ORM\Column(name="ORD", type="smallint", nullable=true)
     */
    private $ord;

    /**
     * @var string
     *
     * @ORM\Column(name="LABL", type="string", length=128, nullable=true)
     */
    private $labl;


}
