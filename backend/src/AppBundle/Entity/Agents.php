<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agents
 *
 * @ORM\Table(name="AGENTS", uniqueConstraints={@ORM\UniqueConstraint(name="XPKAGENTS", columns={"AGENTID"})})
 * @ORM\Entity
 */
class Agents
{
    /**
     * @var string
     *
     * @ORM\Column(name="AGENTID", type="string", length=12, nullable=false)
     */
    private $agentid;

    /**
     * @var string
     *
     * @ORM\Column(name="AGENTNAME", type="string", length=32, nullable=true)
     */
    private $agentname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENABLED", type="integer", nullable=true)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="GROUPID", type="string", length=12, nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="HOSTID", type="string", length=12, nullable=true)
     */
    private $hostid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NEXTRUN", type="datetime", nullable=true)
     */
    private $nextrun;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIOD", type="integer", nullable=true)
     */
    private $period;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIODSPEC", type="integer", nullable=true)
     */
    private $periodspec;

    /**
     * @var integer
     *
     * @ORM\Column(name="PERIODDATA", type="integer", nullable=true)
     */
    private $perioddata;

    /**
     * @var integer
     *
     * @ORM\Column(name="ITERATIONS", type="integer", nullable=true)
     */
    private $iterations;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=16, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;



    /**
     * Set agentid
     *
     * @param string $agentid
     * @return Agents
     */
    public function setAgentid($agentid)
    {
        $this->agentid = $agentid;

        return $this;
    }

    /**
     * Get agentid
     *
     * @return string 
     */
    public function getAgentid()
    {
        return $this->agentid;
    }

    /**
     * Set agentname
     *
     * @param string $agentname
     * @return Agents
     */
    public function setAgentname($agentname)
    {
        $this->agentname = $agentname;

        return $this;
    }

    /**
     * Get agentname
     *
     * @return string 
     */
    public function getAgentname()
    {
        return $this->agentname;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Agents
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Agents
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return Agents
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
     * Set groupid
     *
     * @param string $groupid
     * @return Agents
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return string 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set hostid
     *
     * @param string $hostid
     * @return Agents
     */
    public function setHostid($hostid)
    {
        $this->hostid = $hostid;

        return $this;
    }

    /**
     * Get hostid
     *
     * @return string 
     */
    public function getHostid()
    {
        return $this->hostid;
    }

    /**
     * Set nextrun
     *
     * @param \DateTime $nextrun
     * @return Agents
     */
    public function setNextrun($nextrun)
    {
        $this->nextrun = $nextrun;

        return $this;
    }

    /**
     * Get nextrun
     *
     * @return \DateTime 
     */
    public function getNextrun()
    {
        return $this->nextrun;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return Agents
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set periodspec
     *
     * @param integer $periodspec
     * @return Agents
     */
    public function setPeriodspec($periodspec)
    {
        $this->periodspec = $periodspec;

        return $this;
    }

    /**
     * Get periodspec
     *
     * @return integer 
     */
    public function getPeriodspec()
    {
        return $this->periodspec;
    }

    /**
     * Set perioddata
     *
     * @param integer $perioddata
     * @return Agents
     */
    public function setPerioddata($perioddata)
    {
        $this->perioddata = $perioddata;

        return $this;
    }

    /**
     * Get perioddata
     *
     * @return integer 
     */
    public function getPerioddata()
    {
        return $this->perioddata;
    }

    /**
     * Set iterations
     *
     * @param integer $iterations
     * @return Agents
     */
    public function setIterations($iterations)
    {
        $this->iterations = $iterations;

        return $this;
    }

    /**
     * Get iterations
     *
     * @return integer 
     */
    public function getIterations()
    {
        return $this->iterations;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Agents
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Agents
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

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Agents
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return Agents
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
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Agents
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
     * Set createuser
     *
     * @param string $createuser
     * @return Agents
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
}
