<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfGetTrueOpps
 *
 * @ORM\Table(name="kf_get_true_opps")
 * @ORM\Entity
 */
class KfGetTrueOpps
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=false)
     */
    private $accountid;


}
