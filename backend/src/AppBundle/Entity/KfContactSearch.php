<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfContactSearch
 *
 * @ORM\Table(name="KF_CONTACT_SEARCH")
 * @ORM\Entity
 */
class KfContactSearch
{
    /**
     * @var string
     *
     * @ORM\Column(name="FIORUS", type="string", length=130, nullable=true)
     */
    private $fiorus;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAILS", type="string", length=388, nullable=true)
     */
    private $emails;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_123", type="string", length=585, nullable=true)
     */
    private $poisk123;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC", type="string", length=906, nullable=true)
     */
    private $poiskAbc;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_ABC_RUS", type="string", length=516, nullable=true)
     */
    private $poiskAbcRus;

    /**
     * @var string
     *
     * @ORM\Column(name="POISK_EMAIL", type="string", length=388, nullable=true)
     */
    private $poiskEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="POINTS", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULT", type="string", length=9, nullable=false)
     */
    private $result;



    /**
     * Set fiorus
     *
     * @param string $fiorus
     * @return KfContactSearch
     */
    public function setFiorus($fiorus)
    {
        $this->fiorus = $fiorus;

        return $this;
    }

    /**
     * Get fiorus
     *
     * @return string 
     */
    public function getFiorus()
    {
        return $this->fiorus;
    }

    /**
     * Set emails
     *
     * @param string $emails
     * @return KfContactSearch
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get emails
     *
     * @return string 
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return KfContactSearch
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
     * Set poisk123
     *
     * @param string $poisk123
     * @return KfContactSearch
     */
    public function setPoisk123($poisk123)
    {
        $this->poisk123 = $poisk123;

        return $this;
    }

    /**
     * Get poisk123
     *
     * @return string 
     */
    public function getPoisk123()
    {
        return $this->poisk123;
    }

    /**
     * Set poiskAbc
     *
     * @param string $poiskAbc
     * @return KfContactSearch
     */
    public function setPoiskAbc($poiskAbc)
    {
        $this->poiskAbc = $poiskAbc;

        return $this;
    }

    /**
     * Get poiskAbc
     *
     * @return string 
     */
    public function getPoiskAbc()
    {
        return $this->poiskAbc;
    }

    /**
     * Set poiskAbcRus
     *
     * @param string $poiskAbcRus
     * @return KfContactSearch
     */
    public function setPoiskAbcRus($poiskAbcRus)
    {
        $this->poiskAbcRus = $poiskAbcRus;

        return $this;
    }

    /**
     * Get poiskAbcRus
     *
     * @return string 
     */
    public function getPoiskAbcRus()
    {
        return $this->poiskAbcRus;
    }

    /**
     * Set poiskEmail
     *
     * @param string $poiskEmail
     * @return KfContactSearch
     */
    public function setPoiskEmail($poiskEmail)
    {
        $this->poiskEmail = $poiskEmail;

        return $this;
    }

    /**
     * Get poiskEmail
     *
     * @return string 
     */
    public function getPoiskEmail()
    {
        return $this->poiskEmail;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return KfContactSearch
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return KfContactSearch
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
