<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingTeam
 *
 * @ORM\Table(name="KF_MARKETING_TEAM", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_TEAM_PRIMARY", columns={"KF_MARKETING_TEAMID"})}, indexes={@ORM\Index(name="KF_MARKETING_TEAM_KF_MARKETING_PROJECTSID", columns={"KF_MARKETING_PROJECTSID"})})
 * @ORM\Entity
 */
class KfMarketingTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_TEAMID", type="string", length=12, nullable=false)
     */
    private $kfMarketingTeamid;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_PROJECTSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingProjectsid;

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
     * @ORM\Column(name="USER_ROLE", type="string", length=64, nullable=true)
     */
    private $userRole;

    /**
     * @var float
     *
     * @ORM\Column(name="PART", type="float", precision=53, scale=0, nullable=true)
     */
    private $part;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTES", type="string", length=512, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="BROKER", type="string", length=12, nullable=true)
     */
    private $broker;



    /**
     * Set kfMarketingTeamid
     *
     * @param string $kfMarketingTeamid
     * @return KfMarketingTeam
     */
    public function setKfMarketingTeamid($kfMarketingTeamid)
    {
        $this->kfMarketingTeamid = $kfMarketingTeamid;

        return $this;
    }

    /**
     * Get kfMarketingTeamid
     *
     * @return string 
     */
    public function getKfMarketingTeamid()
    {
        return $this->kfMarketingTeamid;
    }

    /**
     * Set kfMarketingProjectsid
     *
     * @param string $kfMarketingProjectsid
     * @return KfMarketingTeam
     */
    public function setKfMarketingProjectsid($kfMarketingProjectsid)
    {
        $this->kfMarketingProjectsid = $kfMarketingProjectsid;

        return $this;
    }

    /**
     * Get kfMarketingProjectsid
     *
     * @return string 
     */
    public function getKfMarketingProjectsid()
    {
        return $this->kfMarketingProjectsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketingTeam
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
     * @return KfMarketingTeam
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
     * @return KfMarketingTeam
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
     * @return KfMarketingTeam
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
     * Set userRole
     *
     * @param string $userRole
     * @return KfMarketingTeam
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return string 
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Set part
     *
     * @param float $part
     * @return KfMarketingTeam
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return float 
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return KfMarketingTeam
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

    /**
     * Set broker
     *
     * @param string $broker
     * @return KfMarketingTeam
     */
    public function setBroker($broker)
    {
        $this->broker = $broker;

        return $this;
    }

    /**
     * Get broker
     *
     * @return string 
     */
    public function getBroker()
    {
        return $this->broker;
    }
}
