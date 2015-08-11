<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfReqPropEmails
 *
 * @ORM\Table(name="KF_REQ_PROP_EMAILS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_REQ_PROP_EMAILS_PRIMARY", columns={"KF_REQ_PROP_EMAILSID"})}, indexes={@ORM\Index(name="KF_REQ_PROP_EMAILS_SPK_PROPERT", columns={"SPK_PROPERTYID"})})
 * @ORM\Entity
 */
class KfReqPropEmails
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_REQ_PROP_EMAILSID", type="string", length=12, nullable=false)
     */
    private $kfReqPropEmailsid;

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
     * @ORM\Column(name="USERID", type="string", length=12, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="SPK_PROPERTYID", type="string", length=12, nullable=true)
     */
    private $spkPropertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPETO", type="string", length=12, nullable=true)
     */
    private $typeto;



    /**
     * Set kfReqPropEmailsid
     *
     * @param string $kfReqPropEmailsid
     * @return KfReqPropEmails
     */
    public function setKfReqPropEmailsid($kfReqPropEmailsid)
    {
        $this->kfReqPropEmailsid = $kfReqPropEmailsid;

        return $this;
    }

    /**
     * Get kfReqPropEmailsid
     *
     * @return string 
     */
    public function getKfReqPropEmailsid()
    {
        return $this->kfReqPropEmailsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfReqPropEmails
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
     * @return KfReqPropEmails
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
     * @return KfReqPropEmails
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
     * @return KfReqPropEmails
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
     * Set userid
     *
     * @param string $userid
     * @return KfReqPropEmails
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
     * Set spkPropertyid
     *
     * @param string $spkPropertyid
     * @return KfReqPropEmails
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
     * Set typeto
     *
     * @param string $typeto
     * @return KfReqPropEmails
     */
    public function setTypeto($typeto)
    {
        $this->typeto = $typeto;

        return $this;
    }

    /**
     * Get typeto
     *
     * @return string 
     */
    public function getTypeto()
    {
        return $this->typeto;
    }
}
