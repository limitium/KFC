<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpkManage
 *
 */
class SpkManage
{
    /**
     * @var string
     *
     */
    private $spkManageid;

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
     * @var integer
     *
     */
    private $residential;

    /**
     * @var integer
     *
     */
    private $retail;

    /**
     * @var integer
     *
     */
    private $office;

    /**
     * @var integer
     *
     */
    private $industrial;

    /**
     * @var string
     *
     */
    private $serverPath;

    /**
     * @var string
     *
     */
    private $webPath;



    /**
     * Set spkManageid
     *
     * @param string $spkManageid
     * @return SpkManage
     */
    public function setSpkManageid($spkManageid)
    {
        $this->spkManageid = $spkManageid;

        return $this;
    }

    /**
     * Get spkManageid
     *
     * @return string 
     */
    public function getSpkManageid()
    {
        return $this->spkManageid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return SpkManage
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
     * @return SpkManage
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
     * @return SpkManage
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
     * @return SpkManage
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
     * Set residential
     *
     * @param integer $residential
     * @return SpkManage
     */
    public function setResidential($residential)
    {
        $this->residential = $residential;

        return $this;
    }

    /**
     * Get residential
     *
     * @return integer 
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * Set retail
     *
     * @param integer $retail
     * @return SpkManage
     */
    public function setRetail($retail)
    {
        $this->retail = $retail;

        return $this;
    }

    /**
     * Get retail
     *
     * @return integer 
     */
    public function getRetail()
    {
        return $this->retail;
    }

    /**
     * Set office
     *
     * @param integer $office
     * @return SpkManage
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return integer 
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set industrial
     *
     * @param integer $industrial
     * @return SpkManage
     */
    public function setIndustrial($industrial)
    {
        $this->industrial = $industrial;

        return $this;
    }

    /**
     * Get industrial
     *
     * @return integer 
     */
    public function getIndustrial()
    {
        return $this->industrial;
    }

    /**
     * Set serverPath
     *
     * @param string $serverPath
     * @return SpkManage
     */
    public function setServerPath($serverPath)
    {
        $this->serverPath = $serverPath;

        return $this;
    }

    /**
     * Get serverPath
     *
     * @return string 
     */
    public function getServerPath()
    {
        return $this->serverPath;
    }

    /**
     * Set webPath
     *
     * @param string $webPath
     * @return SpkManage
     */
    public function setWebPath($webPath)
    {
        $this->webPath = $webPath;

        return $this;
    }

    /**
     * Get webPath
     *
     * @return string 
     */
    public function getWebPath()
    {
        return $this->webPath;
    }
}
