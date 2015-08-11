<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfOppAgents
 *
 * @ORM\Table(name="KF_OPP_AGENTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_OPP_AGENTS_PRIMARY", columns={"KF_OPP_AGENTSID"})}, indexes={@ORM\Index(name="KF_OPP_AGENTS_OPPORTUNITYID", columns={"OPPORTUNITYID"})})
 * @ORM\Entity
 */
class KfOppAgents
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_OPP_AGENTSID", type="string", length=12, nullable=false)
     */
    private $kfOppAgentsid;

    /**
     * @var string
     *
     * @ORM\Column(name="OPPORTUNITYID", type="string", length=12, nullable=false)
     */
    private $opportunityid;

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
     * @ORM\Column(name="ACCOUNTID", type="string", length=12, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="AGENTS", type="string", length=512, nullable=true)
     */
    private $agents;



    /**
     * Set kfOppAgentsid
     *
     * @param string $kfOppAgentsid
     * @return KfOppAgents
     */
    public function setKfOppAgentsid($kfOppAgentsid)
    {
        $this->kfOppAgentsid = $kfOppAgentsid;

        return $this;
    }

    /**
     * Get kfOppAgentsid
     *
     * @return string 
     */
    public function getKfOppAgentsid()
    {
        return $this->kfOppAgentsid;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return KfOppAgents
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
     * @return KfOppAgents
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
     * @return KfOppAgents
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
     * @return KfOppAgents
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
     * @return KfOppAgents
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
     * Set accountid
     *
     * @param string $accountid
     * @return KfOppAgents
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return string 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set agents
     *
     * @param string $agents
     * @return KfOppAgents
     */
    public function setAgents($agents)
    {
        $this->agents = $agents;

        return $this;
    }

    /**
     * Get agents
     *
     * @return string 
     */
    public function getAgents()
    {
        return $this->agents;
    }
}
