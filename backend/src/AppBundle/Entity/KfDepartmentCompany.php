<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfDepartmentCompany
 *
 * @ORM\Table(name="KF_DEPARTMENT_COMPANY", uniqueConstraints={@ORM\UniqueConstraint(name="KF_DEPARTMENT_COMPANY_PRIMARY", columns={"KF_DEPARTMENT_COMPANYID"})})
 * @ORM\Entity
 */
class KfDepartmentCompany
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_DEPARTMENT_COMPANYID", type="string", length=12, nullable=false)
     */
    private $kfDepartmentCompanyid;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPARTMENT", type="string", length=64, nullable=true)
     */
    private $department;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_ACTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountActs;

    /**
     * @var float
     *
     * @ORM\Column(name="AMOUNT_PAID", type="float", precision=53, scale=0, nullable=true)
     */
    private $amountPaid;

    /**
     * @var float
     *
     * @ORM\Column(name="NUMBER_ACTS", type="float", precision=53, scale=0, nullable=true)
     */
    private $numberActs;

    /**
     * @var float
     *
     * @ORM\Column(name="NUMBER_PAID", type="float", precision=53, scale=0, nullable=true)
     */
    private $numberPaid;


}
