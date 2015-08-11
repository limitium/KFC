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



    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfAccountManagerBackup
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set accountmanagerid
     *
     * @param string $accountmanagerid
     * @return KfAccountManagerBackup
     */
    public function setAccountmanagerid($accountmanagerid)
    {
        $this->accountmanagerid = $accountmanagerid;

        return $this;
    }

    /**
     * Get accountmanagerid
     *
     * @return string 
     */
    public function getAccountmanagerid()
    {
        return $this->accountmanagerid;
    }
}
