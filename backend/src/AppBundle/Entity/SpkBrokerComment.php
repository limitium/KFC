<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkBrokerComment
 *
 */
class SpkBrokerComment
{
    /**
     * @var string
     *
     */
    private $spkBrokerCommentid;

    /**
     * @var string
     *
     */
    private $spkAllLonglistid;

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
    private $commentar;

    /**
     * @var string
     *
     */
    private $opportunityid;



    /**
     * Set spkBrokerCommentid
     *
     * @param string $spkBrokerCommentid
     * @return SpkBrokerComment
     */
    public function setSpkBrokerCommentid($spkBrokerCommentid)
    {
        $this->spkBrokerCommentid = $spkBrokerCommentid;

        return $this;
    }

    /**
     * Get spkBrokerCommentid
     *
     * @return string 
     */
    public function getSpkBrokerCommentid()
    {
        return $this->spkBrokerCommentid;
    }

    /**
     * Set spkAllLonglistid
     *
     * @param string $spkAllLonglistid
     * @return SpkBrokerComment
     */
    public function setSpkAllLonglistid($spkAllLonglistid)
    {
        $this->spkAllLonglistid = $spkAllLonglistid;

        return $this;
    }

    /**
     * Get spkAllLonglistid
     *
     * @return string 
     */
    public function getSpkAllLonglistid()
    {
        return $this->spkAllLonglistid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkBrokerComment
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
     * @return SpkBrokerComment
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
     * @return SpkBrokerComment
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
     * @return SpkBrokerComment
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
     * Set commentar
     *
     * @param string $commentar
     * @return SpkBrokerComment
     */
    public function setCommentar($commentar)
    {
        $this->commentar = $commentar;

        return $this;
    }

    /**
     * Get commentar
     *
     * @return string 
     */
    public function getCommentar()
    {
        return $this->commentar;
    }

    /**
     * Set opportunityid
     *
     * @param string $opportunityid
     * @return SpkBrokerComment
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
}
