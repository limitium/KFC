<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfEmailsFromShemetova
 *
 * @ORM\Table(name="kf_emails_from_shemetova")
 * @ORM\Entity
 */
class KfEmailsFromShemetova
{
    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=255, nullable=true)
     */
    private $email;



    /**
     * Set email
     *
     * @param string $email
     * @return KfEmailsFromShemetova
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
