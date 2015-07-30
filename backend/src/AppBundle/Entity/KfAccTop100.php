<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccTop100
 *
 * @ORM\Table(name="kf_acc_top_100")
 * @ORM\Entity
 */
class KfAccTop100
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="a3_city", type="string", length=32, nullable=true)
     */
    private $a3City;

    /**
     * @var string
     *
     * @ORM\Column(name="a3_address3", type="string", length=128, nullable=true)
     */
    private $a3Address3;

    /**
     * @var string
     *
     * @ORM\Column(name="mainphone", type="string", length=32, nullable=true)
     */
    private $mainphone;

    /**
     * @var string
     *
     * @ORM\Column(name="a4_revenue", type="string", length=1000, nullable=true)
     */
    private $a4Revenue;

    /**
     * @var string
     *
     * @ORM\Column(name="a5_val", type="string", length=128, nullable=true)
     */
    private $a5Val;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=131, nullable=true)
     */
    private $industry;


}
