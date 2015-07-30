<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHomeFilter
 *
 * @ORM\Table(name="KF_HOME_FILTER")
 * @ORM\Entity
 */
class KfHomeFilter
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HOME_FILTERID", type="string", length=12, nullable=false)
     */
    private $kfHomeFilterid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTER_TYPE", type="string", length=32, nullable=true)
     */
    private $filterType;

    /**
     * @var string
     *
     * @ORM\Column(name="ACCESS_TYPE", type="string", length=32, nullable=true)
     */
    private $accessType;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUP_NAME", type="string", length=128, nullable=true)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="SQLTEXT", type="text", length=16, nullable=true)
     */
    private $sqltext;

    /**
     * @var string
     *
     * @ORM\Column(name="PS", type="string", length=32, nullable=true)
     */
    private $ps;


}
