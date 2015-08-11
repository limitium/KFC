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



    /**
     * Set expr1
     *
     * @param integer $expr1
     * @return KfNullsInMetros
     */
    public function setExpr1($expr1)
    {
        $this->expr1 = $expr1;

        return $this;
    }

    /**
     * Get expr1
     *
     * @return integer 
     */
    public function getExpr1()
    {
        return $this->expr1;
    }
}
