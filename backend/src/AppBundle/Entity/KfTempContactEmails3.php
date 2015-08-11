<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfTempContactEmails3
 *
 * @ORM\Table(name="kf_temp_contact_emails3")
 * @ORM\Entity
 */
class KfTempContactEmails3
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
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfTempContactEmails3
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
     * Set email
     *
     * @param string $email
     * @return KfTempContactEmails3
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
