<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Virtualfilesystem
 */
class Virtualfilesystem
{
    /**
     * @var string
     */
    private $virtualfilesystemid;

    /**
     * @var string
     */
    private $createuser;

    /**
     * @var \DateTime
     */
    private $createdate;

    /**
     * @var string
     */
    private $modifyuser;

    /**
     * @var \DateTime
     */
    private $modifydate;

    /**
     * @var string
     */
    private $parentitemid;

    /**
     * @var string
     */
    private $itemname;

    /**
     * @var string
     */
    private $itempath;

    /**
     * @var string
     */
    private $itemextension;

    /**
     * @var string
     */
    private $isdirectory;

    /**
     * @var string
     */
    private $isreadonly;

    /**
     * @var string
     */
    private $issystem;

    /**
     * @var string
     */
    private $ishidden;

    /**
     * @var string
     */
    private $itemdata;

    /**
     * @var string
     */
    private $itemattributes;


    /**
     * Set virtualfilesystemid
     *
     * @param string $virtualfilesystemid
     * @return Virtualfilesystem
     */
    public function setVirtualfilesystemid($virtualfilesystemid)
    {
        $this->virtualfilesystemid = $virtualfilesystemid;

        return $this;
    }

    /**
     * Get virtualfilesystemid
     *
     * @return string 
     */
    public function getVirtualfilesystemid()
    {
        return $this->virtualfilesystemid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Virtualfilesystem
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
     * @return Virtualfilesystem
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
     * @return Virtualfilesystem
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
     * @return Virtualfilesystem
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
     * Set parentitemid
     *
     * @param string $parentitemid
     * @return Virtualfilesystem
     */
    public function setParentitemid($parentitemid)
    {
        $this->parentitemid = $parentitemid;

        return $this;
    }

    /**
     * Get parentitemid
     *
     * @return string 
     */
    public function getParentitemid()
    {
        return $this->parentitemid;
    }

    /**
     * Set itemname
     *
     * @param string $itemname
     * @return Virtualfilesystem
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string 
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set itempath
     *
     * @param string $itempath
     * @return Virtualfilesystem
     */
    public function setItempath($itempath)
    {
        $this->itempath = $itempath;

        return $this;
    }

    /**
     * Get itempath
     *
     * @return string 
     */
    public function getItempath()
    {
        return $this->itempath;
    }

    /**
     * Set itemextension
     *
     * @param string $itemextension
     * @return Virtualfilesystem
     */
    public function setItemextension($itemextension)
    {
        $this->itemextension = $itemextension;

        return $this;
    }

    /**
     * Get itemextension
     *
     * @return string 
     */
    public function getItemextension()
    {
        return $this->itemextension;
    }

    /**
     * Set isdirectory
     *
     * @param string $isdirectory
     * @return Virtualfilesystem
     */
    public function setIsdirectory($isdirectory)
    {
        $this->isdirectory = $isdirectory;

        return $this;
    }

    /**
     * Get isdirectory
     *
     * @return string 
     */
    public function getIsdirectory()
    {
        return $this->isdirectory;
    }

    /**
     * Set isreadonly
     *
     * @param string $isreadonly
     * @return Virtualfilesystem
     */
    public function setIsreadonly($isreadonly)
    {
        $this->isreadonly = $isreadonly;

        return $this;
    }

    /**
     * Get isreadonly
     *
     * @return string 
     */
    public function getIsreadonly()
    {
        return $this->isreadonly;
    }

    /**
     * Set issystem
     *
     * @param string $issystem
     * @return Virtualfilesystem
     */
    public function setIssystem($issystem)
    {
        $this->issystem = $issystem;

        return $this;
    }

    /**
     * Get issystem
     *
     * @return string 
     */
    public function getIssystem()
    {
        return $this->issystem;
    }

    /**
     * Set ishidden
     *
     * @param string $ishidden
     * @return Virtualfilesystem
     */
    public function setIshidden($ishidden)
    {
        $this->ishidden = $ishidden;

        return $this;
    }

    /**
     * Get ishidden
     *
     * @return string 
     */
    public function getIshidden()
    {
        return $this->ishidden;
    }

    /**
     * Set itemdata
     *
     * @param string $itemdata
     * @return Virtualfilesystem
     */
    public function setItemdata($itemdata)
    {
        $this->itemdata = $itemdata;

        return $this;
    }

    /**
     * Get itemdata
     *
     * @return string 
     */
    public function getItemdata()
    {
        return $this->itemdata;
    }

    /**
     * Set itemattributes
     *
     * @param string $itemattributes
     * @return Virtualfilesystem
     */
    public function setItemattributes($itemattributes)
    {
        $this->itemattributes = $itemattributes;

        return $this;
    }

    /**
     * Get itemattributes
     *
     * @return string 
     */
    public function getItemattributes()
    {
        return $this->itemattributes;
    }
}
