<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAdditionalHfUsers
 *
 * @ORM\Table(name="kf_additional_hf_users")
 * @ORM\Entity
 */
class KfAdditionalHfUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=true)
     */
    private $managerid;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=true)
     */
    private $userid;


}
