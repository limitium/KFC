<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactresponse
 *
 * @ORM\Table(name="CONTACTRESPONSE", uniqueConstraints={@ORM\UniqueConstraint(name="CONTACTRESPONSE_PRIMARY", columns={"CONTACTRESPONSEID"})}, indexes={@ORM\Index(name="CONTACTRESPONSE_CAMPAIGNID", columns={"CAMPAIGNID"}), @ORM\Index(name="CONTACTRESPONSE_CONTACTID", columns={"CONTACTID"})})
 * @ORM\Entity
 */
class Contactresponse
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTRESPONSEID", type="string", length=12, nullable=false)
     */
    private $contactresponseid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="RESPONSEDATE", type="datetime", nullable=true)
     */
    private $responsedate;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPONSEMETHOD", type="string", length=32, nullable=true)
     */
    private $responsemethod;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=true)
     */
    private $campaignid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNCONTACTID", type="string", length=12, nullable=true)
     */
    private $campaigncontactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="RESPONDED", type="integer", nullable=true)
     */
    private $responded;



    /**
     * Set contactresponseid
     *
     * @param string $contactresponseid
     * @return Contactresponse
     */
    public function setContactresponseid($contactresponseid)
    {
        $this->contactresponseid = $contactresponseid;

        return $this;
    }

    /**
     * Get contactresponseid
     *
     * @return string 
     */
    public function getContactresponseid()
    {
        return $this->contactresponseid;
    }

    /**
     * Set contactid
     *
     * @param string $contactid
     * @return Contactresponse
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
     * Set createuser
     *
     * @param string $createuser
     * @return Contactresponse
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
     * @return Contactresponse
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
     * @return Contactresponse
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
     * @return Contactresponse
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
     * Set responsedate
     *
     * @param \DateTime $responsedate
     * @return Contactresponse
     */
    public function setResponsedate($responsedate)
    {
        $this->responsedate = $responsedate;

        return $this;
    }

    /**
     * Get responsedate
     *
     * @return \DateTime 
     */
    public function getResponsedate()
    {
        return $this->responsedate;
    }

    /**
     * Set responsemethod
     *
     * @param string $responsemethod
     * @return Contactresponse
     */
    public function setResponsemethod($responsemethod)
    {
        $this->responsemethod = $responsemethod;

        return $this;
    }

    /**
     * Get responsemethod
     *
     * @return string 
     */
    public function getResponsemethod()
    {
        return $this->responsemethod;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     * @return Contactresponse
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;

        return $this;
    }

    /**
     * Get campaignid
     *
     * @return string 
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set campaigncontactid
     *
     * @param string $campaigncontactid
     * @return Contactresponse
     */
    public function setCampaigncontactid($campaigncontactid)
    {
        $this->campaigncontactid = $campaigncontactid;

        return $this;
    }

    /**
     * Get campaigncontactid
     *
     * @return string 
     */
    public function getCampaigncontactid()
    {
        return $this->campaigncontactid;
    }

    /**
     * Set responded
     *
     * @param integer $responded
     * @return Contactresponse
     */
    public function setResponded($responded)
    {
        $this->responded = $responded;

        return $this;
    }

    /**
     * Get responded
     *
     * @return integer 
     */
    public function getResponded()
    {
        return $this->responded;
    }
}
