<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfSearchRequests
 *
 * @ORM\Table(name="KF_SEARCH_REQUESTS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_SEARCH_REQUESTS_PRIMARY", columns={"KF_SEARCH_REQUESTSID"})})
 * @ORM\Entity
 */
class KfSearchRequests
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_SEARCH_REQUESTSID", type="string", length=12, nullable=false)
     */
    private $kfSearchRequestsid;

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
     * @ORM\Column(name="SEARCH_REQUESTS", type="string", length=1000, nullable=true)
     */
    private $searchRequests;



    /**
     * Set kfSearchRequestsid
     *
     * @param string $kfSearchRequestsid
     * @return KfSearchRequests
     */
    public function setKfSearchRequestsid($kfSearchRequestsid)
    {
        $this->kfSearchRequestsid = $kfSearchRequestsid;

        return $this;
    }

    /**
     * Get kfSearchRequestsid
     *
     * @return string 
     */
    public function getKfSearchRequestsid()
    {
        return $this->kfSearchRequestsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfSearchRequests
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
     * @return KfSearchRequests
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
     * @return KfSearchRequests
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
     * @return KfSearchRequests
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
     * Set searchRequests
     *
     * @param string $searchRequests
     * @return KfSearchRequests
     */
    public function setSearchRequests($searchRequests)
    {
        $this->searchRequests = $searchRequests;

        return $this;
    }

    /**
     * Get searchRequests
     *
     * @return string 
     */
    public function getSearchRequests()
    {
        return $this->searchRequests;
    }
}
