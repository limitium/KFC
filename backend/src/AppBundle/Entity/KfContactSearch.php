<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactSearch
 *
 * @ORM\Table(name="KF_CONTACT_SEARCH")
 * @ORM\Entity
 */
class KfContactSearch
{
    /**
     * @var string
     *
     * @ORM\Column(name="FIORUS", type="string", length=130, nullable=true)
     */
    private $fiorus;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAILS", type="string", length=388, nullable=true)
     */
    private $emails;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_123", type="string", length=585, nullable=true)
     */
    private $poisk123;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC", type="string", length=906, nullable=true)
     */
    private $poiskAbc;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC_RUS", type="string", length=516, nullable=true)
     */
    private $poiskAbcRus;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_EMAIL", type="string", length=388, nullable=true)
     */
    private $poiskEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="POINTS", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;


}
