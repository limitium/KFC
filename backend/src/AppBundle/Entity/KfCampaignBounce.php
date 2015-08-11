<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfCampaignBounce
 *
 * @ORM\Table(name="KF_CAMPAIGN_BOUNCE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CAMPAIGN_BOUNCE_PRIMARY", columns={"KF_CAMPAIGN_BOUNCEID"})}, indexes={@ORM\Index(name="KF_CAMPAIGN_BOUNCE_CAMPAIGNID", columns={"CAMPAIGNID"})})
 * @ORM\Entity
 */
class KfCampaignBounce
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CAMPAIGN_BOUNCEID", type="string", length=12, nullable=false)
     */
    private $kfCampaignBounceid;

    /**
     * @var string
     *
     * @ORM\Column(name="CAMPAIGNID", type="string", length=12, nullable=false)
     */
    private $campaignid;

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
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=32, nullable=true)
     */
    private $status;



    /**
     * Set kfCampaignBounceid
     *
     * @param string $kfCampaignBounceid
     * @return KfCampaignBounce
     */
    public function setKfCampaignBounceid($kfCampaignBounceid)
    {
        $this->kfCampaignBounceid = $kfCampaignBounceid;

        return $this;
    }

    /**
     * Get kfCampaignBounceid
     *
     * @return string 
     */
    public function getKfCampaignBounceid()
    {
        return $this->kfCampaignBounceid;
    }

    /**
     * Set campaignid
     *
     * @param string $campaignid
     * @return KfCampaignBounce
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
     * Set createuser
     *
     * @param string $createuser
     * @return KfCampaignBounce
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
     * @return KfCampaignBounce
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
     * @return KfCampaignBounce
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
     * @return KfCampaignBounce
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
     * Set contactid
     *
     * @param string $contactid
     * @return KfCampaignBounce
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
     * Set status
     *
     * @param string $status
     * @return KfCampaignBounce
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
}
