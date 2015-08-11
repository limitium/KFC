<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KfMonthTable
 *
 * @ORM\Table(name="KF_MONTH_TABLE", uniqueConstraints={@ORM\UniqueConstraint(name="KF_MONTH_TABLE_PRIMARY", columns={"KF_MONTH_TABLEID"})})
 * @ORM\Entity
 */
class KfMonthTable
{
    /**
     * @var string
     *
     * @ORM\Column(name="KF_MONTH_TABLEID", type="string", length=12, nullable=false)
     */
    private $kfMonthTableid;

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
     * @ORM\Column(name="MON_ID", type="string", length=12, nullable=true)
     */
    private $monId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MON_NAME", type="smallint", nullable=true)
     */
    private $monName;



    /**
     * Set kfMonthTableid
     *
     * @param string $kfMonthTableid
     * @return KfMonthTable
     */
    public function setKfMonthTableid($kfMonthTableid)
    {
        $this->kfMonthTableid = $kfMonthTableid;

        return $this;
    }

    /**
     * Get kfMonthTableid
     *
     * @return string 
     */
    public function getKfMonthTableid()
    {
        return $this->kfMonthTableid;
    }

    /**
     * Set createuser
     *
     * @param string $createuser
     * @return KfMonthTable
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
     * @return KfMonthTable
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
     * @return KfMonthTable
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
     * @return KfMonthTable
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
     * Set monId
     *
     * @param string $monId
     * @return KfMonthTable
     */
    public function setMonId($monId)
    {
        $this->monId = $monId;

        return $this;
    }

    /**
     * Get monId
     *
     * @return string 
     */
    public function getMonId()
    {
        return $this->monId;
    }

    /**
     * Set monName
     *
     * @param integer $monName
     * @return KfMonthTable
     */
    public function setMonName($monName)
    {
        $this->monName = $monName;

        return $this;
    }

    /**
     * Get monName
     *
     * @return integer 
     */
    public function getMonName()
    {
        return $this->monName;
    }
}
