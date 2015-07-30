<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMergeRestore
 *
 * @ORM\Table(name="kf_merge_restore")
 * @ORM\Entity
 */
class KfMergeRestore
{
    /**
     * @var string
     *
     * @ORM\Column(name="new_id", type="string", length=12, nullable=true)
     */
    private $newId;

    /**
     * @var string
     *
     * @ORM\Column(name="old_id", type="string", length=12, nullable=true)
     */
    private $oldId;


}
