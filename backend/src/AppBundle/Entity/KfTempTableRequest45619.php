<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempTableRequest45619
 *
 * @ORM\Table(name="kf_temp_table_request_45619")
 * @ORM\Entity
 */
class KfTempTableRequest45619
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=7, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=1, nullable=false)
     */
    private $category;



    /**
     * Set id
     *
     * @param string $id
     * @return KfTempTableRequest45619
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return KfTempTableRequest45619
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
