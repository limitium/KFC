<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOffGrDump
 *
 * @ORM\Table(name="kf_off_gr_dump")
 * @ORM\Entity
 */
class KfOffGrDump
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
     * @ORM\Column(name="manager", type="string", length=1000, nullable=true)
     */
    private $manager;



    /**
     * Set accountid
     *
     * @param string $accountid
     * @return KfOffGrDump
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
     * Set manager
     *
     * @param string $manager
     * @return KfOffGrDump
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string 
     */
    public function getManager()
    {
        return $this->manager;
    }
}
