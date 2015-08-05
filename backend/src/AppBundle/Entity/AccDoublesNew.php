<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccDoublesNew
 *
 * @ORM\Table(name="Acc_Doubles_New")
 * @ORM\Entity
 */
class AccDoublesNew
{
    /**
     * @var float
     *
     * @ORM\Column(name="Number", type="float", precision=53, scale=0, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountID1", type="string", length=12, nullable=true)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountID2", type="string", length=12, nullable=true)
     */
    private $accountid2;

    /**
     * @var float
     *
     * @ORM\Column(name="NumAcc", type="float", precision=53, scale=0, nullable=true)
     */
    private $numacc;

    /**
     * @var float
     *
     * @ORM\Column(name="NumWeb", type="float", precision=53, scale=0, nullable=true)
     */
    private $numweb;


}
