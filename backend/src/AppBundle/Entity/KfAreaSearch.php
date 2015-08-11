<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfAreaSearch
 *
 * @ORM\Table(name="KF_AREA_SEARCH", uniqueConstraints={@ORM\UniqueConstraint(name="KF_AREA_SEARCH_PRIMARY", columns={"KF_AREA_SEARCHID"})})
 * @ORM\Entity
 */
class KfAreaSearch
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_AREA_SEARCHID", type="string", length=12, nullable=false)
     */
    private $kfAreaSearchid;

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
     * @ORM\Column(name="SEARCH_AREA_RUS", type="string", length=128, nullable=true)
     */
    private $searchAreaRus;

    /**
     * @var string
     *
     * @ORM\Column(name="SEARCH_AREA_ENG", type="string", length=128, nullable=true)
     */
    private $searchAreaEng;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_AREAID", type="string", length=12, nullable=true)
     */
    private $kfAreaid;



    /**
     * Set kfAreaSearchid
     *
     * @param string $kfAreaSearchid
     * @return KfAreaSearch
     */
    public function setKfAreaSearchid($kfAreaSearchid)
    {
        $this->kfAreaSearchid = $kfAreaSearchid;

        return $this;
    }

    /**
     * Get kfAreaSearchid
     *
     * @return string 
     */
    public function getKfAreaSearchid()
    {
        return $this->kfAreaSearchid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfAreaSearch
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
     * @return KfAreaSearch
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
     * @return KfAreaSearch
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
     * @return KfAreaSearch
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
     * Set searchAreaRus
     *
     * @param string $searchAreaRus
     * @return KfAreaSearch
     */
    public function setSearchAreaRus($searchAreaRus)
    {
        $this->searchAreaRus = $searchAreaRus;

        return $this;
    }

    /**
     * Get searchAreaRus
     *
     * @return string 
     */
    public function getSearchAreaRus()
    {
        return $this->searchAreaRus;
    }

    /**
     * Set searchAreaEng
     *
     * @param string $searchAreaEng
     * @return KfAreaSearch
     */
    public function setSearchAreaEng($searchAreaEng)
    {
        $this->searchAreaEng = $searchAreaEng;

        return $this;
    }

    /**
     * Get searchAreaEng
     *
     * @return string 
     */
    public function getSearchAreaEng()
    {
        return $this->searchAreaEng;
    }

    /**
     * Set kfAreaid
     *
     * @param string $kfAreaid
     * @return KfAreaSearch
     */
    public function setKfAreaid($kfAreaid)
    {
        $this->kfAreaid = $kfAreaid;

        return $this;
    }

    /**
     * Get kfAreaid
     *
     * @return string 
     */
    public function getKfAreaid()
    {
        return $this->kfAreaid;
    }
}
