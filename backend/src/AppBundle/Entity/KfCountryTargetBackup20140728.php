<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCountryTargetBackup20140728
 *
 * @ORM\Table(name="kf_country_target_backup_20140728")
 * @ORM\Entity
 */
class KfCountryTargetBackup20140728
{
    /**
     * @var string
     *
     * @ORM\Column(name="spk_propertyid", type="string", length=12, nullable=false)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=32, nullable=true)
     */
    private $target;


}
