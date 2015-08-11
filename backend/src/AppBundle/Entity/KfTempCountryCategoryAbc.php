<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempCountryCategoryAbc
 *
 * @ORM\Table(name="kf_temp_country_category_ABC")
 * @ORM\Entity
 */
class KfTempCountryCategoryAbc
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=7, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=27, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Category", type="string", length=1, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="Market", type="string", length=9, nullable=true)
     */
    private $market;



    /**
     * Set id
     *
     * @param string $id
     * @return KfTempCountryCategoryAbc
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
     * Set name
     *
     * @param string $name
     * @return KfTempCountryCategoryAbc
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return KfTempCountryCategoryAbc
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

    /**
     * Set market
     *
     * @param string $market
     * @return KfTempCountryCategoryAbc
     */
    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Get market
     *
     * @return string 
     */
    public function getMarket()
    {
        return $this->market;
    }
}
