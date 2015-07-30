<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfLandlordsBackup
 *
 * @ORM\Table(name="kf_landlords_backup")
 * @ORM\Entity
 */
class KfLandlordsBackup
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=true)
     */
    private $accountid;


}
