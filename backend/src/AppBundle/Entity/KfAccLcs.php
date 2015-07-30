<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccLcs
 *
 * @ORM\Table(name="kf_acc_lcs")
 * @ORM\Entity
 */
class KfAccLcs
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID1", type="string", length=12, nullable=false)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID2", type="string", length=12, nullable=false)
     */
    private $accountid2;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNT", type="string", length=128, nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTrus", type="string", length=128, nullable=true)
     */
    private $accountrus;

    /**
     * @var string
     *
     * @ORM\Column(name="MAINPHONE", type="string", length=32, nullable=true)
     */
    private $mainphone;

    /**
     * @var string
     *
     * @ORM\Column(name="WEBADDRESS", type="string", length=128, nullable=true)
     */
    private $webaddress;


}
