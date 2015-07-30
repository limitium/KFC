<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNullsInMetros
 *
 * @ORM\Table(name="kf_nulls_in_metros")
 * @ORM\Entity
 */
class KfNullsInMetros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Expr1", type="integer", nullable=true)
     */
    private $expr1;


}
