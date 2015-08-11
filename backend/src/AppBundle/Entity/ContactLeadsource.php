<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactLeadsource
 *
 * @ORM\Table(name="CONTACT_LEADSOURCE", uniqueConstraints={@ORM\UniqueConstraint(name="XPKCONTACT_LEADSOURCE", columns={"CONTACTID", "LEADSOURCEID"})}, indexes={@ORM\Index(name="XIE1CONTACT_LEADSOURCE", columns={"CONTACTID"}), @ORM\Index(name="_dta_index_CONTACT_LEADSOURCE_7_245575913__K2", columns={"LEADSOURCEID"}), @ORM\Index(name="_dta_index_CONTACT_LEADSOURCE_7_245575913__K2_K1", columns={"LEADSOURCEID", "CONTACTID"})})
 * @ORM\Entity
 */
class ContactLeadsource
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTID", type="string", length=12, nullable=false)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="LEADSOURCEID", type="string", length=12, nullable=false)
     */
    private $leadsourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDATE", type="datetime", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEUSER", type="string", length=12, nullable=true)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LEADDATE", type="datetime", nullable=true)
     */
    private $leaddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="MODIFYDATE", type="datetime", nullable=true)
     */
    private $modifydate;

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFYUSER", type="string", length=12, nullable=true)
     */
    private $modifyuser;



    /**
     * Set contactid
     *
     * @param string $contactid
     * @return ContactLeadsource
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
     * Set leadsourceid
     *
     * @param string $leadsourceid
     * @return ContactLeadsource
     */
    public function setLeadsourceid($leadsourceid)
    {
        $this->leadsourceid = $leadsourceid;

        return $this;
    }

    /**
     * Get leadsourceid
     *
     * @return string 
     */
    public function getLeadsourceid()
    {
        return $this->leadsourceid;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return ContactLeadsource
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
     * Set createuser
     *
     * @param string $createuser
     * @return ContactLeadsource
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
     * Set leaddate
     *
     * @param \DateTime $leaddate
     * @return ContactLeadsource
     */
    public function setLeaddate($leaddate)
    {
        $this->leaddate = $leaddate;

        return $this;
    }

    /**
     * Get leaddate
     *
     * @return \DateTime 
     */
    public function getLeaddate()
    {
        return $this->leaddate;
    }

    /**
     * Set modifydate
     *
     * @param \DateTime $modifydate
     * @return ContactLeadsource
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
     * Set modifyuser
     *
     * @param string $modifyuser
     * @return ContactLeadsource
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
}
