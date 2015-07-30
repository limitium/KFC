<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAreaSearch
 *
 * @ORM\Table(name="KF_AREA_SEARCH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_AREA_SEARCH_PRIMARY", columns={"KF_AREA_SEARCHID"})})
 * @ORM\Entity
 */
class KfAreaSearch
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_AREA_SEARCHID", type="string", length=12, nullable=false)
     */
    private $kfAreaSearchid;

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
     * @ORM\Column(name="SEARCH_AREA_RUS", type="string", length=128, nullable=true)
     */
    private $searchAreaRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SEARCH_AREA_ENG", type="string", length=128, nullable=true)
     */
    private $searchAreaEng;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_AREAID", type="string", length=12, nullable=true)
     */
    private $kfAreaid;


}
