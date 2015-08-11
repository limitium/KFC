<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMarketingSettings
 *
 * @ORM\Table(name="KF_MARKETING_SETTINGS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MARKETING_SETTINGS_PRIMARY", columns={"KF_MARKETING_SETTINGSID"})})
 * @ORM\Entity
 */
class KfMarketingSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MARKETING_SETTINGSID", type="string", length=12, nullable=false)
     */
    private $kfMarketingSettingsid;

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
     * @ORM\Column(name="BUDGETID", type="string", length=12, nullable=true)
     */
    private $budgetid;



    /**
     * Set kfMarketingSettingsid
     *
     * @param string $kfMarketingSettingsid
     * @return KfMarketingSettings
     */
    public function setKfMarketingSettingsid($kfMarketingSettingsid)
    {
        $this->kfMarketingSettingsid = $kfMarketingSettingsid;

        return $this;
    }

    /**
     * Get kfMarketingSettingsid
     *
     * @return string 
     */
    public function getKfMarketingSettingsid()
    {
        return $this->kfMarketingSettingsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMarketingSettings
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
     * @return KfMarketingSettings
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
     * @return KfMarketingSettings
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
     * @return KfMarketingSettings
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
     * Set budgetid
     *
     * @param string $budgetid
     * @return KfMarketingSettings
     */
    public function setBudgetid($budgetid)
    {
        $this->budgetid = $budgetid;

        return $this;
    }

    /**
     * Get budgetid
     *
     * @return string 
     */
    public function getBudgetid()
    {
        return $this->budgetid;
    }
}
