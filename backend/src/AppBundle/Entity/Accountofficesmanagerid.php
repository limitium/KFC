<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountofficesmanagerid
 *
 * @ORM\Table(name="accountofficesmanagerid")
 * @ORM\Entity
 */
class Accountofficesmanagerid
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
     * @ORM\Column(name="officesmanagerid", type="string", length=32, nullable=true)
     */
    private $officesmanagerid;



    /**
     * Set accountid
     *
     * @param string $accountid
     * @return Accountofficesmanagerid
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
     * Set officesmanagerid
     *
     * @param string $officesmanagerid
     * @return Accountofficesmanagerid
     */
    public function setOfficesmanagerid($officesmanagerid)
    {
        $this->officesmanagerid = $officesmanagerid;

        return $this;
    }

    /**
     * Get officesmanagerid
     *
     * @return string 
     */
    public function getOfficesmanagerid()
    {
        return $this->officesmanagerid;
    }
}
