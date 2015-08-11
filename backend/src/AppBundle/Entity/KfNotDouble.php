<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfNotDouble
 *
 * @ORM\Table(name="kf_not_double")
 * @ORM\Entity
 */
class KfNotDouble
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_1", type="string", length=12, nullable=true)
     */
    private $id1;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_2", type="string", length=12, nullable=true)
     */
    private $id2;



    /**
     * Set id1
     *
     * @param string $id1
     * @return KfNotDouble
     */
    public function setId1($id1)
    {
        $this->id1 = $id1;

        return $this;
    }

    /**
     * Get id1
     *
     * @return string 
     */
    public function getId1()
    {
        return $this->id1;
    }

    /**
     * Set id2
     *
     * @param string $id2
     * @return KfNotDouble
     */
    public function setId2($id2)
    {
        $this->id2 = $id2;

        return $this;
    }

    /**
     * Get id2
     *
     * @return string 
     */
    public function getId2()
    {
        return $this->id2;
    }
}
