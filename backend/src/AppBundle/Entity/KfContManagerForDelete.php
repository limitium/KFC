<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContManagerForDelete
 *
 * @ORM\Table(name="KF_CONT_MANAGER_FOR_DELETE")
 * @ORM\Entity
 */
class KfContManagerForDelete
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=false)
     */
    private $managerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="days", type="integer", nullable=false)
     */
    private $days;


}
