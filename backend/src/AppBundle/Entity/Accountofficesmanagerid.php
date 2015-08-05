<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountofficesmanagerid
 *
 * @ORM\Table(name="accountofficesmanagerid")
 * @ORM\Entity
 */
class Accountofficesmanagerid
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
     * @ORM\Column(name="officesmanagerid", type="string", length=32, nullable=true)
     */
    private $officesmanagerid;


}
