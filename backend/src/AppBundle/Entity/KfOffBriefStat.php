<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffBriefStat
 *
 * @ORM\Table(name="KF_OFF_BRIEF_STAT")
 * @ORM\Entity
 */
class KfOffBriefStat
{
    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_RUS", type="text", length=16, nullable=false)
     */
    private $briefRus;

    /**
     * @var string
     *
     * @ORM\Column(name="BRIEF_ENG", type="text", length=16, nullable=false)
     */
    private $briefEng;

    /**
     * @var integer
     *
     * @ORM\Column(name="Chk_summ", type="integer", nullable=true)
     */
    private $chkSumm;


}
