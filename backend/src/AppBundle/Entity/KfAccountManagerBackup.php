<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAccountManagerBackup
 *
 * @ORM\Table(name="kf_account_manager_backup")
 * @ORM\Entity
 */
class KfAccountManagerBackup
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", length=12, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="accountmanagerid", type="string", length=12, nullable=true)
     */
    private $accountmanagerid;


}
