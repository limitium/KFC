<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHelp
 *
 * @ORM\Table(name="KF_HELP", uniqueConstraints={@ORM\UniqueConstraint(name="KF_HELP_PRIMARY", columns={"KF_HELPID"})})
 * @ORM\Entity
 */
class KfHelp
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HELPID", type="string", length=12, nullable=false)
     */
    private $kfHelpid;

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
     * @ORM\Column(name="NOTES", type="string", length=512, nullable=true)
     */
    private $notes;



    /**
     * Set kfHelpid
     *
     * @param string $kfHelpid
     * @return KfHelp
     */
    public function setKfHelpid($kfHelpid)
    {
        $this->kfHelpid = $kfHelpid;

        return $this;
    }

    /**
     * Get kfHelpid
     *
     * @return string 
     */
    public function getKfHelpid()
    {
        return $this->kfHelpid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfHelp
     */
    public function setCreateuser($createuser)
    {
        $this->createuser = $createuser;

        return $this;
    }

    /**
     * Get createuser
     *
     * @return string 
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return KfHelp
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime 
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return KfHelp
     */
    public function setModifyuser($modifyuser)
    {
        $this->modifyuser = $modifyuser;

        return $this;
    }

    /**
     * Get modifyuser
     *
     * @return string 
     */
    public function getModifyuser()
    {
        return $this->modifyuser;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfHelp
     */
    public function setModifydate($modifydate)
    {
        $this->modifydate = $modifydate;

        return $this;
    }

    /**
     * Get modifydate
     *
     * @return \DateTime 
     */
    public function getModifydate()
    {
        return $this->modifydate;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfHelp
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}
