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



    /**
     * Set newId
     *
     * @param string $newId
     * @return KfMergeRestore
     */
    public function setNewId($newId)
    {
        $this->newId = $newId;

        return $this;
    }

    /**
     * Get newId
     *
     * @return string 
     */
    public function getNewId()
    {
        return $this->newId;
    }

    /**
     * Set oldId
     *
     * @param string $oldId
     * @return KfMergeRestore
     */
    public function setOldId($oldId)
    {
        $this->oldId = $oldId;

        return $this;
    }

    /**
     * Get oldId
     *
     * @return string 
     */
    public function getOldId()
    {
        return $this->oldId;
    }
}
