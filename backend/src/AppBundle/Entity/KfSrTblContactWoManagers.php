<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSrTblContactWoManagers
 *
 * @ORM\Table(name="KF_SR_TBL_CONTACT_WO_MANAGERS")
 * @ORM\Entity
 */
class KfSrTblContactWoManagers
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="managerid", type="string", length=12, nullable=false)
     */
    private $managerid;


}
