<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfPropertyVisited
 *
 * @ORM\Table(name="KF_PROPERTY_VISITED", uniqueConstraints={@ORM\UniqueConstraint(name="KF_PROPERTY_VISITED_PRIMARY", columns={"KF_PROPERTY_VISITEDID"})})
 * @ORM\Entity
 */
class KfPropertyVisited
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_PROPERTY_VISITEDID", type="string", length=12, nullable=false)
     */
    private $kfPropertyVisitedid;

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
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="VISITED", type="string", length=1, nullable=true)
     */
    private $visited;



    /**
     * Set kfPropertyVisitedid
     *
     * @param string $kfPropertyVisitedid
     * @return KfPropertyVisited
     */
    public function setKfPropertyVisitedid($kfPropertyVisitedid)
    {
        $this->kfPropertyVisitedid = $kfPropertyVisitedid;

        return $this;
    }

    /**
     * Get kfPropertyVisitedid
     *
     * @return string 
     */
    public function getKfPropertyVisitedid()
    {
        return $this->kfPropertyVisitedid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfPropertyVisited
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
     * @return KfPropertyVisited
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
     * @return KfPropertyVisited
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
     * @return KfPropertyVisited
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfPropertyVisited
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
     * Set userid
     *
     * @param string $userid
     * @return KfPropertyVisited
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
     * Set visited
     *
     * @param string $visited
     * @return KfPropertyVisited
     */
    public function setVisited($visited)
    {
        $this->visited = $visited;

        return $this;
    }

    /**
     * Get visited
     *
     * @return string 
     */
    public function getVisited()
    {
        return $this->visited;
    }
}
