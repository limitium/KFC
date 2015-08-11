<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfClickFormStat
 *
 * @ORM\Table(name="KF_CLICK_FORM_STAT", uniqueConstraints={@ORM\UniqueConstraint(name="KF_CLICK_FORM_STAT_PRIMARY", columns={"KF_CLICK_FORM_STATID"})})
 * @ORM\Entity
 */
class KfClickFormStat
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_CLICK_FORM_STATID", type="string", length=12, nullable=false)
     */
    private $kfClickFormStatid;

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
     * @ORM\Column(name="FORM_NAME", type="string", length=256, nullable=true)
     */
    private $formName;



    /**
     * Set kfClickFormStatid
     *
     * @param string $kfClickFormStatid
     * @return KfClickFormStat
     */
    public function setKfClickFormStatid($kfClickFormStatid)
    {
        $this->kfClickFormStatid = $kfClickFormStatid;

        return $this;
    }

    /**
     * Get kfClickFormStatid
     *
     * @return string 
     */
    public function getKfClickFormStatid()
    {
        return $this->kfClickFormStatid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfClickFormStat
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
     * @return KfClickFormStat
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
     * @return KfClickFormStat
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
     * @return KfClickFormStat
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
     * Set formName
     *
     * @param string $formName
     * @return KfClickFormStat
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;

        return $this;
    }

    /**
     * Get formName
     *
     * @return string 
     */
    public function getFormName()
    {
        return $this->formName;
    }
}
