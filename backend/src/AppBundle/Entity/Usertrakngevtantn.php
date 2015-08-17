<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertrakngevtantn
 */
class Usertrakngevtantn
{
    /**
     * @var string
     */
    private $usertrackingeventannotationid;

    /**
     * @var string
     */
    private $usertrackingeventid;

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
    private $annotation;


    /**
     * Set usertrackingeventannotationid
     *
     * @param string $usertrackingeventannotationid
     * @return Usertrakngevtantn
     */
    public function setUsertrackingeventannotationid($usertrackingeventannotationid)
    {
        $this->usertrackingeventannotationid = $usertrackingeventannotationid;

        return $this;
    }

    /**
     * Get usertrackingeventannotationid
     *
     * @return string 
     */
    public function getUsertrackingeventannotationid()
    {
        return $this->usertrackingeventannotationid;
    }

    /**
     * Set usertrackingeventid
     *
     * @param string $usertrackingeventid
     * @return Usertrakngevtantn
     */
    public function setUsertrackingeventid($usertrackingeventid)
    {
        $this->usertrackingeventid = $usertrackingeventid;

        return $this;
    }

    /**
     * Get usertrackingeventid
     *
     * @return string 
     */
    public function getUsertrackingeventid()
    {
        return $this->usertrackingeventid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Usertrakngevtantn
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
     * @return Usertrakngevtantn
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
     * @return Usertrakngevtantn
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
     * @return Usertrakngevtantn
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
     * Set annotation
     *
     * @param string $annotation
     * @return Usertrakngevtantn
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;

        return $this;
    }

    /**
     * Get annotation
     *
     * @return string 
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }
}
