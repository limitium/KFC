<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCianPropertyPics
 *
 * @ORM\Table(name="kf_cian_property_pics")
 * @ORM\Entity
 */
class KfCianPropertyPics
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=12, nullable=true)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SLX_ID", type="string", length=12, nullable=false)
     */
    private $slxId;

    /**
     * @var string
     *
     * @ORM\Column(name="KF_ID", type="string", length=12, nullable=true)
     */
    private $kfId;

    /**
     * @var string
     *
     * @ORM\Column(name="GPS_ID", type="string", length=50, nullable=true)
     */
    private $gpsId;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_ID", type="string", length=14, nullable=true)
     */
    private $photoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SERVER_LINK", type="string", length=2000, nullable=true)
     */
    private $serverLink;

    /**
     * @var string
     *
     * @ORM\Column(name="file_size", type="string", length=2000, nullable=true)
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="EXPORT", type="string", length=10, nullable=true)
     */
    private $export;

    /**
     * @var string
     *
     * @ORM\Column(name="ptype", type="string", length=64, nullable=true)
     */
    private $ptype;



    /**
     * Set id
     *
     * @param string $id
     * @return KfCianPropertyPics
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
     * Set slxId
     *
     * @param string $slxId
     * @return KfCianPropertyPics
     */
    public function setSlxId($slxId)
    {
        $this->slxId = $slxId;

        return $this;
    }

    /**
     * Get slxId
     *
     * @return string 
     */
    public function getSlxId()
    {
        return $this->slxId;
    }

    /**
     * Set kfId
     *
     * @param string $kfId
     * @return KfCianPropertyPics
     */
    public function setKfId($kfId)
    {
        $this->kfId = $kfId;

        return $this;
    }

    /**
     * Get kfId
     *
     * @return string 
     */
    public function getKfId()
    {
        return $this->kfId;
    }

    /**
     * Set gpsId
     *
     * @param string $gpsId
     * @return KfCianPropertyPics
     */
    public function setGpsId($gpsId)
    {
        $this->gpsId = $gpsId;

        return $this;
    }

    /**
     * Get gpsId
     *
     * @return string 
     */
    public function getGpsId()
    {
        return $this->gpsId;
    }

    /**
     * Set photoId
     *
     * @param string $photoId
     * @return KfCianPropertyPics
     */
    public function setPhotoId($photoId)
    {
        $this->photoId = $photoId;

        return $this;
    }

    /**
     * Get photoId
     *
     * @return string 
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return KfCianPropertyPics
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
     * Set serverLink
     *
     * @param string $serverLink
     * @return KfCianPropertyPics
     */
    public function setServerLink($serverLink)
    {
        $this->serverLink = $serverLink;

        return $this;
    }

    /**
     * Get serverLink
     *
     * @return string 
     */
    public function getServerLink()
    {
        return $this->serverLink;
    }

    /**
     * Set fileSize
     *
     * @param string $fileSize
     * @return KfCianPropertyPics
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Get fileSize
     *
     * @return string 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set export
     *
     * @param string $export
     * @return KfCianPropertyPics
     */
    public function setExport($export)
    {
        $this->export = $export;

        return $this;
    }

    /**
     * Get export
     *
     * @return string 
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Set ptype
     *
     * @param string $ptype
     * @return KfCianPropertyPics
     */
    public function setPtype($ptype)
    {
        $this->ptype = $ptype;

        return $this;
    }

    /**
     * Get ptype
     *
     * @return string 
     */
    public function getPtype()
    {
        return $this->ptype;
    }
}
