<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IMAG\LdapBundle\User\LdapUser;

/**
 * User
 */
class User extends LdapUser
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $dbUsername;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dbUsername
     *
     * @param string $dbUsername
     * @return User
     */
    public function setDbUsername($dbUsername)
    {
        $this->dbUsername = $dbUsername;

        return $this;
    }

    /**
     * Get dbUsername
     *
     * @return string 
     */
    public function getDbUsername()
    {
        return $this->dbUsername;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
