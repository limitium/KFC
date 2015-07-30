<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTestseccode
 *
 * @ORM\Table(name="KF_testseccode")
 * @ORM\Entity
 */
class KfTestseccode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SQLVB", type="string", length=1, nullable=true)
     */
    private $sqlvb;

    /**
     * @var string
     *
     * @ORM\Column(name="entitytype", type="string", length=50, nullable=true)
     */
    private $entitytype;

    /**
     * @var string
     *
     * @ORM\Column(name="entityid", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="eventtype", type="string", length=50, nullable=true)
     */
    private $eventtype;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="entitydepartment", type="string", length=50, nullable=true)
     */
    private $entitydepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=12, nullable=true)
     */
    private $result;


}
