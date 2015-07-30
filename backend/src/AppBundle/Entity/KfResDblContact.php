<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfResDblContact
 *
 * @ORM\Table(name="kf_res_dbl_CONTACT")
 * @ORM\Entity
 */
class KfResDblContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID1", type="string", length=12, nullable=true)
     */
    private $contactid1;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID2", type="string", length=12, nullable=true)
     */
    private $contactid2;

    /**
     * @var string
     *
     * @ORM\Column(name="userID", type="string", length=12, nullable=true)
     */
    private $userid;


}
