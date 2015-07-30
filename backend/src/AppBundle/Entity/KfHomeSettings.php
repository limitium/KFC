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


}
