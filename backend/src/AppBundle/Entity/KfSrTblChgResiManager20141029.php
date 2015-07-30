<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSrTblChgResiManager20141029
 *
 * @ORM\Table(name="KF_SR_TBL_CHG_RESI_MANAGER_20141029")
 * @ORM\Entity
 */
class KfSrTblChgResiManager20141029
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactid", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="seccodeid", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="oldmanagerid", type="string", length=12, nullable=true)
     */
    private $oldmanagerid;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=32, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="Segment", type="string", length=32, nullable=true)
     */
    private $segment;

    /**
     * @var string
     *
     * @ORM\Column(name="newmanagerid", type="string", length=12, nullable=false)
     */
    private $newmanagerid;


}
