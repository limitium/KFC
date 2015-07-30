<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSrTemp20140820
 *
 * @ORM\Table(name="KF_SR_TEMP_20140820")
 * @ORM\Entity
 */
class KfSrTemp20140820
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
     * @ORM\Column(name="seccodeid", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="oldmanagerid", type="string", length=8, nullable=false)
     */
    private $oldmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=11, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="segment", type="string", length=13, nullable=false)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="newmanagerid", type="string", length=12, nullable=false)
     */
    private $newmanagerid;


}
