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


}
