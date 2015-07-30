<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHelper
 *
 * @ORM\Table(name="KF_Helper")
 * @ORM\Entity
 */
class KfHelper
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_Helperid", type="string", length=12, nullable=true)
     */
    private $kfHelperid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="date", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="createuser", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifydate", type="date", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="modifyuser", type="string", length=12, nullable=true)
     */
    private $modifyuser;


}
