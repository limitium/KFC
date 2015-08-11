<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactManagers
 *
 * @ORM\Table(name="KF_CONTACT_MANAGERS", indexes={@ORM\Index(name="_dta_index_KF_CONTACT_MANAGERS_9_1409440095__K2_K1", columns={"MANAGERID", "CONTACTID"}), @ORM\Index(name="_dta_index_KF_CONTACT_MANAGERS_9_1409440095__K2", columns={"MANAGERID"}), @ORM\Index(name="_dta_index_KF_CONTACT_MANAGERS_9_1409440095__K1", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_KF_CONTACT_MANAGERS_9_1409440095__K1_K2", columns={"CONTACTID", "MANAGERID"})})
 * @ORM\Entity
 */
class KfContactManagers
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="MANAGERID", type="string", length=12, nullable=true)
     */
    private $managerid;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContactManagers
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set managerid
     *
     * @param string $managerid
     * @return KfContactManagers
     */
    public function setManagerid($managerid)
    {
        $this->managerid = $managerid;

        return $this;
    }

    /**
     * Get managerid
     *
     * @return string 
     */
    public function getManagerid()
    {
        return $this->managerid;
    }
}
