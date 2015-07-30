<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLists
 *
 * @ORM\Table(name="KF_LISTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_LISTS_PRIMARY", columns={"KF_LISTSID"})})
 * @ORM\Entity
 */
class KfLists
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_LISTSID", type="string", length=12, nullable=false)
     */
    private $kfListsid;

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
     * @ORM\Column(name="LISTID", type="string", length=12, nullable=true)
     */
    private $listid;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTITYID", type="string", length=12, nullable=true)
     */
    private $entityid;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVECAMPAIGNID", type="string", length=12, nullable=true)
     */
    private $activecampaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;


}
