<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkCountry
 *
 */
class SpkCountry
{
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
    private $id;

    /**
     * @var string
     *
     */
    private $nameRus;

    /**
     * @var string
     *
     */
    private $nameEng;

    /**
     * @var string
     *
     */
    private $target;

    /**
     * @var string
     *
     */
    private $propertyType;

    /**
     * @var string
     *
     */
    private $status;

    /**
     * @var string
     *
     */
    private $statusKf;

    /**
     * @var string
     *
     */
    private $comments;

    /**
     * @var string
     *
     */
    private $parentid;

    /**
     * @var string
     *
     */
    private $propertyNumber;

    /**
     * @var string
     *
     */
    private $spkStreetid;

    /**
     * @var string
     *
     */
    private $seccodeid;

    /**
     * @var string
     *
     */
    private $streetNameRus;

    /**
     * @var string
     *
     */
    private $streetTypeRus;

    /**
     * @var string
     *
     */
    private $dogovor;

    /**
     * @var \DateTime
     *
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     */
    private $enddate;



    /**
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return SpkCountry
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
     * @return SpkCountry
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
     * @return SpkCountry
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
     * @return SpkCountry
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
     * @return SpkCountry
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
     * Set id
     *
     * @param string $id
     * @return SpkCountry
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameRus
     *
     * @param string $nameRus
     * @return SpkCountry
     */
    public function setNameRus($nameRus)
    {
        $this->nameRus = $nameRus;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string 
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set nameEng
     *
     * @param string $nameEng
     * @return SpkCountry
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string 
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return SpkCountry
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set propertyType
     *
     * @param string $propertyType
     * @return SpkCountry
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return SpkCountry
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusKf
     *
     * @param string $statusKf
     * @return SpkCountry
     */
    public function setStatusKf($statusKf)
    {
        $this->statusKf = $statusKf;

        return $this;
    }

    /**
     * Get statusKf
     *
     * @return string 
     */
    public function getStatusKf()
    {
        return $this->statusKf;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SpkCountry
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

    /**
     * Set parentid
     *
     * @param string $parentid
     * @return SpkCountry
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return string 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set propertyNumber
     *
     * @param string $propertyNumber
     * @return SpkCountry
     */
    public function setPropertyNumber($propertyNumber)
    {
        $this->propertyNumber = $propertyNumber;

        return $this;
    }

    /**
     * Get propertyNumber
     *
     * @return string 
     */
    public function getPropertyNumber()
    {
        return $this->propertyNumber;
    }

    /**
     * Set spkStreetid
     *
     * @param string $spkStreetid
     * @return SpkCountry
     */
    public function setSpkStreetid($spkStreetid)
    {
        $this->spkStreetid = $spkStreetid;

        return $this;
    }

    /**
     * Get spkStreetid
     *
     * @return string 
     */
    public function getSpkStreetid()
    {
        return $this->spkStreetid;
    }

    /**
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return SpkCountry
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set streetNameRus
     *
     * @param string $streetNameRus
     * @return SpkCountry
     */
    public function setStreetNameRus($streetNameRus)
    {
        $this->streetNameRus = $streetNameRus;

        return $this;
    }

    /**
     * Get streetNameRus
     *
     * @return string 
     */
    public function getStreetNameRus()
    {
        return $this->streetNameRus;
    }

    /**
     * Set streetTypeRus
     *
     * @param string $streetTypeRus
     * @return SpkCountry
     */
    public function setStreetTypeRus($streetTypeRus)
    {
        $this->streetTypeRus = $streetTypeRus;

        return $this;
    }

    /**
     * Get streetTypeRus
     *
     * @return string 
     */
    public function getStreetTypeRus()
    {
        return $this->streetTypeRus;
    }

    /**
     * Set dogovor
     *
     * @param string $dogovor
     * @return SpkCountry
     */
    public function setDogovor($dogovor)
    {
        $this->dogovor = $dogovor;

        return $this;
    }

    /**
     * Get dogovor
     *
     * @return string 
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return SpkCountry
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return SpkCountry
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
}
