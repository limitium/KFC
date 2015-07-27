<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkEmployesTeam
 *
 */
class SpkEmployesTeam
{
    /**
     * @var string
     *
     */
    private $spkEmployesTeamid;

    /**
     * @var string
     *
     */
    private $spkPropertyid;

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
    private $team;

    /**
     * @var string
     *
     */
    private $userid;

    /**
     * @var string
     *
     */
    private $employeRole;

    /**
     * @var float
     *
     */
    private $part;

    /**
     * @var string
     *
     */
    private $comments;



    /**
     * Set spkEmployesTeamid
     *
     * @param string $spkEmployesTeamid
     * @return SpkEmployesTeam
     */
    public function setSpkEmployesTeamid($spkEmployesTeamid)
    {
        $this->spkEmployesTeamid = $spkEmployesTeamid;

        return $this;
    }

    /**
     * Get spkEmployesTeamid
     *
     * @return string 
     */
    public function getSpkEmployesTeamid()
    {
        return $this->spkEmployesTeamid;
    }

    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkEmployesTeam
     */
    public function setSpkPropertyid($spkPropertyid)
    {
        $this->spkPropertyid = $spkPropertyid;

        return $this;
    }

    /**
     * Get spkPropertyid
     *
     * @return string 
     */
    public function getSpkPropertyid()
    {
        return $this->spkPropertyid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkEmployesTeam
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
     * @return SpkEmployesTeam
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
     * @return SpkEmployesTeam
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
     * @return SpkEmployesTeam
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
     * Set team
     *
     * @param string $team
     * @return SpkEmployesTeam
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return SpkEmployesTeam
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set employeRole
     *
     * @param string $employeRole
     * @return SpkEmployesTeam
     */
    public function setEmployeRole($employeRole)
    {
        $this->employeRole = $employeRole;

        return $this;
    }

    /**
     * Get employeRole
     *
     * @return string 
     */
    public function getEmployeRole()
    {
        return $this->employeRole;
    }

    /**
     * Set part
     *
     * @param float $part
     * @return SpkEmployesTeam
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
     * Set comments
     *
     * @param string $comments
     * @return SpkEmployesTeam
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
