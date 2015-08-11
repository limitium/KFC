<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactlink
 *
 * @ORM\Table(name="CONTACTLINK", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTACTLINK", columns={"CONTACTLINKID"})}, indexes={@ORM\Index(name="XIE1CONTACTLINK", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class Contactlink
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTLINKID", type="string", length=12, nullable=false)
     */
    private $contactlinkid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RCSEQNO", type="integer", nullable=false)
     */
    private $rcseqno;

    /**
     * @var string
     *
     * @ORM\Column(name="RCCOMMANDSTRING", type="string", length=80, nullable=true)
     */
    private $rccommandstring;

    /**
     * @var string
     *
     * @ORM\Column(name="RCDESC", type="string", length=80, nullable=true)
     */
    private $rcdesc;

    /**
     * @var string
     *
     * @ORM\Column(name="RCSERVERID", type="string", length=80, nullable=true)
     */
    private $rcserverid;

    /**
     * @var string
     *
     * @ORM\Column(name="RCINVENTORYPATH", type="string", length=128, nullable=true)
     */
    private $rcinventorypath;

    /**
     * @var string
     *
     * @ORM\Column(name="RCAPPLICATIONPATH", type="string", length=128, nullable=true)
     */
    private $rcapplicationpath;

    /**
     * @var string
     *
     * @ORM\Column(name="RCNICID", type="string", length=80, nullable=true)
     */
    private $rcnicid;

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
     * @var string
     *
     * @ORM\Column(name="RCPARAMETERSTRING", type="string", length=128, nullable=true)
     */
    private $rcparameterstring;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;



    /**
     * Set contactlinkid
     *
     * @param string $contactlinkid
     * @return Contactlink
     */
    public function setContactlinkid($contactlinkid)
    {
        $this->contactlinkid = $contactlinkid;

        return $this;
    }

    /**
     * Get contactlinkid
     *
     * @return string 
     */
    public function getContactlinkid()
    {
        return $this->contactlinkid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return Contactlink
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return string 
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set rcseqno
     *
     * @param integer $rcseqno
     * @return Contactlink
     */
    public function setRcseqno($rcseqno)
    {
        $this->rcseqno = $rcseqno;

        return $this;
    }

    /**
     * Get rcseqno
     *
     * @return integer 
     */
    public function getRcseqno()
    {
        return $this->rcseqno;
    }

    /**
     * Set rccommandstring
     *
     * @param string $rccommandstring
     * @return Contactlink
     */
    public function setRccommandstring($rccommandstring)
    {
        $this->rccommandstring = $rccommandstring;

        return $this;
    }

    /**
     * Get rccommandstring
     *
     * @return string 
     */
    public function getRccommandstring()
    {
        return $this->rccommandstring;
    }

    /**
     * Set rcdesc
     *
     * @param string $rcdesc
     * @return Contactlink
     */
    public function setRcdesc($rcdesc)
    {
        $this->rcdesc = $rcdesc;

        return $this;
    }

    /**
     * Get rcdesc
     *
     * @return string 
     */
    public function getRcdesc()
    {
        return $this->rcdesc;
    }

    /**
     * Set rcserverid
     *
     * @param string $rcserverid
     * @return Contactlink
     */
    public function setRcserverid($rcserverid)
    {
        $this->rcserverid = $rcserverid;

        return $this;
    }

    /**
     * Get rcserverid
     *
     * @return string 
     */
    public function getRcserverid()
    {
        return $this->rcserverid;
    }

    /**
     * Set rcinventorypath
     *
     * @param string $rcinventorypath
     * @return Contactlink
     */
    public function setRcinventorypath($rcinventorypath)
    {
        $this->rcinventorypath = $rcinventorypath;

        return $this;
    }

    /**
     * Get rcinventorypath
     *
     * @return string 
     */
    public function getRcinventorypath()
    {
        return $this->rcinventorypath;
    }

    /**
     * Set rcapplicationpath
     *
     * @param string $rcapplicationpath
     * @return Contactlink
     */
    public function setRcapplicationpath($rcapplicationpath)
    {
        $this->rcapplicationpath = $rcapplicationpath;

        return $this;
    }

    /**
     * Get rcapplicationpath
     *
     * @return string 
     */
    public function getRcapplicationpath()
    {
        return $this->rcapplicationpath;
    }

    /**
     * Set rcnicid
     *
     * @param string $rcnicid
     * @return Contactlink
     */
    public function setRcnicid($rcnicid)
    {
        $this->rcnicid = $rcnicid;

        return $this;
    }

    /**
     * Get rcnicid
     *
     * @return string 
     */
    public function getRcnicid()
    {
        return $this->rcnicid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return Contactlink
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
     * @return Contactlink
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
     * @return Contactlink
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
     * Set rcparameterstring
     *
     * @param string $rcparameterstring
     * @return Contactlink
     */
    public function setRcparameterstring($rcparameterstring)
    {
        $this->rcparameterstring = $rcparameterstring;

        return $this;
    }

    /**
     * Get rcparameterstring
     *
     * @return string 
     */
    public function getRcparameterstring()
    {
        return $this->rcparameterstring;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return Contactlink
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
}
