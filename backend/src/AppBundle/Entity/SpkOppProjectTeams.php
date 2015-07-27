<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkOppProjectTeams
 *
 */
class SpkOppProjectTeams
{
    /**
     * @var string
     *
     */
    private $spkOppProjectTeamsid;

    /**
     * @var string
     *
     */
    private $opportunityid;

    /**
     * @var string
     *
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     */
    private $createdate;

    /**
     * @var string
     *
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     */
    private $modifydate;

    /**
     * @var string
     *
     */
    private $userRole;

    /**
     * @var float
     *
     */
    private $part;

    /**
     * @var string
     *
     */
    private $notes;

    /**
     * @var string
     *
     */
    private $broker;

    /**
     * @var float
     *
     */
    private $part2;



    /**
     * Set spkOppProjectTeamsid
     *
     * @param string $spkOppProjectTeamsid
     * @return SpkOppProjectTeams
     */
    public function setSpkOppProjectTeamsid($spkOppProjectTeamsid)
    {
        $this->spkOppProjectTeamsid = $spkOppProjectTeamsid;

        return $this;
    }

    /**
     * Get spkOppProjectTeamsid
     *
     * @return string 
     */
    public function getSpkOppProjectTeamsid()
    {
        return $this->spkOppProjectTeamsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkOppProjectTeams
     */
    public function setOpportunityid($opportunityid)
    {
        $this->opportunityid = $opportunityid;

        return $this;
    }

    /**
     * Get opportunityid
     *
     * @return string 
     */
    public function getOpportunityid()
    {
        return $this->opportunityid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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
     * @return SpkOppProjectTeams
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

    /**
     * Set part2
     *
     * @param float $part2
     * @return SpkOppProjectTeams
     */
    public function setPart2($part2)
    {
        $this->part2 = $part2;

        return $this;
    }

    /**
     * Get part2
     *
     * @return float 
     */
    public function getPart2()
    {
        return $this->part2;
    }
}
