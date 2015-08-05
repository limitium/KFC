<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccDoubles
 *
 * @ORM\Table(name="Acc_Doubles")
 * @ORM\Entity
 */
class AccDoubles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RANK", type="bigint", nullable=true)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID_1", type="string", length=1000, nullable=true)
     */
    private $accountid1;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCOUNTID_2", type="string", length=1000, nullable=true)
     */
    private $accountid2;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;


}
