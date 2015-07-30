<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDelCnt
 *
 * @ORM\Table(name="kf_del_cnt")
 * @ORM\Entity
 */
class KfDelCnt
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="seccodeid", type="string", length=12, nullable=true)
     */
    private $seccodeid;


}
