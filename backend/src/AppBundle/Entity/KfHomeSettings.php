<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfHomeSettings
 *
 * @ORM\Table(name="KF_HOME_SETTINGS", uniqueConstraints={@ORM\UniqueConstraint(name="KF_HOME_SETTINGS_PRIMARY", columns={"KF_HOME_SETTINGSID"})})
 * @ORM\Entity
 */
class KfHomeSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_HOME_SETTINGSID", type="string", length=12, nullable=false)
     */
    private $kfHomeSettingsid;

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
     * @ORM\Column(name="SECCODEID", type="string", length=12, nullable=true)
     */
    private $seccodeid;

    /**
     * @var string
     *
     * @ORM\Column(name="SRCH_IN_RES", type="string", length=1, nullable=true)
     */
    private $srchInRes;

    /**
     * @var string
     *
     * @ORM\Column(name="SRCH_IN_ALL", type="string", length=1, nullable=true)
     */
    private $srchInAll;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIV_DONE", type="string", length=1, nullable=true)
     */
    private $activDone;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIV_FUTURE", type="string", length=1, nullable=true)
     */
    private $activFuture;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD_NOTE_BLN", type="string", length=1, nullable=true)
     */
    private $addNoteBln;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD_SHOW_BLN", type="string", length=1, nullable=true)
     */
    private $addShowBln;

    /**
     * @var string
     *
     * @ORM\Column(name="ADD_CALL_BLN", type="string", length=32, nullable=true)
     */
    private $addCallBln;

    /**
     * @var string
     *
     * @ORM\Column(name="GRDSALEGROUPNAME", type="string", length=1024, nullable=true)
     */
    private $grdsalegroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="GRDSALESSQL", type="string", length=4000, nullable=true)
     */
    private $grdsalessql;

    /**
     * @var string
     *
     * @ORM\Column(name="GRDHISTORYGROUPNAME", type="string", length=1024, nullable=true)
     */
    private $grdhistorygroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="GRDHISTORYSQL", type="string", length=4000, nullable=true)
     */
    private $grdhistorysql;

    /**
     * @var integer
     *
     * @ORM\Column(name="HISTORYACTIVETABINDEX", type="smallint", nullable=true)
     */
    private $historyactivetabindex;

    /**
     * @var string
     *
     * @ORM\Column(name="SRCH_IN_GROUP", type="string", length=1, nullable=true)
     */
    private $srchInGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="SALES_TARGET_VALUE", type="string", length=128, nullable=true)
     */
    private $salesTargetValue;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_PLAN", type="string", length=32, nullable=true)
     */
    private $typePlan;

    /**
     * @var string
     *
     * @ORM\Column(name="WHOS_PLAN", type="string", length=64, nullable=true)
     */
    private $whosPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="MODEL", type="string", length=1, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=4000, nullable=true)
     */
    private $comments;



    /**
     * Set kfHomeSettingsid
     *
     * @param string $kfHomeSettingsid
     * @return KfHomeSettings
     */
    public function setKfHomeSettingsid($kfHomeSettingsid)
    {
        $this->kfHomeSettingsid = $kfHomeSettingsid;

        return $this;
    }

    /**
     * Get kfHomeSettingsid
     *
     * @return string 
     */
    public function getKfHomeSettingsid()
    {
        return $this->kfHomeSettingsid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfHomeSettings
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
     * @return KfHomeSettings
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
     * @return KfHomeSettings
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
     * @return KfHomeSettings
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
     * @return KfHomeSettings
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
     * Set seccodeid
     *
     * @param string $seccodeid
     * @return KfHomeSettings
     */
    public function setSeccodeid($seccodeid)
    {
        $this->seccodeid = $seccodeid;

        return $this;
    }

    /**
     * Get seccodeid
     *
     * @return string 
     */
    public function getSeccodeid()
    {
        return $this->seccodeid;
    }

    /**
     * Set srchInRes
     *
     * @param string $srchInRes
     * @return KfHomeSettings
     */
    public function setSrchInRes($srchInRes)
    {
        $this->srchInRes = $srchInRes;

        return $this;
    }

    /**
     * Get srchInRes
     *
     * @return string 
     */
    public function getSrchInRes()
    {
        return $this->srchInRes;
    }

    /**
     * Set srchInAll
     *
     * @param string $srchInAll
     * @return KfHomeSettings
     */
    public function setSrchInAll($srchInAll)
    {
        $this->srchInAll = $srchInAll;

        return $this;
    }

    /**
     * Get srchInAll
     *
     * @return string 
     */
    public function getSrchInAll()
    {
        return $this->srchInAll;
    }

    /**
     * Set activDone
     *
     * @param string $activDone
     * @return KfHomeSettings
     */
    public function setActivDone($activDone)
    {
        $this->activDone = $activDone;

        return $this;
    }

    /**
     * Get activDone
     *
     * @return string 
     */
    public function getActivDone()
    {
        return $this->activDone;
    }

    /**
     * Set activFuture
     *
     * @param string $activFuture
     * @return KfHomeSettings
     */
    public function setActivFuture($activFuture)
    {
        $this->activFuture = $activFuture;

        return $this;
    }

    /**
     * Get activFuture
     *
     * @return string 
     */
    public function getActivFuture()
    {
        return $this->activFuture;
    }

    /**
     * Set addNoteBln
     *
     * @param string $addNoteBln
     * @return KfHomeSettings
     */
    public function setAddNoteBln($addNoteBln)
    {
        $this->addNoteBln = $addNoteBln;

        return $this;
    }

    /**
     * Get addNoteBln
     *
     * @return string 
     */
    public function getAddNoteBln()
    {
        return $this->addNoteBln;
    }

    /**
     * Set addShowBln
     *
     * @param string $addShowBln
     * @return KfHomeSettings
     */
    public function setAddShowBln($addShowBln)
    {
        $this->addShowBln = $addShowBln;

        return $this;
    }

    /**
     * Get addShowBln
     *
     * @return string 
     */
    public function getAddShowBln()
    {
        return $this->addShowBln;
    }

    /**
     * Set addCallBln
     *
     * @param string $addCallBln
     * @return KfHomeSettings
     */
    public function setAddCallBln($addCallBln)
    {
        $this->addCallBln = $addCallBln;

        return $this;
    }

    /**
     * Get addCallBln
     *
     * @return string 
     */
    public function getAddCallBln()
    {
        return $this->addCallBln;
    }

    /**
     * Set grdsalegroupname
     *
     * @param string $grdsalegroupname
     * @return KfHomeSettings
     */
    public function setGrdsalegroupname($grdsalegroupname)
    {
        $this->grdsalegroupname = $grdsalegroupname;

        return $this;
    }

    /**
     * Get grdsalegroupname
     *
     * @return string 
     */
    public function getGrdsalegroupname()
    {
        return $this->grdsalegroupname;
    }

    /**
     * Set grdsalessql
     *
     * @param string $grdsalessql
     * @return KfHomeSettings
     */
    public function setGrdsalessql($grdsalessql)
    {
        $this->grdsalessql = $grdsalessql;

        return $this;
    }

    /**
     * Get grdsalessql
     *
     * @return string 
     */
    public function getGrdsalessql()
    {
        return $this->grdsalessql;
    }

    /**
     * Set grdhistorygroupname
     *
     * @param string $grdhistorygroupname
     * @return KfHomeSettings
     */
    public function setGrdhistorygroupname($grdhistorygroupname)
    {
        $this->grdhistorygroupname = $grdhistorygroupname;

        return $this;
    }

    /**
     * Get grdhistorygroupname
     *
     * @return string 
     */
    public function getGrdhistorygroupname()
    {
        return $this->grdhistorygroupname;
    }

    /**
     * Set grdhistorysql
     *
     * @param string $grdhistorysql
     * @return KfHomeSettings
     */
    public function setGrdhistorysql($grdhistorysql)
    {
        $this->grdhistorysql = $grdhistorysql;

        return $this;
    }

    /**
     * Get grdhistorysql
     *
     * @return string 
     */
    public function getGrdhistorysql()
    {
        return $this->grdhistorysql;
    }

    /**
     * Set historyactivetabindex
     *
     * @param integer $historyactivetabindex
     * @return KfHomeSettings
     */
    public function setHistoryactivetabindex($historyactivetabindex)
    {
        $this->historyactivetabindex = $historyactivetabindex;

        return $this;
    }

    /**
     * Get historyactivetabindex
     *
     * @return integer 
     */
    public function getHistoryactivetabindex()
    {
        return $this->historyactivetabindex;
    }

    /**
     * Set srchInGroup
     *
     * @param string $srchInGroup
     * @return KfHomeSettings
     */
    public function setSrchInGroup($srchInGroup)
    {
        $this->srchInGroup = $srchInGroup;

        return $this;
    }

    /**
     * Get srchInGroup
     *
     * @return string 
     */
    public function getSrchInGroup()
    {
        return $this->srchInGroup;
    }

    /**
     * Set salesTargetValue
     *
     * @param string $salesTargetValue
     * @return KfHomeSettings
     */
    public function setSalesTargetValue($salesTargetValue)
    {
        $this->salesTargetValue = $salesTargetValue;

        return $this;
    }

    /**
     * Get salesTargetValue
     *
     * @return string 
     */
    public function getSalesTargetValue()
    {
        return $this->salesTargetValue;
    }

    /**
     * Set typePlan
     *
     * @param string $typePlan
     * @return KfHomeSettings
     */
    public function setTypePlan($typePlan)
    {
        $this->typePlan = $typePlan;

        return $this;
    }

    /**
     * Get typePlan
     *
     * @return string 
     */
    public function getTypePlan()
    {
        return $this->typePlan;
    }

    /**
     * Set whosPlan
     *
     * @param string $whosPlan
     * @return KfHomeSettings
     */
    public function setWhosPlan($whosPlan)
    {
        $this->whosPlan = $whosPlan;

        return $this;
    }

    /**
     * Get whosPlan
     *
     * @return string 
     */
    public function getWhosPlan()
    {
        return $this->whosPlan;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return KfHomeSettings
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return KfHomeSettings
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
